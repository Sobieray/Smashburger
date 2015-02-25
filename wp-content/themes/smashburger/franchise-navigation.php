<div class="franchise-menu-interior clear">
	<h6 class="hide-for-medium-down">Franchising</h6>
	<?php wp_nav_menu( array( 'menu' => 'franchise-interior', 'menu_class' => 'show-for-large-up' ) ); ?>
	<dl id="franchise-dropdown" class="accordion show-for-medium-down" data-accordion>
		<dd class="accordion-navigation clear">
		  <a href="#panel1z">
		  	<h5>franchising menu</h5>
		  </a>
	  	<div id="panel1z" class="content">
	  		<?php wp_nav_menu( array( 'menu' => 'franchise-interior') ); ?>
	  	</div>
		</dd>
	</dl>
</div>