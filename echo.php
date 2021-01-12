<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Mon premier php </title>
    </head>

    <body>
        <h1>Liste des voitures</h1>
        <ul>
        <?php
        /*$marque = 'OhPonyBoy';
        $couleur = 'bleue';
        $immatriculation = 'Woutipoup';*/

        $voiture_1 = array(
            'marque' => 'OhPonyBoy',
            'couleur' => 'bleue',
            'immatriculation' => 'Woutipoup'
        );

        $voiture_2 = array(
            'marque' => 'Chevrolet',
            'couleur' => 'Jaune',
            'immatriculation' => '123tn69'
        );

        $voiture_3 = array(
            'marque' => 'Taonix',
            'couleur' => 'dark',
            'immatriculation' => 'XX69XX'
        );

        $voitures = array(
            $voiture_1,
            $voiture_2,
            $voiture_3
        );

        foreach ($voitures as $voiture) {
            echo '<li>Voiture ' . $voiture['immatriculation'] . ' de marque ' . $voiture['marque'] . ' (couleur ' . $voiture['couleur'] . ')</li>';
        }

        ?>
        </ul>
    </body>
</html>
