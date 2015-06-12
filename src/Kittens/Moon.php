<?php

namespace Toniperic\Kittens\Kittens;

use Toniperic\Kittens\Kitten;

class Moon implements Kitten
{
    public static function render()
    {
        return <<<EOF
   .         *     <fg=yellow>,MMM8&&&.</fg=yellow>            *
                  <fg=yellow>MMMM88&&&&&</fg=yellow>    .
                 <fg=yellow>MMMM88&&&&&&&</fg=yellow>
     <options=bold>*</options=bold>           <fg=yellow>MMM88&&&&&&&&</fg=yellow>
                 <fg=yellow>MMM88&&&&&&&&</fg=yellow>
                 <fg=yellow>'MMM88&&&&&&'</fg=yellow>
                   <fg=yellow>'MMM8&&&'</fg=yellow>      *
           <fg=blue>/\/|_</fg=blue>      <fg=red>__/\\\\ </fg=red>
          <fg=blue>/    -\ </fg=blue>   <fg=red>/-   ~\ </fg=red>  .              '
          <fg=blue>\    = Y</fg=blue> <fg=red>=T_ =   /</fg=red>
           <fg=blue>)==*(`</fg=blue>     <fg=red>`) ~ \ </fg=red>
          <fg=blue>/     \ </fg=blue>    <fg=red>/     \ </fg=red>
          <fg=blue>|     |</fg=blue>     <fg=red>) ~   (</fg=red>
         <fg=blue>/       \ </fg=blue>  <fg=red>/     ~ \ </fg=red>
         <fg=blue>\       /</fg=blue>   <fg=red>\~     ~/</fg=red>
  _/\_/\_/<fg=blue>\__  _/</fg=blue>_/\_/<fg=red>\__~__/</fg=red>_/\_/\_/\_/\_/\_
  |  |  |  | <fg=blue>) )</fg=blue> |  |  | <fg=red>((</fg=red>  |  |  |  |  |  |
  |  |  |  |<fg=blue>( (</fg=blue>  |  |  |  <fg=red>\\\\ </fg=red>|  |  |  |  |  |
  |  |  |  | <fg=blue>)_)</fg=blue> |  |  |  |<fg=red>))</fg=red>|  |  |  |  |  |
  |  |  |  |  |  |  |  |  <fg=red>(/</fg=red> |  |  |  |  |  |
  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |
EOF;
    }
}
