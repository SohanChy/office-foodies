<?php include("header.html") ?>

<select>
	<option>Date</option>

</select>
<button> Find </button>

<table border="0" cellspacing="0" cellpadding="0">
 	<tr>
		 <th>Name</th>
		 <th>Email</th>
 	</tr>
    <?php

    foreach($data["users"] as $user){
        echo "<tr>
		<td>{$user->data["name"]}</td>
		 <td>{$user->data['email']}</td>
		 </td>
 	      </tr>";
    }

    ?>

 	
 </table>
</td>

<?php include("footer.html") ?>
