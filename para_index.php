			<?php if ( $archive_title ) : ?>
				<<?php echo $archive_title_elem; ?> class="page-title">
					<?php echo wp_kses_post( $archive_title ); ?>
					<?php echo random_get_archive_type(); ?>
					</<?php echo $archive_title_elem; ?>>
			<?php endif; ?>
