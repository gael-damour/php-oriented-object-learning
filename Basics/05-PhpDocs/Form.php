<?php

/**
 * Class Form
 * Allows to generate a form simply.
 */
class Form
{
    /**
     * @var array Data used by the form
     */
    private $data;

    /**
     * @var string Tag used to surround the fields
     */
    public $surroundTag = 'p'; // Public because if we want change the surround tag

    /**
     * Form constructor.
     * @param array $data Data used by the form
     */
    public function __construct($data = array())
    {
        $this->data = $data;
    }

    /**
     * @param $html string Html code to surround
     * @return string
     */
    private function surround($html)
    {
        return "<{$this->surroundTag}>{$html}<{$this->surroundTag}>";
    }

    /**
     * @param $index string Index of value to get
     * @return mixed|null
     */
    private function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string
     * @return string
     */
    public function input($name)
    {
        return $this->surround('<input type=text" name="'.$name.'" value="'.$this->getValue($name).'">');
    }

    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type=submit">Envoyer</button>');
    }
}
