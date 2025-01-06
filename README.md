# simple-string-comparison
Less simple than strcmp. Compare strings letter by letter or bit by bit

It returns an int value representing the difference between two strings. For example, it gives a more precise difference between uppercase and lowercase letters, so you can decide if there is a typo between two strings. There are also letter-by-letter and binary comparisons.

## Use it like this:
Letter by letter mode: This will return 1 as one letter is different (in the word fox there is a typo).
```
echo stringDifference::hammingDistance('The quick brown fex jumps over the lazy dog','The quick brown fox jumps over the lazy dog')
```

Binary mode:
This will return 2 because in binary mode the distance between the e and o in the two sentences is 2.
```
echo stringDifference::hammingDistance('The quick brown fex jumps over the lazy dog','The quick brown fox jumps over the lazy dog',true));
```
