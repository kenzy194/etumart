<?php
/**
 * The template for displaying comments.
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 * 
 * @package kaily
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ( 1 === $comment_count ) {

                /* translators: 1: title. */
                esc_html_e( 'COMMENT', 'kaily' );
            } else {
                /* translators: 1: title. */
                esc_html_e( 'COMMENTS', 'kaily' );
            }
            ?>
        </h2><!-- .comments-title -->

        <?php the_comments_navigation(); ?>

        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ol',
                    'short_ping' => true,
                ) );
            ?>
        </ol><!-- .comment-list -->

        <?php the_comments_navigation();

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'kaily' ); ?></p>
        <?php
        endif;

    endif; // Check for have_comments().

    $form = array(
                'id_form'           => 'commentform',
                'id_submit'         => 'submit',
                'title_reply'       => esc_html__( 'Bình Luận', 'kaily'),
                'cancel_reply_link' => esc_html__( 'Hủy Bình Luận', 'kaily'),
                'label_submit'      => esc_html__( 'Gửi Bình Luận', 'kaily'),
                'comment_notes_before' => '',
                'fields' => apply_filters( 'comment_form_default_fields', array(

                        'author' =>
                        '<div class="row"><div class="comment-form-author col-md-4 col-sm-12 col-xs-12">'.
                        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                        '" placeholder="'.esc_attr__('Your name', 'kaily').'"/></div>',

                        'email' =>
                        '<div class="comment-form-email col-md-4 col-sm-12 col-xs-12">'.
                        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                        '" placeholder="'.esc_attr__('Email', 'kaily').'"/></div>',

                        'phone' =>
                        '<div class="comment-form-phone col-md-4 col-sm-12 col-xs-12">'.
                        '<input id="phone" name="phone" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                        '" placeholder="'.esc_attr__('Your Phone', 'kaily').'"/></div></div>',
                )
                ),
                'comment_field' =>  '<div class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.esc_attr__('Bình Luận Của Bạn ...', 'kaily').'" aria-required="true">' .
                '</textarea></div>',
        );

    comment_form($form);
    ?>

</div><!-- #comments -->
