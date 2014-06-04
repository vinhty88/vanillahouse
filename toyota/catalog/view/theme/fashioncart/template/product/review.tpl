<?php if ($reviews) { ?>
<?php foreach ($reviews as $review) { ?>
<div class="content"><b><?php echo $review['author']; ?></b> | <img src="catalog/view/theme/fashioncart/image/stars-<?php echo $review['rating'] . '.png'; ?>" alt="<?php echo $review['reviews']; ?>" />
  <div class='r_date'><?php echo $review['date_added']; ?></div>
  <?php echo $review['text']; ?></div>
<?php } ?>
<div class="pagination"><?php echo $pagination; ?></div>
<?php } else { ?>
<div class="content"><?php echo $text_no_reviews; ?></div>
<?php } ?>
