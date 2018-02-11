<?php
error_reporting(0);
if($_GET['rel']!='tab'){
    include 'menu.php';
    echo "<div id='content'>";
}
?>

<?php
if($_GET['rel']!='tab'){
    echo "</div>";
}?>