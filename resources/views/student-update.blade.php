<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/student/update/{{ $sinfo->id }}" method="post">
    @csrf
        <h1>Add Student</h1>
        <input type="text" name="name" id="name" placeholder="Name" value="{{ $sinfo->name }}"><br/>

        <input type="text" name="address" id="address" placeholder="Address" value="{{ $sinfo->address }}"><br/>

        <input type="email" name="email" id="email" placeholder="Email" value="{{ $sinfo->email }}"><br/>

        <input type="text" name="contact" id="contact" placeholder="Mobile Number" value="{{ $sinfo->contact }}"><br/>

        <input type="text" name="username" id="username" placeholder="Username" value="{{ $sinfo->username }}"><br/>

        <input type="password" name="password" id="password" placeholder="Password" value="{{ $sinfo->password }}"><br/>

        <input type="submit" value="Update" name="submit">
    </form>
</body>
</html>