<!DOCTYPE html>
<!-- Home page of PM database search example. -->
<html>
<head>
  <title>Associative array search example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/wp.css">
</head>

<body>
  <h2>Australian Prime Ministers</h2>
  <h3>Query</h3>

  <form method="post" action="search">
    {{csrf_field()}}
    <table>
        <tr><td>Name: </td><td><input type="text" name="name"></td></tr>
        <tr><td>Year: </td><td><input type="text" name="year"></td></tr>
        <tr><td>State: </td><td><input type="text" name="state"></td></tr>
        <tr><td colspan=2><input type="submit" value="Search">
                        <input type="reset" value="Reset"></td></tr>
  <table>
  </form>

  <hr>
  <p>
    Source:
    <a href="show.php?file=index.html">index.html</a> 
  </p>
</body>
</html>
