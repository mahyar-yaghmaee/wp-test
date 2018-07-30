<?php  

?>



<h1> Home Page - Hello World! </h1>
<nav class="site-nav">
	<?php wp_nav_menu()?>

</nav>

<?php 
while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>