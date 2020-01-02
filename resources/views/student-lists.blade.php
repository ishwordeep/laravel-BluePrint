<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-spacing: 0px;
            border: 1px solid black;
        }
        table tr th,td {
            cell-spacing: 0;
            padding: 10px;
            border: 1px solid black;
        }
    </style>

</head>
<body>
    <h1>Students List</h1>
    <table>
        <tr>
            <th>S.N.</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach($studentList as $student) {?>
            <tr>
                <td> {{  $student->id }}</td>
                <td> {{  $student->name }}</td>
                <td> {{  $student->address }}</td>
                <td> {{  $student->contact }}</td>
                <td> {{  $student->email }}</td>
                <td>    
                    <a href="/student/update/{{ $student->id }}">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>