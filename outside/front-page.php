<?php 
//This is the data for Events with taxonomy query
$args = array(
	'post_type'=> 'event',
	'order' => 'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'event_type',
			'field' => 'slug',
			'terms' => 'picnic' //education //sports,
			)
		),
	);
$event = new WP_Query($args);
if($event -> have_posts()){
	while($event -> have_posts()){
		$event-> the_post();
		echo the_title();
		echo "<br>";
		echo the_content();
		echo "<br>";
	}	
}

//Shortcode to list down on the basis of 
$a = do_shortcode('[eventshortcode post_type="event" posts_per_page="10" ]');



?>