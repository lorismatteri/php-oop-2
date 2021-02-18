<?php
class Profilo extends User {
    public $nome;
    public $cognome;
    public $data_di_nascita;
    public $genere;
    public $città;
    
    public function __construct(string $username, string $email, string $password, string $nome ="", string $cognome ="", string $data_di_nascita = "", string $genere = "", string $città = "") {
        parent::__construct($username, $email, $password);
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->data_di_nascita = $data_di_nascita;
        $this->genere = $genere;
        $this->città = $città;
    }
}