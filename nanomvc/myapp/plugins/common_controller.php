<?php

/**
 * common_controller_nanomvc.php
 *
 * Common logic for controllers
 *
 * @package     NanoMVC
 * @author      Nipaa
 * @license     LGPL v2.1 or later
 */

class Common_Controller extends NanoMVC_Controller {
  public NanoMVC_Library_URI $uri;
  protected NanoMVC_Script_Helper $dh;
  public NanoMVC_Library_BlogMenu $menu;
  protected array $ar_header;
  protected string $action;
  protected string $cntr_name;
  protected array $articles;
  protected int $max_page = 0;
  protected int $limit = 16;
  protected int $current_page = 0;
  protected int $page_window = 2; // How many pages to show around
  protected int $page_start = 0;
  protected int $page_end = 0;
  protected string $page_key = 'page';

  public function __construct(?string $controller_name = null, ?string $action = null) {
    //echo $controller_name,' | ',$action;die;
    parent::__construct($controller_name, $action);
    $this->load->library('URI', 'uri');
    $this->cntr_name = strtolower($this->_get_controller());
    $this->action = strtolower($this->_get_action());
    $this->load->library('BlogMenu', 'menu');
    $this->load->script('helper');
    $this->dh = new NanoMVC_Script_Helper();
    $this->view->assign('dh', $this->dh);

    $this->ar_header['categories'] = $this->menu->get_categories(null, 'created asc');
    // $this->dh::debug($this->ar_header['categories'], 'Categories');
    $this->ar_header['current_menu'] = ($this->action === 'index' ? $this->cntr_name : '');

  }

  public function index(): void {
    if ($this->uri->segment(2) !== false) throw new Exception('The default method of the controller does not accept any additional parameters.', 404);
    $this->_get_articles();
  }

  protected function _get_preparticle(string $title): void {
    $this->_get_articles();
    $this->ar_header['title'] = $this->dh::esc_html($title);

    if (isset($this->articles[$this->action]['description']))
      $this->ar_header['description'] = $this->dh::esc_html($this->articles[$this->action]['description']);
  }

  protected function _get_articles(): void {
    $this->articles = $this->menu->get_articles(null, 'created desc', $this->cntr_name === 'default'? 'coding' : null);

    if ($this->cntr_name === 'default') {
      foreach ($this->articles as $key => $article)
        if (!isset($article['is_project']) || $article['is_project'] !== true) unset($this->articles[$key]);

      $this->limit = 8;
    }

    $has_img_height = (bool) array_filter($this->articles, function($subarray) {
      return is_array($subarray) && array_key_exists('img_height', $subarray);
    });

    $this->ar_header['has_img_height'] = $has_img_height;

    $this->max_page = $this->menu->pagination($this->articles, $this->limit);

    if ($this->action === 'index') {
      $query_string = $this->uri->parse_query_string($_SERVER['QUERY_STRING'] ?? '');

      // $this->dh::debug($query_string, 'QUERY_STRING');

      if (isset($query_string[0]) && $query_string[0]['key'] === 'page') {
        $this->current_page = $this->dh->is_int_like($query_string[0]['val']) ? ((int)$query_string[0]['val']) : 0;
        if ($this->current_page < 2) $this->current_page = 0;
        if ($this->current_page > $this->max_page) $this->current_page = 0;
      } else $this->current_page = 1;

      $this->page_start = max(1, $this->current_page - $this->page_window);
      $this->page_end = min($this->max_page, $this->current_page + $this->page_window);

      $this->view->assign(['articles' => $this->articles,
                           'max_page' => $this->max_page,
                           'page_start' => $this->page_start,
                           'page_end' => $this->page_end,
                           'page_window' => $this->page_window,
                           'link_menu' => '/' . ($this->cntr_name !== 'default' ? $this->cntr_name : '')
                          ]);
    } else {
      // $this->dh::debug($this->articles);die;
      if (isset($this->articles[$this->action]['_page']))
        $this->current_page = $this->dh::esc_html($this->articles[$this->action]['_page']);
      $this->view->assign('back_link', '/' . $this->cntr_name . ($this->current_page > 1 ? ('?' . $this->page_key . '=' . $this->current_page): ''));
      $back_name = isset($this->ar_header['categories'][$this->cntr_name]['name']) ? $this->ar_header['categories'][$this->cntr_name]['name'] : 'Category';
      $this->view->assign('back_name', $this->dh::esc_html($back_name));
    }

    $this->view->assign(['current_page' => $this->current_page, 'page_key' => $this->page_key]);

  }

}

?>
