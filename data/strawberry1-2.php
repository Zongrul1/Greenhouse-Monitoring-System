
<?php
  $conn=mysql_connect("localhost","root1","123456") or die("error connecting") ;
  mysql_query("set names 'utf8'"); //数据库输出编码
  mysql_select_db("ciee",$conn); //打开数据库
  $result = mysql_query("select * from strawberry1");
  $array= array();
  class User{
    public $date;
    public $number;
	public $NO3_N;
    public $K;
    public $Ca;
	public $DO;
	public $EC;
	public $pH;
    public $Nutrient_volume;
	public $Weight;

  }
  while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
    $user=new User();
    $user->date = $row['date'];
    $user->number = $row['number'];
    $user->NO3_N = $row['NO3_N'];
    $user->K = $row['K'];
    $user->Ca = $row['Ca'];
	$user->DO = $row['DO'];
	$user->EC = $row['EC'];
	$user->pH = $row['pH'];
    $user->Nutrient_volume = $row['Nutrient_volume'];
	$user->Weight = $row['Weight'];
    $array[]=$user;
  }
  $data=json_encode($array);
  echo $data;
?>