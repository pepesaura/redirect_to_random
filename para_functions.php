// END ENQUEUE PARENT ACTION

// Prepara el enlace para la llamada desde index.php
function random_get_archive_type() {
		$tag_id = get_queried_object()->term_id;
		
		if ( is_category() ) {
			$random_type = "&cat=";
		} elseif ( is_tag() ) {
			$random_type = "&tag_id=";
		} else {
			$random_type = "";
		}
		
		$random_text = "/?redirect_to=random" . $random_type . $tag_id;
		$random_type = "<a href='" . $random_text ."'>[@]</a>";
		return $random_type;
	}
