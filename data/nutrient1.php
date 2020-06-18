
<?php
  $conn=mysql_connect("localhost","root1","123456") or die("error connecting") ;
  mysql_query("set names 'utf8'"); //数据库输出编码
  mysql_select_db("ciee",$conn); //打开数据库
  $result = mysql_query("select * from nutrient");
  $array= array();
  class User{
    public $Number;
    public $NO3;
    public $K;
	public $Ca;
    public $pH;
    public $EC;
	public $DO;

  }
  while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
    $user=new User();
    $user->Number = $row['Number'];
    $user->NO3 = $row['NO3'];
    $user->K = $row['K'];
    $user->Ca = $row['Ca'];
    $user->pH = $row['pH'];
	$user->EC = $row['EC'];
    $user->DO = $row['DO'];
    $array[]=$user;
  }
  $data=json_encode($array);
  echo $data;
?>
