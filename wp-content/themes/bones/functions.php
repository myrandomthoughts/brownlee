<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

/*
1. library/bones.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once( 'library/bones.php' ); // if you remove this, bones will break
/*
2. library/custom-post-type.php
	- an example custom post type
	- example custom taxonomy (like categories)
	- example custom taxonomy (like tags)
*/
require_once( 'library/custom-post-type.php' ); // you can disable this if you like
/*
3. library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
// require_once( 'library/admin.php' ); // this comes turned off by default
/*
4. library/translation/translation.php
	- adding support for other languages
*/
// require_once( 'library/translation/translation.php' ); // this comes turned off by default

/************* NAVIGATION OPTIONS *************/

//Removes Home link from menu

function mytheme_nav_menu_args( $args ) {
    $args['show_home'] = false;
    return $args;
}

add_filter( 'wp_nav_menu_args', 'mytheme_nav_menu_args' );
add_filter( 'wp_page_menu_args', 'mytheme_nav_menu_args' );

/************* THUMBNAIL SIZE OPTIONS *************/

//Add post thumbnail support
add_theme_support( 'post-thumbnails' );



// Thumbnail sizes
add_image_size( 'profile-picture', 231, 163, true );
add_image_size( 'thumbnail', 52, 46, true );


/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

add_filter( 'image_size_names_choose', 'bones_custom_image_sizes' );

function bones_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'thumbnail' => __('52px by 46px'),
        'profile-picture' => __('231px by 163px'),
    ) );
}

