<?php
$directory = $_SERVER['DOCUMENT_ROOT'];
require_once $directory . "/assets/php/common.php";

$title = "";
$keywords = "";
$description = "";
$thumbnail = "";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
<meta name="apple-mobile-web-app-title" content="">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="format-detection" content="telephone=no">
<title><?php getTitle($title); ?></title>
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="description" content="<?php echo $description; ?>">
<meta property="og:url" content="<?php getOgUrl(); ?>">
<meta property="og:image" content="<?php getOgImage($thumbnail); ?>">
<meta property="og:site_name" content="<?php getOgSiteName(); ?>">
<meta property="og:type" content="<?php getOgType("website"); ?>">
<meta property="og:title" content="<?php getOgTitle($title); ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<?php getLinkTags(); ?>
</head>
<body>
  <div class="page">
  <?php getHeader(); ?>
  <main class="main" >

  </main>
  <?php getAside(); ?>
  <?php getFooter(); ?>
  <?php getCopyright(); ?>
  </div>
  <?php getFixedButtons(); ?>
  <?php getDrawer(); ?>
  <?php getStriptTags(); ?>
</body>
</html>