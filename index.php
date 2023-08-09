<!DOCTYPE html>
<html>
<head>
<title>MF WMS Inventory System App</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<!-- <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css"> -->
<link rel="stylesheet" href="./css/w3.css">
<link rel="stylesheet" href="./css/w3-theme-black.css">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

</head>
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="./" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="./?page=inbound" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Inbound</a>
  <a href="./?page=outbound" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Outbound</a>
  <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Movement</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Report</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Dropdown <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Inbound</a>
    <a href="#work" class="w3-bar-item w3-button">Outbound</a>
    <a href="#pricing" class="w3-bar-item w3-button">Movement</a>
    <a href="#contact" class="w3-bar-item w3-button">Report</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Oh snap! We just showed you a modal..</h4>
      <h5>Because we can <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Cool huh? Ok, enough teasing around..</p>
      <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal footer</p>
    </footer>
  </div>
</div>

<!-- PAGE CONTENT -->
<div class="w3-container w3-padding-48">
<div style="margin-bottom: 600px;">
    <pre><?php
        print_r($_GET);
        print_r($_POST);
    ?></pre>

    <?php
        // display requested page //
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch ($page) {
                case 'inbound':
                    // inbound transaction //
                    include './pages/inbound.php';
                    break;
                case 'outbound':
                    // outbound transaction //
                    include './pages/inbound.php';
                    break;
                default:
                    # code...
                    break;
            }
        }else{
            // display default dashboard page //
            include './pages/dashboard.php';
        }

    ?>
</div>

    <!-- Footer -->
    <hr/>
    <footer>
        <div class='container'>
            <div style='float: left; font-size: 0.9em; color: gray;'>
                <b>MF WMS Inventory System - &copy; 2023 - All Rights Reserved
            </div>
            <div style='float: right; font-size: 0.9em; color: gray;'>
                <b>Version 0.1</b>
            </div>
        </div>
    </footer>
</div>




<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
