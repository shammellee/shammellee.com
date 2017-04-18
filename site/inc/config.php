<?php
define('HOST_ENVIRONMENT',getenv('HOST_ENVIRONMENT'));

if(getenv('HOST_ENVIRONMENT') === 'development')
{
  error_reporting(E_ALL);
}else
{
  error_reporting(0);
}

$static_assets =
[
  'css' =>
  [
    'version' => '20170417_200758'
  ]
  ,'doc' =>
  [
    'version' => '20170415_020648'
  ]
  ,'js' =>
  [
    'version' => '20170310_114340'
  ]
  ,'media' =>
  [
    'version' => '20170310_114340'
  ]
];

define('STATIC_ASSET_PATH',HOST_ENVIRONMENT === 'development' ? '' : 'http://static.shammellee.com');
define('CSS_ASSET_VERSION',HOST_ENVIRONMENT === 'development' ? '' : '/' . get_static_asset_version('css'));
define('DOC_ASSET_VERSION',HOST_ENVIRONMENT === 'development' ? '' : '/' . get_static_asset_version('doc'));
define('JS_ASSET_VERSION',HOST_ENVIRONMENT === 'development' ? '' : '/' . get_static_asset_version('js'));
define('MEDIA_ASSET_VERSION',HOST_ENVIRONMENT === 'development' ? '' : '/' . get_static_asset_version('media'));
define('CSS_PATH',STATIC_ASSET_PATH . '/css' . CSS_ASSET_VERSION);
define('DOC_PATH',STATIC_ASSET_PATH . '/docs' . DOC_ASSET_VERSION);
define('JS_PATH',STATIC_ASSET_PATH . '/js' . JS_ASSET_VERSION);
define('MEDIA_PATH',STATIC_ASSET_PATH . '/media' . MEDIA_ASSET_VERSION);

function get_static_asset_version($asset_key)
{
  global $static_assets;

  return array_key_exists($asset_key,$static_assets) ? $static_assets[$asset_key]['version'] : '';
}

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
