<?php

namespace Model;

class CounterDAO {
    private $fileName;

    public function __construct(string $filename) {
        $this->fileName = $filename;
    }

    private function getCounter() : int {
        $fileContent = file_get_contents($this->fileName);
        if(!$fileContent) {
            $counter = 0;
        } else {
            $counter = unserialize($fileContent);
        }

        return $counter;
    }

    private function setCounter(int $counter) : CounterDAO {
        file_put_contents($this->fileName, serialize($counter));
        return $this;
    }

    public function getIncrementedCounter() : int {
        $counter = $this->getCounter();
        $counter++;

        $this->setCounter($counter);

        return $counter;
    }
}