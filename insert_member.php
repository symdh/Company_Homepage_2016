<?php

        extract($_POST);

        echo $user_email_id;
        echo $user_passwd;
        echo $user_passwd2;
        echo $user_name;
        echo $user_phone;


        include "login_db_member.php";
        $sql = "INSERT INTO `basic_info` (`email`, `passwd`, `name`, `phone_number`)";
        $sql = $sql." VALUES (\"$user_email_id\", \"$user_passwd\", \"$user_name\", \"$user_phone\")";
        mysqli_query($conn,$sql);

		echo '<script>console.log('.$sql.');</script>';
        
		echo "<script> parent.document.location.reload(); </script>";
?>
