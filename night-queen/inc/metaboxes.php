<?php
add_action(
  'add_meta_boxes',
  function(){
    add_meta_box(
      'night_queen_image_uploader_meta', // ID
      'Gallery Image Credential', // Title
      'night_queen_image_uploader', // Callback (Construct function)
      'night_queen_photo', //screen (This adds metabox to all post types)
      'side' // Context
    );
 },
 9
);
function night_queen_image_uploader($post){
  $gallery_image = get_post_meta($post->ID, 'my-image-for-post', true); 
  $gallery_image_2 = get_post_meta($post->ID, 'my-image-for-post-2', true); 
  $_night_queen_photo_column = get_post_meta($post->ID, '_night_queen_photo_column', true); 
  wp_nonce_field( 'night_queen_photo_gallery_metabox', 'night_queen_photo_gallery_nonce' );?>
  
  
  <label for="night_queen_image_uploader"><?php esc_html_e( 'Gallery Image', 'night-queen' ); ?></label><br>
  <input id="my_image_URL" name="my_image_URL" type="text"
         value="<?php echo $gallery_image;?>" class="widefat"/><br/>
  <input id="my_upl_button" type="button" value="Upload Image" /><br/>
  <img src="<?php echo $gallery_image;?>" id="picsrc" style="width:200px;" /><br>
  
  <label for="night_queen_image_uploader_popup"><?php esc_html_e( 'Popup Image of Gallery Image', 'night-queen' ); ?></label><br>
  <input id="my_image_URL_2" name="my_image_URL_2" type="text"
         value="<?php echo $gallery_image;?>" class="widefat" /><br/>
  <input id="my_upl_button_2" type="button" value="Upload Image" /><br/>
  <img src="<?php echo $gallery_image_2;?>"  id="picsrc-2" style="width:200px;"/><br>
  <p>
        <label for="night_queen_photo_column_meta"><?php esc_html_e( 'Number of column for image', 'night-queen' ); ?></label>
        <select name="night_queen_photo_column_meta" id="night_queen_photo_column_meta" class="widefat">
            <option <?php selected( $_night_queen_photo_column, '4' ); ?> value="4"><?php esc_html_e( '4 column', 'night-queen' ); ?></option>
            <option <?php selected( $_night_queen_photo_column, '8' ); ?> value="8"><?php esc_html_e( '8 column', 'night-queen' ); ?></option>
            <option <?php selected( $_night_queen_photo_column, '12' ); ?> value="12"><?php esc_html_e( '12 column', 'night-queen' ); ?></option>
        </select>
    </p>
  <script>
  jQuery(document).ready( function($) {
    jQuery('#my_upl_button').click(function() {
      window.send_to_editor = function(html) {
        imgurl = jQuery(html).attr('src')
        jQuery('#my_image_URL').val(imgurl);
        jQuery('#picsrc').attr("src", imgurl);
        tb_remove();
      }

      formfield = jQuery('#my_image_URL').attr('name');
      tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true' );
      return false;
    }); // End on click
  });
  </script>
  <script>
  jQuery(document).ready( function($) {
    jQuery('#my_upl_button_2').click(function() {
      window.send_to_editor = function(html) {
        imgurl = jQuery(html).attr('src')
        jQuery('#my_image_URL_2').val(imgurl);
        jQuery('#picsrc-2').attr("src", imgurl);
        tb_remove();
      }

      formfield = jQuery('#my_image_URL_2').attr('name');
      tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true' );
      return false;
    }); // End on click
  });
  </script>
<?php
}

function _night_queen_save_photo_gallery_metabox($post_id, $post) {
	
	$edit_cap = get_post_type_object( $post->post_type )->cap->edit_post;
    if( !current_user_can( $edit_cap, $post_id )) {
        return;
    }
    if( !isset( $_POST['night_queen_photo_gallery_nonce']) || !wp_verify_nonce( $_POST['night_queen_photo_gallery_nonce'], 'night_queen_photo_gallery_metabox' )) {
        return;
    }
		  if(array_key_exists('my_image_URL_2', $_POST)) {
				update_post_meta( 
					$post_id, 
					'my-image-for-post-2', 
					sanitize_text_field($_POST['my_image_URL_2'])
				);
			}
			if(array_key_exists('my_image_URL', $_POST)) {
				update_post_meta( 
					$post_id, 
					'my-image-for-post', 
					sanitize_text_field($_POST['my_image_URL'])
				);
			}
			if(array_key_exists('night_queen_photo_column_meta', $_POST)) {
				update_post_meta( 
					$post_id, 
					'_night_queen_photo_column', 
					sanitize_text_field($_POST['night_queen_photo_column_meta'])
				);
			}
		}
add_action( 'save_post', '_night_queen_save_photo_gallery_metabox', 10, 2 );

add_action(
  'add_meta_boxes',
  function(){
    add_meta_box(
      'night_queen_video_uploader_meta',
      'Gallery Video Credential', 
      'night_queen_video_uploader', 
      'night-queen_video',
      'side' 
    );
 },
 9
);
function night_queen_video_uploader($post){
  $night_queen_gallery_video_poster = get_post_meta($post->ID, 'night_queen_gallery_video_poster', true); 
  $_night_queen_photo_column = get_post_meta($post->ID, '_night_queen_photo_column', true); 
  wp_nonce_field( 'night_queen_video_gallery_metabox', 'night_queen_video_gallery_nonce' );?>
  
  
  <label for="night_queen_video_uploader"><?php esc_html_e( 'Gallery Image', 'night-queen' ); ?></label><br>
  <input id="gallery_video_poster" name="gallery_video_poster" type="text"
         value="<?php echo $night_queen_gallery_video_poster;?>" class="widefat"/><br/>
  <input id="my_upl_button" type="button" value="Upload Image" /><br/>
  <img src="<?php echo $night_queen_gallery_video_poster;?>" id="picsrc" style="width:200px;" /><br>
  


  <script>
  jQuery(document).ready( function($) {
    jQuery('#my_upl_button').click(function() {
      window.send_to_editor = function(html) {
        imgurl = jQuery(html).attr('src')
        jQuery('#gallery_video_poster').val(imgurl);
        jQuery('#picsrc').attr("src", imgurl);
        tb_remove();
      }

      formfield = jQuery('#gallery_video_poster').attr('name');
      tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true' );
      return false;
    }); // End on click
  });
  </script>

<?php
}

function _night_queen_save_video_gallery_metabox($post_id, $post) {
	
	$edit_cap = get_post_type_object( $post->post_type )->cap->edit_post;
    if( !current_user_can( $edit_cap, $post_id )) {
        return;
    }
    if( !isset( $_POST['night_queen_video_gallery_nonce']) || !wp_verify_nonce( $_POST['night_queen_video_gallery_nonce'], 'night_queen_video_gallery_metabox' )) {
        return;
    }

			if(array_key_exists('gallery_video_poster', $_POST)) {
				update_post_meta( 
					$post_id, 
					'night_queen_gallery_video_poster', 
					sanitize_text_field($_POST['gallery_video_poster'])
				);
			}

		}
add_action( 'save_post', '_night_queen_save_video_gallery_metabox', 10, 2 );

