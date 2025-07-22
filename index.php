<?php

$filename = "demo_file.txt";
$folder = "demo_folder";

// 1. Create a folder if not exists
if (!is_dir($folder)) {
    mkdir($folder);
    echo "✅ Folder '$folder' created.<br>";
} else {
    echo "📁 Folder '$folder' already exists.<br>";
}

$filePath = "$folder/$filename";
$content = "Hello, this is the first line.\n";

// 2. Create and write to file (overwrite if exists)
$file = fopen($filePath, "w");
if ($file) {
    fwrite($file, $content);
    fclose($file);
    echo "📝 File '$filePath' created and content written.<br>";
} else {
    echo "❌ Failed to write to file.<br>";
}

// 3. Append new content to file
$moreContent = "This is an appended line.\n";
file_put_contents($filePath, $moreContent, FILE_APPEND);
echo "➕ Appended content to '$filePath'.<br>";

// 4. Check if file exists
if (file_exists($filePath)) {
    echo "✅ File '$filePath' exists.<br>";

    // 5. Read content using file_get_contents()
    $data1 = file_get_contents($filePath);
    echo "<b>📖 File content (file_get_contents):</b><br><pre>$data1</pre>";

    // 6. Read content using fopen() and fread()
    $handle = fopen($filePath, "r");
    $data2 = fread($handle, filesize($filePath));
    fclose($handle);
    echo "<b>📖 File content (fopen & fread):</b><br><pre>$data2</pre>";

    // 7. File info
    echo "📏 File size: " . filesize($filePath) . " bytes<br>";
    echo "📄 File type: " . filetype($filePath) . "<br>";
    echo "🕒 Last modified: " . date("F d Y H:i:s.", filemtime($filePath)) . "<br>";
} else {
    echo "❌ File does not exist.<br>";
}

// 8. Optional: Delete the file (Uncomment to test)
// if (unlink($filePath)) {
//     echo "🗑️ File '$filePath' deleted.<br>";
// } else {
//     echo "❌ Failed to delete file.<br>";
// }

?>
