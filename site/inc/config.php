<?php
error_reporting(0);

define('DS',DIRECTORY_SEPARATOR);
define('STATIC_ASSET_PATH','http://static.shammellee.com');
define('CSS_ASSET_VERSION','20170415_005619');
define('DOC_ASSET_VERSION','20170315_044001');
define('JS_ASSET_VERSION','20170310_114340');
define('MEDIA_ASSET_VERSION','20170310_114340');
define('CSS_PATH',STATIC_ASSET_PATH . '/css/' . CSS_ASSET_VERSION);
define('DOC_PATH',STATIC_ASSET_PATH . '/docs/' . DOC_ASSET_VERSION);
define('JS_PATH',STATIC_ASSET_PATH . '/js/' . JS_ASSET_VERSION);
define('MEDIA_PATH',STATIC_ASSET_PATH . '/media/' . MEDIA_ASSET_VERSION);

function get_css($css)
{
  return CSS_PATH . "/$css";
}

function get_doc($doc)
{
  return DOC_PATH . "/$doc";
}

function get_js($js)
{
  return JS_PATH . "/$js";
}

function get_media($image)
{
  return MEDIA_PATH . "/$image";
}
