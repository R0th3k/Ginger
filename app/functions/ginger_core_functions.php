<?php

function to_object($array){
  return json_decode(json_encode($array));
}

function get_site_name(){
  return SITE_NAME;
}

function get_version(){
  return '?v='.ASSETS_VERSION;
}

function now(){
  return date('Y-m-d H:i:s');
}

//Funcion para imprimir imagenes
function img( $image, $type='png', $class = null, $alt = null, $external=false){

  $img_external = '
    <img src="'.$image.$type.get_version().'" alt="'.$alt.'" class="'.$class.'">
  ';

  $img_inner = '
  <picture>
      <source srcset="'.IMG.$image.'.webp'.get_version().'" type="image/webp" class="'.$class.'">
      <img src="'.IMG.$image.'.'.$type.get_version().'" alt="'.$alt.'" class="'.$class.'">
  </picture>
  ';

  ($external) ? $the_img = $img_external: $the_img = $img_inner;
  
return  $the_img;
}

//Funcion para imprimir imagenes con carga diferida
function lazy($image, $type='png', $class = null, $alt = null, $external=false){
  
  $img_external = '
    <img data-src="'.$image.$type.get_version().'" alt="'.$alt.'" class="'.$class.'">
  ';
    
  $img_inner = '
  <picture>
      <source data-srcset="'.IMG.$image.'.webp'.get_version().'" type="image/webp" class="'.$class.'">
      <img data-src="'.IMG.$image.'.'.$type.get_version().'" alt="'.$alt.'" class="'.$class.'">
  </picture>
  ';

  ($external) ? $the_img = $img_external: $the_img = $img_inner;

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
