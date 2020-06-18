<?php  
 header("Content-Type: text/html;charset=utf-8"); 
$mail=$_POST["mail"];
$psw=$_POST["password"];
if($mail == "")  
        {  
            echo "fail1";//失败
        }  
        else  
        {  
            mysql_connect("localhost","root1","123456");  
            mysql_select_db("ciee"); 
            //mysql_query("set names 'gbk'");  
            $sql = "UPDATE user SET password = '$_POST[password]' WHERE mail = $mail=$_POST[mail]"; 
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);  
            if($num)  
            {  
                echo "success";//成功
            }  
            else  
            {  
                echo "fail2";//失败
            }  
        }  
		
		

?>