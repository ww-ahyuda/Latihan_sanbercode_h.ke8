<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "<h3> Soal No 1 Greetings </h3>";
/* 
Soal No 1
Greetings
Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

contoh: greetings("abduh");
Output: "Halo Abduh, Selamat Datang di Sanbercode!"
*/

// Code function di sini
function greetings($nama){
    echo"hallo ".$nama .",Selamat datang <br>";
}

// Hapus komentar untuk menjalankan code!
greetings("arif");
greetings("mizan");
greetings("nabil");

// greetings("Bagas");
// greetings("Wahyu");
// greetings("nama peserta");

echo "<br>";

/* 
Soal No 2
Reverse String
Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
Function reverseString menerima satu parameter berupa string.
NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

reverseString("abdul");
Output: ludba

*/

// Code function di sini 
function reverse($kata1){
    $panjangkata = strlen($kata1);
    $tampung ="";
    for($i=($panjangkata - 1); $i>=0; $i--){
        $tampung .= $kata1[$i];
    }
    return $tampung;
}
function reverseString($kata2){
    $string=reverse($kata2);
    echo $string . "<br>";
}


// Hapus komentar di bawah ini untuk jalankan Code
    reverseString("nama peserta");
    reverseString("Sanbercode");
    reverseString("We Are Sanbers Developers");
echo "<br>";


/*
Soal 4
buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
*/

// Code function di sini
function tentukan_nilai($angka){
    $output ="";
    if($angka>=85 && $angka<100){
        $output .= "sangat baik";
    }else if($angka >=70 && $angka<85){
        $output .= "baik";
    }
    return $output ."<br>";
   
}

// Hapus komentar di bawah ini untuk jalankan code
    echo tentukan_nilai(98); //Sangat Baik
    echo tentukan_nilai(76); //Baik
    echo tentukan_nilai(67); //Cukup
    echo tentukan_nilai(43); //Kurang
?>
</body>
</html>