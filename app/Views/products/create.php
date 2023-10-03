<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:45px;">
            <div class="col-md-4 col-md-offset-4">
                <h2>Create New Product</h2>
                    <form method="post" action="<?= site_url('products/save') ?>">
                        <div class="form-group">
                            <label for="name">Name: </label>
                            <input type="text" name="name" id="name" class="form-control">
                            <br><br>
                            <label for="description">Description: </label>
                            <input name="description" id="description" class="form-control"></input>
                            <br><br>
                            <label for="price">Price:</label>
                            <input type="number" name="price" id="price" class="form-control">
                            <br><br>
                            <label for="category">Choose a category: </label>
                            <select name="category" id="category">
                                <option value=""></option>
                                <option value="Clothing">Clothing</option>
                                <option value="Jeans">Jeans</option>
                                <option value="Underwear">Underwear</option>
                                <option value="BeautyProducts">Beauty Products</option>
                                <option value="PersonalCare/Hygiene">Personal Care/Hygiene</option>
                                <option value="Food/Drinks">Food/Drinks</option>
                                <option value="Grocery">Grocery</option>
                            </select>
                            <label for="image">Choose an image: </label>
                            <br><br>
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control">
                            <br><br>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
            </div>  
        </div>  
    </div>   
</body>
</html>