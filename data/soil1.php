
<?php
  $conn=mysql_connect("localhost","root1","123456") or die("error connecting") ;
  mysql_query("set names 'utf8'"); //数据库输出编码
  mysql_select_db("ciee",$conn); //打开数据库
  $result = mysql_query("select * from soil1");
  $array= array();
  class User{
    public $sample_ID;
    public $UV_N;
    public $ISE_N;
    public $ISE_Cl;
    public $ISE_K;
	public $AAS_K;
	public $UV_P;
	public $EC;
	public $pH;
	public $t;

  }
  while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
    $user=new User();
    $user->sample_ID = $row['sample_ID'];
    $user->UV_N = $row['UV_N'];
    $user->ISE_N = $row['ISE_N'];
    $user->ISE_Cl = $row['ISE_Cl'];
    $user->ISE_K = $row['ISE_K'];
	$user->AAS_K = $row['AAS_K'];
	$user->UV_P = $row['UV_P'];
	$user->EC = $row['EC'];
	$user->pH = $row['pH'];
	$user->t = $row['t'];
    $array[]=$user;
  }
  $data=json_encode($array);
  echo $data;
?>