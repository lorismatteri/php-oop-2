<?php
    class Articolo {
        public $id;
        public $title;
        public $argument;
        public $author;

        public function __construct(int $id, string $title, string $argument, string $author){
            $this->id = $id;
            $this->title = $title;
            $this->argument = $argument;
            $this->author = $author;
        }

        
    }