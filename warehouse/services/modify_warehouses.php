<?php
$conn = new mysqli('localhost', 'ztapia', 'password', 'd2r');

  $sql  = "SELECT * FROM warehouses";
  
  $result = $conn->query($sql);
  

  $conn->close();
  
?>



<!DOCTYPE html>
<html>
  <head>
      <title>Warehouse Area</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../../stylesheets/styles.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  
  <body>
    
       
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="../../warehouse.php"><img src="../../images/logo.png" width="65" height="65" class="d-inline-block align-top" alt=""></a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="../warehouse.php">Home <span class="sr-only">(current)</span></a>
                  </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../LoginScreen.html">Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../aboutus.html">About Us</a>
              </li>
              </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </nav>

     

        <div id="content">
        
          <div class="warehouse listing">
            <h1>Warehouses</h1>
        
        
            <table class="responstable">
              <tr>
                <th>Warehouse ID</th>
                <th>Warehouse Name</th>
              </tr>
        
            <?php foreach($result as $result => $result_value) { ?>
              
              <tr>
                <td><?php echo $result_value['warehouseID']; ?></td>
                <td><?php echo $result_value['warehouseName']; ?></td>
                <td><a class="action" href=" <?php echo "modify_inventory.php?id=" . $result_value['warehouseID'] ?>">Select</a></td>
              </tr>
        
            <?php } ?>
        
            </table>
          </div>
        
        
        </div>

    <footer>&copy; <?php echo date('Y'); ?> D2R</footer>
    
      </body>
</html>