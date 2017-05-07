<?php
//----- zip the folder
system('umask 755'); system('zip -r file_location_zip_store.zip folder_location_that_to_zipped');
//---- unzip the file
system('umask 755'); system('unzip zip_file_location_as_this_file.zip');
//---- dump database
system('mysqldump -uname -ppassword dbname > download_database.sql');
//---- upload database
system('mysql -uname -ppassword dbname < source_file_path.sql');
?>
