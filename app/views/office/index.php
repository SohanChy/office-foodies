<?php 
include("header.html") ?>

<h2> Welcome To Office Foodies </h2> 
<h4> Food for your workplace, Hassle free!</h4>
<h4> Popular Menus Today: </h4>
<table border="1">
  <tr>
    <th>Menu</th>
    <th>Offices Eating This</th>


  </tr>
    <?php

  foreach($data["listing"] as $list){
      echo "  <tr>
    <td>{$list['foodName']}</td>
    <td> {$list['eatnum']} </td>

  </tr>";
  }


    ?>


</table>

</td>

<?php include("footer.html") ?>
