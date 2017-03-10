<?php
error_reporting(0);

define('STATIC_ASSET_VERSION','20170310_114340');
define('STATIC_ASSET_PATH','http://static.shammellee.com/' . STATIC_ASSET_VERSION);
define('IMAGE_PATH',STATIC_ASSET_PATH . '/media');
define('CSS_PATH',STATIC_ASSET_PATH . '/css');
define('JS_PATH',STATIC_ASSET_PATH . '/js');
define('DOC_PATH',STATIC_ASSET_PATH . '/docs');

function get_media($image)
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
