<?php
// Define the file name
$fileName = "introduction.txt";

// Define the content to be written in the file
$content = "Hello! My name is Kunal. I live in New Delhi, India, and I enjoy exploring new technologies, solving challenges, and learning new skills. In my free time, I love watching sports, spending time with my family, and traveling to places that inspire creativity.";

// Open the file in write mode or create it if it doesn't exist
$file = fopen($fileName, "w");

// Write content into the file
if ($file) {
    fwrite($file, $content);
    echo "File created successfully with the introduction!";
    fclose($file);
} else {
    echo "Unable to create or open the file.";
}
echo "<br>";
echo "This Program is written by Kunal Gupta, ERP:- 0221BCA034";
?>