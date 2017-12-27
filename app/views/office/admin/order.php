<?php include("header.html") ?>



<form action="finalorder">
  <input type="hidden" name="bid_id" value="<?=$data['bidId']?>">
  <input type="radio" name="method" value="bkash"> Bkash  - Ref ID: <input name="bkash"> <br><br/>
  <input type="radio" name="method" value="pod"> Pay On Delivery<br/>
  <br/>
  <button> Order </button>

</form>


<?php include("footer.html") ?>
