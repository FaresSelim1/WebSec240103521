<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Student Transcript</title>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 600px;
    margin: 40px auto;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 10px;
}

.student-info {
    margin-bottom: 20px;
}

.student-info span {
    display: inline-block;
    margin-right: 20px;
    font-weight: bold;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
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
}
</style>
</head>
<body>

<div class="container">
    <h2>Student Transcript</h2>

    <div class="student-info">
        <span>Name: {{ $studentName }}</span>
        <span>ID: {{ $studentId }}</span>
    </div>

    <table>
        <thead>
            <tr>
                <th>Course</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
            <tr>
                <td>{{ $course['course'] }}</td>
                <td>{{ $course['grade'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>