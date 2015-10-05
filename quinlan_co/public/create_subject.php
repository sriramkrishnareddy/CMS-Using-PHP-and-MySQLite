<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php")?>
<?php confirm_logged_in(); ?>
<?php require_once("../includes/db_connection.php")?>
<?php require_once("../includes/validation_functions.php")?>
<?php 
	if(isset($_POST['submit'])){
			$menu_name = $_POST["menu_name"];
			$position = (int) $_POST["position"];
			$visible = (int) $_POST["visible"];
			$menu_name = mysql_prep($menu_name);
			//Request for data
			$required_fields = array("menu_name","position","visible");
			validate_presences($required_fields);
			$fields_with_max_lengths = array("menu_name"=>30);
			validate_max_lengths($fields_with_max_lengths);
			if(!empty($errors)){
				$_SESSION["errors"] = $errors;
				redirect_to("new_subject.php");
			}
			$query = "INSERT INTO subjects (menu_name,position,visible) ";
			$query .= "VALUES ('{$menu_name}',{$position},{$visible});";
			$result = mysqli_query($connection,$query);
			if($result){
				$_SESSION["message"] = "Subject Created.";
				redirect_to("manage_content.php");
			}
			else{
				$_SESSION["message"] = "Subject Creation Failed.";
				$message = "Subject Creation Failed";
				redirect_to("new_subject.php");
			}
	}
	else{
		redirect_to("new_subject.php");
	}

?>
<?php	
	//Close the connection if exists
	if(isset($connection)){mysqli_close($connection);}
?>