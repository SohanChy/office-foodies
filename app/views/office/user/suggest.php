<?php include("header.html") ?>
<h2> Suggest A Menu </h2> 

<form action="myvote">
    <label>From Approved Menu</label>
    <select name="menu">
        <?php
          foreach ($data['fList'] as $food)
              echo "<option value='{$food->getId()}'>{$food->data['name']}</option>";
        ?>
    </select>

    <br>
    <br>
    <button>Suggest</button>
</form>
<br><br>

<?php include("footer.html") ?>
