<?php

namespace Toniperic\Kittens\Commands;

use Illuminate\Console\Command;

class MeowCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'meow {type?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Displays a kitten!';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        return $this->line(
            app('kittens')->meow($this->argument('type'))
        );
    }
}
