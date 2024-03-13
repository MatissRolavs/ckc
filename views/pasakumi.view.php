<?php 
    require "components/head.php";
?>
<?php
    require "components/navbar.php";
?>
<ul>
        <?php foreach($pasakumi as $pasakums){ ?>
        <li><?= $pasakums["datums"]." / ".$pasakums["nosaukums"]." / ".$pasakums["vieta"]?></li>
        <?php } ?>  
</ul>
<?php
    require "components/footer.php";
?>