<?php include("header.html") ?>
<h2> Popular In This Office
    <form action="popular">
        <input type="month" name="date">
        <input type="submit" value="submit">
    </form>

</h2> 

<table border="1">
  <tr>
    <th>Rank</th>
    <th>Menu</th>
    <th>Info</th>
  </tr>

    <?php
      $rank=1;
      foreach ($data['popularfoodlist'] as $item)
    {
        echo "<tr>";
        echo "<td>$rank</td>";
        echo "<td>$item[0]</td>";
        echo "<td>chosen $item[1] times</td>";
        echo "</tr>";

        $rank++;
    }
    ?>

</table>


</td>

<?php include("footer.html") ?>
