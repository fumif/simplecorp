<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>
<div id="comments" class="comments">
	<div class="row">
		<div class="col-xs-12">
			<?php if( have_comments() ): //コメントがあったらコメントリストを表示する ?>
				<h3 class="page-header">
					Comments
				</h3>
				<div class="comment-list">
					<article class="row">
						<?php wp_list_comments( array(
							'max_depth'	 => 2,
							'reply_text' => '<button class="btn btn-default btn-sm"><i class="fa fa-reply"></i> Reply</button>',
							'avatar_size'       => '64',
							'type'=> 'comment',
							'callback' => 'reply_comment' )); ?>
						</article>
					</div>
				<?php endif; ?>
				<?php 
				$commenter = wp_get_current_commenter();
				$req = get_option( 'require_name_email' );
				$aria_req = ( $req ? " aria-required='true'" : '' );

				add_filter( 'comment_form_logged_in', '__return_empty_string' );
				$args = array(
					'title_reply' =>  __('Leave a reply','simple-corp'),
					'title_reply_before' => '<p id="reply-title" class="comment-reply-title">',
					'cancel_reply_link' => '<button class="btn btn-default btn-sm"><i class="fa fa-times"></i> Cancel </button>',
					'cancel_reply_before' => '<span class="pull-right">',
					'cancel_reply_after' => '</span>',
					'comment_field' =>  
					'<p class="comment-form-comment">
					<textarea id="comment" class="form-control" name="comment" cols="45" rows="4 aria-required="true">'
					.'</textarea></p>',
					'comment_notes_before' => '',
					'comment_notes_after'  => '',
					'label_submit' => 'Submit',
					'fields' => apply_filters( 'comment_form_default_fields', array(

						'author' =>
						'<p class="comment-form-author">' .
						'<input id="author" class="form-control" name="author" type="text" placeholder="Name" value="' . esc_attr( $commenter['comment_author'],'simple-corp') .
						'" size="30"' . $aria_req . ' required /></p>',

						'email' =>
						'<p class="comment-form-email"> ' .
						'<input id="email" class="form-control" name="email" type="email" placeholder="Email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
						'" size="30"' . $aria_req . '  required/></p>',

					)
				),
				);
				?>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div>
						<?php 
						paginate_comments_links(' ');
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<?php comment_form( $args );   ?>
				</div>
			</div>
		</div>
	</div>