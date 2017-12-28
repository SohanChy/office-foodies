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
      foreach ($data['orderList'] as $order)
      {
          echo "<tr>";
          echo "<td><a href='#'>{$order['officeName']}</a></td>";
          echo "<td>{$order['foodName']}</td>";
          echo "<td>{$order['packetNum']}</td>";
          echo "<form action='takeorder'>
                  <td><input type='hidden' value='{$order['orderId']}' name='orderId'> <input value='Bid' type='submit'></td>
                </form>";
          echo "</tr>";
      }
    ?>


 	
 </table>
</td>

<?php include("footer.html") ?>
