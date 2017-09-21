<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Place an Order'; ?>
<?php $id = $_GET['id']; ?>

<?php include(SHARED_PATH . '/restaurant_header.php'); ?>



<div id="content">
<h1><?php echo "Place order from Warehouse ID: " . $id ?> </h1>
</div>


<?php include(SHARED_PATH . '/restaurant_footer.php'); ?>