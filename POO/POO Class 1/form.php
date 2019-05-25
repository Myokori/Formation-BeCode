<?php

class Form
{
    private $data;
    public $surround = "p";
    public function __construct($data = array()){ 
        $this->data = $data;
    }

    public function input(){
        echo '<form method="POST"><input type="text"/>';
    }
    public function select(){
        echo '<p><select><option>Homme</option><option>Femme</option></select></p>';
    }
    public function submit(){
        echo '<p><button type="submit">Envoyer</button></p>';
    }
    public function textarea(){
        echo '<p><textarea row="50" col="6"></textarea></p>';
    }
    public function radio(){
        echo '<p><input type="radio" name="age" value="+18"/>+18</p>';
    }
    public function checkbox(){
        echo '<input type="checkbox" name="yes"/> Oui';
    }
    public function endForm(){
        echo '</form>';
    }
}
