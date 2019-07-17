<?php


class Archer extends Personnage
{
    public $arc = 3;
    protected $vie = 12;

    public function __construct($nom) {
        $this->vie = $this->vie/2;
        parent::__construct($nom);
    }

    public function attaque(Personnage $cible) {
        $cible->vie -= $this->atk;
        parent::attaque($cible);
        $cible->empecher_negatif();
    }
}