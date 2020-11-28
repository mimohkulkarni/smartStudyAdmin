<?php
//Include the database configuration file
include 'dbconnect.php';
session_start();
if(!empty($_POST["medium_id"]) && $_POST["sel"]=='1')
{
	$sql5 = "SELECT DISTINCT class from syllabus where medium = '".$_POST['medium_id']."' AND insti_id = '2'";  
							$res5 = mysqli_query($linkId, $sql5); 
							echo '<option value="0">Select class</option>';  
							while($row5 = mysqli_fetch_array($res5))
								{
									echo '<option value="'. $row5['class'].'">'. ucfirst($row5['class']).'</option>';
								}
						
}
if(!empty($_POST["class_id"]) && $_POST["sel"]=='2')
{
    $sql2 = "SELECT DISTINCT sub_id, sub_name from syllabus where medium = '".$_POST['medium_id']."' AND class = '".$_POST['class_id']."' AND insti_id = '2'";  
							$res2 = mysqli_query($linkId, $sql2); 
							echo '<option value="0">Select subject</option>';  
							while($row = mysqli_fetch_array($res2))
								{
									echo '<option value="'.$row['sub_id'].'">'.$row['sub_name'].'</option>';
								}

}
if(!empty($_POST["subject_id"]) && $_POST["sel"]=='3')
{
	$t_chapters = explode(",",$test["test_chapter"]);
    $sql1 = "SELECT DISTINCT chapter_id, chapter_name from syllabus where medium = '".$_POST['medium_id']."' AND class = '".$_POST['class_id']."' AND sub_id = '".$_POST['subject_id']."' AND insti_id = '2'";  
							$res1 = mysqli_query($linkId, $sql1);   
							$i = 0;
							while($row2 = mysqli_fetch_array($res1))
								{
								if(in_array($row2["chapter_id"], $t_chapters))
								{
									$str_flag = "selected";
								}
								else
								{
									$str_flag = "";
								}
									echo '<option value="'.$row2['chapter_id'].'">'.$row2['chapter_name'].'</option>';
									$i++;
								}

}
?>