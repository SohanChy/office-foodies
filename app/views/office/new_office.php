<?php include("header.html") ?>

<a href="registration"> Register as a user (office employee) </a> |
<a href="new_office"> Register as a office </a> |
<a href="new_vendor"> Register as a food vendor </a> |
<br />
<br />
 <form action="checkregistrationadmin">
	 <fieldset>
 	 <label>Office Name</label>
 	 <input type="text" name="officename"><br><br>
	 <label>Delivery Address</label>
	 <input type="text" name="deliveryaddress"><br><br>
	</fieldset>
	 
	<fieldset>
		<legend>Person who will manage the account of this office</legend>
 	<label>Name</label>
 	<input type="text" name="name"><br><br>
 	<label>Email</label>
 	<input type="text" name="email"><br><br>
 	<label>User Name</label>
 	<input type="Text" name="username"><br><br>
 	<label>password</label>
 	<input type="password" name="password"><br><br>
 	<label>Confirm Password</label>
 	<input type="password" name="confirmpassword"><br><br>
	 
	 <label>Phone</label>
	 <input type="text" name="phone"><br><br>

	 </fieldset>
	 
 	 <input type="submit">
 </form>
</td>

<?php include("footer.html") ?>
