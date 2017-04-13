<?php
//----- zip the folder
system('umask 755'); system('zip -r ../archive.zip ../design.ultimenews.net');
//---- unzip the file
system('umask 755'); system('unzip zip_file_location_as_this_file.zip');

?>
