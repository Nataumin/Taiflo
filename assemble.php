<?php
$dir = '/1/01';
$files = scandir($dir);
$files = array_diff(scandir($path), array('.', '..')); //remove . and .. from the returned array from scandir
foreach ($files as $file) {
    fwrite($out, file_get_contents($file));
}
echo $out;
?>


// //File path of final result
// $filepath = "mergedfiles.md";

// $out = fopen($filepath, "w");
// //Then cycle through the files reading and writing.

//     foreach($filepathsArray as $file){
//         $in = fopen($file, "r");
//         while ($line = fgets($in)){
//             print $file;
//             fwrite($out, $line);
//         }
//         fclose($in);
//     }

// //Then clean up
// fclose($out);

// return $filepath;
// ?>

