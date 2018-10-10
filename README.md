# php-test-word-with-more-vowels
Php coding test

Given an array of words, we need some code to tell us which word has the most vowels
(the letters “a”, “e”, “i”, “o” and “u”) in it. If two words in the list have the same amount of
vowels then the words should be alphabetically sorted and the first one returned.

Examples
$words = [
‘Standards’,
‘PHP’,
‘Frontend’.
‘Backend’,
‘Quality’,
‘Automation’,
‘testing’,
];

$wordWithMostVowels = <<YourCodeToGetWordWithMostVowels>>
In this case the word “Automation” should be returned because it has a total of 6 vowels,
more than any other word in the list.
Another example, when multiple words have the same amount of vowels:

$words = [
‘forever’,
‘arrange’,
‘venture’,
];

$wordWithMostVowels = <<YourCodeToGetWordWithMostVowels>>
In this case the word “arrange” should be returned because although all words have 3
vowels, “arrange” is alphabetically before the other words.
