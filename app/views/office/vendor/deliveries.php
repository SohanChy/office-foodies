<?php include("header.html") ?>

<h1> My Deliveries </h1>

<input placeholder="Search"/>
<select>
	<option>Date</option>
	<option>Company</option>
	<option>Vendor</option>
</select>
<button> Find </button>

<table border="0" cellspacing="0" cellpadding="0">
 	<tr>

		 <th>Company Name</th>
		 <th>Order</th>
		 <th>Amount</th>
		 <th>Status</th>
		 <th>Action</th>
 	</tr>
    <?php
    foreach ($data['ordersList'] as $order)
    {
        echo "<tr>";
        echo "<td><a href='#'>{$order['officeName']}</a></td>";
        echo "<td>{$order['foodName']}</td>";
        echo "<td>{$order['packetNum']}</td>";

        $status = Order::$deliveryStatus[$order['orderStatus']];
        echo "<td>{$status}</td>";
        echo "<form action='delivered'>
                  <td><input type='hidden' value='{$order['orderId']}' name='orderId'> <input value='Delivered' type='submit'></td>
                </form>";
        echo "</tr>";
    }
    ?>


 	
 </table>
</td>

<?php include("footer.html") ?>
