<?php 
include('../components/top.php');
if(isset($_GET['showItem'])){
    include('../showItem.php');
}
include('../components/header.php');

include('../resultSearch.php');
?>

<?php
include('../components/footer.php');
?>