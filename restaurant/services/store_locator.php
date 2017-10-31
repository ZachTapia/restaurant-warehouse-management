<?php
  
  $conn = new mysqli('localhost', 'root', 'root', 'restaurant_warehouse');
  
  $sql  = "SELECT * FROM warehouses";
  
  $result = $conn->query($sql);
  

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
        
        	<div class="warehouse listing">
        		<h1>Warehouses</h1>
        
        
        		<table class="list">
        			<tr>
        				<th>Warehouse ID</th>
        				<th>Warehouse Name</th>
        				<th>Phone Number</th>
        				<th>City</th>
        				<th>Address</th>
        				<th>ZIP</th>
        				<th>Manager Name</th>
        				<th>Inventory Type</th>
        				<th>Delivers Next Day</th>
        			</tr>
        
        		<?php foreach($result as $result => $result_value) { ?>
        			
        			<tr>
        				<td><?php echo $result_value['warehouseID']; ?></td>
        				<td><?php echo $result_value['warehouseName']; ?></td>
        				<td><?php echo $result_value['phoneNumber']; ?></td>
        				<td><?php echo $result_value['city']; ?></td>
        				<td><?php echo $result_value['address']; ?></td>
        				<td><?php echo $result_value['ZIP']; ?></td>
        				<td><?php echo $result_value['managerName']; ?></td>
        				<td><?php echo $result_value['inventoryType']; ?></td>
        				<td><?php echo $result_value['deliversNextDay']; ?></td>
        				<td><a class="action" href=" <?php echo "place_order.php?id=" . $result_value['warehouseID'] ?>">Order From</a></td>
        			</tr>
        
        		<?php } ?>
        
        		</table>
        	</div>
        
        
        </div>

		<footer>&copy; <?php echo date('Y'); ?> D2R</footer>
		
      </body>
</html>
