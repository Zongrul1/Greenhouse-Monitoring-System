
<?php
  $conn=mysql_connect("localhost","root1","123456") or die("error connecting") ;
  mysql_query("set names 'utf8'"); //数据库输出编码
  mysql_select_db("ciee",$conn); //打开数据库
  $result = mysql_query("select * from greenhouse order by time desc");
  $count=mysql_query("select count(*) from greenhouse"); //获得记录总数
$rs=mysql_fetch_array($count); 
$totalRows=$rs[0];
  $curPage=$_POST["curPage"];
  $array= array();
  class User{
    public $Time;
    public $Temperature;
    public $Humidity;
    public $CO2;
    public $Illumination;

  }
  while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
    $user=new User();
    $user->Time = $row['Time'];
    $user->Temperature = $row['Temperature'];
    $user->Humidity = $row['Humidity'];
    $user->CO2 = $row['CO2'];
    $user->Illumination = $row['Illumination'];
    $array[]=$user;
  }
  $data=json_encode($array);
  echo "{";
  echo "\"success\": true";
  echo ", \"totalRows\": ";
  echo $totalRows;
  echo ", \"curPage\": ";
  echo $curPage;
  echo ", \"data\": ";
  echo $data;
  echo "}";
?>
