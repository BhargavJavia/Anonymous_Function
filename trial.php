<?php
    $anony= function ($a,$b)
    {
        return $a<$b;
    };

    var_dump(
        $anony(102,113)
    );
?>