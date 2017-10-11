<?php
  $warehouses = [
    ['warehouseID' => '1', 'warehouseName' => 'Action Sales', 'phoneNumber' => '(626) 308-1988', 'city' => 'Monterey Park', 'address' => '415 S Atlantic Blvd', 'ZIP' => '91754', 'managerName' => 'Jon Leo', 'inventoryType' => 'Machinery', 'deliversNextDay' => 'F'],
   
  ];
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
        
        		<?php foreach($warehouses as $warehouse) { ?>
        			
        			<tr>
        				<td><?php echo $warehouse['warehouseID']; ?></td>
        				<td><?php echo $warehouse['warehouseName']; ?></td>
        				<td><?php echo $warehouse['phoneNumber']; ?></td>
        				<td><?php echo $warehouse['city']; ?></td>
        				<td><?php echo $warehouse['address']; ?></td>
        				<td><?php echo $warehouse['ZIP']; ?></td>
        				<td><?php echo $warehouse['managerName']; ?></td>
        				<td><?php echo $warehouse['inventoryType']; ?></td>
        				<td><?php echo $warehouse['deliversNextDay']; ?></td>
        				<td><a class="action" href=" <?php echo "place_order.php?id=" . $warehouse['warehouseID'] ?>">Order From</a></td>
        			</tr>
        
        		<?php } ?>
        
        		</table>
        	</div>
        
        
        </div>

		<footer>&copy; <?php echo date('Y'); ?> D2R</footer>
		
      </body>
</html>
