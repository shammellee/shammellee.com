<?php
require '../inc/config.php';

$HIDE_WORK = explode(':',getenv('HIDE_WORK'));

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class='no-js'> <!--<![endif]-->
  <head>
    <meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
    <title>Shammel Lee — Software Engineer + Product Designer</title>
    <meta name='description' content='Shammel Lee - Software Engineer + Product Designer' />
    <meta name='viewport' content='width=device-width, initial-scale=1, minimal-ui' />
    <meta name='apple-mobile-web-app-capable' content='yes' />
    <meta name='apple-mobile-web-app-title' content='Shammel Lee' />
    <meta name='apple-mobile-web-app-status-bar-style' content='black-translucent' />

    <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600' rel='stylesheet' type='text/css'>

    <link rel='stylesheet' href='<?= get_css("bootstrap.min.css") ?>'>
    <link rel='stylesheet' href='<?= get_css("bootstrap-theme.min.css") ?>'>
    <link rel='stylesheet' href='<?= get_css("main.css") ?>'>

    <script src='<?= get_js("vendor/modernizr-2.6.2-respond-1.1.0.min.js") ?>'></script>
  </head>
  <body>
    <!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
    <div class='container-fluid header'>
      <div class='container header_container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <h1 class='head'>Shammel Lee</h1>
            <h2 class='subhead'>Software Engineer<br />Product Designer</h2>
          </div>
        </div>
      </div>

      <span class='pull_tab pull_tab__header'>&nbsp;</span>
    </div>

    <div class='container work_section'>
      <div class='row'>
        <div class='col-md-10 col-md-offset-1'>
          <h2 class='section_title'>Selected Work</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7 col-md-offset-1">
          <img class="img-responsive image_set_image" src='<?= get_media("toolsummit_visual_design.png") ?>' alt='Web: Concept Tool Rental Site - Visual Design'>
          <img class="img-responsive image_set_image" src='<?= get_media("toolsummit_maps.png") ?>' alt='Web: Concept Tool Rental Site - Maps'>
          <img class="img-responsive image_set_image" src='<?= get_media("toolsummit_scenarios.png") ?>' alt='Web: Concept Tool Rental Site - Scenarios'>
          <img class="img-responsive image_set_image" src='<?= get_media("toolsummit_wireframes_landing_page.png") ?>' alt='Web: Concept Tool Rental Site - Landing Page Wireframe'>
        </div>
        <div class="col-md-3">
          <h3 class='project_title'>ToolSummit</h3>

          <p>
            A concept website for a tool rental site that lets users find power
            tools they can rent from others. The requirement was to add
            features that would be important and make the transaction process
            as smooth as possible.
          </p>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Product Design</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>OmniGraffle</li>
            <li class='project_tag'>Sketch</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("cinegram.gif") ?>' alt='Web: Movie Rating App Prototype' /></div>
        <div class='col-md-3'>
          <h3 class='project_title'>CineGram</h3>
          <p>
            A prototype for a movie rating app. The bar chart pulls data from
            an API every minute and updates the table below as well.
          </p>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Product Design</li>
            <li class='project_tag'>Development</li>
          </ul>

          <h4>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>OmniGraffle</li>
            <li class='project_tag'>Illustrator</li>
            <li class='project_tag'>Sketch</li>
            <li class='project_tag'>Framer</li>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Apache</li>
            <li class='project_tag'>PHP</li>
            <li class='project_tag'>Perl</li>
            <li class='project_tag'>MongoDB</li>
            <li class='project_tag'>jQuery</li>
            <li class='project_tag'>D3.js</li>
            <li class='project_tag'>GSAP</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><a href='<?= get_media("lotus_large.png") ?>' target='_blank'><img class='img-responsive' src='<?= get_media("lotus.png") ?>' alt='Mobile: App Prototype' /></a></div>
        <div class='col-md-3'>
          <h3 class='project_title'>Lotus</h3>
          <p>
             A prototype for a fashion trend app. Here, I focused on creating a
             simple and intuitive experience with a minimal UI.
          </p>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Product Design</li>
          </ul>

          <h4>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>OmniGraffle</li>
            <li class='project_tag'>Sketch</li>
            <li class='project_tag'>Illustrator</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("bow_and_drape_kiosk_frontend.gif") ?>' alt='Mobile: B&amp;D Kiosk' /></div>
        <div class='col-md-3'>
          <h3 class='project_title'>B&amp;D Kiosk Front-end</h3>
          <p>
            The front-end of the Bow &amp; Drape Customization Kiosk. Customers
            used this web app on an iPad to place orders. Since customers
            weren't tech-savvy, they preferred to customize their orders in
            person rather than customize from within the app. I added the
            ability for customers to take photos of their designs with the iPad
            from within the app. As a result, orders were created more
            accurately and there were fewer returns.  This allowed Bow &amp;
            Drape to increase profits during the holiday season.
          </p>

          <p>
            A few of the major challenges were reducing the photo's file size
            and correcting the photo's orientation. The size of the raw photos
            were so large, they would cause transactions to stall. I reduced
            the file size dramatically by lowering the image quality as well
            as scaling the image down. This led to transations being sent
            instantly.
          </p>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Product Design</li>
            <li class='project_tag'>Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>OmniGraffle</li>
            <li class='project_tag'>Illustrator</li>
            <li class='project_tag'>Sketch</li>
            <li class='project_tag'>Framer</li>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Pug</li>
            <li class='project_tag'>Stylus</li>
            <li class='project_tag'>Backbone.js</li>
            <li class='project_tag'>Marionette.js</li>
            <li class='project_tag'>jQuery</li>
            <li class='project_tag'>Lodash</li>
            <li class='project_tag'>Handlebars.js</li>
            <li class='project_tag'>Firebase</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("bow_and_drape_kiosk_backend.gif") ?>' alt='Web: B&amp;D Kiosk Back-end' /></div>
        <div class='col-md-3'>
          <h3 class='project_title'>B&amp;D Kiosk Back-end</h3>
          <p>
            The back-end of the Bow &amp; Drape Customization Kiosk. Employees
            used this system to monitor and process incoming orders in
            real-time. This allowed orders to be placed and received within an
            hour, which was crucial during the holiday season. Several
            microservices were built to handle things like email notifications,
            logging, and Slack bots.
          </p>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Product Design</li>
            <li class='project_tag'>Development</li>
          </ul>

          <h4>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>OmniGraffle</li>
            <li class='project_tag'>Illustrator</li>
            <li class='project_tag'>Sketch</li>
            <li class='project_tag'>Framer</li>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Pug</li>
            <li class='project_tag'>Stylus</li>
            <li class='project_tag'>Backbone.js</li>
            <li class='project_tag'>Marionette.js</li>
            <li class='project_tag'>jQuery</li>
            <li class='project_tag'>Lodash</li>
            <li class='project_tag'>Handlebars.js</li>
            <li class='project_tag'>Moment.js</li>
            <li class='project_tag'>Firebase</li>
            <li class='project_tag'>Twilio</li>
            <li class='project_tag'>NGINX</li>
            <li class='project_tag'>PHP</li>
            <li class='project_tag'>AWS EC2/S3/CloudFront</li>
            <li class='project_tag'>Ansible</li>
          </ul>
        </div>
      </div>

      <hr />

      <?php if(!in_array('edu',$HIDE_WORK)): ?>
      <div class='row'>
        <div class='col-md-7 col-md-offset-1'>
          <!--video only autoplays on mobile with muted and playsinline attributes-->
          <video class='img-responsive' width='650' height='488' autoplay controls loop muted playsinline alt='Web App: Cloud File Manager'>
            <source src='<?= get_media("fm.mp4") ?>' type='video/mp4'>
          </video>
        </div>
        <div class='col-md-3'>
          <h3 class='project_title'>Cloud File Manager App</h3>
          <p>
          </p>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Product Design</li>
            <li class='project_tag'>Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Pug</li>
            <li class='project_tag'>Stylus</li>
            <li class='project_tag'>Backbone.js</li>
            <li class='project_tag'>jQuery</li>
            <li class='project_tag'>Underscore.js</li>
            <li class='project_tag'>Handlebars.js</li>
            <li class='project_tag'>Apache</li>
            <li class='project_tag'>PHP</li>
            <li class='project_tag'>MySQL</li>
            <li class='project_tag'>AWS S3</li>
          </ul>
        </div>
      </div>

      <hr />
      <?php endif; ?>

      <?php if(!in_array('edu',$HIDE_WORK)): ?>
      <div class='row'>
        <div class='col-md-7 col-md-offset-1'>
          <!--video only autoplays on mobile with muted and playsinline attributes-->
          <video class='img-responsive' width='650' height='488' autoplay controls loop muted playsinline alt='Motion Design: Financial Recruiting App Onboarding Site'>
            <source src='<?= get_media("merrillvision_onboarding.mp4") ?>' type='video/mp4'>
          </video>
        </div>
        <div class='col-md-3'>
          <h3 class='project_title'>Onboarding Site</h3>
          <p>
          </p>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Product Design</li>
            <li class='project_tag'>Development</li>
            <li class='project_tag'>Motion Design</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Illustrator</li>
            <li class='project_tag'>After Effects</li>
            <li class='project_tag'>Logic Pro</li>
          </ul>
        </div>
      </div>

      <hr />
      <?php endif; ?>

      <?php if(!in_array('edu',$HIDE_WORK)): ?>
      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("vm_ubs.png") ?>' alt='Web App: Financial Recruiting App' /></div>
        <div class='col-md-3'>
          <h3 class='project_title'>Financial Recruiting Platform</h3>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Product Design</li>
            <li class='project_tag'>Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Illustrator</li>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Pug</li>
            <li class='project_tag'>Stylus</li>
            <li class='project_tag'>Backbone.js</li>
            <li class='project_tag'>jQuery</li>
            <li class='project_tag'>Underscore.js</li>
            <li class='project_tag'>D3.js</li>
            <li class='project_tag'>Apache</li>
            <li class='project_tag'>PHP</li>
            <li class='project_tag'>MySQL</li>
          </ul>
        </div>
      </div>

      <hr />
      <?php endif; ?>

      <?php if(!in_array('bbx',$HIDE_WORK)): ?>
      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><a href='projects/amex/costco/business.html' rel='nofollow' target='_blank'><img class='img-responsive' src='<?= get_media("amex_costco.png") ?>' alt='Web: AmEx Landing Page' /></a></div>
        <div class='col-md-3'>
          <h3 class='project_title'>AmEx Landing Page</h3>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Front-End Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Pug</li>
            <li class='project_tag'>Stylus</li>
            <li class='project_tag'>jQuery</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><a href='projects/amex/cross_sell/index.html' rel='nofollow' target='_blank'><img class='img-responsive' src='<?= get_media("amex_cross_sell.png") ?>' alt='Web: AmEx Landing Page' /></a></div>
        <div class='col-md-3'>
          <h3 class='project_title'>AmEx Landing Page</h3>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Front-End Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Pug</li>
            <li class='project_tag'>Stylus</li>
            <li class='project_tag'>jQuery</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><a href='projects/amex/resource_center/index.html' rel='nofollow' target='_blank'><img class='img-responsive' src='<?= get_media("amex_resource_center.png") ?>' alt='Web: AmEx Microsite' /></a></div>
        <div class='col-md-3'>
          <h3 class='project_title'>AmEx Microsite</h3>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Front-End Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Pug</li>
            <li class='project_tag'>Stylus</li>
            <li class='project_tag'>jQuery</li>
          </ul>
        </div>
      </div>

      <hr />
      <?php endif; ?>

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><a href='projects/concepts/001.php' target='_blank'><img class='img-responsive' src='<?= get_media("app_concept_01.png") ?>' alt='Web: Real Estate App Prototype' /></a></div>
        <div class='col-md-3'>
          <h3 class='project_title'>Real Estate App Prototype</h3>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Product Design</li>
            <li class='project_tag'>Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Illustrator</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'>
          <a href='http://shelleygoldberg.com/' target='_blank'>
            <video class='img-responsive' width='650' height='488' autoplay controls loop muted playsinline alt='Web: Shelley Goldberg Site'> <!--video only autoplays on mobile with muted and playsinline attributes-->
              <source src='<?= get_media("shelley_goldberg.mp4") ?>' type='video/mp4'>
            </video>
          </a>
        </div>
        <div class='col-md-3'>
          <h3 class='project_title'>Shelley Goldberg Site</h3>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Development</li>
            <li class='project_tag'>CMS Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>ActionScript</li>
            <li class='project_tag'>PHP</li>
            <li class='project_tag'>MySQL</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("theten.gif") ?>' alt='Web: theTEN Site' /></div>
        <div class='col-md-3'>
          <h3 class='project_title'>theTEN Site</h3>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Retouching</li>
            <li class='project_tag'>Design</li>
            <li class='project_tag'>Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Photoshop</li>
            <li class='project_tag'>Illustrator</li>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Pug</li>
            <li class='project_tag'>Stylus</li>
            <li class='project_tag'>jQuery</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("levinson_tractenberg.jpg") ?>' alt='Web: Levinson Tractenberg Site' /></div>
        <div class='col-md-3'>
          <h3 class='project_title'>Levinson Tractenberg Site</h3>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Pug</li>
            <li class='project_tag'>Stylus</li>
            <li class='project_tag'>jQuery</li>
            <li class='project_tag'>GSAP.js</li>
            <li class='project_tag'>PHP</li>
            <li class='project_tag'>MySQL</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("keggy.jpg") ?>' alt='Web: Keggy Site' /></div>
        <div class='col-md-3'>
          <h3 class='project_title'>Keggy Site</h3>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Retouching</li>
            <li class='project_tag'>Design</li>
            <li class='project_tag'>Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Photoshop</li>
            <li class='project_tag'>Illustrator</li>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Pug</li>
            <li class='project_tag'>Stylus</li>
            <li class='project_tag'>jQuery</li>
            <li class='project_tag'>PHP</li>
            <li class='project_tag'>MySQL</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("helen_wang.jpg") ?>' alt='Web: Helen Wang Site' /></div>
        <div class='col-md-3'>
          <h3 class='project_title'>Helen Wang Site</h3>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Retouching</li>
            <li class='project_tag'>Design</li>
            <li class='project_tag'>Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Photoshop</li>
            <li class='project_tag'>Illustrator</li>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Pug</li>
            <li class='project_tag'>Stylus</li>
            <li class='project_tag'>jQuery</li>
            <li class='project_tag'>GSAP.js</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("peter_han.jpg") ?>' alt='Web: Peter Han Site' /></div>
        <div class='col-md-3'>
          <h3 class='project_title'>Peter Han Site</h3>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Design</li>
            <li class='project_tag'>Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Illustrator</li>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Pug</li>
            <li class='project_tag'>Stylus</li>
            <li class='project_tag'>jQuery</li>
            <li class='project_tag'>GSAP.js</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("grand_large.jpg") ?>' alt='Web: Grand Large Site' /></div>
        <div class='col-md-3'>
          <h3 class='project_title'>Grand Large Site</h3>

          <h4 class='project_subtitle'>Role</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Design</li>
            <li class='project_tag'>Development</li>
            <li class='project_tag'>CMS Development</li>
          </ul>

          <h4 class='project_subtitle'>Software</h4>
          <ul class='project_tags'>
            <li class='project_tag'>Illustrator</li>
            <li class='project_tag'>CoffeeScript</li>
            <li class='project_tag'>Pug</li>
            <li class='project_tag'>Stylus</li>
            <li class='project_tag'>jQuery</li>
            <li class='project_tag'>PHP</li>
            <li class='project_tag'>MySQL</li>
          </ul>
        </div>
      </div>

      <span class='pull_tab pull_tab__work'>&nbsp;</span>
    </div>

    <div class='container-fluid blurbs'>
      <div class='container about_section'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <h2 class='section_title'>About</h2>
          </div>
        </div>
        <div class='row'>
          <div class='col-md-5 col-md-offset-1'>
            <img class='img-responsive' src='<?= get_media("experience_map.jpg") ?>' alt='Experience Map' />
          </div>
          <div class="image_spacer"></div>
          <div class='col-md-5'>
            <p>
              Engineering is linked with “left brain” thinking and design, with
              “right brain” thinking. However, the best solution to any problem
              comes from combining both forms of thinking. A designer who is
              adept in engineering can create more thorough, feasible solutions
              for that product. Similarly, an engineer with a design background
              will be able to create a more intuitive and appealing product.
            </p>
            <p>
              Having a deep understanding of both form and function and being
              able to speak the language of both the designer and the engineer
              allows products to be implemented exactly as they were
              envisioned, thereby eliminating the communication barrier that
              typically exists when building products. This prevents
              information from being misinterpreted and results in clear,
              consistent products that delight users.
            </p>
          </div>
        </div>
      </div>

      <span class='pull_tab pull_tab__about'>&nbsp;</span>
    </div>

    <div class='container-fluid blurbsFooter'>
      <div class='container contact_section'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <h2 class='section_title'>Info</h2>
          </div>
        </div>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <ul class='list-inline infoLinks'>
              <li><a class='btn btn-primary btn-sm' rel='nofollow' href='/resume' target='_blank'>Resumé</a></li>
              <li><a class='btn btn-primary btn-sm' rel='nofollow' href='http://github.shammellee.com' target='_blank'>GitHub</a></li>
              <li><a class='btn btn-primary btn-sm' rel='nofollow' href='http://stackoverflow.com/users/3682217/shammel-lee' target='_blank'>Stack Overflow</a></li>
              <li><a class='btn btn-primary btn-sm' rel='nofollow' href='http://dribbble.shammellee.com' target='_blank'>Dribbble</a></li>
              <li><a class='btn btn-primary btn-sm' rel='nofollow' href='http://linkedin.shammellee.com' target='_blank'>LinkedIn</a></li>
              <li><a class='btn btn-primary btn-sm' rel='nofollow' href='http://twitter.shammellee.com' target='_blank'>Twitter</a></li>
              <li><a class='btn btn-primary btn-sm' href='mailt&#111;&#58;%&#54;8&#111;%&#54;&#67;le%&#55;&#50;&#64;s&#104;%61m&#109;ell&#37;65&#37;65&#46;co&#109;'>&#69;m&#97;il</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script src='https://code.jquery.com/jquery-1.11.0.min.js' integrity='sha256-spTpc4lvj4dOkKjrGokIrHkJgNA0xMS98Pw9N7ir9oI=' crossorigin='anonymous'></script>
    <script src='<?= get_js("vendor/bootstrap.min.js") ?>'></script>
    <script src='<?= get_js("main.js") ?>'></script>
    <script>
      $(function()
      {
        $.getJSON('http://freegeoip.net/json/',function(result){
          if(result && result.country_code !== 'US' && result.country_code !== 'CA')
          {
            console.log(result);
            alert('This site is limited to viewers in the United States and Canada.\n\nViewer Location: ' + result.country_name);
          }
        });
      });
    </script>

    <!-- Google Analytics -->
    <?php require '../inc/google_analytics.html'; ?>

    <!-- StatCounter -->
    <?php require '../inc/stat_counter.html'; ?>
  </body>
</html>
