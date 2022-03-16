<?php
//Cara membuat fungsi
// function namafungsi(parameter){
//     code disini
// }

function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;
}

echo "Hasilnya adalah : ".luaspersegi(10);
echo "<br>";

//bikin fungsi nama

function nama(){
    echo "Nama saya adalah Farida Afrina";

}

nama();
echo "<br>";

//fungsi menggunakan parameter
//parameter default

function
 perkenalan($nama = "Farida"){
     echo "Perkenalkan nama saya : " .$nama;
}

perkenalan();

?>