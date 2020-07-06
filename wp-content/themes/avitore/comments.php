<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

  <?php if ( have_comments() ) : ?>
            

        <h3 class="comments-title"><?php comments_number( esc_html__('0 Comments', 'avitore'), esc_html__('1 Comment', 'avitore'), esc_html__('% Comments', 'avitore')); ?></h3>
      <ol class="comment-list">
          <?php wp_list_comments('callback=avitore_theme_comment'); ?>
      </ol>
                                   
        <?php
                    // Are there comments to navigate through?
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                ?>
            <div class="text-center">
              <ul class="pagination">
                <li>
                  <?php //Create pagination links for the comments on the current post, with single arrow heads for previous/next
                  paginate_comments_links( array(
                    'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-left"></i>', 'avitore' ),ENT_QUOTES), 
                    'next_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-right"></i>', 'avitore' ),ENT_QUOTES)
                  ));  ?>
                </li> 
              </ul>
            </div>
<?php endif; // Check for comment navigation ?>
<?php endif; ?>
<?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => 'contact-form',        
                'class_form' => '',                         
                'title_reply'=> esc_html__( 'Leave a comment', 'avitore' ),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="author">
                                    </div>
                                  </div>',
                    'email' => '<div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                </div>',                       
                ) ),   
                'comment_field' => '<div class="col-lg-12">
                                      <div class="form-group">
                                        <textarea name="comment" class="form-control" id="comments" placeholder="'.esc_attr__('Write a Comment...', 'avitore').'"></textarea>
                                      </div>
                                    </div>',                    
                 'label_submit' => 'Post a Comment',
                 'class_submit' => 'cs-btn-one btn-primary-color btn-sm',
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
    ?>
<?php if ( comments_open() ) : ?>
  <div class="reply-form mrt-40">
    <?php comment_form($comment_args); ?>
    <p class="form-message"></p>
  </div>
<?php endif; ?> 