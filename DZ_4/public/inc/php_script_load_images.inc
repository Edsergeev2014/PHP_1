<?php
// print the graphic files from the folder without ID, open at new Window
function print_graphic_files($path_thumbnails, $path_mages) {
    $dir = opendir ("$path_thumbnails"); // open the folder
    while (false !== ($file = readdir($dir))) {
        // graphic files from the folder
        if(!is_dir($file) && (strpos($file, '.jpg')>0 || strpos($file, '.gif')>0 || strpos($file, '.png')>0) ) {
            echo "<a href='". $path_mages. $file. "' target='_blank'><img src='". $path_thumbnails. $file. "' width=150px;'></a>";
        }
    }
    closedir($dir); // close the folder
    return;
}
// print the graphic files from the folder with ID
function print_graphic_with_id($path_thumbnails, $path_mages) {
    $dir = opendir ("$path_thumbnails"); // open the folder
    while (false !== ($file = readdir($dir))) {
        // graphic files from the folder
        if(!is_dir($file) && (strpos($file, '.jpg')>0 || strpos($file, '.gif')>0 || strpos($file, '.png')>0) ) {
            echo "<a id='myModal' href='". $path_mages. $file. "'><img src='". $path_thumbnails. $file. "' width=150px;'></a>";  
        }
    }
    closedir($dir); // close the folder
    return;
}
?>