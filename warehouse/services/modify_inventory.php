<?php 
//session begins
session_start();

//global variable to pass warehouseID
$id = $_GET['id']; 



//begin connection to sql
$conn = new mysqli('localhost', 'ztapia', 'password', 'd2r');


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


$name = $result->fetch_assoc();

//put sql items into arrays
while($row = $resultInventory->fetch_assoc()) {
    $products[] = $row['itemName'];
    $productID[] = $row['itemID'];
    $amounts[] = $row['itemPrice'];
    $images[] = $row['itemImage'];
    
}

//remove items to cart, gets item from super global
if ( isset($_GET["remove"]) ) {
    $itemID = $_GET["remove"];
    
    $removeSQL = "DELETE FROM inventory WHERE itemID=" . $itemID;
   
    
    if (mysqli_query($conn, $removeSQL)) {
        echo "Record deleted successfully";
        header("Refresh:0; url= modify_inventory.php?id=" . $id);
        
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
}


//add items to cart, gets item from super global
if ( isset($_GET["add"]) ) {
    $warehouseID = $_GET["warehouseID"];
    $itemName = $_GET["itemName"];
    $itemType = $_GET["itemType"];
    $itemPrice = $_GET["itemPrice"];
    $itemLocation = $_GET["itemLocation"];
    
    
    
    
    $addSQL = "INSERT INTO inventory (warehouseID, itemName, itemType, itemPrice) VALUES ('" . $warehouseID . " ', '" . $itemName . "', '" . $itemType . "', '" . $itemPrice . "')";
    
    if (mysqli_query($conn, $addSQL)) {
        echo "Record added successfully";
        header("Refresh:0; url= modify_inventory.php?id=" . $id);

        
    } else {
        echo "Error adding record: " . mysqli_error($conn);
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </head>
    
    <body>
    
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="../warehouse.php"><img src="../../images/logo.png" width="65" height="65" class="d-inline-block align-top" alt=""></a>

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
     
            
            <h1><?php echo $name["warehouseName"] ?> </h1>
            
                        <table class="responstable">
                    <tr>
                    
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                        <th>Item Image</th>
                    
                    </tr>
                     <?php 
                     for($i = 0; $i < count($products); $i++) {
                         ?>
                         <tr>
                            <td><?php echo ($productID[$i] ); ?></td>
                            <td><?php echo ($products[$i] ); ?></td>
                            <td><?php echo ($amounts[$i] ); ?></td>
                         <td><image height="300" width = "300" src="<?php echo ($images[$i]); ?>"</td>
                            <td><a href="?id=<?php echo ($id)?>&remove=<?php echo ($productID[$i])?>">Remove Item From Inventory</a></td>
                         </tr>
                         <?php 
                     }
                       ?>
                    
    
                </table>
                
                <h3>Add an Item:</h3>
                
                <form action="">
                            Item Name: <input type = "text" name = "itemName" value = "" > <br/>
                            Item Type: <input type = "text" name = "itemType" value = "" > <br/>
                            Item Price: <input type = "text" name = "itemPrice" value = "" > <br/>
                            Item Location: <input type = "text" name = "itemLocation" value = "" > <br/>
                            <input type = "hidden" name = "warehouseID" value = "<?php echo ($id)?>">
                            <input type = "hidden" name = "id" value = "<?php echo ($id)?>">
                            <input type = "hidden" name = "add" value = "true">
                            <input type = "submit" value = "Submit">
                     
                            </form>
        </div>
        
        
            
      
        <footer>&copy; <?php echo date('Y'); ?> D2R</footer>
      
      </body>
</html>