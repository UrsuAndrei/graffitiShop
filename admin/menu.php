<!DOCTYPE html>
<html>
<head>
    <title>PanelAdmin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/panel_admin.css">
    <script src="../js/lib/jquery/jquery-2.1.3.js"></script>
    <script src="../js/panel_admin.js"></script>
    <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="menu">
    <div class="content_menu">
        <ul class="body_menu">
            <li>
                <div class="title_submenu1">
                    <a rel="tab" href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
                </div>
            </li>
            <li>
                <div class="title_submenu">
                    <i class="fa fa-tags" aria-hidden="true"></i>Catalog
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
                <ul class="sub_menu">
                    <li>
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i><a rel="tab" href="products.php">Products</a>
                    </li>
                    <li>
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i><a rel="tab" href="category.php">Category</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="title_submenu">
                    <i class="fa fa-tags" aria-hidden="true"></i>Sales
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
                <ul class="sub_menu">
                    <li>
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i><a rel="tab" href="orders.php">Orders</a>
                    </li>
                    <li>
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i><a rel="tab" href="returns.php">Returns</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

</body>
</html>