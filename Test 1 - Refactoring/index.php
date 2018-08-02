<?php

function moveLocation($animal, $newLocation) {
    $animal['location'] = $newLocation;
    return $animal;
}

function calculateAge($dob){
    $dob = date("Y-m-d", strtotime($dob));
    $dobObject = new DateTime($dob);
    $nowObject = new DateTime();
    $diff = $dobObject->diff($nowObject);
    return $diff->y;
}

$animal1 = array(
    'name' => 'John',
    'chipID' => '0160726400',
    'species' => 'Feline',
    'breed' => 'Mixed',
    'dob' => '05-12-2008',
    'location' => 'Randwick Shelter'
);
$animal2 = array(
    'name' => 'Bob',
    'chipID' => '5439880028',
    'species' => 'Feline',
    'breed' => 'Burmese',
    'dob' => '15-04-2016',
    'location' => 'Burwood Shelter'
);
$animal3 = array(
    'name' => 'Maria',
    'chipID' => '6477337279',
    'species' => 'Canine',
    'breed' => 'Kelpie',
    'dob' => '07-06-2010',
    'location' => 'Gordon Shelter'
);

$animals = array($animal1, $animal2, $animal3);

//List all the animals
echo "<strong>Animals</strong>";
echo '<br>';
foreach($animals as $animal) {
    echo 'Name: ' . $animal['name'] . '<br>';
    echo 'Chip ID: ' . $animal['chipID'] . '<br>';
    echo 'Species: ' . $animal['species'] . '<br>';
    echo 'Breed: ' . $animal['breed'] . '<br>';
    echo 'DOB: ' . $animal['dob'] . ' (' . calculateAge($animal['dob']) .') <br>';
    echo 'Location: ' . $animal['location'] .'<br>';
    echo '<br>';
}

//Move one of the animals to another location
$animal1 = moveLocation($animal1, 'Hurstville Shelter');
$animal3 = moveLocation($animal3, 'Hurstville Shelter');

//Update all our animals
$animals = array($animal1, $animal2, $animal3);

//List all the animals after being moved
echo "<strong>Animals after move</strong>";
echo '<br>';
foreach($animals as $animal) {
    echo 'Name: ' . $animal['name'] . '<br>';
    echo 'Chip ID: ' . $animal['chipID'] . '<br>';
    echo 'Species: ' . $animal['species'] . '<br>';
    echo 'Breed: ' . $animal['breed'] . '<br>';
    echo 'DOB: ' . $animal['dob'] . ' (' . calculateAge($animal['dob']) .') <br>';
    echo 'Location: ' . $animal['location'] .'<br>';
    echo '<br>';
}