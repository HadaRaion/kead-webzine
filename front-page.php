<?php get_header();

// The Arrays
$args1 = array(
	'post_type' => 'january',
	'category_name' => 'part1',
  'order_by' => 'menu_order',
);

$args2 = array(
	'post_type' => 'january',
	'category_name' => 'part2',
  'order_by' => 'menu_order',
);

$args3 = array(
	'post_type' => 'january',
	'category_name' => 'part3',
  'order_by' => 'menu_order',
);
?>

<main>
	<div class="container">

<?php
// The Query
$query1 = new WP_Query( $args1 );

// The Loop
while ( $query1->have_posts() ) {
	$query1->the_post();
  $subCategory =  get_the_category()[0]->cat_name;
?>
<li>
  <p><?php echo  $subCategory ?></p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>
<?php }

wp_reset_postdata();

/* The 2nd Query (without global var) */
$query2 = new WP_Query( $args2 );

// The 2nd Loop
while ( $query2->have_posts() ) {
	$query2->the_post();
	$subCategory =  get_the_category()[0]->cat_name;
?>
<li>
  <p><?php echo  $subCategory ?></p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>
<?php }

wp_reset_postdata();

/* The 2nd Query (without global var) */
$query3 = new WP_Query( $args3 );

// The 2nd Loop
while ( $query3->have_posts() ) {
	$query3->the_post();
	$subCategory =  get_the_category()[0]->cat_name;
?>
<li>
  <p><?php echo  $subCategory ?></p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>
<?php }
?>
	</div>
</main>

<?php get_footer();
?>