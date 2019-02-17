<?php
echo basename($_FILES["filetoupload"]["name"])."<br>";
echo basename($_FILES["filetoupload"]["tmp_name"])."<br>";
echo $_FILES["filetoupload"]["size"]."<br>";
echo pathinfo(($_FILES["filetoupload"]["name"]),PATHINFO_EXTENSION)."<br>";

$len=strlen($_FILES["filetoupload"]["name"]);
$target_dir="uploads/ss/";
$filename=$target_dir.time().basename($_FILES["filetoupload"]["name"]);
$filetype=pathinfo(($_FILES["filetoupload"]["name"]),PATHINFO_EXTENSION);
$filesize=$_FILES["filetoupload"]["size"];
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if($len>0)
	{
		if($filetype=="jpg")
		{
			if($filesize<=7000000)
			{
			if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$filename))
				
				echo "File uploaded";
			else
				echo "error occured";
				
			}
			else
			{
				echo "File is exceeded";
			}
			
		}
		else
		{
			echo "wrong File type";
		}
		
		
	}
	else
	{
		echo "Select File";
	}
	
	
}

?>