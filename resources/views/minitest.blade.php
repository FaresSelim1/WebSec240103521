<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>MiniTest - Supermarket Bill</title>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 500px;
    margin: 40px auto;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: center;
}

th {
    background-color: #3498db;
    color: white;
}

tr:hover {
    background-color: #f1f1f1;
}

.total-row td {
    font-weight: bold;
    border-top: 2px solid #3498db;
}
</style>

</head>
<body>

<div class="container">
    <h2>Supermarket Bill</h2>

    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price/unit</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php $grandTotal = 0; @endphp
            @foreach ($bill as $b)
                @php $total = $b['quantity'] * $b['price']; @endphp
                @php $grandTotal += $total; @endphp
                <tr>
                    <td>{{ $b['item'] }}</td>
                    <td>{{ $b['quantity'] }}</td>
                    <td>{{ $b['price'] }}</td>
                    <td>{{ $total }}</td>
                </tr>
            @endforeach
            <tr class="total-row">
                <td colspan="3">Grand Total</td>
                <td>{{ $grandTotal }}</td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>