<?php
		session_start();

        include "login_db_member.php";

        extract($_POST);


        $sql = "select * from basic_info";
        $sql = $sql." where email="."'".$user_email."'";

        $result = mysqli_query($conn,$sql);
     
		if(!$result ||  mysqli_num_rows($result) == 0){  
			echo "<script>alert('로그인 정보가 맞지 않습니다.')</script>";
			echo "<script> parent.document.location.reload(); </script>";
			return;
		} else{
			$count = mysqli_num_rows($result);
		}

        if($count == 1) {
               

                $row = mysqli_fetch_assoc($result);
                if($row['passwd']==$user_passwd){
				}
				else{
                    echo "<script>alert('로그인 정보가 맞지 않습니다.')</script>";
					return;
				}
        } else {
                echo "<script>alert('로그인 정보가 맞지 않습니다.')</script>";
				return;
        }

		$_SESSION['identification_id'] = $row['identification_id'];
		$_SESSION['name'] = $row['name'];
		

		echo "<script> parent.document.location.reload(); </script>";
?>

