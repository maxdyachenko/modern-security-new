<?php get_header(); ?>

<section style="height: 100vh; margin-left: 350px">	
			 
            <?php if(have_posts()): ?>
            	<?php while(have_posts()) : the_post() ?>
            		<?php query_posts('cat=5showposts=1'); ?>
						<article>
							<?php if ( function_exists( 'add_theme_support' ) )
                                                        the_post_thumbnail( array(), array('class' => 'post_imgSingle') ); ?>
						
							<h3><?php the_title(); ?></h3></a>
						

						
							<?php the_content(); ?>
			
						<button class="butBack" type="submit" onclick="history.back()">back</button>
						
					</article>
            <?php endwhile; ?>
           <?php endif; ?>
</section>	



<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/jquery-3.2.1.min.js"></script>
<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/jquery.slimscroll.min.js"></script>
<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/clamp.min.js"></script>
<script src="/wp-content/themes/twentyseventeen/assets/scripts/main.js"></script>
<!-- <?php get_footer(); ?> -->