<?php 
$dbcon = mysql_connect ('localhost', 'root', '', 'testj')

$query = "SELECT * FROM market_lock_reservations";

$result = mysql_query($dbcon, $query);

?>
<html>
<head>
<style>
table,th,td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>
    <table style="width: 500px">
    <tr>
    <th>market_lock_reservation_id</th>
    <th>market_admin_id</th>
    <th>market_lock_id</th>
    <th>sale_date</th>
    <th>reservation_status</th>
    <th>merchant_id</th>
    <th>product_type_id</th>
    <th>reservation_date</th>
    <th>reservation_date</th>
    <th>paid_date</th>
    <th>price</th>
    </tr>
    <?php
    if ($result) {
        
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                
        
        ?>
    <tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    </tr>
    <?php 
        }
    }
    ?>
    </table>
</body>
</html>