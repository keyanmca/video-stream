</div></div></div></div><!-- #main -->
<?php
global $options;
foreach ($options as $value) {
    if (get_option($value['id']) === FALSE) {
        $$value['id'] = $value['std'];
    } else {
        $$value['id'] = get_option($value['id']);
    }
}
?>
<div id="footer">
    <div id="colophon" >        
        <ul class="footer-link footer-link-left">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left Widget Area')) : ?>
                 
           
            <?php endif; ?>
            </ul>
            <ul class="footer-link footer-link-mid">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Middle Widget Area')) : ?>
                    <h3>Recent Posts</h3>
            <?php
                    $args = array(
                        'numberposts' => 5,
                        'offset' => 0,
                        'category' => 0,
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'include' => '',
                        'exclude' => '',
                        'meta_key' => '',
                        'meta_value' => '',
                        'post_type' => 'post',
                        'post_status' => 'draft, publish, future, pending, private',
                        'suppress_filters' => true);
                    $recent_posts = wp_get_recent_posts($args);
                    echo '<li><ul>';
                    foreach ($recent_posts as $recent) {
                        echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look ' . $recent["post_title"] . '" >' . $recent["post_title"] . '</a> </li> ';
                    }
                    echo '</ul></li>';
            ?>
            <?php endif; ?>
                </ul>
                <ul class="footer-connect footer-link-right">
                    <li>
                       <iframe style="width:80px;height: 25px;" src="//www.facebook.com/plugins/like.php?locale=&amp;layout=button_count&amp;href=<?php echo get_bloginfo('url'); ?>&amp;show_faces=false&amp;action=like" scrolling="no" frameborder="0"></iframe>                    </li>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right Widget Area')) : ?>
            <?php endif; ?>
                        <div class="clear"></div><li> <h3>Connect With Us</h3>

                        <ul>  <li>
                                <a href="<?php echo $wpc_twitter_url; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png"  alt="twitter" /><!--  twitter--></a>
                            </li>
                            <li>
                                <a href="<?php echo $wpc_facebook_url; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="facebook" /><!-- facebook--></a>
                            </li>
                            <li>
                                <a href="<?php echo $wpc_linkedin_url; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" alt="linkedin"  /><!-- linkedin--></a>
                            </li></ul></li>
                </ul>

            </div>
        </div>
        <div class="footer-nav clearfix">
            <div >
                <div class=" menu-nav" >   <ul class="floatleft footer-menu"><?php wp_list_pages('title_li='); ?></ul></div>
                <span class="floatright footer-copyright">Theme designed by <a href="http://www.apptha.com/wordpress/" target="_blank">Apptha Themes.</a></span>

            </div></div>

        <!-- #footer -->

        </div><!-- #wrapper -->

<?php
                        wp_footer();
?>
</div>
</body>
</html>
