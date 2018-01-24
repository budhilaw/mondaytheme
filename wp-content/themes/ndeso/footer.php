			</div>
			<!-- Content -->
			
			<!-- jika front end atau bukan -->
			<?php if (is_front_page()) { 
		    	get_template_part('front'); 
			} else { 
		    	get_sidebar(); 
			} ?>
			</div>
			<!-- Container -->

			<div class="footer">
				<div class="copyright">Copyright &copy; 2017 <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a><br />
					<span><?php _e('Didukung oleh', 'ndeso'); ?> <a href="http://wordpress.org">WordPress</a>. <?php _e('Tema Ndeso oleh', 'ndeso'); ?> <a href="http://main-css.com">Main CSS</a></span>
				</div>
			</div>
		</div>
		<!-- Page generated: <?php timer_stop(1); ?> s, <?php echo get_num_queries(); ?> queries -->
		<?php wp_footer(); ?>

	</body>
</html>
