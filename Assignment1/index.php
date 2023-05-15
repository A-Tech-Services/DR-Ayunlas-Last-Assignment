<!-- 1. Write a PHP program to reverse this sentence recursively and iteratively. Do not use any of PHP reverse library. “The Lord is my Sphered, I shall not want” -->

<!-- SOLUTION -->
<?php

// Recursive function to reverse a sentence
function reverseSentenceRecursive($sentence) {
  if (empty($sentence)) {
    return "";
  }

  return reverseSentenceRecursive(substr($sentence, 1)) . $sentence[0];
}

// Iterative function to reverse a sentence
function reverseSentenceIterative($sentence) {
  $reversedSentence = "";

  for ($i = strlen($sentence) - 1; $i >= 0; $i--) {
    $reversedSentence .= $sentence[$i];
  }

  return $reversedSentence;
}

// Driver code
$sentence = "The Lord is my Sphered, I shall not want";

echo "Recursively: " . reverseSentenceRecursive($sentence) . "\n";
echo "Iteratively: " . reverseSentenceIterative($sentence) . "\n";

?>