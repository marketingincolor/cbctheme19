<?php 
global $post;
$attachment = get_post_thumbnail_id();
$video = get_field( "video_code" );
if ( $attachment ) {
	$img_src = wp_get_attachment_image_src( $attachment, 'carousel-lg' ); // desktop image
	$img_srcset = wp_get_attachment_image_srcset( $attachment, 'carousel-lg' );
	$img_sizes  = wp_calculate_image_sizes('full', NULL, NULL, $attachment);
	//$img_sizes  = wp_calculate_image_sizes('carousel-lg', NULL, NULL, $attachment);
	// Wordpress now create the responsive image srcset and sizes for you
	?>
<img src="<?php echo $img_src[0]; ?>"
	srcset="<?php echo $img_srcset; ?>"
    sizes="<?php echo $img_sizes; ?>"
    alt="<?php the_title(); ?>">
<?php } else { ?>
<div class="videoWrapper">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?echo $video ?>" frameborder="0" allowfullscreen></iframe>
</div>

<?php } ?>	
<?php if ($post->post_content) { ?>
<div class="carousel-caption"><?php the_content( ); ?></div>
<?php } ?>
<footer class="entry-meta"><?php edit_post_link( __( '<i class="fa fa-edit"></i>', 'dei' )); ?></footer><!-- .entry-meta -->