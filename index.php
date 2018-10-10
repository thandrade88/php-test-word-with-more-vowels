<?php
/**
 * Created by PhpStorm.
 * User: thales
 * Date: 10/10/2018
 * Time: 10:53
 */


//GET VOWELS COUNT
function vowelCount($string) {
	return strlen(preg_replace('/[^aeiouAEIOU]/', '', $string));
}

//SORT WORDS
function alphabeticallySort($a, $b) {
	return strcmp($a["word"], $b["word"]);
}


$words = [
	'Standards',
	'PHP',
	'Frontend',
	'Backend',
	'Quality',
	'Automation',
	'testing'
	];

$words0 = [
	'forever',
	'arrange',
	'venture'
];

$arrBase = [];
$arrBase2 = [];

foreach ($words as $key => $word) {
	$arrBase[$key]['count'] = vowelCount($word);
	$arrBase[$key]['word'] = $word;
}

$bigCount = max($arrBase)['count'];

foreach ($arrBase as $value) {
	if($value['count'] == $bigCount) {
		$arrBase2[] = $value;
	}
}

usort($arrBase2, 'alphabeticallySort');

echo $arrBase2[0]['word'];

