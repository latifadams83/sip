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

  <?php require APP . 'views/'.strtolower($this->controller_name).'/actions.php'; ?>

  <!-- !PAGE CONTENT! -->
  <div class="main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="container" style="padding-top:22px">
      <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
    </header>

    <?php require APP . 'views/'.strtolower($this->controller_name).'/'.$this->method_name.'.php'; ?>

    <!-- Footer -->
    <footer class="container padding-16 light-grey">
      <p>Powered by <a href="#" target="_blank">sip.com</a></p>
    </footer>

    <!-- End page content -->
  </div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>