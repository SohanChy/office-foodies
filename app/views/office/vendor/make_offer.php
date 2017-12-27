<?php include("header.html") ?>

<h1> Make offer for item </h1>

<h3>Item : <?=$data['orderData']["foodName"]?> </h3>
<h3>Office : <a href=""><?=$data['orderData']["officeName"]?></a> </h3>
<h3>Packets : <a href=""><?=$data['orderData']["packetNum"]?></a> </h3>

<form action="makeoffer">
    <input type="hidden" name="orderId" value="<?=$data['orderData']["orderId"]?>"
    <h3>Make Offer of Price : <input type="text" name="offerAmount"/></h3>
    <input type="submit"/>
</form>

<?php include("footer.html") ?>
