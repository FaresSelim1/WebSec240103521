<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Simple Calculator</title>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 350px;
    margin: 60px auto;
    background: #fff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

input[type="number"] {
    width: 140px;
    padding: 8px;
    margin: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    text-align: right;
    font-size: 16px;
}

button {
    width: 70px;
    padding: 8px;
    margin: 5px;
    border-radius: 5px;
    border: none;
    background-color: #3498db;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.2s;
}

button:hover {
    background-color: #2980b9;
}

.result {
    margin-top: 20px;
    font-size: 18px;
    font-weight: bold;
    color: #27ae60;
}
</style>
</head>
<body>

<div class="container">
    <h2>Simple Calculator</h2>

    <input type="number" id="num1" placeholder="First Number">
    <input type="number" id="num2" placeholder="Second Number">
    <br>
    <button onclick="calculate('+')">+</button>
    <button onclick="calculate('-')">-</button>
    <button onclick="calculate('*')">×</button>
    <button onclick="calculate('/')">÷</button>

    <div class="result" id="result"></div>
</div>

<script>
function calculate(operator) {
    var n1 = parseFloat(document.getElementById('num1').value);
    var n2 = parseFloat(document.getElementById('num2').value);
    var res;

    if (isNaN(n1) || isNaN(n2)) {
        res = "Please enter valid numbers";
    } else {
        switch(operator) {
            case '+': res = n1 + n2; break;
            case '-': res = n1 - n2; break;
            case '*': res = n1 * n2; break;
            case '/': 
                res = n2 !== 0 ? n1 / n2 : "Cannot divide by zero"; 
                break;
        }
    }

    document.getElementById('result').innerText = res;
}
</script>

</body>
</html>