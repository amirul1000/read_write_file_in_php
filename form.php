<form action="index.php" method="post">
  First Name<input type="text" name="first_name"><br><br>
  Last Name<input type="text" name="last_name"><br><br>
  <input type="hidden" name="cmd" value="write">
  <input type="submit" value="Submit">
</form>

<a href="index.php?cmd=read">Read</a>