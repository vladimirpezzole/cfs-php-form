<?php

function dd($dump)
{
  var_dump($dump);
  die();
}

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
  return header("Location:/?page={$target}");
}

function redirectToHome() {
  return header("Location:/}");
}
