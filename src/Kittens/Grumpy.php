<?php

namespace Toniperic\Kittens\Kittens;

use Illuminate\Support\Collection;
use Toniperic\Kittens\Kitten;


class Grumpy implements Kitten
{
    public static function render()
    {
        $quote = self::getQuote();

        return <<<EOF
              .__....._             _.....__,
                 .": o :':         ;': o :".
                 `. `-' .'.       .'. `-' .' {$quote['top']}
                   `---'             `---'

         _...----...      ...   ...      ...----..._
      .-'__..-""'----    `.  `"`  .'    ----'""-..__`-.
     '.-'   _.--"""'       `-._.-'       '"""--._   `-.`
     '  .-"'                  :                  `"-.  `
       '   `.              _.'"'._              .'   `
             `.          /"       "\           .'
               `.       /           \        .'  {$quote['bottom']}
                 `-._                   _.-'
                     `"'--...___...--'"`
EOF;
    }

    public static function getQuote()
    {
        return Collection::make([
            [
                'top' => 'I had fun once...',
                'bottom' => 'It was awful'
            ],
            [
                'top' => 'So you\'re about to deploy?',
                'bottom' => 'Hope you get 500'
            ],
            [
                'top' => 'This terminal',
                'bottom' => 'I hate it'
            ],
            [
                'top' => 'What doesn\'t kill you',
                'bottom' => 'Will hopefully try again'
            ],
            [
                'top' => 'Unit testing?',
                'bottom' => 'It fails'
            ],
            [
                'top' =>'They said it wouldn\'t be easy..',
                'bottom' => 'they were right.'
            ],
            [
                'top' =>'Open source contributions were great..',
                'bottom' => 'until you came along.'
            ],
            [
                'top' =>'You\'ll love Laravel they said,',
                'bottom' => 'but then came the kittens.'
            ],
            [
                'top' =>'Little animals are adorable..',
                'bottom' => 'I hate kittens.'
            ],
        ])->random();
    }
}

