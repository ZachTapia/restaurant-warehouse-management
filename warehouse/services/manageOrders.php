<!DOCTYPE html>
<html>
	<head>
    	<title>Restaurant Area</title>
    	<meta charset="utf-8">
    	<link rel="stylesheet" href="../../stylesheets/styles.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>

	<body>

        <header>
          <h1>Warehouse Area</h1>
        </header>

        <!-- This is the nav bar on top of the screen -->
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

        	<div class="warehouse listing">
        		<h1>Warehouses</h1>


        		<table class="responstable">
        			<tr>
        				<th>Name</th>
        				<th>Address</th>
        				<th>Card</th>
        				<th>Total</th>
                                </tr>
                                <tr><td>Bob Smith</td><td>2900 Figuroa St.</td><td>1583************</td><td>110.43</td></tr>
                                <tr><td>Shelby Chavez</td><td>201 West Blvd.</td><td>5531************</td><td>250.62</td></tr> 
                                <tr><td>Jose Macias</td><td>110 Paramount St.</td><td>5592************</td><td>6110.43</td></tr>
                                <tr><td>Zach Tapia</td><td>123 Imperial Blvd.</td><td>9352************</td><td>20.00</td></tr>
                                <tr><td>Richard Cross</td><td>112 Tunnel St.</td><td>8119************</td><td>62519.11</td></tr>
 
                                

        			
        		</table>
        	</div>


        </div>

		<footer>&copy; <?php echo date('Y'); ?> D2R</footer>

      </body>
</html>
