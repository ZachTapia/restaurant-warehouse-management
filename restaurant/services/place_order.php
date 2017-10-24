<?php $id = $_GET['id']; 

$conn = new mysqli('localhost', 'root', 'root', 'restaurant_warehouse');

$sql  = "SELECT * FROM warehouses WHERE warehouseID = $id";

$result = $conn->query($sql);

$resultArray = $result->fetch_assoc();

$conn->close();

?>

<!DOCTYPE html>
<html>
	<head>
    	<title>Restaurant Area</title>
    	<meta charset="utf-8">
    	<link rel="stylesheet" href="../../stylesheets/styles.css"/>
	</head>
	
	<body>
    
        <header> 
          <h1>Restaurant Area</h1>
        </header>
        
<!-- This is the nav bar on top of the screen -->
       <navigation> 
          <ul>
            <a href= "../restaurant.php"><li>Menu</li></a>
            <a href= "../../index.php"><li>Logout</li></a>
          </ul>
        </navigation>
     
     
        <div id="content">
        	<h1><?php echo $resultArray['warehouseName']; ?> </h1>
        </div>
     

		<footer>&copy; <?php echo date('Y'); ?> D2R</footer>
		
      </body>
</html>



