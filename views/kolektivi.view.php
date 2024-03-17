<?php 
    require "components/head.php";
?>
<?php
    require "components/navbar.php";
?>
<h1>CKC Kolektivi</h1>

        <table>
            <tr>
                <th>Kolektivs</th>
                <th>Apraksts</th>
            </tr>
            <?php foreach($kolektivi as $kolektivs){?>
            <tr>
                <td><?= $kolektivs["name"]?></td>
                <td><?= $kolektivs["description"]?></td>
            </tr>
            <?php } ?>
        </table>
            
<?php
    require "components/footer.php";
?>