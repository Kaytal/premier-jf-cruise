<div id="top"></div>
<h1 class="text-center"><?php single_cat_title(); ?></h1>

<?php $cat_id=get_query_var('cat'); ?>
<?php $args = array(
    'posts_per_page'   => -1,
    'category'         => $cat_id,
    'post_type'        => 'post',
    'post_status'      => 'publish'
  );?>
<?php $catPost = get_posts($args); ?>
<?php $i = 0 ?>
<div class="tabbable">
  <div class="col-md-3">
    <ul class="nav nav-stacked">
      <?php foreach ($catPost as $post) : setup_postdata($post); ?>
        <li class="cat-tab-nav"><a href="<?php echo '#' . $post->post_name ?>"><?php the_title(); ?></a></li>
        <?php $i++ ?>
      <?php  endforeach;?>
    </ul>
  </div>
  <div class="tab-content col-md-9">
    
    <?php $j = 1; ?>
    <?php foreach ($catPost as $post) : setup_postdata($post); ?>
      <div class="single-cat-post" id="<?php echo $post->post_name ?>">
        <h1><?php the_title(); ?></h1>
        <a href="#top">Back to Top</a>
        <?php the_content(); ?>
        <?php if ( count($catPost) != $j ) echo '<hr>'; ?>
      </div>
      <?php $j++; ?>
    <?php  endforeach;?>
</div>
