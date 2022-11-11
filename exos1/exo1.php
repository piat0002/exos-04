<?php
// Je créer une fonction
function getmoyenne($moutons){
	// Je calcule la moyenne de la valeur de mes moutons
	$sumValMoutons=0;
	foreach ($moutons as $mouton) {
		$sumValMoutons = $sumValMoutons + $mouton[1];
	} 
	$nbMoutons = sizeof($moutons);
	return $sumValMoutons/$nbMoutons;
}  



// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard',60]];

// J'ajoute un mouton
array_push($moutons, ['Gérard',120]);
echo "Moyenne de la valeur de mes ". count($moutons)." moutons : ".getmoyenne($moutons);

// Ajout de 100 moutons aléatoires
$chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";
for ($j=0; $j < 100; $j++) { 
	$randNameMouton = "";
	$nbCharsNameMouton=rand(3,15);
    $nbChars = strlen($chaine);
	$randValMoutons = rand(10,200);
	for($k=0; $k<$nbCharsNameMouton; $k++)
    {
        $randNameMouton .= $chaine[rand(0, ($nbChars-1))];
    }
	array_push($moutons, [$randNameMouton, $randValMoutons]);
}

// Je calcule à nouveau la moyenne
echo "\nMoyenne de la valeur de mes ". count($moutons)." moutons : ".getmoyenne($moutons);
echo "\n";

//var_dump($moutons)
?>