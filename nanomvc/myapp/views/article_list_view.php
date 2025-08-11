<?php if (isset($articles) && is_array($articles) && $max_page > 0):?>
<section class="section">
    <h2><?=($article_name ?? '')?></h2>
    <ul class="article-list">
        <?php foreach ($articles as $art): ?>
            <?php if (isset($art['_page']) && $art['_page'] == $current_page):?>
                <li>
                    <h3><a href="<?=$dh::esc_html($art['_link'])?>"><?=$dh::esc_html($art['name'])?></a></h3>
                    <?php if(isset($art['img'])):?>
                      <img src="<?=$dh::esc_html($art['img'])?>" alt="<?=$dh::esc_html($art['name'])?>"
                        <?=(isset($art['img_height']) ? 'class="h-' . $art['img_height'] . '" height="' . $art['img_height'] . '"' : '')?>>
                    <?php endif?>
                    <p><?=$dh::esc_html($art['description'])?></p>
                </li>
            <?php endif?>
        <?php endforeach?>
    </ul>
    <?php $dh->view('pagination_view', ['max_page' => $max_page,
                                        'current_page' => $current_page,
                                        'page_start' => $page_start,
                                        'page_end' => $page_end,
                                        'page_key' => $page_key,
                                        'link_menu' => $link_menu
                                        ])?>
</section>
<?php endif?>
