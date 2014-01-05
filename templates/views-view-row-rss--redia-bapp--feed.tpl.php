<?php
/**
 * @file
 * Default view template to display a item in an RSS feed.
 *
 * @ingroup views_templates
 *
 */

$display_start = 0;
$display_end = 0;
$cat_id = 0;
$list_img = "dummyURL";
$event_loc = "dummyTEXT";
$event_start = 0;
$event_end = 0;
?>
  <item>
    <title><?php print $title; ?></title>
    <link><?php print $link; ?></link>
    <description><?php print $description; ?></description>
    <?php print $item_elements; ?>
    <?php
    if (isset($display_start)) {
      print '<redia-rss:display-starttime>' . $display_start . '</redia-rss:display-starttime>';
    }
    if (isset($display_end)) {
      print '<redia-rss:display-endtime>' . $display_end . '</redia-rss:display-endtime>';
    }
    if (isset($cat_id)) {
      print '<redia-rss:category-id>' . $cat_id . '</redia-rss:category-id>';
    }
    if (!empty($list_img)) {
      print '<redia-rss:media><redia-rss:item><redia-rss:url>' . $list_img . '</redia-rss:url></redia-rss:item></redia-rss:media>';
    }
    if (!empty($event_loc)) {
      print '<redia-rss:arrangement-location>' . $event_loc . '</redia-rss:arrangement-location>';
    }
    if (isset($event_start)) {
      print '<redia-rss:arrangement-starttime>' . $event_start . '</redia-rss:arrangement-starttime>';
    }
    if (isset($event_end)) {
      print '<redia-rss:arrangement-endtime>' . $event_end . '</redia-rss:arrangement-endtime>';
    }
    ?>
  </item>