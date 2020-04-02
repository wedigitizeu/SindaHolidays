<?php
function current_page_url()
  
  {
    $request="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $url=str_replace("&","&amp",$request);
    return $url;
  }

?>