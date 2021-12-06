<?php

spl_autoload_register(
    function($ls){
        require"Classes/$ls.php";
    }
)


?>