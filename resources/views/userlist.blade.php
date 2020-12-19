<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>User Account</h1>
    <form class="" action="userlistcontroller" method="post">
      <input type="text" name="mail" value=""><br>
      {{@csrf_field()}}
      <input type="password" name="password" value=""><br>
      <button type="submit" name="">submit</button>
    </form>
  </body>
</html>
