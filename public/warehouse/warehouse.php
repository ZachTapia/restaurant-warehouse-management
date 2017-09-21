<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Warehouse Main Page'; ?>

<?php include(SHARED_PATH . '/warehouse_header.php'); ?>




    <navigation> 
      <ul>
        <a href="warehouse.php"><li>Menu</li></a>
        <a href="../login.php"><li>Logout</li></a>
      </ul>
    </navigation>

     <div id="content">
      <div id = "main-menu">
        <h2>Main Menu</h2>
        <ul>
          <li>Manage Orders</li>
          <li>Item Look-Up </li>
        </ul>
      </div>
      
    </div>
   
<?php include(SHARED_PATH . '/restaurant_footer.php');
   