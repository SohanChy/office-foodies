<?php include("header.html") ?>

<?php

foreach($data["orders"] as $order){
    echo "Order <b>{$order->food()->data["name"]}</b> - {$order->data["packets"]} Packets.";

    $bids = $order->bids();

    if(count($bids) > 0){
        echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
 	<tr>
		 <th>Vendor</th>
		 <th>Bid Amount</th>
		 <th>Action</th>
 	</tr>";

        foreach($bids as $bid){
            if($bid instanceof Bid){
                echo "<tr>
		 <td>{$bid->vendor()->data["name"]}</td>
		 <td>{$bid->data['bid_amount']} BDT</td>
		 <td>
			 
		 <form action=\"order\">
		 <input type='hidden' name='bid_id' value='{$bid->getId()}'>
		 <button>Order</button></form>
		
		</td>
	    </tr>";
            }
            else {
                echo "<td colspan='3'>No Bids Yet</td>";
            }
        }

        echo "</table><br />";
    }

}

?>


<?php include("footer.html") ?>
