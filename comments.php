<?php
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
    die(__('Please do not load this page directly. Thanks!', 'garajez-lite'));
}

// check if post is pwd protected
if ( post_password_required() ) {
    return;
} // endif check pwd

if ( have_comments() && comments_open() ) { ?>
<div id="comments" class="comment-area">
    <h3 class="comments-title"><?php comments_number(__('NO COMMENTS', 'garajez-lite'), esc_attr__('1 COMMENT', 'garajez-lite'), esc_attr__('% COMMENTS', 'garajez-lite')); ?></h3>
    <ul class="comments-list">
        <?php
        wp_list_comments(array(
            'walker' => null,
            'style' => 'ul',
            'callback' => 'kopa_comments_callback',
            'end-callback' => null,
            'type' => 'all'
        ));
        ?>
    </ul>

    <?php
    // whether or not display paginate comments link
    $prev_comments_link = get_previous_comments_link();
    $next_comments_link = get_next_comments_link();

    if ( '' !== $prev_comments_link . $next_comments_link ) {
        $args = array(
            'prev_next'    => True,
            'prev_text'    => esc_attr__('Previous', 'garajez-lite'),
            'next_text'    => esc_attr__('Next', 'garajez-lite'),
            'type'         => 'list',
        );
        ?>
        <div class="kopa-pagination"><?php paginate_comments_links($args); ?></div>
        <?php } // endif ?>
</div>
<?php } elseif ( ! comments_open() && post_type_supports(get_post_type(), 'comments') ) {
    return;
} // endif

comment_form(kopa_comment_form_args());

/*
 * Comments call back function
 */
function kopa_comments_callback($comment, $args, $depth) {
    
    $GLOBALS['comment'] = $comment;

    if ( 'pingback' == get_comment_type() || 'trackback' == get_comment_type() ) { ?>

    <li id="comment-<?php comment_ID(); ?>" <?php comment_class( 'comment' ); ?>>

        <article id="div-comment-<?php comment_ID(); ?>" class="comment-wrap clearfix">
            <div class="comment-avatar">
                <?php echo get_avatar( $comment->comment_author_email, 60 ); ?>
            </div>
            <div class="media-body clearfix">
                <header class="clearfix">
                    <div class="pull-left">
                        <h4><?php echo esc_html__( 'Pingback: ', 'garajez-lite' ); ?><a href="<?php comment_link();?>"><?php comment_author();?></a></h4>
                        <span class="comment-date"><?php comment_date(get_option('date_format') ); ?></span>
                    </div>

                    <div class="comment-button pull-right comment-edit">
                        <?php if ( current_user_can( 'moderate_comments' ) ) {
                        edit_comment_link( esc_attr__( 'Edit', 'garajez-lite' ) );
                    } ?>

                    </div>

                    <div class="comment-button pull-right">
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                    </div>
                </header>

            </div>
        </article>

    <?php } elseif ( 'comment' == get_comment_type() ) { ?>

    <li id="comment-<?php comment_ID(); ?>" <?php comment_class( 'comment' ); ?>>
        <article id="div-comment-<?php comment_ID(); ?>" class="comment-wrap clearfix">
            <div class="comment-avatar">
                <?php echo get_avatar( $comment->comment_author_email, 60 ); ?>
            </div>
            <div class="media-body clearfix">
                <header class="clearfix">
                    <div class="pull-left">
                        <h4><?php echo get_comment_author(). '<span>'. esc_attr__(' says', 'garajez-lite') .':</span>'; ?></h4>
                        <span class="comment-date"><?php comment_date(get_option('date_format') ); ?></span>
                    </div>

                    <div class="comment-button pull-right comment-edit">
                        <?php if ( current_user_can( 'moderate_comments' ) ) {
                        edit_comment_link( esc_attr__( 'Edit', 'garajez-lite' ) );
                    } ?>

                    </div>

                    <div class="comment-button pull-right">
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                    </div>
                </header>
                <?php comment_text(); ?>
            </div>
        </article>
    <?php
    } // endif check comment type
}

function kopa_comment_form_args() {
    global $user_identity;
    $commenter = wp_get_current_commenter();
    $commeter_author = esc_attr($commenter['comment_author']);
    $commenter_author_email = esc_attr($commenter['comment_author_email']);
    //$commenter_author_url = esc_attr($commenter['comment_author_url']);

    $fields = array(
        'author' => '<p class="input-label">'.__('Your name','garajez-lite').'<span>*</span></p>
                    <p class="input-block">
                    <input class="form-control valid" id="comment_name" name="author" value="'. $commeter_author . '" type="text" placeholder="' . esc_attr__('Name (*)', 'garajez-lite') .'">
                    </p>',
        'email' => '<p class="input-label">'.__('Your email','garajez-lite').'<span>*</span></p>
                    <p class="input-block">
                        <input class="form-control" id="comment_email" name="email" value="'. $commenter_author_email . '"  type="email" placeholder="' . esc_attr__('Email (*)', 'garajez-lite') .'">
                    </p>'
    );

    if ( ! is_user_logged_in() ) {
        $comment_field = '
            <p class="input-label">'.__('Your comment','garajez-lite').'<span>*</span></p>
            <p class="textarea-block">'.
            '<textarea id="comment_message" class="form-control" name="comment" style="overflow:auto;resize:vertical ;" placeholder="' . esc_attr__('Comment (*)', 'garajez-lite') . '" cols="88" rows="10"></textarea>'.
            '</p>';
    } else {
        $comment_field = '<p class="input-label">'.__('Your comment','garajez-lite').'<span>*</span></p><p class="textarea-block"><textarea id="comment_message" class="form-control" name="comment" style="overflow:auto;resize:vertical ;" cols="88" rows="10"></textarea></p>';
    }

    $args = array(
        'fields' => apply_filters('comment_form_default_fields', $fields),
        'comment_field' => $comment_field,
        'comment_notes_before' => '<p>'.__('Your email address will not be published. Required fields are marked ( * ).', 'garajez-lite').'</p>',
        'comment_notes_after' => '',
        'id_form' => 'comments-form',
        'id_submit' => 'submit-comment',
        'title_reply' => esc_attr__('Leave a comment', 'garajez-lite'),
        // 'title_reply_to' => esc_attr__('Reply to %s', 'garajez-lite'),
        // 'cancel_reply_link' => '<span class="title-text">'.__('Cancel', 'garajez-lite').'</span>',
        'label_submit' =>__('LEAVE THE COMMENT', 'garajez-lite'),
    );

    return $args;
}
