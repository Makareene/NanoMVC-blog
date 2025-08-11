      <section class="section">
        <h1>🧪 Welcome to the Coding Playground</h1>
        <p>
        This is my personal Coding Playground — a space where I share code experiments, examples, tools, and cheat sheets. Here you’ll find helpful references like Git commands, HTML/CSS tips, and more. The chapter covers a variety of programming languages and topics, not limited to PHP alone. Sometimes I develop custom helpers for frameworks or explore new ideas in coding. Whether it’s a simple trick or a useful snippet, this is where I document it all — aiming to keep things practical and clear for anyone interested.
        </p>
      </section>

      <?php $dh->view('article_list_view', ['article_name' => '📰 Articles',
                                            'dh' => $dh,
                                            'articles' => $articles,
                                            'max_page' => $max_page,
                                            'current_page' => $current_page,
                                            'page_start' => $page_start,
                                            'page_end' => $page_end,
                                            'page_key' => $page_key,
                                            'link_menu' => $link_menu
                                           ])?>
