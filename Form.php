<?php

/**
 * Class Form
 * Permet de générer un formulaire rapidement et simplement
 */
class Form{
    /**
     * @var array Données utilisées par le formulaire.
     */
    private $data = array();

    /**
     * @var string Tag utilisé pour entourer les champs.
     */
    public $surround = 'p';

    public function __construct($data = array())
    {
        $this->data = $data;
    }

    /**
     * @param $html string Code HTML à entourer
     * @return string
     */
    private function surround($html) {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param $index string Index de la valeur à récupérer
     * @return mixed|null
     */
    private function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string
     * @return string
     */
    public function input($name){
        return $this->surround('<input type="text" name="'.$name.'"> <value="'.$this->data['username'].'">');
    }

    /**
     * @return string
     */
    public function submit() {
        return '<button type="submit">Envoyer</button>';
    }
}