<?php
header("Content-type: text/html; charset=utf-8");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
session_start();
include('dbconnect.php');

class admin
{


public static function day_task_list($details,$files)
{   
    // echo "adf";
    // echo "<pre>";
//print_r($details); 
///print_r($files);
    //
    //
///////////////////////////////////
$target_dir = "uploads/";
echo $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
echo $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


//Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


//Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

//Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
{
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            $query=db::$con->query("INSERT INTO backlog(date_backlog,day_backlog,time_backlog,post_title,hashtag,tags,chfile)VALUES('".$details['classdate']."','".$details['staff_input_day']."','".$details['staff_input_time']."','".$details['staff_input_post_title']."','".$details['hashtag']."','".$details['tags']."','".$target_file."')");
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}

public static function view_day_task()
{
    
		$list = [];
		$query = db::$con->query("SELECT * FROM backlog");
		while ($get = $query->fetch_assoc()) {
            	$list[] = $get;
	        }

        return $list;
	
}

public static function del_day_task() {
  $del = db::$con->prepare("DELETE FROM del_day_task WHERE id = ?");
  $del->bind_param("i",$_POST['id']);
  if ($del->execute()) {
    return true;
  }else{
    return false;
  }
}

/////////////////////////////////////////




	// $query=db::$con->query("INSERT INTO backlog(date_backlog,day_backlog,time_backlog,post_title,hashtag,tags)VALUES('".$details['classdate']."','".$details['staff_input_day']."','".$details['staff_input_time']."','".$details['staff_input_post_title']."','".$details['hashtag']."','".$details['tags']."')");
    // if($query)
    // {
    //     return true;
    // }
    // else
    // {
    //     return false;
    // }

}






//$_GET['api'] = 'view_day_task';

if(!empty($_GET['api'])){
     if($_GET['api'] == 'day_task_list'){
     echo json_encode(admin::day_task_list($_POST,$_FILES));
    
    }
    elseif ($_GET['api'] =='view_day_task') {
     echo json_encode(admin::view_day_task());
    }
    elseif($_GET['api'] == 'del/Campaign'){
    	echo json_encode(admin::del_day_task());
    
    }

}

 ?>
