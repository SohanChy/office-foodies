<?php include("header.html") ?>

<h1> My Top Cleints </h1>

<table border="0" cellspacing="0" cellpadding="0">
 	<tr>

		 <th>Company Name</th>
		 <th>Item</th>
		 <th>Orders</th>
 	</tr>

    <?php
    foreach ($data['mytopclient'] as $list)
    {
        echo "<tr>";
        echo "<td><a href='#'>$list[0]</a></td>";
        echo "<td>$list[1]</td>";
        echo "<td>$list[2] orders</td>";

        //echo "<td><a href='#'>Take this order</a></td>";
        echo "</tr>";
    }
    ?>




 	
 </table>
</td>

<?php include("footer.html") ?>
