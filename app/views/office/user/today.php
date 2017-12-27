<?php include("header.html") ?>

<h2 id="suggest">Kacchi Biriyani is most popular, 
  Vote that today too?
  <br/>
  <a id="yesbtn" href=""> Yes </a>
</h2>



<h2> Todays Lunch Rank</h2> 
<table border="1">
    <tr>
        <th>Rank</th>
        <th>Menu</th>
        <th>Suggested By</th>
    </tr>
    <?php
      foreach ($data as $item)
      {
          echo "<tr>";
          echo '<td>'.$item[0].'<a href="#">&uarr;</a></td>';
          echo '<td>'.$item[1].'</td>';
          echo '<td>'.$item[2].'</td>';
          echo "<tr>";
      }

    ?>


</table>

<br/>
<br/>
<br/>

<?php include("footer.html") ?>
