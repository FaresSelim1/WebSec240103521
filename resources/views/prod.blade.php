<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Product Catalog</title>

<style>

body{
    font-family: Arial, sans-serif;
    background-color:#f4f4f4;
    margin:0;
}

.page-title{
    text-align:center;
    margin-top:30px;
    font-size:32px;
}

.container{
    width:95%;
    max-width:1400px;
    margin:40px auto;
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(260px,1fr));
    gap:25px;
}

.product-card{
    background:white;
    border-radius:12px;
    box-shadow:0 3px 10px rgba(0,0,0,0.12);
    padding:20px;
    text-align:center;
    transition:transform 0.2s;
}

.product-card:hover{
    transform:translateY(-5px);
}

.product-card img{
    width:100%;
    height:200px;
    object-fit:cover;
    border-radius:10px;
}

.product-card h3{
    margin:12px 0 5px;
    font-size:18px;
}

.product-card p{
    font-size:14px;
    color:#555;
    min-height:40px;
}

.price{
    font-size:18px;
    font-weight:bold;
    color:#27ae60;
    margin:10px 0;
}

.product-card button{
    padding:10px 18px;
    border:none;
    border-radius:6px;
    background:#3498db;
    color:white;
    cursor:pointer;
    font-size:14px;
}

.product-card button:hover{
    background:#2980b9;
}

</style>
</head>

<body>

<h1 class="page-title">Product Catalog</h1>

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