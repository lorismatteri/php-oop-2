<?php
    class User {
        public $id;
        public $username;
        public $image;
        public $articoli_letti;
        public $commenti;

        public function __construct(int $id, string $username){
            $this->id = $id;
            $this->username = $username;
        }
    }