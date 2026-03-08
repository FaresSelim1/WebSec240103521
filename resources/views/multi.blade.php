<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Multiplication Table</title>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.table-container {
    width: 250px;
    margin: 40px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    overflow: hidden;
}

.table-header {
    background-color: #3498db;
    color: white;
    text-align: center;
    padding: 12px;
    font-size: 18px;
    font-weight: bold;
}

table {
    width: 100%;
    border-collapse: collapse;
}

td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #eee;
}

tr:last-child td {
    border-bottom: none;
}

tr:hover {
    background-color: #f1f1f1;
}
</style>
</head>
<body>

<div class="table-container">
    <div class="table-header">{{$j}} Multiplication Table</div>
    <table>
        @foreach (range(1, 10) as $i)
        <tr>
            <td>{{$i}} × {{$j}}</td>
            <td>= {{ $i * $j }}</td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>