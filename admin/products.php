<?php
error_reporting(0);
if($_GET['rel']!='tab'){
    include 'menu.php';
    echo "<div id='content'>";
}
?>
<div class="header">
    <p class="title"> Products</p>
</div>
<?php
if($_GET['rel']!='tab'){
    echo "</div>";
}?>