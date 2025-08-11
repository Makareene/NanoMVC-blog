<?php // -> as categorie: { "name": "Coding", "created": "2025-08-08 12:00", "symbol": "⚙️" } ?>
<?php

/**
 * coding.php
 *
 * Coding application controller for NanoMVC
 *
 * @package     NanoMVC
 * @author      Nipaa
 * @license     LGPL v2.1 or later
 */

class Coding_Controller extends Common_Controller {

  public function index(): void {
    parent::index();
    $this->ar_header['title'] = $this->dh::esc_html('Coding Playground');
    $this->ar_header['description'] = $this->dh::esc_html('Personal coding playground of Nipaa — a collection of code experiments, tools, and useful cheat sheets across PHP, JavaScript, SQL, and more.');

    // $this->dh::debug($this->articles, 'Articles');

    $this->view->display('index_header', $this->ar_header);
    $this->view->display('coding_view', ['articles' => $this->articles]);
    $this->view->display('index_footer');
  }

  /**
   * @blog {
   *   "name": "NanoMVC PHP framework",
   *   "description": "Discover NanoMVC, a lightweight and modernized fork of TinyMVC designed for simplicity, speed, and full control. Perfect for small to medium projects, it offers MVC structure, plugin support, and modern PHP 8+ features without unnecessary complexity.",
   *   "created": "2025-08-09 00:30",
   *   "is_project": true,
   *   "img": "/imgs/coding/nanomvcfrm.webp",
   *   "img_height": "62"
   * }
   */
  public function nanomvcfrm(): void {
    $this->_get_preparticle('NanoMVC — A Minimalist PHP MVC Framework for Fast, Clean Development');

    // $this->dh::debug($this->ar_header, 'Categories');

    $this->view->display('index_header', $this->ar_header);
    $this->view->display('nanomvcfrm_view');
    $this->view->display('index_footer');
  }

}

?>
