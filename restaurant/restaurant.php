<!DOCTYPE html>
<html>
	<head>
    	<title>Restaurant Area</title>
    	<meta charset="utf-8">
    	<link rel="stylesheet" href="../stylesheets/styles.css"/>
	</head>

	<body>
    
        <header> 
          <h1>Restaurant Area</h1>
        </header>

<!-- This is the nav bar on top of the screen -->
       <navigation> 
          <ul>
            <a href= "restaurant.php"><li>Menu</li></a>
            <a href= "../index.php"><li>Logout</li></a>
          </ul>
        </navigation>
     
    	<div id="content">
      		<div id = "main-menu">
        		<h2>Main Menu</h2>
        			<ul>
          				<li><a href = "services/store_locator.php">Find a Local Warehouse</a></li>
        			</ul>
      		</div>
      	</div>
      	
		<footer>&copy; <?php echo date('Y'); ?> D2R</footer>
		
      </body>
</html>