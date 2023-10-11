<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Berlatih looping php </h1>
    <?php
    echo "<h3>Contoh 1</h3>";
    echo "<h5>Looping 1</h5>";
    for($i=1; $i<=19; $i+=2){
        echo $i." - Angka Ganjil <br>";
    }
    echo "<h5>Looping 2</h5>";
    for ($a-19; $a>=1; $a-=2){
        echo $a." - Angka Ganjil <br>";
    }
    echo "<h3>Contoh 2</h3>";
    $angka = [45,67,86,90,54]; 
    echo "Array angka : "; print_r($angka);
    echo "<br>";
    echo "Hasil sisa dari Array Angka";
    foreach($angka as $value){
    $rest[] = $value %= 6;
    }
        print_r($rest); echo "<br>";
    echo "<h3>contoh 3</h3>"; $biodata = [
    ["nabil", 25, "Makassar"],
    ["mizan", 27, "Bandung"],
    ["arif", 26, "Jakarta"],
    ];
    foreach($biodata as $key => $value) {
    $item = array(
    'nama' => $value[0],
    'umur' => $value[1],
    'alamat' => $value[2]
    );
    print_r($item);
    echo "<br>";
}   
    echo "<h3>contoh 4</h3>";
    for($j=1; $j<=5; $j++){
        for($b=1; $b<=$j; $b++){
        echo"*";
    }
    echo"<br>";
    }
    ?>
</body>
</html>