<?php
        include "login_db_member.php";

        if ($result = mysqli_query($conn, "SELECT * FROM basic_info")) {
                printf("DB불러오기 적용됨");
                echo "<br>";
                echo "<table>";
                echo "<tr border='1'><td>번호</td><td>이메일</td><td>패스워드</td><td>이름</td><td>핸드폰번호</td></tr>";
                 while ($row = mysqli_fetch_assoc($result)) {
                           echo "<tr><td>{$row['identification_id']}</td><td>{$row['email']}</td><td>{$row['passwd']}</td><td>{$row['name']}</td><td>{$row['phone_number']}</td></tr>";
                }
          echo "</table>";

        }else {
                printf("적용안됬음");
        }
?>
