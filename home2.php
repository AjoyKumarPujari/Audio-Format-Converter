<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
include "conf.php";
if (isset ($_POST['submit']))
{
	$c_file_type = $_POST['c_file_type'];
	$currentPath = $_FILES['audio']['tmp_name'];
	$file_name = $_FILES['audio']['name'];
	$file_size = $_FILES['audio']['size'];
	$file_name_witout_ext = pathinfo($_FILES['audio']['name'], PATHINFO_FILENAME);

	$file_size_kb = number_format((float)$file_size/1024, 2, '.', '')." KB";
	$file_type_end = (explode(".", $file_name));
	$file_type = end($file_type_end);

	
		$file_name_space = str_replace(' ', '_', $file_name_witout_ext);
		exec("ffmpeg -i $currentPath converted_output/$file_name_space.$c_file_type");
		$output_filename = $file_name_space.".".$c_file_type;
		$output_filesize = number_format((float)(filesize("converted_output/".$output_filename))/1024, 2, '.', '')." KB";
		
		if(file_exists("converted_output/".$output_filename)){
			$sql = mysqli_query($db1, "INSERT INTO file_info(file_name, file_size, file_type) VALUES('$output_filename','$output_filesize','$c_file_type')");
		}
		$sql_ret = mysqli_query($db1, "SELECT * FROM file_info WHERE file_name = '$output_filename'");
		while($rows = mysqli_fetch_array($sql_ret)){
			$file = $rows['file_name'];
			?>

			<?=$file;?> <a href="converted_output/<?=$output_filename;?>" download>Download</a><br>

			
			<?php
		}
		?>
		<br>
<div class="container text-center"><a href="home.php">Convert 
new Audio</a></div>
		<?php
}

?>