<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<!-- <fieldset class="search-field-container"> -->
		<label>
			<input type="search" class="search-field" placeholder="Type and hit enter...." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		
			<!-- <span class="icon-search" aria-hidden="true"> -->
			<i class="fa fa-search" aria-hidden="true"></i>
			<!-- </span> -->
			<!-- <button class="search-submit"> -->
			<!-- <span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button> -->
	<!-- </fieldset> -->
</form>
