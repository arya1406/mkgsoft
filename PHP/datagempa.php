  <?php
    include 'config.php';
  ?>

<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Warehouse MKG</title>
  </head>

  <body>
  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left"
  style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large"
    onclick="w3_close()"> Close &times;</button>
  </div>

  <div class="w3-blue">
    <button id="openNav" class="w3-button w3-blue w3-xlarge" onclick="w3_open()">&#9776;</button>
    <div class="w3-container">
      <h1 align="center">DATA GEOFISIKA</h1>
    </div>
  </div>

  <div id="main">
    <h3 align="center">Data GEMPA</h3>
    <div align="center">
    <a href="export.php"><button>Export to Excel</button></a>
    <a href="add.php"><button>Add Data</button></a>
    <a href="search.php"><button>Cari Data</button></a><br/>
  </div>
    <hr/>
  </div>

  <?php
    include 'data.php';
  ?>

  <script type="text/javascript">
  function w3_open() {
    document.getElementById("main").style.marginLeft = "25%";
    document.getElementById("mySidebar").style.width = "25%";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("openNav").style.display = 'none';
  }
  function w3_close() {
    document.getElementById("main").style.marginLeft = "0%";
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("openNav").style.display = "inline-block";
  }
  </script>
  </body>
</html>
