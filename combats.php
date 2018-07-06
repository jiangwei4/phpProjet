<?php
require 'De.php';
require  'MonstreDifficile.php';
require 'Joueur.php';
session_start();
$j1=$_SESSION['J1'];
$bool=false;
    $monstre;
    $aff = '<table><tr><th>' . $j1->getNom() . '</th><th>';
    if (rand(0, 5) < 4) {
        $aff = $aff . 'Monstre Facile</th></tr>';
        $DeMonstre = new De(6);
        $monstre = new MonstreFacile();
        $bool = false;

    } else {
        $aff = $aff . 'Monstre Difficile</th></tr>';
        $DeMonstre = new De(10);
        $monstre = new MonstreDifficile();
        $bool = true;
    }

if($j1->getVie()>0) {

        $DeJoueur = new De(6);
        $j = $DeJoueur->LanceLeDe();
        $m = $DeMonstre->LanceLeDe();
        $aff = $aff . '<tr><td>' . $j . '</td><td>' . $m . '</td></tr>';
        if ($j >= $m) {
            $j1->setPoints($monstre->getPoint());
            $aff = $aff . '<tr><td colspan="2">Victoire</td></tr>';
            if ($bool) {
                $j1->setMD(1);
            } else {
                $j1->setMF(1);
            }

        } else {
            $vie = $j1->getVie();
            $j1->SubitDegats($monstre->getDegats());
            if ($vie == $j1->getVie()) {
                $aff = $aff . '<tr><td colspan="2">DEGATS esquivé</td></tr>';
            } else {
                $aff = $aff . '<tr><td colspan="2">DEGATS + ' . $monstre->getDegats() . '</td></tr>';
            }
            if ($bool) {
                $aff = $aff . '<tr><td colspan="2">2 eme attaque  </td></tr>';
                $m = $DeJoueur->LanceLeDe();   //pour avoir le de de 1 a 6
                $aff = $aff . '<tr><td></td><td>' . $m . '</td></tr>';
                $vie = $j1->getVie();
                $j1->SubitDegats($m * $monstre->getDegatsSort());
                if ($vie == $j1->getVie()) {
                    $aff = $aff . '<tr><td colspan="2">DEGATS esquivé</td></tr>';
                } else {
                    $aff = $aff . '<tr><td colspan="2">DEGATS + ' . $m * $monstre->getDegatsSort() . '</td></tr>';
                }
            }


        }
    $aff = $aff . '</table>';
    $aff = $aff . 'Points :' . $j1->getPoints() . '  Vie :' . $j1->getVie(). '  monstre Facile tué :' . $j1->getMF(). '  monstre difficile tué :' . $j1->getMD();
    echo $aff;
} else {
    echo 'vous etes mort, vous avez tué Monstre Facile :'.$j1->getMF().' Monstre Difficile :'.$j1->getMD().' Points :'.$j1->getPOints();
}

