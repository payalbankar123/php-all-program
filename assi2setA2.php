<fieldset>
<legend>Registration Form</legend>
<form action="<?php echo  SELF'] ?>" method="POST">
<label>Enter Name* :</label><br>
<input type="text" name="tbl" value="<?php  placeholder=" Enter your name..."><br> <label>Contact Number* :</label><br>
<input type="text" name="tb2" value="<?php  maxlength="10"/><br>
<label>Address* :</label><br>
<input type="text" name="tb3" value='k?php if(isset($_POST['tb3'])) echo  placeholder:" Enter Address... "/><br> <label>Age* :</label><br> <input type="text" name="tb4" value="<?php  maxlength="2"/><br><br>
<input type="submit" name="submit" value="submit"></fieldset></form>
</html> <?php if(isset($_POST['submit'])){ echo"<br><br><center><table border='l'><tr>
<th colspan='4'><h3>Student Information</h3></th></tr><tr>
<th>Student Name</th>
<th>Contact Number</th>
<th>Address</th>
<th>Age</th></tr>
<tr><td>".$_POST['tb1']."</td>
