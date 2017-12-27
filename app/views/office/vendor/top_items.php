<?php include("header.html") ?>

<h1> My Top Items </h1>

<table border="0" cellspacing="0" cellpadding="0">
 	<tr>
		 <th>Item</th>
		 <th>Orders</th>
		 <th>You sell at</th>
 	</tr>

    <?php
    foreach ($data['mytopitems'] as $list)
    {
        echo "<tr>";
        echo "<td>$list[0]</td>";
        echo "<td>$list[1]</td>";
        echo "<td>$list[2]</td>";

        //echo "<td><a href='#'>Take this order</a></td>";
        echo "</tr>";
    }
    ?>


 	
 </table>
</td>

<?php include("footer.html") ?>
