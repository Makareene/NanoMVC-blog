<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title><?=($title ?? '')?></title>
    <meta name="description" content="<?=($description ?? '')?>">
    <?php if(isset($categories) && is_array($categories) && sizeof($categories)):?>
    <style>
      <?php foreach($categories as $cat):?>
      <?php if(isset($cat['symbol'])):?>
      nav span.nav-cat-<?=$dh::esc_html(substr($cat['_link'], 1))?>::before {
        content: '<?=$dh::esc_html($cat['symbol'])?>';
      }

      <?php endif?>
      <?php endforeach?>
      <?php if(isset($has_img_height) && $has_img_height):?>
      @media (max-width: 500px) {
      <?php foreach($articles as $art):?>
        <?php if(isset($art['img_height'])):?>
        .h-<?=$art['img_height']?> {
          <?php // 75 is a default width, 50 is a default width after "@media (max-width: 500px)"?>
          height: calc(<?=$art['img_height']?>px * (50 * 100 / 75) / 100);
        }

        <?php endif?>
      <?php endforeach?>
      }
      <?php endif?>
    </style>
    <?php endif?>
  </head>
  <body>
    <header class="<?=(!isset($categories) || !is_array($categories) || !sizeof($categories) ? 'no-nav' : '')?>">
      <div>
      <?php if(isset($_SERVER['PATH_INFO'])):?>
        <a href="/"><img src="/logo.webp" alt="Nipaa" width="275" height="90"></a>'s&nbsp;Blog
      <?php else:?>
        <img src="/logo.webp" alt="Nipaa" width="275" height="90">'s&nbsp;Blog
      <?php endif?>
      </div>
    </header>

    <?php if(isset($categories) && is_array($categories) && sizeof($categories)):?>
    <nav>
      <div class="nav-label"><button id="nav-toggle" aria-label="Toggle menu" aria-expanded="false">⌘</button> Navigation</div>
      <div class="menu-items">
        <?php foreach($categories as $key => $cat):?>
        <span class="nav-cat-<?=$dh::esc_html(substr($cat['_link'], 1))?><?=($current_menu === $key && $current_page == 1 ? ' active' : '')?>">
          <?php if($current_menu === $key && $current_page == 1):?>
          <b><?=$dh::esc_html($cat['name'])?></b>
          <?php else:?>
          <a href="<?=$dh::esc_html($cat['_link'])?>"><?=$dh::esc_html($cat['name'])?></a>
          <?php endif?>
        </span>
        <?php endforeach?>
      </div>
    </nav>
    <?php endif?>

    <main>
