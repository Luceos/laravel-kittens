<?php

namespace Toniperic\Kittens\Kittens;

use Toniperic\Kittens\Kitten;

class Schrodinger implements Kitten
{

    public static function render()
    {
        return <<<EOF
              ,-.       _,---._ __  / \
             /  )    .-'       `./ /   \
            (  (   ,'            `/    /|
             \  `-"             \'\   / |
              `.              ,  \ \ /  |
               /`.          ,'-`----Y   |
              (            ;        |   '
              |  ,-.    ,-'         |  /
              |  | (   |            | /
              )  |  \  `.___________|/
              `--'   `--'
EOF;

    }
}
