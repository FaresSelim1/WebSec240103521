<?php
function isPrime($number) {
    if($number <= 1) return false;
    $i = $number - 1;
    while($i > 1) {
        if($number % $i == 0) return false;
        $i--;
    }
    return true;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Prime Numbers</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f4f4f4;
}

.box{
    width:420px;
    margin:40px auto;
    background:white;
    border:1px solid #ccc;
    border-radius:8px;
    padding:15px;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

.title{
    text-align:center;
    font-size:18px;
    font-weight:bold;
    margin-bottom:15px;
}

.number{
    display:inline-block;
    padding:6px 10px;
    margin:3px;
    border-radius:4px;
    color:white;
    font-size:14px;
}

.prime{
    background:#27ae60;
}

.not-prime{
    background:#888;
}
</style>

</head>

<body>

<div class="box">
    <div class="title">Prime Numbers</div>

    @foreach (range(1,100) as $i)
        @if(isPrime($i))
            <span class="number prime">{{$i}}</span>
        @else
            <span class="number not-prime">{{$i}}</span>
        @endif
    @endforeach

</div>

</body>
</html>