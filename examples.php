<?php
spl_autoload_register(function ($class) {
    include $class . '.class.php';
});

/* examples */
	/* string mode off for letter by letter comparison */
// int(0) the same text
var_dump(stringDifference::hammeringDistance('The quick brown fox jumps over the lazy dog','The quick brown fox jumps over the lazy dog'));

// int(1) one letter difference
var_dump(stringDifference::hammeringDistance('The quick brown fex jumps over the lazy dog','The quick brown fox jumps over the lazy dog'));

// int(1) there is a space at the end of the first string
var_dump(stringDifference::hammeringDistance('The quick brown fox jumps over the lazy dog ','The quick brown fox jumps over the lazy dog'));


	/* bin mode on for bit by bit comparison */
// int(0) the same text
var_dump(stringDifference::hammeringDistance('The quick brown fox jumps over the lazy dog','The quick brown fox jumps over the lazy dog',true));

// int(2) one letter difference
var_dump(stringDifference::hammeringDistance('The quick brown fex jumps over the lazy dog','The quick brown fox jumps over the lazy dog',true));

// int(8) there is a space at the end of the first string
var_dump(stringDifference::hammeringDistance('The quick brown fox jumps over the lazy dog ','The quick brown fox jumps over the lazy dog',true));
