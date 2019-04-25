# palindromes
A php application for finding palindromes in string

Subject: The test is to write production-level code which scans an input file with strings to be considered, one string on each line, and outputs a file that lists the palindromes found from each line.
A palindrome is defined as a word, phrase, or sequence that reads the same backward as forward. Ignore punctuation and white-space when searching for and displaying palindromes.
A palindrome may not necessarily be considered actual words and instead only considers whether or not the alphanumeric string or a portion of it, with punctuation and white-space removed, contain a sequence of characters satisfying the definition of a palindrome as given here.
Finally, a single character is not considered a palindrome although two or more adjacent characters that are the same are considered palindromes.

Language: The test is to be implemented within a PHP script.

HINT: for a list of strings which are known to contain/be palindromes, go to http://www.palindromelist.net/.

Caveats: The script must take into account:
a) There may be no palindrome found on a given line.
b) There may be only one palindrome on a given line encompassing the entire line.
c) There may be only one palindrome on a given line but is not encompassed by the entire line.
d) There may be multiple palindromes on a given line.
e) There may be palindromes within palindromes.

Output: A file using JSON notation which lists:
a) The entire line, unmodified, within which one or more palindromes were found.
b) The list of palindromes found on the given line.
c) The total number of characters comprising all palindromes found on the given line, with punctuation and white-
space removed.
d) Order the list of lines/palindromes found in decreasing order of the number of characters within palindromes
found for a given line, punctuation and white-space excluded.
e) If a given line contains no palindromes, the line will not be in the output.

Execution: The script must be able to be executed on the command line with full instructions, including test file, provided by the script must be able to function using any other sample/test file with the same type of contents.

Requirements:
1. The code must be conformant to both PHP versions 5 and 7.
2. Any standard for formatting code and comments is acceptable as long as it is consistent.
3. Code is expected to be "Production" level and should be commented as necessary to enable future coders to understand what the code is doing. Any style of commenting is acceptable as long as it is, again, consistent.
4. The code must work with a test input file
5. "Caveats" points 'a' and 'b' are minimally required to be implemented.
6. Extra 'points' for implementing "Caveats" points 'c' and/or 'd' and/or ‘e’ with increasing consideration given to code implementing more of the full spec.
7. The code must be able to be executed on the command line yet is able to assume that it is executed from the directory within which it is installed in so that an absolute path to the input file is not required.
 
