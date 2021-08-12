<?php
    $anony = new class {
        public function hello($n)
        {
            echo "Hello $n";
        }
    };

    echo $anony->hello('Bhargav Javia');
?>