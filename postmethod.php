<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
if(count($_POST)>0) {
print "<PRE>";
print_r($_POST);
print "</PRE>";
}
}
?>
<form method="POST">
First Name: <input type="text" name="txt_first_name"></br>
Last Name: <input type="text" name="txt_last_name"></br>
<input type="submit" name="submit" value="Submit">
</form>
?>
