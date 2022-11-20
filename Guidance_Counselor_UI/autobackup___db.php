<!-- <?php

$databases = ['guidance_and_counseling'];
$user = "root";
$pass = "";
$host = "localhost";

date_default_timezone_set('Asia/Manila');

if(!file_exists("C:/Users/Nazal_PC/Documents/BackupDatabases")){
    mkdir("C:/Users/Nazal_PC/Documents/BackupDatabases");
}

foreach($databases as $database){
    if(!file_exists(("C:/Users/Nazal_PC/Documents/BackupDatabases/$database"))) {
        mkdir("C:/Users/Nazal_PC/Documents/BackupDatabases/$database");
    }

    $filename = $database."_".date("F_d_Y")."@".date("g_ia").uniqid("_", false);
    $folder = "C:/Users/Nazal_PC/Documents/BackupDatabases/$database/".$filename.".sql";

    exec("C:/xampp/mysql/bin/mysqldump --user={$user} --password={$pass} --host={$host} {$database} --result-file={$folder}", $output);
}

print_r($output);
?> -->