<?php include("header.html") ?>

<h1> Open Food Orders </h1>
<table border="0" cellspacing="0" cellpadding="0">
 	<tr>
		 <th>Company Name</th>
		 <th>Order</th>
		 <th>Amount</th>
		 <th>Bid Amount</th>
		 <th>Status</th>
 	</tr>

    <?php
    foreach ($data['mybidinglist'] as $list)
    {
        echo "<tr>";
        echo "<td><a href='#'>$list[0]</a></td>";
        echo "<td>$list[1]</td>";
        echo "<td>$list[2]</td>";
        echo "<td>$list[3] taka</td>";
        echo "<td>$list[4]</td>";
        //echo "<td><a href='#'>Take this order</a></td>";
        echo "</tr>";
    }
    ?>


 	
 </table>
</td>

<?php include("footer.html") ?>
