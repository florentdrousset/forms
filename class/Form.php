<?php

/**
 * Class Form
 * Permet de générer un formulaire rapidement et simplement
 */
class Form{
    /**
     * @var array Données utilisées par le formulaire.
     */
    protected $data = array();

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
    protected function surround($html) {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param $index string Index de la valeur à récupérer
     * @return mixed|null
     */
    protected function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string
     * @return string
     */
    public function input($name){
        return $this->surround('<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">');
    }

    /**
     * @return string
     */
    public function submit() {
        return '<button type="submit">Envoyer</button>';
    }
}