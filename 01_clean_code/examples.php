<?php 


// 1. BERLJIVA IMENA ZA SPREMENLJIVKE IN METODE
// ---------------------------------------------

$notiSms;
$addCmt;

foreach ($people as $x) {
	$x->name;
}


// -> POSTANE

$notifySms;
$addComment;

foreach ($people as $person) {
	$person->name;
}



// 2. IMENA KI POVEJO KAJ HOČES S STVARMI POČET
// ------------------------------------------------

protected $d; // elapsed time in days

if ('paid' === $application->status) {
}

// --> POSTANE

protected $elapsedTimeInDays;
protected $daysSinceCreation;
protected $daysSinceModification;
protected $fileAgeInDays;

if ($application->isPaid()) {
}


// 3. NE BIT INOVATIVEN (DVA POLJA TRI POLJE) ČE NI POTREBNO
// ------------------------------------------------------------

$order->letItGo();

// -> postane

$order->delete();


// 4. BODI KONSISTENTEN ( uporabljal vedno podčrtaje če jih uporabiš enkrat, uporabljal camelCase če začnes)
// morali se bomo dogovoriti kaj uporabljamo v katerih primerih (HELLO ENOJNEIN DVOJNE NAVEDNICE)
// -------------------------------------------------------------------------------------------------------

// 5. RAZREDI: GLAGOL za na začetek imena za metodo, SAMOSTALNIK za razred
// --------------------------------------------------------------------------------------------------

// 6. KRATKE FUNKCIJE (kar je več kot 20 vrstic je mogoče potrebno že razbiti v več funkcij)
// zelo težko je slediti kaj funkcija počne če je dolga 500-1000 vrstic. Kot ena izmed funkcij v SMSserverju
// --------------------------------------------------------------------------------------------------------

// 7. ŠTEVILO PARAMETROV ne sme biti predolgo kot npr. funkcija('neki', false, true, false, true, true, 'karnekaj, false)
// v tem primeru ali se funkcijo razbije v več podfunkcij, ali se ustvari razred, kjer bojo stvari bolj pregledne
// lahko se tudi parametre ki spadajo skupaj postavi v associative array
// ------------------------------------------------------------------------------------------------------------

// 8. RAZREDI: En razred počne eno stvar. Če je user počne stvari glede userja. Ne pa še od organizacij, zdravnikov userja
// in rezultatu volitev
// -----------------------------------------------------------------------------------------------------

// 9. Boljše je refactorat kodo kot pa jo pojasnjevat z komentarji
// ----------------------------------------------------------------------------------------------------

// Check to see if the employee is eligible for full benefits
if ($employee->flags && self::HOURLY_FLAG && $employee->age > 65)

// -> POTANE

if ($employee->isEligibleForFullBenefits())

// 10. Uporabljaj GIT za history.
// Smiselni commit msgji ki povejo kaj se je spremenilo in potem se lahko z GITOM prikaže staro kodo
// Ni potrebno hraniti staro kodo zraven zakomentirano če se jo ne uporablja več
// ------------------------------------------------------------------------------------------

// 11. NE KOPIRAJ/PIŠI obstoječih funkcij
// če se funkcije le malo razlikujejo raje uporabi parametre, ki bodo funkcijo ustrezno spremenili po potrebi
// ------------------------------------------------------------------------------------------

// 12. DONT HARDCODE
// -----------------------------------------------------

if (7 == $today) {
	return ‘It is holiday’;
}

// -> POSTANE

$saturday = 7;
if ($saturday == $today) {
return ‘It is holiday’;
}

// 13. SCOUTS RULE
// LEAVE THINGS BEHIND BETTER THAN THEY WERE WHEN YOU SHOWED UP
// ---------------------------------------------------------------

?>