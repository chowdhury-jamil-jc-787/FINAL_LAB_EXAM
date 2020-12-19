<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
    <form action="/registration" method="POST">
        @csrf
        <table>
            <tr>
                <td>ZFullName: </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>UserName: </td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Contact No: </td>
                <td><input type="text" name="contact" required></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>User Type: </td>
                <td><input type="text" name="user_type" placeholder="employee" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>