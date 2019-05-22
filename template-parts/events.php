<?php 
/* Template Name: Event Page */ 
?>
<?php get_header(); ?>

<div class="homepage_video">
  <?php
  // Get the Video Fields
  $video_mp4 =  get_field('homepage_video'); // MP4 Field Name
  // Build the  Shortcode
  $attr =  array(
  'mp4'      => $video_mp4,
  'preload'  => 'auto',
  'loop'     => 'on',
  'autoplay' => 'on',
  'preload'  => 'auto'
  );

  // Display the Shortcode
  echo wp_video_shortcode(  $attr );
  ?>
</div>

<div class="event-intro">
  <!-- INTRO SECTION -->
  <div class="container event-section">
    <div class="rowEvent">
      <div class="cellEventIntro">
        <h3>Seattle Central Creative Academy Presents</h3>
        <h1>The Graduating Class Of 2019</h1>
      </div>
    </div>
  </div>
  <!-- END INTRO SECTION -->

  <!-- MAP SECTION -->
  <div class="container map">
    <div class="rowEvent">
    <!-- <div id="map" class="cellEvent red section-map" style = "width:100%; height:100%;"></div>-->
      <div class="cellEvent section-map" style="background-image: url(https://2018.portshowl.io/wp-content/themes/portshowlio18/img/map.jpg);">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.507347307381!2d-122.32377288437408!3d47.616268379185264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906accc351c149%3A0xdc1a5c338dd4395c!2sSeattle+Central+College!5e0!3m2!1sen!2sus!4v1526579163184" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
      </div>
      <div class="cellEvent event-section map-copy">
        <div class="event-dates">
          <h3>June 13th & 14th</h3>
          <p>6:00 - 9:00PM</p>

        </div>
        <h5 class="space-top">Seattle Central College<br>1701 Broadway Ave<br>Seattle, WA 98122</h5>
        <p class="space-top">The Creative Academy portshowlio show is located on the 5th floor of Seattle Central College. We are easily accessed from the Capitol Hill Lightrail station one block away, or the Seattle Street Car. You can also find paid parking in the lot.</p>
        <span class="buttonDirections">
          <div class="buttonWrapper">
          <strong><a href="https://www.google.com/maps/dir//47.6162684,-122.3215842/@47.616268,-122.321584,16z?hl=en-US" target="_blank">Directions</a></strong>
          </div>
        </span>
      </div>
    </div>
  </div>
  <!-- END MAP SECTION -->
</div>

<!-- DAY IN THE LIFE VIDEO -->
<div class="container event-lifevideo">
  <div class="row">
    <div class="cell event">
      <h3>A Day In The Life</h3>
      <div class="embed-container">
        <?php

        // get iframe HTML
        $iframe = get_field('life_video');


        // use preg_match to find iframe src
        preg_match('/src="(.+?)"/', $iframe, $matches);
        $src = $matches[1];


        // add extra params to iframe src
        $params = array(
            'controls'    => 1,
            'hd'        => 1,
            'autohide'    => 1
        );

        $new_src = add_query_arg($params, $src);

        $iframe = str_replace($src, $new_src, $iframe);


        // add extra attributes to iframe html
        $attributes = 'frameborder="0"';

        $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);


        // echo $iframe
        echo $iframe;

        ?>
      </div>
    </div>
  </div>
</div>
<!-- END DAY IN THE LIFE VIDEO -->

<!-- FLOOR PLANS -->
<div class="container event-floorplan">
  <div class="row">
    <div class="cell event">
      <h3>Event Floor Plans</h3>
      <img src="https://2018.portshowl.io/wp-content/uploads/2018/06/new_map.jpg"/>
    </div>
  </div>
</div>
<!-- END FLOOR PLANS -->
<?php get_footer(); ?>