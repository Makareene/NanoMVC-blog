<?php

/**
 * default.php
 *
 * Default application controller for NanoMVC
 *
 * @package     NanoMVC
 * @author      Monte Ohrt (original), Nipaa (modifications)
 * @license     LGPL v2.1 or later
 */

class Default_Controller extends Common_Controller {

  public function index(): void {
    if ($this->uri->segment(1) !== false) throw new Exception('The default controller does not accept any additional parameters.', 404);

    $this->ar_header['title'] = $this->dh::esc_html('Nipaa\'s Blog');
    $this->ar_header['description'] = $this->dh::esc_html('Nipaa\'s personal blog about coding, minimalism, PHP, SQL, and custom tools. Follow my journey building efficient frameworks and diving into complex projects.');

    $this->_get_articles();

    // $this->dh::debug($coding_articles, 'Articles');

    $this->view->display('index_header', $this->ar_header);
    $this->view->display('index_view');
    $this->view->display('index_footer');
  }

}

?>
