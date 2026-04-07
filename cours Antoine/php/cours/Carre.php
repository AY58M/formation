<?php
require_once('Rectangle.php');

Class Carre extends Rectangle {
    public function __construct($cote)
    {
        return parent:: __construct($cote, $cote);
    }

}

?>