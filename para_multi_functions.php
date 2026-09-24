<?php echo esc_url( home_url() ); ?>


		$random_text = "echo esc_url( home_url() )" . "/?redirect_to=random" . $random_type . $tag_id;
		$random_type = "<a href='" . $random_text ."'>[@]</a>";
		return $random_type;
