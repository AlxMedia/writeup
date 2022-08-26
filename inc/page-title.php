<div class="page-title group">
	
	<?php if ( is_home() ) : ?>
		<h2><?php echo writeup_blog_title(); ?></h2>
		
	<?php elseif ( is_single() ): ?>
		
		
	<?php elseif ( is_page() ): ?>
		<h2><?php the_title(); ?></h2>

	<?php elseif ( is_search() ): ?>
		<h1>
			<?php if ( have_posts() ): ?><i class="fas fa-search"></i><?php endif; ?>
			<?php if ( !have_posts() ): ?><i class="fas fa-exclamation-circle"></i><?php endif; ?>
			<?php $search_results=$wp_query->found_posts;
				if ($search_results==1) {
					echo $search_results.' '.esc_html__('Search result','writeup');
				} else {
					echo $search_results.' '.esc_html__('Search results','writeup');
				}
			?>
		</h1>
		
	<?php elseif ( is_404() ): ?>
		<h1><i class="fas fa-exclamation-circle"></i><?php esc_html_e('Error 404.','writeup'); ?> <span><?php esc_html_e('Page not found!','writeup'); ?></span></h1>
		
	<?php elseif ( is_author() ): ?>
		<?php $author = get_userdata( get_query_var('author') );?>
		<h1><i class="far fa-user"></i><?php esc_html_e('Author:','writeup'); ?> <span><?php echo $author->display_name;?></span></h1>
		
	<?php elseif ( is_category() ): ?>
		<h1><?php echo single_cat_title('', false); ?></h1>

	<?php elseif ( is_tag() ): ?>
		<h1><i class="fas fa-tags"></i><?php esc_html_e('Tagged:','writeup'); ?> <span><?php echo single_tag_title('', false); ?></span></h1>
		
	<?php elseif ( is_day() ): ?>
		<h1><i class="far fa-calendar"></i><?php esc_html_e('Daily Archive:','writeup'); ?> <span><?php echo esc_html( get_the_time('F j, Y') ); ?></span></h1>
		
	<?php elseif ( is_month() ): ?>
		<h1><i class="far fa-calendar"></i><?php esc_html_e('Monthly Archive:','writeup'); ?> <span><?php echo esc_html( get_the_time('F Y') ); ?></span></h1>
			
	<?php elseif ( is_year() ): ?>
		<h1><i class="far fa-calendar"></i><?php esc_html_e('Yearly Archive:','writeup'); ?> <span><?php echo esc_html( get_the_time('Y') ); ?></span></h1>
	
	<?php else: ?>
		<h2><?php the_title(); ?></h2>
	
	<?php endif; ?>

</div><!--/.page-title-->