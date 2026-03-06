<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Even Numbers</title>

<style>
    body{
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .box{
        width: 400px;
        margin: 40px auto;
        border: 1px solid #ccc;
        border-radius: 8px;
        background: white;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        padding: 15px;
    }

    .title{
        font-weight: bold;
        text-align: center;
        margin-bottom: 15px;
        font-size: 18px;
    }

    .number{
        display: inline-block;
        padding: 6px 10px;
        margin: 3px;
        border-radius: 4px;
        color: white;
        font-size: 14px;
    }

    .even{
        background-color: #3498db;
    }

    .odd{
        background-color: #777;
    }
</style>

</head>
<body>

<div class="box">
    <div class="title">Even Numbers</div>

    @foreach (range(1, 100) as $i)
        @if($i % 2 == 0)
            <span class="number even">{{$i}}</span>
        @else
            <span class="number odd">{{$i}}</span>
        @endif
    @endforeach
</div>

</body>
</html>