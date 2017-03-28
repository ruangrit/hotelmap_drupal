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
    max-width: 730px;
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

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
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
  }
  .col-md-4 {
    text-align: center;
  }
  button {
    background: #9d0e6b !important;
    border-color: #751052 !important;
  }
  h1 {
    font-size: 50px !important;
  }
}

</style>
</head>


<body>

    <div class="container">
      <div class="jumbotron">
      <img src="http://bangkoklumpinipark.crowneplaza.com/uploads/images/logo/crowne-plaza-logo.png" alt="crowne-plaza-logo.png">
        <h1>WELCOME TO LUMPINI</h1>
        <p class="lead">Enjoy a delectable selection of creative creations, complemented by unrivalled, bird’s eye view of Bangkok.</p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <a href="event">
            <h4>TODAY'S EVENT</h4>
            <p>Touch here for all event information.</p>
            
          </a>


          <a href="#">
            <h4>LOCAL INFORMATION</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
          </a>
        </div>

        <div class="col-lg-6">
          <a href="map">
            <h4>HOTEL MAPS</h4>
            <p>Touch here for find your way around our hotel.</p>
          </a>
          <a href="#">
            <h4>HOTEL INFORMATION</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
          </a>
        </div>
      </div>

      <footer class="footer">

        <div class="row">
          <div class="col-md-4">
            <img src="sites/all/themes/bootstrap/templates/system/clock.png" width="64">
          </div>
          <div class="col-md-4">
            <img src="sites/all/themes/bootstrap/templates/system/thailand-flag-square-icon-64.png" width="64">
          </div>
          <div class="col-md-4">
            <img src="sites/all/themes/bootstrap/templates/system/cloud.png" width="64">
          </div>
        </div>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
  <?php
  $val = date('Y-m-d', (42768-25569)*86400);

  print_r($val);
  ?>
</html>