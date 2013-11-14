<?php
/**
 *
 * BoldR Lite WordPress Theme by Iceable Themes | http://www.iceablethemes.com
 *
 * Copyright 2013 Mathieu Sarrasin - Iceable Media
 *
 * Page Template
 *
 */
?>

<?php get_header();

	if(have_posts()) :
	while(have_posts()) : the_post();

?>

	<div class="container" id="main-content">
		<div id="page-container" <?php post_class("left with-sidebar"); ?>>
			<?php 
				session_start();
				$allowedExts = array("gif", "jpeg", "jpg", "png", "pdf", "doc", "docx", "doct");
				$temp = explode(".", $_FILES["file"]["name"]);
				$extension = end($temp);
				if ($_FILES["file"] != null) {
					if (
					(
					($_FILES["file"]["type"] == "image/gif")
					|| ($_FILES["file"]["type"] == "image/jpeg")
					|| ($_FILES["file"]["type"] == "image/jpg")
					|| ($_FILES["file"]["type"] == "image/pjpeg")
					|| ($_FILES["file"]["type"] == "image/x-png")
					|| ($_FILES["file"]["type"] == "image/png")
					|| ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
					|| ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.template")
					|| ($_FILES["file"]["type"] == "application/msword")
					|| ($_FILES["file"]["type"] == "application/pdf")
					)
					&& ($_FILES["file"]["size"] < 25000000)
					&& in_array($extension, $allowedExts)
					)
					{
						if ($_FILES["file"]["error"] > 0) {
							echo "<h2 style='color:red'>An error occurred while submitting your 									file. Please try again.</h2>";
						} 
						else {
							$attachments = array( $_FILES["file"]["tmp_name"] );
							$headers = 'From: The Spectator <aba1995@gmail.com>' . "\r\n";
							$message = "Name: {$_POST['submitter-name']}\r\nGrade: {$_POST['grade']}";
							wp_mail('alancona@bbns.org', 'Spectator Submission', $message, 									$headers, $attachments );
							echo "<h2 style='color:green'>Submission successful.</h2>";
						}
					}
					else {
						if ($_FILES["file"]["size"] > 25000000) {
							echo "<h2 style='color:red'>Submission too large. Maximum file size is 25MB.</h2>";
						}
						else {
							echo "<h2 style='color:red'>Invalid file type. File must end in .gif, .jpeg, .jpg, .png, .pdf, .doc, .docx, or .doct</h2>";
						}
					}
				}				
			?>
				<?php the_content(); ?>
				<br class="clear" />
				<?php edit_post_link(__('Edit', 'boldr'), '<span class="editlink">', '</span><br class="clear" />'); ?>
				<br class="clear" />
			<?php	// Display comments section only if comments are open or if there are comments already.
				if ( comments_open() || get_comments_number()!=0 ) : ?>
				<!-- comments section -->
				<div class="comments">
				<?php comments_template( '', true ); ?>
				<?php next_comments_link(); previous_comments_link(); ?>
				</div>
				<!-- end comments section -->
			<?php endif; ?>

			<?php endwhile; ?>
				<?php else : ?>
				<h2><?php _e('Not Found', 'boldr'); ?></h2>
				<p><?php _e('What you are looking for isn\'t here...', 'boldr'); ?></p>

			<?php endif; ?>
		</div>
		<!-- End page container -->

		<div id="sidebar-container" class="right">
			<ul id="sidebar">
			   <?php dynamic_sidebar( 'sidebar' ); ?>
			</ul>
		</div>		
		<!-- End sidebar -->
	</div>
	<!-- End main content -->
<?php get_footer(); ?>
