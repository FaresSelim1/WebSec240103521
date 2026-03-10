<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>

<style>

body{
    margin:0;
    font-family: Arial;
    background:#f4f6f9;
}

.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:#ffffff;
    padding:15px 40px;
    box-shadow:0 2px 6px rgba(0,0,0,0.1);
}

.logo{
    font-size:22px;
    font-weight:bold;
    color:#3498db;
}

.nav-links{
    list-style:none;
    display:flex;
    gap:25px;
    margin:0;
    padding:0;
}

.nav-links a{
    text-decoration:none;
    color:#333;
    font-size:15px;
    transition:0.2s;
}

.nav-links a:hover{
    color:#3498db;
}

.hero{
    height:80vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.hero h1{
    font-size:42px;
    margin-bottom:10px;
}

.hero p{
    font-size:18px;
    color:#555;
    margin-bottom:25px;
}

.hero button{
    padding:12px 25px;
    border:none;
    background:#3498db;
    color:white;
    font-size:16px;
    border-radius:6px;
    cursor:pointer;
}

.hero button:hover{
    background:#2980b9;
}

.logo-box{
    width:120px;
    height:120px;
    border-radius:50%;
    background:#eaeaea;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-bottom:20px;
    font-weight:bold;
    color:#777;
}

.fares {
    height: 100px;
    width: 100px;
    float: left;
}

</style>

</head>

<body>

<nav class="navbar">
    <div class="logo">Online Shopping</div>
    <img class="fares" src="data:image/png;base64,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" alt="">

    <ul class="nav-links">
        <li><a href="./">Home</a></li>
        <li><a href="./prod">Products</a></li>
        <li><a href="./buy">Premium</a></li>
        <li><a href="./transcript">Transcript</a></li>
        <li><a href="./minitest">MiniTest</a></li>
    </ul>
</nav>

<section class="hero">

    <div class="logo-box">
        <img class="log" src="data:image/png;base64,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" alt="">
    </div>

    <h1>Welcome to Amazon</h1>
    <p>You can buy any Electronic devices , home needs</p>

    <button>Explore Pages</button>

</section>

</body>
</html>