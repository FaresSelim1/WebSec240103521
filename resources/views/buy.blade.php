<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Product Catalog</title>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 40px auto;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.product-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    padding: 15px;
    width: 220px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.product-card img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 10px;
}

.product-card h3 {
    font-size: 16px;
    margin: 5px 0;
}

.product-card p {
    font-size: 14px;
    color: #555;
    margin: 5px 0;
}

.product-card .price {
    font-weight: bold;
    color: #27ae60;
    margin: 10px 0;
}

.product-card button {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s;
}

.product-card button:hover {
    background-color: #2980b9;
}
</style>

</head>
<body>

<div class="container">
    @foreach ($products as $product)
    <div class="product-card">
        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
        <h3>{{ $product['name'] }}</h3>
        <p>{{ $product['description'] }}</p>
        <div class="price">${{ $product['price'] }}</div>
        <button>Add to Cart</button>
    </div>
    @endforeach
</div>

</body>
</html>