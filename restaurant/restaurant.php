<!DOCTYPE html>
<html>
  <head>
      <title>Restaurant Area</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../stylesheets/styles.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>

  <body>

        <header>
          <h1>Restaurant Area</h1>
        </header>

<!-- This is the nav bar on top of the screen -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="restaurant.php"><img src="../../images/logo.png" width="65" height="65" class="d-inline-block align-top" alt=""></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link" href="restaurant.php">Home <span class="sr-only">(current)</span></a>
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
          <div id= "main-menu">
            <h2>Main Menu</h2>
              <ul>
                  <li><a href = "services/store_locator.php">Find a Local Warehouse</a></li>
              </ul>
          </div>
        </div>

    <footer>&copy; <?php echo date('Y'); ?> D2R</footer>

      </body>
</html>
