<?php

function to_object($array){
  return json_decode(json_encode($array));
}

function get_site_name(){
  return SITE_NAME;
}

function get_version(){
  return '?v='.VERSION;
}

function now(){
  return date('Y-m-d H:i:s');
}

//Funcion para imprimir imagenes
function img($image,$class = null, $alt = null,$external=false){
  if($external){
    $the_img = '<img src="'.$image. get_version() .'" class="'.$class.'" alt="'.$alt.'">';
  }else{
    $the_img = '<img src="'.IMG.$image. get_version() .'" class="'.$class.'" alt="'.$alt.'">';
  }
return  $the_img;
}

//Funcion para imprimir imagenes con carga diferida
function lazy($image,$class = null, $alt = null, $external = null){
  if($external){
    $the_img = '<img alt="'.$alt.'" data-src="'.$image.get_version().'" class="'.$class .'"/>';
  }else{
    $the_img = '<img alt="'.$alt.'" data-src="'.IMG.$image.get_version().'" class="'.$class .'"/>';
  }
  return  $the_img;
}

//Imprime un array formateado
function print_array($array) {
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}


function the_ip() {
  if (isset($_SERVER)) { 
    if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) { 
     $ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; 
    } elseif (isset($_SERVER["HTTP_CLIENT_IP"])) { 
     $ip = $_SERVER["HTTP_CLIENT_IP"]; 
    } else { 
     $ip = $_SERVER["REMOTE_ADDR"]; 
    }
   } else { 
    if (getenv('HTTP_X_FORWARDED_FOR')) { 
     $ip = getenv('HTTP_X_FORWARDED_FOR'); 
    } elseif (getenv('HTTP_CLIENT_IP')) { 
     $ip = getenv('HTTP_CLIENT_IP'); 
    } else { 
     $ip = getenv('REMOTE_ADDR'); 
    }
   }
  
   if($ip=='::1') $ip='127.0.0.1';
   return $ip;
  }

  function to_code($code){
    highlight_string($code);
  }

  function the_url(){
    return URL;
  }

  function the_browser(){
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    return "<b>Tu navegador es</b>: " . $useragent;
  }
