	<!-- フッター -->
	<footer id="footer">
  <div class="inner">
		
    <!-- 左側 -->
		<div id="info" class="grid">
	  	<!-- ロゴ -->
			<div class="logo">		
  			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php tpl_087_rwd_print_Logo_name(); ?>
          	<?php tpl_087_rwd_print_Logo_slogan(); ?>
      	</a>
			</div>
			<!-- / ロゴ -->
    
			<!-- 電話番号+受付時間 -->
			<div class="info">
    		<?php tpl_087_rwd_print_tel(); ?>
    		<?php tpl_087_rwd_print_open_time(); ?>
    	</div>
			<!-- / 電話番号+受付時間 -->
		</div>  
		<!-- / 左側 -->
	
  	<!-- 右側 ナビゲーション -->
		<?php wp_nav_menu( array( 'container' => '', 'items_wrap' => '<ul class="footnav">%3$s</ul>','theme_location'=>'footer') );?>
	</div>
	</footer>
	<!-- / footer -->

	<p id="copyright">Copyright(c) <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved. Design by <a href="http://f-tpl.com" target="_blank" rel="nofollow">http://f-tpl.com</a></p><!-- ←「Design by http://f-tpl.com」を外す場合はシリアルキーが必要です http://f-tpl.com/credit/ -->
</div>

<?php wp_footer(); ?>
</body>
</html>