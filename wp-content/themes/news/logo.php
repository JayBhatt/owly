<?php

echo "<div class='site-title'>";
	if ( has_custom_logo() ) {
		the_custom_logo();
	} else {
		echo "<a href='" . esc_url( home_url() ) . "'>";
			echo '<img src="'.get_template_directory_uri(). '/assets/images/logo.svg'.'" alt="News.com.au">';
		echo "</a>";
	}
echo "</div>";