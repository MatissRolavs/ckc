<?php 
    require "components/head.php";
?>
<?php
    require "components/navbar.php";
?>
<p>PIEVIENO KOLEKTIVU</p>
<form method="POST">
    <label>
        Nosaukums:
        <input name="title"/>
    </label>
    <label>
        Apraksts:
        <input name="description"/>
    </label>
    <button>Save</button>
</form>
<?php
    require "components/footer.php";
?>