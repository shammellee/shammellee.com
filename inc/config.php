<?php
error_reporting(0);

define('STATIC_ASSET_PATH','http://d298l0sx0jg58a.cloudfront.net');
define('IMAGE_PATH',STATIC_ASSET_PATH . '/img');
define('CSS_PATH',STATIC_ASSET_PATH . '/css');
define('JS_PATH',STATIC_ASSET_PATH . '/js');
define('DOC_PATH',STATIC_ASSET_PATH . '/docs');

function get_image($image)
{
  return IMAGE_PATH . "/$image";
}

function get_css($css)
{
  return CSS_PATH . "/$css";
}

function get_js($js)
{
  return JS_PATH . "/$js";
}

function get_doc($doc)
{
  return DOC_PATH . "/$doc";
}
