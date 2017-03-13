<?php
require '../inc/config.php';
?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Shammel Lee — Resumé</title>
    <meta http-equiv="refresh" content="1;url=<?= get_doc("shammel_lee_resume.pdf") ?>">
    <meta name="description" content="Shammel Lee">
    <style type="text/css">
      html,body{background:#30333A;color:#B0B2B4;font:12px Helvetica,Arial,'sans-serif';}
      a:link,a:visited,a:hover,a:active{color:#B0B2B4;}
    </style>
  </head>
  <body>
    <h1>One moment&hellip;</h1>
    <p>Click <a href='<?= get_doc("shammel_lee_resume.pdf") ?>'>here</a> if you are not redirected within 5 seconds.</p>

    <!-- Google Analytics -->
    <?php require '../inc/google_analytics.html'; ?>

    <!-- StatCounter -->
    <?php require '../inc/stat_counter.html'; ?>
  </body>
</html>
