<?php

//session_start();
//var_dump($_COOKIE);

if (isset($_COOKIE['CookieSesion'])) {
  setcookie('CookieSesion', ++$_COOKIE['CookieSesion']);
  echo "Has visitado esta página " . $_COOKIE['CookieSesion'] . " veces";
} else {
  setcookie('CookieSesion', 1, time() + 1200);
  echo "Has visitado esta página 1 vez";
}
