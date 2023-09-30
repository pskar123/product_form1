<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="file"] {
            margin-top: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: black; /* Set the background color to black */
        color: white; /* Set text color to white for better readability */
    }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Add Product</h2>
    <form action="insert_product.php" method="POST" enctype="multipart/form-data">
        <label for="title">Product Title:</label>
        <input type="text" name="title" required><br><br>

        <label for="description">Product Description:</label><br>
        <textarea name="description" rows="4" cols="50"></textarea><br><br>

        <label for="sale_price">Sale Price:</label>
        <input type="number" step="1" name="sale_price" required><br><br>

        <label for="regular_price">Regular Price:</label>
        <input type="number" step="1" name="regular_price" required><br><br>

        <label>Status:</label><br>
        <input type="radio" name="status" value="Active" checked>Active
        <input type="radio" name="status" value="Inactive">Inactive<br><br>

        <label for="sku_code">SKU Code:</label>
        <input type="text" name="sku_code" required><br><br>

        <label for="category">Product Category:</label>
        <select name="category">
            <option value="man">Man</option>
            <option value="woman">Woman</option>
            <option value="child">Child</option>
            <!-- Add more categories as needed -->
        </select><br><br>

        <label for="image">Product Image:</label>
        <input type="file" name="image" accept="image/*" required><br><br>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>
