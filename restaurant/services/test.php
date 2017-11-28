<?php 
//session begins
session_start();

//global variable to pass warehouseID
$id = $_GET['id']; 


//begin connection to sql
$conn = new mysqli('localhost', 'root', 'root', 'restaurant_warehouse');

//sql query to select all from warehouse where warehouseID matches
$warehouses  = "SELECT * FROM warehouses WHERE warehouseID = $id";

//sql query to select all from inventory where warehouseID matches
$inventory = "SELECT * FROM inventory WHERE warehouseID = $id";

//create result from queries
$result = $conn->query($warehouses);
$resultInventory = $conn->query($inventory);

//define product arrays
$products = array();
$productID = array();
$amounts = array();
$images = array();
$warehouseFrom = array();

$name = $result->fetch_assoc();

//put sql items into arrays
while($row = $resultInventory->fetch_assoc()) {
    $products[] = $row['itemName'];
    $productID[] = $row['itemID'];
    $amounts[] = $row['itemPrice'];
    $images[] = $row['itemImage'];
    $warehouseFrom[] = $row['warehouseID'];
    
}



//check if there is an existing cart, if not make it
if ( !isset($_SESSION["total"]) ) {
    
    $_SESSION["total"] = 0;
    for ($i=0; $i< count($products); $i++) {
        $_SESSION["qty"][$productID[$i]] = 0;
        $_SESSION["amounts"][$productID[$i]] = 0;
    }
}

//reset
if ( isset($_GET['reset']) )
{
    if ($_GET["reset"] == 'true')
    {
        unset($_SESSION["qty"]); //The quantity for each product
        unset($_SESSION["amounts"]); //The amount from each product
        unset($_SESSION["total"]); //The total cost
        unset($_SESSION["cart"]); //Which item has been chosen
    }
}

//add items to cart, gets item from super global
if ( isset($_GET["add"]) ) {
    $i = $_GET["add"];
    $qty = $_SESSION["qty"][$i] + 1;
    $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
    $_SESSION["cart"][$i] = $i;
    $_SESSION["qty"][$i] = $qty;
}

//delete
if ( isset($_GET["delete"]) )
{
    $i = $_GET["delete"];
    $qty = $_SESSION["qty"][$i];
    $qty--;
    $_SESSION["qty"][$i] = $qty;
    //remove item if quantity is zero
    if ($qty == 0) {
        $_SESSION["amounts"][$i] = 0;
        unset($_SESSION["cart"][$i]);
    }
    else
    {
        $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
    }
}
//close connection
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
     
        	<?php 
        	   echo "Products ID <br/>";
        	   foreach ($productID as $key=>$value) {
        	       echo  'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
        	   }
        	   
        	   echo "Products <br/>";
        	   foreach ($products as $key=>$value) {
        	       echo  'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
        	   }
        	   
        	?>
        
        </div>
      
        <footer>&copy; <?php echo date('Y'); ?> D2R</footer>
      
      </body>
</html>