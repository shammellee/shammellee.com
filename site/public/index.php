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

    <link rel='shortcut icon' type='image/x-icon' href='<?= get_media("favicon.ico") ?>' />
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600' rel='stylesheet' type='text/css'>

    <link rel='stylesheet' href='<?= get_css("bootstrap.min.css") ?>'>
    <link rel='stylesheet' href='<?= get_css("bootstrap-theme.min.css") ?>'>
    <link rel='stylesheet' href='<?= get_css("main.css") ?>'>

    <script src='<?= get_js("vendor/modernizr-2.6.2-respond-1.1.0.min.js") ?>'></script>
  </head>
  <body>
    <!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
    <div class='container-fluid title'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <h1 class='head'>SHAMMEL LEE</h1>
            <h2 class='subhead'>SOFTWARE ENGINEER<br />PRODUCT DESIGNER</h2>
          </div>
        </div>
      </div>
    </div>

    <div class='container-fluid blurbs'>
      <div class='container about_section'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <h2>About</h2>
          </div>
        </div>
        <div class='row'>
          <div class='col-md-5 col-md-offset-1'>
          <div class=''><img class='img-responsive' src='<?= get_media("experience_map.jpg") ?>' alt='Experience Map' /></div>
            <br />
          </div>
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

      <span class='about_pull_tab'>&nbsp;</span>
    </div>

    <div class='container work_section web'>
      <div class='row'>
        <div class='col-md-10 col-md-offset-1'>
          <h2>Selected Work</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7 col-md-offset-1">
          <img class="img-responsive image_set_image" src='<?= get_media("toolsummit_visual_design.png") ?>' alt='Web: Concept Tool Rental App - Visual Design'>
          <img class="img-responsive image_set_image" src='<?= get_media("toolsummit_maps.png") ?>' alt='Web: Concept Tool Rental App - Maps'>
          <img class="img-responsive image_set_image" src='<?= get_media("toolsummit_scenarios.png") ?>' alt='Web: Concept Tool Rental App - Scenarios'>
          <img class="img-responsive image_set_image" src='<?= get_media("toolsummit_wireframes_landing_page.png") ?>' alt='Web: Concept Tool Rental App - Landing Page Wireframe'>
        </div>
        <div class="col-md-3">
          <h3>Concept Tool Rental Site</h3>
          <ul>
            <li>Product Design</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("cinegram.gif") ?>' alt='Web: Movie Rating App Prototype' /></div>
        <div class='col-md-3'>
          <h3>Movie Rating App</h3>
          <ul>
            <li>Product Design</li>
            <li>Development</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><a href='<?= get_media("lotus_large.png") ?>' target='_blank'><img class='img-responsive' src='<?= get_media("lotus.png") ?>' alt='Mobile: App Prototype' /></a></div>
        <div class='col-md-3'>
          <h3>Fashion Trend App</h3>
          <ul>
            <li>Product Design</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("bow_and_drape_kiosk_frontend.gif") ?>' alt='Mobile: B&amp;D Kiosk' /></div>
        <div class='col-md-3'>
          <h3>B&amp;D Kiosk Front-end</h3>
          <ul>
            <li>Product Design</li>
            <li>Development</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("bow_and_drape_kiosk_backend.gif") ?>' alt='Web: B&amp;D Kiosk Back-end' /></div>
        <div class='col-md-3'>
          <h3>B&amp;D Kiosk Back-end</h3>
          <ul>
            <li>Product Design</li>
            <li>Development</li>
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
          <h3>Cloud File Manager App</h3>
          <ul>
            <li>Product Design</li>
            <li>Development</li>
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
          <h3>Onboarding Website</h3>
          <ul>
            <li>Product Design</li>
            <li>Development</li>
            <li>Motion Design</li>
          </ul>
        </div>
      </div>

      <hr />
      <?php endif; ?>

      <?php if(!in_array('edu',$HIDE_WORK)): ?>
      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("vm_ubs.png") ?>' alt='Web App: Financial Recruiting App' /></div>
        <div class='col-md-3'>
          <h3>Financial Recruiting Platform</h3>
          <ul>
            <li>Product Design</li>
            <li>Development</li>
          </ul>
        </div>
      </div>

      <hr />
      <?php endif; ?>

      <?php if(!in_array('bbx',$HIDE_WORK)): ?>
      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><a href='projects/amex/costco/business.html' rel='nofollow' target='_blank'><img class='img-responsive' src='<?= get_media("amex_costco.png") ?>' alt='Web: AmEx Landing Page' /></a></div>
        <div class='col-md-3'>
          <h3>AmEx Landing Page</h3>
          <ul>
            <li>Front-End Development</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><a href='projects/amex/cross_sell/index.html' rel='nofollow' target='_blank'><img class='img-responsive' src='<?= get_media("amex_cross_sell.png") ?>' alt='Web: AmEx Landing Page' /></a></div>
        <div class='col-md-3'>
          <h3>AmEx Landing Page</h3>
          <ul>
            <li>Front-End Development</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><a href='projects/amex/resource_center/index.html' rel='nofollow' target='_blank'><img class='img-responsive' src='<?= get_media("amex_resource_center.png") ?>' alt='Web: AmEx Microsite' /></a></div>
        <div class='col-md-3'>
          <h3>AmEx Microsite</h3>
          <ul>
            <li>Front-End Development</li>
          </ul>
        </div>
      </div>

      <hr />
      <?php endif; ?>

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><a href='projects/concepts/001.php' target='_blank'><img class='img-responsive' src='<?= get_media("app_concept_01.png") ?>' alt='Web: Real Estate App Prototype' /></a></div>
        <div class='col-md-3'>
          <h3>Real Estate App Prototype</h3>
          <ul>
            <li>Product Design</li>
            <li>Development</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'>
          <a href='http://shelleygoldberg.com/' target='_blank'>
            <video class='img-responsive' width='650' height='488' autoplay controls loop muted playsinline alt='Web: Shelley Goldberg'> <!--video only autoplays on mobile with muted and playsinline attributes-->
              <source src='<?= get_media("shelley_goldberg.mp4") ?>' type='video/mp4'>
            </video>
          </a>
        </div>
        <div class='col-md-3'>
          <h3>Shelley Goldberg Website</h3>
          <ul>
            <li>Development</li>
            <li>CMS Development</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("theten.gif") ?>' alt='Web: theTEN' /></div>
        <div class='col-md-3'>
          <h3>theTEN Website</h3>
          <ul>
            <li>Retouching</li>
            <li>Design</li>
            <li>Development</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("levinson_tractenberg.jpg") ?>' alt='Web: Levinson Tractenberg' /></div>
        <div class='col-md-3'>
          <h3>Levinson Tractenberg Website</h3>
          <ul>
            <li>Development</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("keggy.jpg") ?>' alt='Web: Keggy' /></div>
        <div class='col-md-3'>
          <h3>Keggy Website</h3>
          <ul>
            <li>Retouching</li>
            <li>Design</li>
            <li>Development</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("helen_wang.jpg") ?>' alt='Web: Helen Wang' /></div>
        <div class='col-md-3'>
          <h3>Helen Wang Website</h3>
          <ul>
            <li>Retouching</li>
            <li>Design</li>
            <li>Development</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("peter_han.jpg") ?>' alt='Web: Peter Han' /></div>
        <div class='col-md-3'>
          <h3>Peter Han Website</h3>
          <ul>
            <li>Design</li>
            <li>Development</li>
          </ul>
        </div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-7 col-md-offset-1'><img class='img-responsive' src='<?= get_media("grand_large.jpg") ?>' alt='Web: Grand Large' /></div>
        <div class='col-md-3'>
          <h3>Grand Large Website</h3>
          <ul>
            <li>Design</li>
            <li>Development</li>
            <li>CMS Development</li>
          </ul>
        </div>
      </div>
    </div>

    <div class='container-fluid blurbsFooter'>
      <div class='container'>
        <ul class='list-inline text-center infoLinks'>
          <li><a class='btn btn-primary btn-sm' rel='nofollow' href='http://github.shammellee.com' target='_blank'>GitHub</a></li>
          <li><a class='btn btn-primary btn-sm' rel='nofollow' href='http://stackoverflow.com/users/3682217/shammel-lee' target='_blank'>Stack Overflow</a></li>
          <li><a class='btn btn-primary btn-sm' rel='nofollow' href='http://dribbble.shammellee.com' target='_blank'>Dribbble</a></li>
          <li><a class='btn btn-primary btn-sm' rel='nofollow' href='/resume' target='_blank'>Resumé</a></li>
          <li><a class='btn btn-primary btn-sm' rel='nofollow' href='http://linkedin.shammellee.com' target='_blank'>LinkedIn</a></li>
          <li><a class='btn btn-primary btn-sm' rel='nofollow' href='http://twitter.shammellee.com' target='_blank'>Twitter</a></li>
          <li><a class='btn btn-primary btn-sm' href='mailt&#111;&#58;%&#54;8&#111;%&#54;&#67;le%&#55;&#50;&#64;s&#104;%61m&#109;ell&#37;65&#37;65&#46;co&#109;'>&#69;m&#97;il</a></li>
        </ul>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js" integrity="sha256-spTpc4lvj4dOkKjrGokIrHkJgNA0xMS98Pw9N7ir9oI=" crossorigin="anonymous"></script>
    <script src='<?= get_js("vendor/bootstrap.min.js") ?>'></script>
    <script src='<?= get_js("main.js") ?>'></script>
    <script>
      $(function()
      {
        $.getJSON('http://freegeoip.net/json/',function(result){
          if(result && result.country_code !== 'US')
          {
            alert('This site is limited to viewers in the United States.');
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
