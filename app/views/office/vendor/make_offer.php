<?php include("header.html") ?>

<h1> Make offer for item </h1>


<h3>Item : <?=$data['item']?> </h3>
<h3>Office : <a href=""><?=$data['officename']?></a> </h3>

<form action="makeoffer">
    <h3>Make Offer of Price : <input type="text" name="offeredmoney"/></h3>
    <input type="submit"/>
</form>

<?php include("footer.html") ?>
