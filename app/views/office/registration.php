<?php include("header.html") ?>

<a href="registration"> Register as a user (office employee) </a> |
<a href="new_office"> Register as a office </a> |
<a href="new_vendor"> Register as a food vendor </a>
<br /><br />


 <form action="checkregistrationuser">

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
 	<input type="submit" value="Submit">
 </form>

</td>

<?php include("footer.html") ?>
