<?php
    require_once("Pot.php");
    require_once("Knife.php");
    require_once("Material.php");
    require_once("Chef.php");
    

    $pot = new Pot();
    $knife = new Knife();
    $material = new Material();
    $chef = new Chef();
    $chef->cook($pot,$knife,$material);
    
?>