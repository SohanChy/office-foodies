<?php include("header.html") ?>

<a href="registration.php"> Register as a user (office employee) </a> | 
<a href="new_office.php"> Register as a office </a> | 
<a href="new_vendor.php"> Register as a food vendor </a> | 
<br /><br />
 <form >
	 <fieldset>
 	 <label>Vendor Name</label>
 	 <input type="text" name="office_name"><br><br>

	</fieldset>
	 
	<fieldset>
		<legend>Person who will manage the account of this Vendor</legend>
 	<label>Name</label>
 	<input type="text" name="username"><br><br>
 	<label>Email</label>
 	<input type="text" name="email"><br><br>
 	<label>User Name</label>
 	<input type="Text" name="username"><br><br>
 	<label>password</label>
 	<input type="password" name="password"><br><br>
 	<label>Confirm Password</label>
 	<input type="password" name="password"><br><br>
	 
	 <label>Phone</label>
	 <input type="text" name="office_type"><br><br>

	 </fieldset>
	 <fieldset>
		 <h3>Your account will not be approved untill we physically confirm your registration</h3>
	</fieldset>

 	 <input type="submit">
 </form>
</td>

<?php include("footer.html") ?>
