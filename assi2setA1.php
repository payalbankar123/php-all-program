<fieldset>
<legend>Form</legend>
<form action="<?php echo  SELF'] ?>" method="POST">
<label>Enter Name* :</label>
<input type="text" name="tbl" placeholder="Enter your name..."><br>
<label>Select Cities* :</label><br>
<select name="cities[]" multiple>
<option value="Mumbai">Mumbai</option>
<option value="Delhi">Delhi</option>
<option value="Surat">Surat</option>
<option value="Agra">Agra</option>
<option value="Goa">Goa</option>
</select><br>
<input type="submit" name="submit" value="submit">
</fieldset>
</form>
</html> 
<?php if(isset($_POST['submit'])){ if(array_key_exists('submit',$_POST)){ echo"<h3>Result :</h3>"; 
echo"<table border=1 1'><tr><th>Name</th><th>Selected Cities</th></tr> <tr><td>"  
 
 
