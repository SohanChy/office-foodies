<?php include("header.html") ?>
<h2> Suggest A Menu </h2> 

<form action="myvote">
    <label>From Approved Menu</label>
    <select name="menu">
        <?php
          foreach ($data['approvedmenu'] as $menu)
              echo "<option value='$menu'>$menu</option>";
        ?>
    </select>

    <br>
    <input type="submit" value="submit">
</form>
<br><br>

<label>Suggest a new item for approval</label>
<form action="mynewsuggestion">
    <input type="text" name="mysuggestedfood">
    <br>
    <input type="submit" value="submit">
    </form>
</td>

<?php include("footer.html") ?>
