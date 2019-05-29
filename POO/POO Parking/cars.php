<?php
class Voiture
{
    public function __construct($imma, $date, $km, $modele, $marque, $color, $poids, $img, $reserved)
    {
        $this->immatriculation = $imma;
        $this->date = $date;
        $this->kilometre = $km;
        $this->modele = $modele;
        $this->marque = $marque;
        $this->couleur = $color;
        $this->poids = $poids;
        $this->img = $img;
        $this->reserved = $reserved;
    }
    
    public function rouler()
    {
        $this->kilometre += 100000;
    }

    public function Display()
    {
        //Vérification du poids de la voiture
        if ($this->poids >= 3500) {
            $class = "Commerciale";
        } else {
            $class = "Utilitaire";
        }
        //Vérification de la marque de la voiture
        if ($this->marque == "Audi") {
            $this->reserved = "Reserved";
        } else {
            $this->reserved = "Free";
        }
        //Vérification de l'immatriculation
        switch (substr("$this->immatriculation", 0, 2)) {
            case "BE":
                $origine = "Belgique";
                break;
            case "FR":
                $origine = "France";
                break;
            case "DE":
                $origine = "Allemagne";
                break;
        }
        //Vérification du kilometrage
        if ($this->kilometre < 100000) {
            $usage = "Low";
        }
        if ($this->kilometre > 100000) {
            $usage = "Middle";
        }
        if ($this->kilometre > 200000) {
            $usage = "High";
        }
        //Calcul du nombre d'année depuis la mise en circulation
        $currYear = date('Y');
        $year = substr($this->date, 6);
        $totalYear = $currYear - $year;
        //On crée la fonction pour rouler avec le véhicule
        //Création d'un tableau par voiture crée
        echo '<table class="tableau">';
        echo '<tr class="car"><td><img src="' . $this->img . '"></td></tr>';
        echo '<tr><td>Immatriculation : </td><td class="right">' . $this->immatriculation . '</td></tr>';
        echo '<tr><td>Origine : </td><td class="right">' . $origine . '</td></tr>';
        echo '<tr><td>Date de mise en ciruclation : </td><td class="right">' . $this->date . '</td></tr>';
        echo '<tr><td>En ciruclation depuis : </td><td class="right">' . $totalYear . ' ans</td></tr>';
        echo '<tr><td>Kilometrage : </td><td class="right">' . $this->kilometre . ' Km</td></tr>';
        echo '<tr><td>Utilisation : </td><td class="right">' . $usage . '</td></tr>';
        echo '<tr><td>Modèle du Véhicule : </td><td class="right">' . $this->modele . '</td></tr>';
        echo '<tr><td>Marque du Véhicule : </td><td class="right">' . $this->marque . '</td></tr>';
        echo '<tr><td>Couleur du Véhicule : </td><td class="right">' . $this->couleur . '</td></tr>';
        echo '<tr><td>Poids du Véhicule : </td><td class="right">' . $this->poids . ' Kg</td></tr>';
        echo '<tr><td> Classe : </td><td class="right">' . $class . '</td></tr>';
        echo '<tr><td>Status du Véhicule : </td><td class="right">' . $this->reserved . '</td></tr>';
        echo '</table>';
    }
}
