<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<style type="text/css">
  /* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
  color: #9d0e6b;
}
a {
  color: #9d0e6b;
  text-decoration: underline;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  padding-bottom: 20px;
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 100%;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}
.jumbotron p {
  font-size: 18px;
}

/* Supporting marketing content */
.marketing {
  padding: 40px 0;
}
.marketing p + h4 {
  padding-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
    padding: 15px;
    padding: 15px !important;
    max-height: 300px;
  }
  .col-md-4 {
  }
  button {
    background: #9d0e6b !important;
    border-color: #751052 !important;
  }
  h1 {
    font-size: 50px !important;
  }
  .jumbotron img {
    height: 200px;
  }
  .date {

  }
  .row img {
    cursor: pointer;

  }
  .row-event {
    cursor: pointer;
    padding-bottom: 35px;
    border-top: 1px solid #eee;
    padding-top: 10px;
    width:100%;
  }
  .row-event:hover {
    background: #eee;
  }

  .noselect {
    -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
    -khtml-user-select: none; /* Konqueror HTML */
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* Internet Explorer/Edge */
    user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome and Opera */
                                }
  }

</style>
<script>

  
    var rooms = {};
    var hideAllLine;
    var lineTo;

    var hasNumbers = function (t)
    {
      var regex = /\d/g;
      return regex.test(t);
    }  

    var showMultipleLine = function(roomArray) {
      hideAllLine(lineTo);
      var strArray = roomArray.split("+");
      console.log(strArray);
      var roomsActive = [];

      $.each(strArray, function( index, value ) {
          //$(rooms[value]).trigger('click');
          $(lineTo['lineTo'+value]).fadeIn(1000);
          $(rooms[value]).attr({'fill': '#830051'});

          if (value.indexOf('Sala Daeng') > -1) {
              $(lineTo['lineToSaladaeng']).fadeIn(1000);
              $(rooms['Saladaeng']).attr({'fill': '#830051'});

          }

          if (hasNumbers(value)) {
            console.log('number');
            for (var i = 1; i <= 5; i++) {
                  if (value.indexOf(i) > -1) {
                    console.log(i);
                    $(lineTo['lineToCrowne_'+i]).fadeIn(1000);
                    $(rooms['Crowne_'+i]).attr({'fill': '#830051'});
                    roomsActive.push(i);

                  } 
            }

          }
      });
      if (roomsActive.length == 2) {
          for (var i = roomsActive[0]+1; i <= roomsActive[1]-1; i++) {
            $(lineTo['lineToCrowne_'+i]).fadeIn(1000);
            $(rooms['Crowne_'+i]).attr({'fill': '#830051'});
          }

      }
    }

    var clearColor = function () {
        $.each(rooms, function(index, value) {
          $(value).attr({'fill': '#F0C9DF'});
        });
    }

    window.onload=function() {

      $(document).ready(function () {

      // Get the Object by ID
      var a = document.getElementById("svgObject");
      // Get the SVG document inside the Object tag
      var svgDoc = a.contentDocument;
      // Get one of the SVG items by ID;
      //var svgItem = svgDoc.getElementById("svgItem");
      var svgItem = $(svgDoc).find('svg').find('g');

      console.log(svgItem);
      if (typeof svgItem[1] == "undefined") {
        $('body').hide();
        location.reload();
      }
      // Set the colour to something else
      //svgItem.setAttribute("fill", "lime");
      lineTo = {};
      lineTo['lineToBar'] = $(svgItem[0]).find('polyline');
      lineTo['lineToLumpini'] = $(svgItem[1]);
      lineTo['lineToCrowne_5'] = $(svgItem[2]);
      lineTo['lineToCrowne_4'] = $(svgItem[3]);
      lineTo['lineToCrowne_3'] = $(svgItem[4]);
      lineTo['lineToCrowne_2'] = $(svgItem[5]);
      lineTo['lineToCrowne_1'] = $(svgItem[6]);
      lineTo['lineToSaladaeng'] = $(svgItem[9]);
      lineTo['lineToSilom'] = $(svgItem[10]).find('polyline');
      lineTo['lineToSathorn'] = $(svgItem[11]);

      hideAllLine = function (lineTo) {
        // Hide all navigator
        $.each(lineTo, function(index, value) {
          value.hide();
        });
        clearColor()
      }


      hideAllLine(lineTo);

      var roomsTmp = $(svgItem[0]).find('rect');
      var roomsTmp2 = $(svgItem[0]).find('polygon');
      rooms['Silom'] = roomsTmp[0];
      rooms['Saladaeng'] = roomsTmp[1];
      rooms['Sathorn'] = roomsTmp[2];
      rooms['Crowne_1'] = roomsTmp[3];
      rooms['Crowne_2'] = roomsTmp[4];
      rooms['Crowne_3'] = roomsTmp[5];
      rooms['Crowne_4'] = roomsTmp[6];
      rooms['Crowne_5'] = roomsTmp[7];
      rooms['Lumpini'] = roomsTmp2[1];
      rooms['Bar'] = roomsTmp2[2];
      

      $(rooms['Lumpini']).attr({'fill': '#F0C9DF'});
      // Bind rooms click for show line   
      $.each(rooms, function(index, value) {
        $(rooms[index]).click(function () {
          //hideAllLine(lineTo);
          //$(this).attr({'fill': '#FF0000'});
          //lineTo['lineTo'+index].fadeIn(1000);
        });
      });


      });
    console.log('onload');
  };
