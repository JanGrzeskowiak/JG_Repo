<?php
//boolean
$b1 = true;
$b2 = false;
//integer
$i1 = 2137;//dziesiętny
$i2 = 0x45;//hex
$i3 = 0420;//octal
$i4 = 0b1000101;//binary
//float
$f1 = 69.420;
//string
$s1 = 'Sample 1';
$s2 = "Sample 2 {$i1}";//z zawartością innej zmiennej
//heredoc
$s3 = <<<LABEL
    vuygasdgaigdahdaid
    ajdijahdohapdapidj
    kjdaidhloahdlkadh
LABEL;//Można HTML
//nowdoc
$s4 = <<<'NOW'
    uhfoisfpiufo[
    skjhfjohs
    dkadajdka'kd
    da;kdakd
NOW;//Nie można HTML
//print-echo
echo "dagodpiadpd";
//z użyciem HTML
echo "<br />";
//ze zmienną
echo $s2;
//Typy Tablicowe
$arr = ['addada', 123553, 3.145];
//Tablica Asocjacyjna
$asoc = [
    'k1' => 313145,
    'q2' => 'gdaihdpadj',
    5 => 3.689
];
//Tablica Tablic
$arrOfArr = [
    ['12', 1344134,3.135],
    ['saddad','dadadad','diapidd']
];
//Typ Obiektowy
$o1 = new stdClass();
$o1->attr = 539813617;
//Funkcje
function f1(){
    echo "Hello World!";
}
f1();
function f2() : void {
    echo "Hello World!";
}//definiowanie wyniku
f2();
function f3($a1, $a2){
    echo $a1+$a2;
}//typy
function f4(int $a1, int $a2): void {
    echo $a1+$a2;
}//zdefiniowane typy
function f5(string $a): string {
    return $a . 'by f(5)';
}// '.' łączy teksty
?>