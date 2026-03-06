<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Multiplication Table</title>

<style>
    body{
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .table-box{
        width: 220px;
        margin: 40px auto;
        border: 1px solid #ccc;
        border-radius: 8px;
        background: white;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .table-title{
        text-align: center;
        padding: 10px;
        font-weight: bold;
        background-color: #3498db;
        color: white;
        border-radius: 8px 8px 0 0;
    }

    table{
        width: 100%;
        border-collapse: collapse;
    }

    td{
        padding: 6px;
        text-align: center;
        border-bottom: 1px solid #eee;
    }

    tr:last-child td{
        border-bottom: none;
    }

    tr:hover{
        background-color: #f1f1f1;
    }
</style>

</head>
<body>

@php($j = 5)

<div class="table-box">
    <div class="table-title">{{$j}} Multiplication Table</div>

    <table>
        @foreach (range(1,10) as $i)
        <tr>
            <td>{{$i}} × {{$j}}</td>
            <td>= {{ $i * $j }}</td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>