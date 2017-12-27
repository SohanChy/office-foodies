<?php include("header.html") ?>

<h1> Open Food Orders </h1>
<table border="0" cellspacing="0" cellpadding="0">
 	<tr>

		 <th>Company Name</th>
		 <th>Order</th>
		 <th>Amount</th>
		 <th>Action</th>
 	</tr>
    <?php
      foreach ($data['foodorderlist'] as $list)
      {
          echo "<tr>";
          echo "<td><a href='#'>$list[0]</a></td>";
          echo "<td>$list[1]</td>";
          echo "<td>$list[2]</td>";
          echo "<form action='takeorder'>
                  <td><input type='submit' name='$list[3]'></td>
                </form>";
          echo "</tr>";
      }
    ?>


 	
 </table>
</td>

<?php include("footer.html") ?>
