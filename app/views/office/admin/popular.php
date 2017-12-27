<?php include("header.html") ?>
<h2> Popular In This Office 
<select>
<option>Today</option>
<option>This Month</option>
<option>Last Month</option>
<option>Overall</option>
</select>
</h2> 

<table border="1">
  <tr>
    <th>Rank</th>
    <th>Menu</th>
    <th>Info</th>
    <th>Order</th>
  </tr>
    <?php
    $i = 1;
    foreach ($data['lunchRankList'] as $item)
    {
        echo "<tr>";
        echo "<td>".$i++."</td>";
        echo "<td>{$item['foodName']}</td>";
        echo "<td>Chosen {$item['votes']} Times</td>";
        echo "<td><form action='placeorder'>
                  <input name='packets' placeholder=\"Packets Amount\"/>
                  <input type='hidden' value='{$item['foodId']}' name='foodId'> <button>Order</button></td>
                </form>";
        echo "</tr>";
    }
    ?>

</table>


</td>

<?php include("footer.html") ?>
