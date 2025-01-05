<?php

function getTitle($title) {
  getCommonTitle($title);
}

function getOgTitle($title) {
  getCommonTitle($title);
}

function getCommonTitle($title) {
  $common_site_title = "";
  if($title == "") {
    echo $common_site_title;
  } else {
    echo $title . " | " . $common_site_title;
  }
}

function getOgUrl() {
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
  $host = $_SERVER['HTTP_HOST'];
  $requestUri = $_SERVER['REQUEST_URI'];
  $url = $protocol . $host . $requestUri;
  echo $url;
}

function getOgImage($thumbnail) {
  if($thumbnail == "") {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $baseUrl = $protocol . $host . '/';
    echo $baseUrl . "assets/img/og.png";
  } else {
    echo $thumbnail;
  }
}

function getOgSiteName() {
  echo "";
}

function getOgType($type) {
  echo $type;
}

function getLinkTags() {
 echo '<link rel="shortcut icon" type="image/x-icon" href="/assets/icons/favicon.ico">';
 echo '<link rel="apple-touch-icon" href="/assets/icons/touch-icon.png">';
 echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
 echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
 echo '<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">';
 echo '<link rel="stylesheet" href="/assets/css/style.css" media="all">';
}

function getStriptTags() {
  echo '<script src="/assets/library/jquery/jquery-3.6.0.min.js"></script>';
  echo '<script src="/assets/js/main.js"></script>';
}

function getHeader() {
  echo '<header class="header">';
  echo '<div class="header__container">';
  echo '</div>';
  echo '</header>';
}

function getAside() {

}

function getFixedButtons() {

}

function getDrawer() {
  echo '<div id="mask" class="mask">&nbsp;</div>';
  echo '<div id="drawer" class="drawer">';
  echo '<div class="drawer__container">';
  echo '<div class="drawer__header">';
  // 閉じるボタン
  echo '<button id="drawer-btn__close" class="drawer-btn__close"><img class="drawer-btn__img" src="/assets/img/drawer-btn__close.png" alt=""></button>';
  echo '</div>';
  echo '<div class="drawer__main">';

  echo '</div>';
  echo '</div>';
  echo '</div>';
}

function getFooter() {
  echo '<footer class="footer">';
  echo '<div class="footer__container">';
  echo '</div>';
  echo '</footer>';
}

function getCopyright() {
  echo '<div class="copyright">';
  echo '<div class="copyright__container">';
  echo '<p class="copyright__text">Copyright &copy; hogehoge All Rights Reserved.</p>';
  echo '</div>';
  echo '</div>';
}