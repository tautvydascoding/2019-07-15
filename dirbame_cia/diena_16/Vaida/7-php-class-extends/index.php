<!-- // UZDUOTIS:
// 1. sukurti dvi klases A ir B
// "B" klase turi paveldi "A"
// "A" klase turi kintamuosius:
// name , plaukuSpalva, sirdiesYda
// kurie yra "public", "private", "protected"

// 2. SUSIKURTI "B" objekta
// 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" klaseje)


// -->


<?php


include_once('b.php');

    $objektas = new B();

    echo $objektas->plaukuSpalva . '<br />';
    echo $objektas->getSirdiesYda() . '<br />';
    echo $objektas->getName();














//