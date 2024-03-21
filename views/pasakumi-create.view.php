<?php 
    require "components/head.php";
?>
<?php
    require "components/navbar.php";
?>
<p>PIEVIENO PASAKUMU</p>
<form method="POST">
    <label>
        Datums(Y.M.D H:M):
        <input name="date"/>
    </label>
    <label>
        Nosaukums:
        <input name="title"/>
    </label>
    <label>
        Vieta:
        <input name="location"/>
    </label>
    <button>Save</button>
</form>
<?php
    require "components/footer.php";
?>