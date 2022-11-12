<?php
for($i = 0; $i < 10; $i++){
    echo "looping ke $i<br>";
}

echo '<br>';

$animals = ["cat", "dog", "fish"];
foreach ($animals as $animal) {
    echo $animal. '<br>';
}

echo '<br>';


// membuat array asosiatif

$data_user = [
    'nama' => "Nurcahyo",
    'jurusan' => "Informatika",
    'ipk' => 3.9,
];

foreach ($data_user as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}