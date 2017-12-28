<?php include("header.html") ?>

<h2 id="suggest"><?=$data['lunchRank'][0]['foodName']?> is most popular,
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
      $i = 1;
      foreach ($data['lunchRank'] as $item)
      {
          echo "<tr>";
          echo '<td>'.$i++.
              "<a href='vote?lr={$item['lunchRankId']}'>&uarr;</a>
                ({$item['votes']})</td>";
          echo '<td>'.$item['foodName'].'</td>';
          echo '<td>'.$item['suggesterName'].'</td>';
          echo "<tr>";
      }

    ?>


</table>

<br/>
<br/>
<br/>

<?php include("footer.html") ?>
