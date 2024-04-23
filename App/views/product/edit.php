<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <form action="/update" method="post">
            <input type="hidden" name="id" value="{product_id}"> <!-- Replace {product_id} with actual product id -->
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{product_name}" required> <!-- Replace {product_name} with actual value -->
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{product_description}</textarea> <!-- Replace {product_description} with actual value -->
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{product_price}" required> <!-- Replace {product_price} with actual value -->
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>
