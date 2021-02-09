<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
</div><!-- .row -->
</div><!-- .container -->
</div><!-- #content -->
<?php get_template_part( 'footer-widget' ); ?>
<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
	<div class="container pt-3 pb-3">
		<div class="site-info">
			Copyright 2021. All right reserved. စစ်အာဏာသိမ်းမှုကို တိုက်ထုတ်ကြပါစို့။

		</div>
	</div>
</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<script type="text/javascript">
	jQuery(document).ready(function($){
		jQuery(function(){

			var minimized_elements = $('.information');

			minimized_elements.each(function(){    
				var t = $(this).text();        
				if(t.length < 500) return;

				$(this).html(
					t.slice(0,500)+'<span>... </span><a href="#" class="more">ဆက်လက်ဖတ်ရှုရန်</a>'+
					'<span style="display:none;">'+ t.slice(100,t.length)+' <a href="#" class="less">Less</a></span>'
					);

			}); 

			$('a.more', minimized_elements).click(function(event){
				event.preventDefault();
				$(this).hide().prev().hide();
				$(this).next().show();        
			});

			$('a.less', minimized_elements).click(function(event){
				event.preventDefault();
				$(this).parent().hide().prev().show().prev().show();    
			});

		});
	});
</script>

<?php wp_footer(); ?>
</body>
</html>