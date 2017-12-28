<?php include("header.html") ?>

<h1> My Bids </h1>
<table border="0" cellspacing="0" cellpadding="0">
 	<tr>
		 <th>Company Name</th>
		 <th>Order</th>
		 <th>Amount</th>
		 <th>Bid Amount</th>
		 <th>Status</th>
 	</tr>

    <?php
    foreach ($data['myBids'] as $bid)
    {
        echo "<tr>";
        echo "<td><a href='#'>{$bid['officeName']}</a></td>";
        echo "<td>{$bid['foodName']}</td>";
        echo "<td>{$bid['packetNum']}</td>";
        echo "<td>{$bid['bidAmount']} taka</td>";
        $status = Bid::$status[$bid['status']];
        echo "<td>{$status}</td>";
        //echo "<td><a href='#'>Take this order</a></td>";
        echo "</tr>";
    }
    ?>


 	
 </table>
</td>

<?php include("footer.html") ?>
