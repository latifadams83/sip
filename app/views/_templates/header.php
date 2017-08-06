<!DOCTYPE html>
<html>
<title>SIP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo URL?>/public/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo URL?>/public/css/app.css">
  <link rel="stylesheet" href="<?php echo URL?>/public/css/style.css">
  <link rel="stylesheet" href="<?php echo URL?>/public/themes/green.css">

<body class="light-grey">

  <!-- Top container -->
  <div class="bar top theme large" style="z-index:4">
    <button class="bar-item button hide-large hover-none hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <span class="bar-item right">Logo</span>
  </div>

   <!-- Overlay effect when opening sidebar on small screens -->
  <div class="overlay hide-large animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
