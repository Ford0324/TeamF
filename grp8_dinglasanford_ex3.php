<?php
$filename = "example.txt";

if (file_exists($filename)) {
    echo "File exists. Reading contents...\n";
    
  
    $content = file_get_contents($filename);
    echo "Contents of the file:\n$content\n";
    
    $fileArray = file($filename);
    echo "Contents of the file as an array:\n";
    print_r($fileArray);
} else {
    echo "File does not exist. Creating the file...\n";
    
    $initialContent = "This is the first line.\nThis is the second line.";
    file_put_contents($filename, $initialContent);
    echo "File created and written with initial content.\n";
}

$newContent = "\nThis is an additional line.";
file_put_contents($filename, $newContent, FILE_APPEND);
echo "New content appended to the file.\n";

echo "Final file contents:\n";
echo file_get_contents($filename);
?>
