<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshop</title>
</head>
<body>
    <h2>Create New Product</h2>
    <form method="post" action="<?= site_url('products/save') ?>">
        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" class="form-control">
            <br>
            <label for="description">Description: </label>
            <input name="description" id="description" class="form-control"></input>
            <br>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" class="form-control">
            <br>
            <label for="category">Choose a category: </label>
            <select name="category" id="category">
                <option value=""></option>
                <option value="Clothing">Clothing</option>
                <option value="Jeans">Jeans</option>
                <option value="Underwear">Underwear</option>
                <option value="BeautyProducts">Beauty Products</option>
            </select>
            <br>
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control">
            <br><br>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</body>
</html>