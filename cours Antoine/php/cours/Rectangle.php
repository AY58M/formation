<?php
class Rectangle
{
    private $largeur;
    private $longueur;

    public function __construct($long, $larg)
    {
        $this->setLargeur($larg);
        $this->setLongueur($long);
    }

    public function getLargeur()
    {
        return $this->largeur;
    }

    public function getAir()
    {
        return $this->largeur * $this->longueur;
        // ou bien
        // return $this->getLargeur() * $this->getLongueur();
    }
    public function setLargeur($input_largeur)
    {
        if ($input_largeur > 0) {
            $this->largeur = $input_largeur;
            return true;
        } else {
            return false;
        }
    }

    public function getLongueur()
    {
        return $this->longueur;
    }
    public function setLongueur($input_longueur)
    {
        if ($input_longueur > 0) {
            $this->longueur = $input_longueur;
            return true;
        } else {
            return false;
        }
    }
}
