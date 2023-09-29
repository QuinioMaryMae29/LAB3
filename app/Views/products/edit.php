<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshop</title>
</head>
<body>
    <h2>Edit Product</h2>
    <form action="<?= site_url('products/update/' . $product['id']) ?>" method="post">
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= $product['name'] ?>">

            <label for="description">Description</label>
            <input name="description" id="description" class="form-control"><?= $product['description'] ?></input>

            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" value="<?= $product['price'] ?>">

            <label for="category">Choose a category: </label>
            <select name="category" id="category" value="<?= $product['category'] ?>">
                <option value=""></option>
                <option value="Clothing">Clothing</option>
                <option value="Jeans">Jeans</option>
                <option value="Underwear">Underwear</option>
                <option value="BeautyProducts">Beauty Products</option>
            </select>

            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product['quantity'] ?>">

            <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>
</body>
</html>