/*
The function above adds the ability to use the dropdown menu to select 
the new images sizes you have just created from within the media manager 
when you add media to your content blocks. If you add more image sizes, 
duplicate one of the lines in the array and name it according to your 
new image size.
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'bonestheme' ),
		'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __( 'Sidebar 2', 'bonestheme' ),
		'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<?php // custom gravatar call ?>
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=32" class="load-gravatar avatar avatar-48 photo" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
				<?php // end custom gravatar call ?>
				<?php printf(__( '<cite class="fn">%s</cite>', 'bonestheme' ), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bonestheme' )); ?> </a></time>
				<?php edit_comment_link(__( '(Edit)', 'bonestheme' ),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p><?php _e( 'Your comment is awaiting moderation.', 'bonestheme' ) ?></p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
	<?php // </li> is added by WordPress automatically ?>
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<label class="screen-reader-text" for="s">' . __( 'Search for:', 'bonestheme' ) . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . esc_attr__( 'Search the Site...', 'bonestheme' ) . '" />
	<input type="submit" id="searchsubmit" value="' . esc_attr__( 'Search' ) .'" />
	</form>';
	return $form;
} // don't remove this bracket!
function dimox_breadcrumbs() {  
  
  /* === OPTIONS === */  
  $text['home']   = 'Home'; // text for the 'Home' link  
  $text['category'] = 'Archive by Category "%s"'; // text for a category page  
  $text['search']  = 'Search Results for "%s" Query'; // text for a search results page  
  $text['tag']   = 'Posts Tagged "%s"'; // text for a tag page  
  $text['author']  = 'Articles Posted by %s'; // text for an author page  
  $text['404']   = 'Error 404'; // text for the 404 page  
  
  $show_current  = 1; // 1 - show current post/page/category title in breadcrumbs, 0 - don't show  
  $show_on_home  = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show  
  $show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show  
  $show_title   = 1; // 1 - show the title for the links, 0 - don't show  
  $delimiter   = ' &raquo; '; // delimiter between crumbs  
  $before     = '<span class="current">'; // tag before the current crumb  
  $after     = '</span>'; // tag after the current crumb  
  /* === END OF OPTIONS === */  
  
  global $post;  
  $home_link  = home_url('/');  
  $link_before = '<span typeof="v:Breadcrumb">';  
  $link_after  = '</span>';  
  $link_attr  = ' rel="v:url" property="v:title"';  
  $link     = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;  
  $parent_id  = $parent_id_2 = $post->post_parent;  
  $frontpage_id = get_option('page_on_front');  
  
  if (is_home() || is_front_page()) {  
  
    if ($show_on_home == 1) echo '<div class="breadcrumbs"><a href="' . $home_link . '">' . $text['home'] . '</a></div>';  
  
  } else {  
  
    echo '<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">';  
    if ($show_home_link == 1) {  
      echo '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $text['home'] . '</a>';  
      if ($frontpage_id == 0 || $parent_id != $frontpage_id) echo $delimiter;  
    }  
  
    if ( is_category() ) {  
      $this_cat = get_category(get_query_var('cat'), false);  
      if ($this_cat->parent != 0) {  
        $cats = get_category_parents($this_cat->parent, TRUE, $delimiter);  
        if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);  
        $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);  
        $cats = str_replace('</a>', '</a>' . $link_after, $cats);  
        if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);  
        echo $cats;  
      }  
      if ($show_current == 1) echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;  
  
    } elseif ( is_search() ) {  
      echo $before . sprintf($text['search'], get_search_query()) . $after;  
  
    } elseif ( is_day() ) {  
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;  
      echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;  
      echo $before . get_the_time('d') . $after;  
  
    } elseif ( is_month() ) {  
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;  
      echo $before . get_the_time('F') . $after;  
  
    } elseif ( is_year() ) {  
      echo $before . get_the_time('Y') . $after;  
  
    } elseif ( is_single() && !is_attachment() ) {  
      if ( get_post_type() != 'post' ) {  
        $post_type = get_post_type_object(get_post_type());  
        $slug = $post_type->rewrite;  
        printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);  
        if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;  
      } else {  
        $cat = get_the_category(); $cat = $cat[0];  
        $cats = get_category_parents($cat, TRUE, $delimiter);  
        if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);  
        $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);  
        $cats = str_replace('</a>', '</a>' . $link_after, $cats);  
        if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);  
        echo $cats;  
        if ($show_current == 1) echo $before . get_the_title() . $after;  
      }  
  
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {  
      $post_type = get_post_type_object(get_post_type());  
      echo $before . $post_type->labels->singular_name . $after;  
  
    } elseif ( is_attachment() ) {  
      $parent = get_post($parent_id);  
      $cat = get_the_category($parent->ID); $cat = $cat[0];  
      if ($cat) {  
        $cats = get_category_parents($cat, TRUE, $delimiter);  
        $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);  
        $cats = str_replace('</a>', '</a>' . $link_after, $cats);  
        if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);  
        echo $cats;  
      }  
      printf($link, get_permalink($parent), $parent->post_title);  
      if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;  
  
    } elseif ( is_page() && !$parent_id ) {  
      if ($show_current == 1) echo $before . get_the_title() . $after;  
  
    } elseif ( is_page() && $parent_id ) {  
      if ($parent_id != $frontpage_id) {  
        $breadcrumbs = array();  
        while ($parent_id) {  
          $page = get_page($parent_id);  
          if ($parent_id != $frontpage_id) {  
            $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));  
          }  
          $parent_id = $page->post_parent;  
        }  
        $breadcrumbs = array_reverse($breadcrumbs);  
        for ($i = 0; $i < count($breadcrumbs); $i++) {  
          echo $breadcrumbs[$i];  
          if ($i != count($breadcrumbs)-1) echo $delimiter;  
        }  
      }  
      if ($show_current == 1) {  
        if ($show_home_link == 1 || ($parent_id_2 != 0 && $parent_id_2 != $frontpage_id)) echo $delimiter;  
        echo $before . get_the_title() . $after;  
      }  
  
    } elseif ( is_tag() ) {  
      echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;  
  
    } elseif ( is_author() ) {  
      global $author;  
      $userdata = get_userdata($author);  
      echo $before . sprintf($text['author'], $userdata->display_name) . $after;  
  
    } elseif ( is_404() ) {  
      echo $before . $text['404'] . $after;  
  
    } elseif ( has_post_format() && !is_singular() ) {  
      echo get_post_format_string( get_post_format() );  
    }  
  
    if ( get_query_var('paged') ) {  
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';  
      echo __('Page') . ' ' . get_query_var('paged');  
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';  
    }  
  
    echo '</div><!-- .breadcrumbs -->';  
  
  }  
} // end dimox_breadcrumbs()  
?>