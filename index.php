<?php
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'ND'],
    ['name' => 'Silvio', 'surname' => 'Rossi', 'gender' => 'M'],
    ['name' => 'Sandra', 'surname' => 'Verdi', 'gender' => 'F'],
    ['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
  ];

  foreach ($users as $user) {
    switch($user['gender']) {
      case 'M':
        $gender = 'Maschio';
        echo "Buongiorno signor " . $user['name'] . " " . $user['surname'];
        break;
      case 'F':
        $gender = 'Femmina';
        echo "Buongiorno signora " . $user['name'] . " " . $user['surname'];
        break;
      default:
        $gender = 'Non specificato';
        echo "Buongiorno " . $user['name'] . " " . $user['surname'];
    }
  };

  ?>