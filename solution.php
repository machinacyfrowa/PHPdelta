<?php
//weryfikujemy czy otrzymaliśmy dane z formularza 
//zwraca prawdę (i wykonuje ifa) wtedy i tylko wtedy jeśli wszystkie 
//trzy argumenty z formularza zostały wysłane
if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
    //przepisuje do lokalnych zmiennych to, co dostałem z formularza
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    echo "Wartości atrybutów: a: $a, b: $b, c: $c <br>";
    $delta = $b * $b -4 * $a * $c;
    echo "Delta wynosi: $delta <br>";
    if($delta > 0) {
        //delta większa od zera - dwa miejsca zerowe
        $x1 = (-$b - sqrt($delta)) / 2*$a;
        $x2 = (-$b + sqrt($delta)) / 2*$a;
        echo "Miejsca zerowe x1 i x2 wynoszą odpowiednio: x1: $x1, x2: $x2<br>";
    } else if ($delta == 0) {
        //delta równa zero - jedno miejsce zerowe
        $x0  = -$b / 2*$a;
        echo "Miejsce zerowe x0 w punkcie x = $x0<br>";
    } else {
        //delta mniejsza od zera - brak miejsc zerowych
        echo "Delta jest liczbą ujemną - funkcja nie ma miejsc zerowych.<br>";
    }
} else {
    //ta sekcja uruchomi się jeśli dane z formularza nie będą kompletne
    die("Nie otrzymano poprawnych danych z formularza");
}


?>