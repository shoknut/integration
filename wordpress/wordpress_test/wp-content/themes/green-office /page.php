<?php get_header(); ?>
	<!--MAIN CONTENT-->
<main>
<?php if(have_posts()):?>
	<?php while(have_posts()): the_post(); ?>
		<article>
			<h2 style="color: red;"><?php the_title();?></h2>
			<?php the_content();?>
		</article>
	<?php endwhile;?>

<?php else:?>
	<p>Il n'y a pas d'articles</p>
<?php endif;?>
</main>

<?php get_footer();?>