<?php
$target_path="d:/";
$target_path=$target_path.basename($_FILES['fileToUpload']['n
ame']);
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$tar
get_path))
{
echo "File uploaded successfully!";
}
else
{
echo "Sorry, file not uploaded, please try again!";
}
?>