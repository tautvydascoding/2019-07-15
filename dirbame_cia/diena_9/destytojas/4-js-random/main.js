console.log("labas");
// apsilimui


// let x = Math.random();   // js random : 0 iki 0.9999999;
// x = x * 100;   // x yra nuo 0 iki 99.9999999
// x = (x * 100) + 10; // nuo 10 iki 109.9999
// x =   Math.round(    (Math.random() * 100) + 10   ); // nuo 10 iki 110

// x =   Math.round(    (Math.random() * (Max-Min)) + Min   ); // nuo 10 iki 110


var masyvas = [];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
let mas = [2, 3,4,5,6,7,8,9,1000];
for (var i = 0; i < mas.length; i++) {
    if ( mas[i]  % 2 == 0 ) {
        mas[i] = "lyginis";
    }
}
console.log( mas );


// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60
let  pagaminta = [];
for (var i = 0; i < 60; i++) {
    pagaminta[i] = Math.round((Math.random() * (100-10)) + 10   );
}
console.log(  pagaminta  );

// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }
for (var i = 0; i < pagaminta.length; i++) {
    burtai = Math.random(); // nuo 0 iki 0.9999999
    if ( burtai < 0.10 ) {
        pagaminta[i] = pagaminta[i] * -1;
    }
}
console.log(  pagaminta  );

// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)
for (var i = 0; i < pagaminta.length; i++) {
    // Ar skaicius minus?
    if ( pagaminta[i] < 0 ) {
        pagaminta[i] = pagaminta[i] * -1;  // paverciam skaiciu teigiamu
    }
}
console.log(  pagaminta  );
// 4 UZDUOTIS:
// surasti geriausia darbuotoja
let geriausias = -99999;
let gerNumeris = -9;
for (var i = 0; i < pagaminta.length; i++) {
    if (geriausias < pagaminta[i]) { //3 < 18,  18<5x, 18<50, 50<8....
        geriausias = pagaminta[i]; // 3, 18, 50,
        gerNumeris = i;
    }
}
console.log( " kiekis: ", geriausias, " numeris: ", gerNumeris  );

// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
let blogiausias = 99999;
let blNumeris = 0;
for (var i = 0; i < pagaminta.length; i++) {
    if ( pagaminta[i] < blogiausias ) { //3 < 18,  18<5x, 18<50, 50<8....
        blogiausias = pagaminta[i]; // 3, 18, 50,
        blNumeris = i;
    }
}
console.log( " kiekis: ", blogiausias, " numeris: ", blNumeris  );