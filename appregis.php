<?php   header("Content-Type: text/html;charset=utf-8"); 
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
        $psw_confirm = $_POST["confirm"];  
		$phone=$_POST["phone"];
		$mail=$_POST["email"];		
        if($user == "" || $psw == "" || $psw_confirm == ""||$phone== ""||$mail== "")  
        { 
		echo"fail";
        }  
        else  
        {  
            if($psw == $psw_confirm)  
            {  
                mysql_connect("localhost","root1","123456");   //连接数据库  
                mysql_select_db("ciee");  //选择数据库  
                //mysql_query("set names 'gdk'"); //设定字符集  
                $sql = "select username from user where username = '$_POST[username]'"; //SQL语句  
				$sql1=  "select username from user where mail = '$_POST[mail]'"; 
                $result = mysql_query($sql);    //执行SQL语句  
                $num = mysql_num_rows($result); //统计执行结果影响的行数 
				$result1 = mysql_query($sql1);    //执行SQL语句  
                $num1 = mysql_num_rows($result1); //统计执行结果影响的行数
                if($num)    //如果已经存在该用户  
                {  
                   echo"usernameexist";//失败
                }  
				else if($num1)
				 {  
                   echo "mailnameexist";//失败
                }  
                else    //不存在当前注册用户名称  
                {  
                    $sql_insert = "insert into user(username,password,phone,mail) values('$user','$psw','$phone','$mail')";   
                    $res_insert = mysql_query($sql_insert);  
                    //$num_insert = mysql_num_rows($res_insert);  
                    if($res_insert)  
                    {  
                        echo "success";//成功 
                    }  
                    else  
                    {  
                        echo "fail";//失败
                    }  
                }  
            }  
            else  
            {  
                echo "fail";//失败
            }  
        }  ?>  