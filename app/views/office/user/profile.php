<?php include("header.html") ?>


    <fieldset>

        <fieldset>
        <label>Name: </label>
            <?=$data['name']?><br />
         <label>Email: </label>
            <?=$data['email']?><br />
        <label>User Name: </label>
            <?=$data['username']?><br />

         <label>Phone: </label><?=$data['phone']?><br />

         <a href="editprofile"><button>edit</button></a>
    </fieldset>


<?php include("footer.html") ?>
