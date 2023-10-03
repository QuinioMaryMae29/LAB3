<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h2>Product List</h2>
    <a href="<?= site_url('products/create') ?>" class="btn btn-primary">Add New Product</a><br>
    <div class="container">
            <div class="row">
               <div class="col-sm-12">
               <table class="table" border="5">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php foreach ($products as $product) : ?>
                        <tr>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['description'] ?></td>
                            <td><?= $product['price'] ?></td>
                            <td><?= $product['category'] ?></td>
                            <td><?= $product['quantity'] ?></td>
                            <td>
                                <a href="<?= site_url('products/edit/' . $product['id']) ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= site_url('products/delete/' . $product['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
                </table>
               </div>
            </div>
         </div>
</body>
</html>