<?php
if(count($_GET)>0) {
print "<PRE>";
print_r($_GET);
print "</PRE>";
}
?>
<form>
First Name: <input type="text" name="txt_first_name"></br>
Last Name: <input type="text" name="txt_last_name"></br>
<input type="submit" name="submit" value="Submit">
</form>
?>