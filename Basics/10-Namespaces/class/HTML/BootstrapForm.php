<?php

namespace Tutoriel\HTML;

/**
 * Class BootstrapForm
 */
class BootstrapForm extends Form
{

    /**
     * @param $html string Html code to surround
     * @return string
     */
    protected function surround($html)
    {
        return '<div class="form-group">' . $html . '</div>';
    }


    /**
     * @param $name string
     * @return string
     */
    public function input($name)
    {
        return $this->surround(
            '<label>' . $name . '</label>'.
            '<input type="text" name="'.$name.'" value="'.$this->getValue($name).'" class="form-control">'
        );
    }

    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type=submit" class="btn btn-primary">Envoyer</button>');
    }
}
