<?php get_header(); ?> 
<div class="container content">
		<div class="side">
            <div class="block">
                <h3>侧边栏</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.    Nam vel diam hendrerit erat fermentum aliquet sed eget arcu.</p>
                <a class="button">More</a>
           </div>
</div>
        <div class="main block">
       <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <article class="post">
                    <h2><?php the_title(); ?></h2>
                    <p class="meta">
    				发布于 <?php the_time('F j, Y g:i a');  ?> by <?php the_author(); ?>
					</p>
<?php the_content(); ?>
<a class="button" href="#">Read More</a>
                </article>
            <?php endwhile; ?>
       <?php else : ?>
            <?php echo wpautop('Sorry, no posts were found'); ?>
       <?php endif; ?>  
		</div>
</div>
<?php get_footer(); ?>