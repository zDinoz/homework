<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2>Basic Table</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $Pro = array();
        $Pro[] = array('product_id' => 1, 'product_name' => 'Pro01', 'product_price' => 100);
        $Pro[] = array('product_id' => 2, 'product_name' => 'Pro02', 'product_price' => 200);
        $Pro[] = array('product_id' => 3, 'product_name' => 'Pro03', 'product_price' => 300);
        $Pro[] = array('product_id' => 4, 'product_name' => 'Pro04', 'product_price' => 400);
        $Pro[] = array('product_id' => 5, 'product_name' => 'Pro05', 'product_price' => 500);
        $Pro[] = array('product_id' => 6, 'product_name' => 'Pro06', 'product_price' => 600);
        $Pro[] = array('product_id' => 7, 'product_name' => 'Pro07', 'product_price' => 700);
        $Pro[] = array('product_id' => 8, 'product_name' => 'Pro08', 'product_price' => 800);
        $Pro[] = array('product_id' => 9, 'product_name' => 'Pro09', 'product_price' => 900);
        $Pro[] = array('product_id' => 10, 'product_name' => 'Pro10', 'product_price' => 1000);
        foreach($Pro as $x ) {?>
            <tr>
                <td><?php echo $x['product_id'] ?></td>
                <td><?php echo $x['product_name'] ?></td>
                <td><?php echo $x['product_price'] ?></td>
            </tr>
            <?php
        }?>



        </tbody>
    </table>
</body>
</html>