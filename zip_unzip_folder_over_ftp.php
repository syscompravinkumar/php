<?php
//----- zip the folder
system('umask 755'); system('zip -r file_location_zip_store.zip folder_location_that_to_zipped');
//---- unzip the file
system('umask 755'); system('unzip zip_file_location_as_this_file.zip');

?>
