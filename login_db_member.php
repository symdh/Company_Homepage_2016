

<?php
		header("Content-Type:text/html;charset=utf-8"); 
        $conn= mysqli_connect("localhost","root","","user_info");
		
		mysqli_query($conn,"SET NAMES utf8"); 


        if(mysqli_connect_errno($conn)){
            echo '<script>console.log("데이터베이스 연결 실패: '. mysqli_connect_error().'");</script>';
        } else {
			echo '<script>console.log("데이터베이스 연결 성공");</script>';
        }

        echo "<br>";


?>
