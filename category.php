<h1 class="text-center"><?php single_cat_title(); ?></h1>

<?php $cat_id=get_query_var('cat'); ?>

<?php $catPost = get_posts('cat=<?php $cat_id ?>&posts_per_page=-1'); ?>
<?php $i = 0 ?>
<div class="tabbable">
  <ul class="nav nav-stacked col-md-3">
    <?php foreach ($catPost as $post) : setup_postdata($post); ?>
      <li class="cat-tab-nav"><a href="<?php echo '#' . $post->post_name ?>"><?php the_title(); ?></a></li>
      <?php $i++ ?>
    <?php  endforeach;?>
  </ul>
  <div class="tab-content col-md-9">
    <?php $j = 1; ?>
    <?php foreach ($catPost as $post) : setup_postdata($post); ?>
      <div class="single-cat-post" id="<?php echo $post->post_name ?>">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php if ( count($catPost) != $j ) echo '<hr>'; ?>
      </div>
      <?php $j++; ?>
    <?php  endforeach;?>
</div>
