<?php  
 header("Content-Type: text/html;charset=utf-8"); 
$mail=$_POST["mail"];
if($mail == "")  
        {  
            echo "fail1";//失败
        }  
        else  
        {  
            mysql_connect("localhost","root1","123456");  
            mysql_select_db("ciee"); 
            //mysql_query("set names 'gbk'");  
            $sql = "select password from user where mail = '$_POST[mail]' "; 
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);  
            if($num)  
            {  
                echo $num;//成功
            }  
            else  
            {  
                echo "fail2";//失败
            }  
        }  
		
		

?>