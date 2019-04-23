<!-- start node--event.tpl.php template -->
<?php
// get current URL info to determine which layout to render...
$currentURL = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$currentURLarray = explode('/', $currentURL);
$urlArrayCountMinusThree = count($currentURLarray) -3;
$urlArrayCountMinusTwo = count($currentURLarray) -2;
$urlArrayCountMinusOne = count($currentURLarray) -1;
$lastURLsegment = $currentURLarray[$urlArrayCountMinusOne];
$secondToLastURLsegment = $currentURLarray[$urlArrayCountMinusTwo];
$thirdToLastURLsegment = $currentURLarray[$urlArrayCountMinusThree];
?>
<?php
if($secondToLastURLsegment == 'event' ||
  $thirdToLastURLsegment == 'event' ||
  $secondToLastURLsegment == "node" ||
  $thirdToLastURLsegment == "node"){
  ?>
    <?php

    /**
     * @file
     * Default theme implementation to display a node.
     *
     * Available variables:
     * - $title: the (sanitized) title of the node.
     * - $content: An array of node items. Use render($content) to print them all,
     *   or print a subset such as render($content['field_example']). Use
     *   hide($content['field_example']) to temporarily suppress the printing of a
     *   given element.
     * - $user_picture: The node author's picture from user-picture.tpl.php.
     * - $date: Formatted creation date. Preprocess functions can reformat it by
     *   calling format_date() with the desired parameters on the $created variable.
     * - $name: Themed username of node author output from theme_username().
     * - $node_url: Direct URL of the current node.
     * - $display_submitted: Whether submission information should be displayed.
     * - $submitted: Submission information created from $name and $date during
     *   template_preprocess_node().
     * - $classes: String of classes that can be used to style contextually through
     *   CSS. It can be manipulated through the variable $classes_array from
     *   preprocess functions. The default values can be one or more of the
     *   following:
     *   - node: The current template type; for example, "theming hook".
     *   - node-[type]: The current node type. For example, if the node is a
     *     "Blog entry" it would result in "node-blog". Note that the machine
     *     name will often be in a short form of the human readable label.
     *   - node-teaser: Nodes in teaser form.
     *   - node-preview: Nodes in preview mode.
     *   The following are controlled through the node publishing options.
     *   - node-promoted: Nodes promoted to the front page.
     *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
     *     listings.
     *   - node-unpublished: Unpublished nodes visible only to administrators.
     * - $title_prefix (array): An array containing additional output populated by
     *   modules, intended to be displayed in front of the main title tag that
     *   appears in the template.
     * - $title_suffix (array): An array containing additional output populated by
     *   modules, intended to be displayed after the main title tag that appears in
     *   the template.
     *
     * Other variables:
     * - $node: Full node object. Contains data that may not be safe.
     * - $type: Node type; for example, story, page, blog, etc.
     * - $comment_count: Number of comments attached to the node.
     * - $uid: User ID of the node author.
     * - $created: Time the node was published formatted in Unix timestamp.
     * - $classes_array: Array of html class attribute values. It is flattened
     *   into a string within the variable $classes.
     * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
     *   teaser listings.
     * - $id: Position of the node. Increments each time it's output.
     *
     * Node status variables:
     * - $view_mode: View mode; for example, "full", "teaser".
     * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
     * - $page: Flag for the full page state.
     * - $promote: Flag for front page promotion state.
     * - $sticky: Flags for sticky post setting.
     * - $status: Flag for published status.
     * - $comment: State of comment settings for the node.
     * - $readmore: Flags true if the teaser content of the node cannot hold the
     *   main body content.
     * - $is_front: Flags true when presented in the front page.
     * - $logged_in: Flags true when the current user is a logged-in member.
     * - $is_admin: Flags true when the current user is an administrator.
     *
     * Field variables: for each field instance attached to the node a corresponding
     * variable is defined; for example, $node->body becomes $body. When needing to
     * access a field's raw values, developers/themers are strongly encouraged to
     * use these variables. Otherwise they will have to explicitly specify the
     * desired field language; for example, $node->body['en'], thus overriding any
     * language negotiation rule that was previously applied.
     *
     * @see template_preprocess()
     * @see template_preprocess_node()
     * @see template_process()
     *
     * @ingroup themeable
     */
    ?>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

      <?php print $user_picture; ?>

      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <div class="submitted">
          <?php print $submitted; ?>
        </div>
      <?php endif; ?>

      <div class="content"<?php print $content_attributes; ?>>
        <?php print render($content['body']); ?>
      </div>

      <?php print render($content['links']); ?>

      <?php print render($content['comments']); ?>

    </div>

    <div class="title">
      <?php print $title; ?>
    </div>

    <div class="mainImage">
      <?php print render($content['field_main_image']); ?>
    </div>

    <div class="date">
      <?php print render($content['field_date']); ?>
    </div>

    <div class="location">
      <?php print render($content['field_location']); ?>
    </div>

    <div class="body">
      <?php print render($content['body']); ?>
    </div>

    <div class="agenda">
      <?php print render($content['field_agenda']); ?>
    </div>
<?php } else { ?>
<?php } ?>
  <?php

    /**
     * @file
     * Default theme implementation to display a node.
     *
     * Available variables:
     * - $title: the (sanitized) title of the node.
     * - $content: An array of node items. Use render($content) to print them all,
     *   or print a subset such as render($content['field_example']). Use
     *   hide($content['field_example']) to temporarily suppress the printing of a
     *   given element.
     * - $user_picture: The node author's picture from user-picture.tpl.php.
     * - $date: Formatted creation date. Preprocess functions can reformat it by
     *   calling format_date() with the desired parameters on the $created variable.
     * - $name: Themed username of node author output from theme_username().
     * - $node_url: Direct URL of the current node.
     * - $display_submitted: Whether submission information should be displayed.
     * - $submitted: Submission information created from $name and $date during
     *   template_preprocess_node().
     * - $classes: String of classes that can be used to style contextually through
     *   CSS. It can be manipulated through the variable $classes_array from
     *   preprocess functions. The default values can be one or more of the
     *   following:
     *   - node: The current template type; for example, "theming hook".
     *   - node-[type]: The current node type. For example, if the node is a
     *     "Blog entry" it would result in "node-blog". Note that the machine
     *     name will often be in a short form of the human readable label.
     *   - node-teaser: Nodes in teaser form.
     *   - node-preview: Nodes in preview mode.
     *   The following are controlled through the node publishing options.
     *   - node-promoted: Nodes promoted to the front page.
     *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
     *     listings.
     *   - node-unpublished: Unpublished nodes visible only to administrators.
     * - $title_prefix (array): An array containing additional output populated by
     *   modules, intended to be displayed in front of the main title tag that
     *   appears in the template.
     * - $title_suffix (array): An array containing additional output populated by
     *   modules, intended to be displayed after the main title tag that appears in
     *   the template.
     *
     * Other variables:
     * - $node: Full node object. Contains data that may not be safe.
     * - $type: Node type; for example, story, page, blog, etc.
     * - $comment_count: Number of comments attached to the node.
     * - $uid: User ID of the node author.
     * - $created: Time the node was published formatted in Unix timestamp.
     * - $classes_array: Array of html class attribute values. It is flattened
     *   into a string within the variable $classes.
     * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
     *   teaser listings.
     * - $id: Position of the node. Increments each time it's output.
     *
     * Node status variables:
     * - $view_mode: View mode; for example, "full", "teaser".
     * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
     * - $page: Flag for the full page state.
     * - $promote: Flag for front page promotion state.
     * - $sticky: Flags for sticky post setting.
     * - $status: Flag for published status.
     * - $comment: State of comment settings for the node.
     * - $readmore: Flags true if the teaser content of the node cannot hold the
     *   main body content.
     * - $is_front: Flags true when presented in the front page.
     * - $logged_in: Flags true when the current user is a logged-in member.
     * - $is_admin: Flags true when the current user is an administrator.
     *
     * Field variables: for each field instance attached to the node a corresponding
     * variable is defined; for example, $node->body becomes $body. When needing to
     * access a field's raw values, developers/themers are strongly encouraged to
     * use these variables. Otherwise they will have to explicitly specify the
     * desired field language; for example, $node->body['en'], thus overriding any
     * language negotiation rule that was previously applied.
     *
     * @see template_preprocess()
     * @see template_preprocess_node()
     * @see template_process()
     *
     * @ingroup themeable
     */
    ?>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

      <?php print $user_picture; ?>

      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <div class="submitted">
          <?php print $submitted; ?>
        </div>
      <?php endif; ?>

      <div class="content"<?php print $content_attributes; ?>>
        <?php print render($content['body']); ?>
      </div>

      <?php print render($content['links']); ?>

      <?php print render($content['comments']); ?>

    </div>

  <?php
  // create an array for the terms...
  $taxonomyTerms = array();
  // check the node's taxonomy terms to adjust content accordingly...
  $tags = field_view_field('node', $node, 'field_event_type');
  // 'field_event_type' is the machine name of the field in the content type that contains the taxonomy in this example
  foreach($tags["#items"] as $tag){
    $taxonomyTerms[] = $tag["taxonomy_term"]->name;
  }
  // if node uses specified term, add content...
  if( in_array('regional',$taxonomyTerms) ){
    print "This is a REGIONAL event.";
  }
  ?>

  <div class="eventDate">
    <?php
    $eventDate = field_get_items('node', $node, 'field_date');

    // get first date data...
    $date1 = date_create($eventDate[0]['value']);
    $day1 = date_format($date1, 'jS');
    $month1 = date_format($date1, 'F');

    // get second date data...
    $date2 = date_create($eventDate[0]['value2']);
    $day2 = date_format($date2, 'jS');
    $month2 = date_format($date2, 'F');

    print $month1.' '.$day1;
    // if start date and end date are not in the same month...
    if($month1 != $month2){
      print " - ".$month2.' '.$day2;
    }
    // else if dates are in the same month...
    elseif($month1 == $month2 && $day1 != $day2){
      print " - ".$day2;
    }
    // else one day event...
    else{
    }
    ?>
  </div>
  <div class="eventTime">
    <?php
    $time1 = date_format($date1, 'g:i A');
    print $time1;
    ?>
  </div>

  <?php if($title == 'About'){ ?>
    <h1 class="main-title">About Drupal</h1>
  <?php } else { ?>
    <p class="section-title">About Drupal</p>
  <?php } ?>

<?php
$url = $GLOBALS['base_url']; // grabs the site url
if( !empty($content['field_event_image']) ){
  $image = field_get_items('node', $node, 'field_event_image');
  $imageURI = $image[0]['uri']; // grab image URI
  $imageFileURL = explode('/', $imageURI); // break up URI to get filename
}
?>
<div style="background-image: url(<?php print $url.'/sites/default/files/images/event/'.$imageFileURL[4]; ?>);">
<!-- end node--event.tpl.php template -->
