  <!-- Sidebar/menu -->
  <nav class="sidebar collapse theme-l5 animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    
    <div class="container">
      <h5>Dashboard</h5>
    </div>
    <div class="bar-block">
      <a href="#" class="bar-item button padding-16 hide-large dark-grey hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
      <a class="bar-item button" href="<?php echo URL; ?>">Home</a>
      <a class="bar-item button" href="<?php echo URL; ?>home/exampleOne">Example 1</a>
      <a class="bar-item button" href="<?php echo URL; ?>home/exampleTwo">Example 2</a>
    </div>
  </nav>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="overlay hide-large animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>