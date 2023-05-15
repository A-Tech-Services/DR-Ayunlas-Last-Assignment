<!-- 2. Write a PHP program to count and group similar words in the phpFrameWork.txt. -->

<!-- SOLUTION -->
<?php

// Open the text file
$file = fopen("PhPFrameWork.txt", "r");

// Create an array to store the words
$words = array();

// Read the words from the file
while (!feof($file)) {
  $word = fgets($file);

  // Remove punctuation from the word
  $word = trim($word, ",.!?;:'\"");

  // Add the word to the array
  $words[] = $word;
}

// Close the file
fclose($file);

// Create an array to store the word counts
$wordCounts = array();

// Loop through the words
foreach ($words as $word) {

  // Check if the word already exists in the array
  if (array_key_exists($word, $wordCounts)) {

    // Increment the count for the word
    $wordCounts[$word]++;

  } else {

    // Add the word to the array with a count of 1
    $wordCounts[$word] = 1;
  }
}

// Print the word counts
foreach ($wordCounts as $word => $count) {
  echo "$word: $count\n";
}

?>