</script>
</head>


<body>
<?php print $messages; ?>
    <div class="container">

      <div id="map" style="text-align:center">
        <object id="svgObject" data="sites/all/themes/bootstrap/templates/system/map6.svg" type="image/svg+xml" style="width:65em">
        Your browser doesn't support SVG
        </object>
      </div>


      <div class="marketing" style="height:45em; overflow:scroll;">
      <?php
        $events = node_load_multiple(array(), array('type' => 'event', 'status' => 1));
        $views = views_get_view_result('event_order', 'page');
        //dpm($views);
        foreach ($views as $key => $value) {
          $tmp_value = $value->_field_data['nid']['entity']
          ?>
          <div class="row active row-event noselect" onClick="showMultipleLine('<?php print $tmp_value->field_room_name['und'][0]['value'];?>');">
            <div class="col-md-2">
              <strong><?php print $tmp_value->field_event_subject['und'][0]['value'];?></strong>
            </div>
            <div class="col-md-3">
              <p><strong><?php print $tmp_value->field_room_name['und'][0]['value'];?></strong></p>
              <p>Start date: <?php print date('Y-m-d', (intval($tmp_value->field_event_start_date['und'][0]['value'])-25569)*86400);?></p>
              <p>Start time: <?php print $tmp_value->field_event_start_time_24_hour_ ['und'][0]['value'];?></p>
              <p>End time: <?php print $tmp_value->field_event_end_time_24_hour_['und'][0]['value'];?></p>
            </div>
            <div class="col-md-4">
              <?php print $tmp_value->title; ?>
            </div>
            <div class="col-md-3">
              <?php
                if (isset($tmp_value->field_image['und'][0]['uri'])) {
                  $file_url = file_create_url($tmp_value->field_image['und'][0]['uri']);
                }
                else {
                  $file_url = "sites/default/files/default_images/300px-No_image_available.svg_.png";
                }
              ?>
              <img src="<?php print $file_url;?>" width="100px" onClick="showMultipleLine('<?php print $tmp_value->field_room_name['und'][0]['value'];?>');">
            </div>
          </div>

          


          <?php
        }
      ?>

    </div> <!-- /container -->
      <div class="footer">
      <a href="home"><button type="button" class="btn btn-lg btn-primary">BACK TO MAIN PAGE</button></a>
      <a href="map"><button type="button" class="btn btn-lg btn-primary">GO TO HOTEL MAPS</button></a>
        
      </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
  <script>
  $ = jQuery;
  $(document).ready(function () {


    $('#row2').find('img').click(function () {
      $('.row').removeClass('active');
      $(this).addClass('active');

      $('.img-main').hide();
      $('#img2').show();
    });
    $('#row1').find('img').click(function () {
      $('.row').removeClass('active');
      $(this).addClass('active');

      $('.img-main').hide();
      $('#img1').show();
    });



  });

  </script>