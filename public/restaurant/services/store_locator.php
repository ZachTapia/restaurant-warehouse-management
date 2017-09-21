<?php require_once('../../../private/initialize.php'); ?>

<?php
  $warehouses = [
    ['warehouseID' => '1', 'warehouseName' => 'Action Sales', 'phoneNumber' => '(626) 308-1988', 'city' => 'Monterey Park', 'address' => '415 S Atlantic Blvd', 'ZIP' => '91754', 'managerName' => 'Jon Leo', 'inventoryType' => 'Machinery', 'deliversNextDay' => 'F'],
   
  ];
?>

<?php $page_title = 'Locate Store'; ?>

<?php include(SHARED_PATH . '/restaurant_header.php'); ?>



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


<?php include(SHARED_PATH . '/restaurant_footer.php'); ?>