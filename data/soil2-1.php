<?php
  $conn=mysql_connect("localhost","root1","123456") or die("error connecting") ;
  mysql_query("set names 'utf8'"); //数据库输出编码
  mysql_select_db("ciee",$conn); //打开数据库
  $result = mysql_query("select * from soil2");
  $array= array();
  class User{
    public $sample_ID;
    public $Nutrient_content;
    public $UV;
    public $ISE_normal;
    public $ISE_wetsoil;
	public $Ecw_normal;
	public $Ecw_wetsoil;
	public $Temperature;
	public $pH_normal;
	public $pH_wetsoil;

  }
  while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
    $user=new User();
    $user->sample_ID = $row['sample_ID'];
	$user->Nutrient_content = $row['Nutrient_content'];
    $user->UV = $row['UV'];
    $user->ISE_normal = $row['ISE_normal'];
    $user->ISE_wetsoil = $row['ISE_wetsoil'];
    $user->Ecw_normal = $row['Ecw_normal'];
	$user->Ecw_wetsoil = $row['Ecw_wetsoil'];
	$user->Temperature = $row['Temperature'];
	$user->pH_normal = $row['pH_normal'];
	$user->pH_wetsoil = $row['pH_wetsoil'];
    $array[]=$user;
  }
  $data=json_encode($array);
  echo $data;
?>