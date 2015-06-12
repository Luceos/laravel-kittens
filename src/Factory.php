<?php

namespace Toniperic\Kittens;

use Illuminate\Filesystem\Filesystem;

class Factory
{
    public function __construct(Filesystem $files)
    {
        $this->files = $files;
    }

    public function create($args)
    {
        if (!isset($args) || !$args[0]) {
            $args[0] = $this->getRandomKitten();
        }

        $class = "Toniperic\\Kittens\\Kittens\\" . ucfirst($args[0]);

        return $class::render();
    }

    protected function getKittensFilenames()
    {
        return $this->files->files(__DIR__ . '/Kittens');
    }

    protected function getKittenName($file)
    {
        return $this->files->name($file);
    }

    public function getAvailableKittens()
    {
        $filenames = $this->getKittensFilenames();

        $result = [];

        foreach($filenames as $file)
        {
            $result[] = $this->files->name($file);
        }

        return $result;
    }

    public function getRandomKitten()
    {
        $kittens = $this->getAvailableKittens();

        shuffle($kittens);

        return $kittens[0];
    }

    public function __call($name, $args = [])
    {
        return $this->create($args);
    }
}
