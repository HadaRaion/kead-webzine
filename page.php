<?php 
  global $post;
  $post_slug = $post->post_name;

  get_header( '', array( 'month' => $post_slug ) );
?>

<h2 class="headline headline--small-plus t-center">Wave</h2>

<?php 
  $withArticles = new WP_Query(array(
    'posts_per_page' => 6,
    'post_type' => $post_slug,
    'category_name' =>'part1',
  ));

  while($withArticles->have_posts()) {
    $withArticles->the_post(); ?>

<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

<?php }
      wp_reset_postdata();
    ?>


<h2 class="headline headline--small-plus t-center">Wide</h2>

<?php 
  $withArticles = new WP_Query(array(
    'posts_per_page' => 6,
    'post_type' => $post_slug,
    'category_name' =>'wide',
  ));



          while($withArticles->have_posts()) {
            $withArticles->the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php }
        ?>



<h2 class="headline headline--small-plus t-center">With</h2>

<?php 
  $withArticles = new WP_Query(array(
    'posts_per_page' => 6,
    'post_type' => $post_slug,
    'category_name' =>'with',
  ));

  while($withArticles->have_posts()) {
    $withArticles->the_post(); ?>

<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php }
        ?>


<?php get_footer();

?>