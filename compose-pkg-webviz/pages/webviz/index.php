<?php

use \system\classes\Core;
use \system\classes\Configuration;

$hostname = Core::getSetting('webviz_hostname', 'webviz');
if(strlen($hostname) < 2){
  $hostname = Core::getBrowserHostname();
}
$port = Core::getSetting('webviz_port', 'webviz');
$url = sprintf('http://%s:%s/', $hostname, $port);

$bridgeHost = Core::getSetting('ros_hostname', 'webviz');
$bridgePort = Core::getSetting('ros_port', 'webviz');

if(strlen($bridgeHost) == 0 || strlen($bridgePort) == 0){
  $bridgeUrl = "";
} else {
  $bridgeUrl = sprintf('ws://%s:%s/', $bridgeHost, $bridgePort);
}

?>

<style type="text/css">
    #page_container{
      min-width: 100%;
    }

    ._ctheme_content {
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        border-top: 1px solid black;
        border-left: 1px solid black;
    }

    #webviz_iframe {
        width: 100%;
        height: 100%;
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }
</style>

<iframe
  id="webviz_iframe"
  src="<?php 
       if (strlen($bridgeUrl) > 0) {
           echo $url . "?websocket=" . $bridgeUrl;
       } else {
           echo $url . "?websocket=" . $bridgeUrl;
       }?>"
  frameborder="0"
  scrolling="yes"
></iframe>
