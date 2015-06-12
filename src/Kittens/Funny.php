<?php

namespace Toniperic\Kittens\Kittens;

use Toniperic\Kittens\Kitten;

class Funny implements Kitten
{
    public static function render()
    {
        return <<<EOF
               ______
          <fg=green>|             .</fg=green>
          <fg=green>|           __|___</fg=green>       ^'.           .-
          <fg=green>|  .          |</fg=green>         / \ '..----..'`/ \
          <fg=green>|  |  . ,''   |</fg=green>         '  '   /      \  |
          <fg=green>|  |  | |     |</fg=green>         \ , `''         /
      <fg=green>,   .  |  |  `.   |</fg=green>          /  ()    ()    `
       <fg=green>\  |  |  ;    |  |</fg=green>         /      _         \
       <fg=green> '-'  `'` ,_,'   |  /</fg=green>     '      \_/         '
       <fg=green>   .             '-'</fg=green>       `.    ,_        .`'.
  <fg=green>|     __|___.</fg=green>                     `-._/ \,   _.'\   `.
  <fg=green>|       | __|___</fg=green>                    _(__/        `...'^.
  <fg=green>|  ,'   |   |    o             |</fg=green>   /    `\          ,--.'
  <fg=green>;,'   o |   |    |        .-,  |</fg=green>  |       `.  /    |     ".
  <fg=green>| \   | |   |    | | .-. /  |  |</fg=green>  \_| \_,   ''     '       `
  <fg=green>|  \  | |   |    | |/  | |  |  |</fg=green>    `-'\            `._     \
  <fg=green>|   \ | |  /|    | |   | ;  |  |</fg=green>    '   '.             ' --.'
  <fg=green>|    `| '-' |  / ` |   |  `-|  |</fg=green>   /   '  `'--'       ,.    |
<fg=green>        `     '-'    |   `-'  |  o</fg=green>  /    |            .'      /
  <fg=green>____________________________|</fg=green>________________________________
EOF;
    }
}
