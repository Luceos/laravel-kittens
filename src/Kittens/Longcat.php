<?php

namespace Toniperic\Kittens\Kittens;

use Toniperic\Kittens\Kitten;

class Longcat implements Kitten
{
    public static function render()
    {
    	$length = 1;
    	$long_cat = <<<'CAT'
                                      ,ggg
                                     $P  ]$
                       ggg,         $PF   $@
                      '$, "9@ggg@@BP"s,   ]@
                        ]@ '         /""`= ]%g,_
    ,ggg,,gg===gg,,      $p   ,   , {       v   5$g,
   $`   ' `       "*9B@gg$P (@'   '@)\__     `   *$y
   $,                     L             '\         $g
    "9B@gggggg,           [    Y          \         $
              "9@g,        V   '        .   `       $
                  "9@gg,     ^~===-^^"              $
                       ""*9@g,                     ]$
                             ]@                    ]$
                              $p                   $P
                              ][                   $
                              $@                  ]$
                              $                   ]$
                             $@                    $
                             $P                    $U
                            ]$                     ]$
                            ]$                     ]$
                            $@                     ]$
                            $P                     ]$
                            $                      ]$
                            $                      ]$
CAT;

	    for ($i = 1; $i <= $length; $i++) {
        	$long_cat .= <<<'CAT'

                           ]$                      ]$
                           ]$                      ]$
                           ]$                      ]$
CAT;
    	}

        $long_cat .= <<<'CAT'

                           ]$                      $@
                           ]$                      $U
                           ]$                      $
                           ]$                     ]$
                            $p                    ]$
                            ]@                    $@
                            ]$                    $@
                            $`                    $@
                           $@                     ]@
                           $L                     '$
                           $@                      "$g
                           ]$                        '*9@gggggg,,
                           ]$                                   "%$,
                           g@                    ],               ]$
                          ]$                     ]$9$@gggg,,,,,,,,g@
                          ]$           ,         ]$        ''""""`
                          ]$          $$         $P
                           $         ]$$@       ]$
                           ]@        $P$@       $`
                            $p      ]$ $U      $@
                            ]$      ]$ ]@     ]$
                            ]$      $P ]$     ]$
                            $@     ]$   $     ]$
                           ]$      $`   $     ]$
                          ,g@     $@    $p     $y
                         $P`     ,$     $`      "$y
                        ]$      g$`     $y,     ,$M
                         5@ggg@P`         *&@BBBP
CAT;

    return $long_cat;
    }

/*  
	It'd be great to be able to pass the length of longcat,	but sadly 
	I'm not sure how to add the option to use another argument e.g.

		php artisan meow longcat 5
	
	I've read the Laravel docs and gotten as far as the function 
	below, so feel free to make use of it if you know what to do!

    protected function getArguments() {
        return [
            ['length', InputArgument::OPTIONAL, 'Length of longcat!', 1],
        ];
    }
*/
}
