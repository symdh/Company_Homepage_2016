function check_Email_PHP(email) {
		
        var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                        if(xhttp.readyState == 4 && xhttp.status == 200) {
                               document.getElementsByName("show_checked")[0].innerHTML = xhttp.responseText;
                        }

                };

                xhttp.open("post", "check_Email.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("email="+email);
}