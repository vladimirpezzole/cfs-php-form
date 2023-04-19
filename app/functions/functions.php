<?php


// FILTER_SANITIZE_STRING @deprecated 8.1
function sanitizeString($string){
  $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
  $sanitized = str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
  return $sanitized;
};

// Request POST return GET
function request(){
  $request = $_SERVER['REQUEST_METHOD'];
  
  if($request == 'POST'){
    return $_POST;
  }
  
  return $_GET;
  
}

// Redirect Location
function redirect($target) {
  // return header("Location:/?page={$target}");
  print '<meta http-equiv="refresh" content="0; url=' . '/?page=' . $target . '">';
}

function redirectToHome() {
  // return header("Location:/");
  print '<meta http-equiv="refresh" content="1; url=' . '/' . '">';
}

function dd($dump)
{
  var_dump($dump);
  die();
}