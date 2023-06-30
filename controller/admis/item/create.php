<?php
require_once '../../../config/Database.php';
require_once '../../../model/Items.php';


$database=new Database();
$con=$database->connect();

$item= new Items($con);

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit('POST request method required');
}

if(filter_has_var(INPUT_POST,'add_item')){

    $name=filter_input(INPUT_POST,"item_name");
$description=filter_input(INPUT_POST,"item_description");

if (empty($_FILES)) {
    exit('$_FILES is empty - is file_uploads set to "Off" in php.ini?');
}

if ($_FILES["image"]["error"] !== UPLOAD_ERR_OK) {

    switch ($_FILES["image"]["error"]) {
        case UPLOAD_ERR_PARTIAL:
            exit('File only partially uploaded');
            break;
        case UPLOAD_ERR_NO_FILE:
            exit('No file was uploaded');
            break;
        case UPLOAD_ERR_EXTENSION:
            exit('File upload stopped by a PHP extension');
            break;
        case UPLOAD_ERR_FORM_SIZE:
            exit('File exceeds MAX_FILE_SIZE in the HTML form');
            break;
        case UPLOAD_ERR_INI_SIZE:
            exit('File exceeds upload_max_filesize in php.ini');
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            exit('Temporary folder not found');
            break;
        case UPLOAD_ERR_CANT_WRITE:
            exit('Failed to write file');
            break;
        default:
            exit('Unknown upload error');
            break;
    }
}

// Reject uploaded file larger than 1MB
if ($_FILES["image"]["size"] > 10048576) {
    exit('File too large (max 10MB)');
}

// Use fileinfo to get the mime type
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime_type = $finfo->file($_FILES["image"]["tmp_name"]);

$mime_types = ["image/gif", "image/png", "image/jpeg"];
        
if ( ! in_array($_FILES["image"]["type"], $mime_types)) {
    exit("Invalid file type");
}
$filename = $_FILES["image"]["name"];

$destination = __DIR__. '..\images/' . $filename;

if ( ! move_uploaded_file($_FILES["image"]["tmp_name"], $destination)) {

    exit("Can't move uploaded file");

}

$item->item_name=$name;
$item->item_description=$description;
$item->item_photo=$filename;

$item->create();

header('location:../../../view/admis/show.php');
}
else{
    echo "post method required";
}

