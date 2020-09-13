<?php
if(!isset($_SESSION["username"]))
	{
		echo "<script type='text/javascript' >";
                echo "{";
                echo "alert('Bạn chưa đăng nhập. Vui lòng đăng nhập để sử dụng');";
                echo "}";
            echo "</script>";
            header('Location:../../smartgarden.php');
		
	}
?>