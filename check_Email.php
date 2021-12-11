<?php
        include "login_db_member.php";
        $check_email = $_POST['email'];
        $sql = "Select `email` FROM basic_info where email ='".$check_email."'";
        $result = mysqli_query($conn, $sql);
        
		if(!$result ||  mysqli_num_rows($result) == 0){
			echo "<span id ='css_email_cf_true'>사용 가능한 이메일입니다.</span>";
		} else {
			 echo "<span id ='css_email_cf_false'>이미 사용중 입니다.</span>";
		}


?>