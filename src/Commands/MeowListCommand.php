<?php

namespace Toniperic\Kittens\Commands;

use Illuminate\Console\Command;

class MeowListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'meow:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Displays kitten types';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $kittens = app('kittens')->getAvailableKittens();

        return $this->info('Available kitten types: ' . implode(', ', $kittens));
    }
}
