<?php include("header.html") ?>

<?php

if( !isset($_SESSION['user']->data['voted_today']) ){
    echo "<h2 id='suggest'>{$data['lunchRank'][0]['foodName']} is most popular,
    Vote that today too?
    <br/>
    <a href='vote?lr={$data['lunchRank'][0]['lunchRankId']}'>Yes</a>
    </h2>";
}
?>


<h2> Todays Lunch Rank</h2> 
<table border="1">
    <tr>
        <th>Rank</th>
        <th>Votes</th>
        <th>Menu</th>
        <th>Suggested By</th>
    </tr>
    <?php
      $i = 1;
      foreach ($data['lunchRank'] as $item)
      {
          echo "<tr>";
          echo '<td>'.$i++.
              "<a href='vote?lr={$item['lunchRankId']}'> ";

          if($item['lunchRankId'] != $_SESSION['user']->data['voted_today']){
              echo " <img style='max-height: 20px;' src='https://d30y9cdsu7xlg0.cloudfront.net/png/428387-200.png'>";
          }
          else{
              echo " <img style='max-height: 20px;' src='https://d30y9cdsu7xlg0.cloudfront.net/png/1015745-200.png'>";
          }

          echo " </a></td>";
          echo '<td>'.$item['votes'].'</td>';
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
