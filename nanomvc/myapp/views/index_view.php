      <section class="section">
        <h1>📘 Welcome to my blog</h1>
        <p>
        Hi! My name's Nipaa. This is a personal blog where I post everything I do or think.
        At the moment, it's mostly about coding.
        </p>
        <p>
        Most of my posts are about my own tools, frameworks, and the way I think about code.
        Sometimes I'll write about my experience with ChatGPT, or what I discover using different products and developer tools.
        </p>
        <p>
        I believe in keeping things simple, in code and in design. This blog reflects that philosophy.
        It's a place where I can document my process, share insights, and maybe even spark ideas in others who think the same way.
        </p>
      </section>

      <?php $dh->view('article_list_view', ['article_name' => '🛠️ Projects',
                                            'dh' => $dh,
                                            'articles' => $articles,
                                            'max_page' => $max_page,
                                            'current_page' => $current_page,
                                            'page_start' => $page_start,
                                            'page_end' => $page_end,
                                            'page_key' => $page_key,
                                            'link_menu' => $link_menu
                                           ])?>

      <section class="section">
        <h2>👤 About me</h2>
        <p>
        I'm a developer who likes minimalism in code and life. I build tools that help me stay efficient.
        I mostly write in PHP and SQL, and I think deeply about how things work under the hood.
        </p>
        <p>
        But I can also dive deep into large, complex projects — into their hearts, stomachs, and... other places, if needed.
        I have plenty of experience doing this, and strong mental muscles to carry the weight.
        </p>
      </section>
