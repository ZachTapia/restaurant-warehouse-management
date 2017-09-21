<?php if(!isset($page_title)) {
	$page_title = 'Restaurant Area';
}
 ?>
<html>
  <head>
    
    <title>Project - <?php echo $page_title; ?> </title>

    <meta charset="utf-8">
    
    <link rel="stylesheet" href="<?php echo WWW_ROOT . '/stylesheets/styles.css'; ?>"/>
  </head>

  <body>  
    
    <header> 
      <h1><?php echo $page_title; ?></h1>
    </header>

   <navigation> 
      <ul>
        <a href= "<?php echo WWW_ROOT . '/restaurant/restaurant.php'; ?>"><li>Menu</li></a>
        <a href= "<?php echo WWW_ROOT . '/login.php'; ?>"><li>Logout</li></a>
      </ul>
    </navigation>
