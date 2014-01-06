<?php
/**
 * @file
 * Template to display an item in an Redia BAPPS RSS feed.
 *
 * Variables (see preproces function ding_redia_bapp_preprocess_views_view_row_rss__redia_bapp__feed):
 * $display_start: node creation date, in UNIX time
 * $display_end: UNIX timestamp. If news item, creation date + 14 days. If event item, the time the event begins
 * $cat_id: NOT IMPLEMENTED.
 * $image_path: complete path to image file. Value from list image field, with the chosen image style applied
 * $event_loc: location of the event (plain text)
 * $event_start = event start date, in UNIX time. NULL for news items
 * $event_end = event end date, in UNIX time. NULL for news items
 *
 */
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
    if (!empty($image_path)) {
      print '<redia-rss:media><redia-rss:item><redia-rss:url>' . $image_path . '</redia-rss:url></redia-rss:item></redia-rss:media>';
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