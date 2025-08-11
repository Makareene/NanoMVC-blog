<!-- Pagination -->
<?php if($current_page == 0):?>
<div class="pagination">
  &laquo; Back to page <a href="<?=$link_menu?>">1</a>
</div>
<?php elseif ($max_page > 1):?>
<div class="pagination">
  <?php if ($current_page > 1) /* Prev */ :?>
  <a href="<?=$link_menu . (($current_page - 1) !== 1? '?' . $page_key . '=' . ($current_page - 1) : '')?>" class="prev">&laquo; Prev</a>
  <?php endif?>

  <?php if ($page_start > 1) /* Show first page + ellipsis */ :?>
    <a href="<?=$link_menu?>">1</a>
    <?php if ($page_start > 2):?>
    <a class="ellipsis" href="<?=$link_menu?>?<?=$page_key?>=<?=floor(($page_start + 1) / 2)?>">…</a>
    <?php endif?>
  <?php endif?>

  <?php for ($i = $page_start; $i <= $page_end; $i++) /* Main loop */ :?>
    <?php if ($i == $current_page):?>
      <span class="active"><?=$i?></span>
    <?php else:?>
      <a href="<?=$link_menu . ($i !== 1? '?' . $page_key . '=' . $i : '')?>"><?=$i?></a>
    <?php endif?>
  <?php endfor?>

  <?php if ($page_end < $max_page) /* Show last page + ellipsis */ :?>
    <?php if ($page_end < $max_page - 1):?>
    <a class="ellipsis" href="<?=$link_menu?>?<?=$page_key?>=<?=floor(($page_end + $max_page) / 2)?>">…</a>
    <?php endif?>
    <a href="<?=$link_menu?>?<?=$page_key?>=<?=$max_page?>"><?=$max_page?></a>
  <?php endif?>

  <?php if ($current_page < $max_page) /* Next */ :?>
  <a href="<?=$link_menu?>?<?=$page_key?>=<?=($current_page + 1)?>" class="next">Next &raquo;</a>
  <?php endif?>
</div>
<?php endif?>
