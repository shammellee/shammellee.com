<?php
error_reporting(0);

define('DEBUG_MODE',false);
define('STATIC_ASSET_PATH',DEBUG_MODE ? '' : 'http://static.shammellee.com');
define('CSS_ASSET_VERSION',DEBUG_MODE ? '' : '/' . '20170417_183626');
define('DOC_ASSET_VERSION',DEBUG_MODE ? '' : '/' . '20170415_020648');
define('JS_ASSET_VERSION',DEBUG_MODE ? '' : '/' . '20170310_114340');
define('MEDIA_ASSET_VERSION',DEBUG_MODE ? '' : '/' . '20170310_114340');
define('CSS_PATH',STATIC_ASSET_PATH . '/css' . CSS_ASSET_VERSION);
define('DOC_PATH',STATIC_ASSET_PATH . '/docs' . DOC_ASSET_VERSION);
define('JS_PATH',STATIC_ASSET_PATH . '/js' . JS_ASSET_VERSION);
define('MEDIA_PATH',STATIC_ASSET_PATH . '/media' . MEDIA_ASSET_VERSION);

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
