<?php get_header() ?>

	<div id="container">
		<div id="content" role="main">

<?php the_post() ?>
			<?php erdt_epigraph() ?>
			<div id="post-<?php the_ID() ?>" <?php post_class() ?>>
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">
<?php the_content() ?>
                    <div style="height:23px;margin:10px 2px;overflow:hidden;"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink()) ?>&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;font&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe></div>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'erudite' ) . '&after=</div>') ?>
				</div>
				<div class="entry-meta">
					<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'erudite' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></span>
					<span class="meta-sep">|</span>
					<span class="author vcard"><?php printf( __( 'By %s', 'erudite' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'erudite' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
					<span class="meta-sep">|</span>
					<span class="cat-links"><?php printf( __( 'Posted in %s', 'erudite' ), get_the_category_list(', ') ) ?></span>
					<span class="meta-sep">|</span>
					<?php the_tags( __( '<span class="tag-links">Tagged ', 'erudite' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
<?php edit_post_link( __( 'Edit', 'erudite' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'erudite' ), __( 'Comments (1)', 'erudite' ), __( 'Comments (%)', 'erudite' ) ) ?></span>
				</div>
			</div><!-- .post -->

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&larr;</span> %title' ) ?></div>
				<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&rarr;</span>' ) ?></div>
			</div>

<?php comments_template() ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>