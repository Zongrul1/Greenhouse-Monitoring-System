<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /> 
<?php header("Content-Type: text/html;charset=utf-8"); ?>
<title>水培草莓信息-ESSH组监测数据综合管理信息平台</title>
<style>
td  
{  
 white-space: nowrap;  
}
#d1{margin:30px;}
#table-1 td{width:200px;text-align:center; }  
</style>
<linK rel="stylesheet" type="text/css" href="/css/spsc.css">
<linK rel="stylesheet" type="text/css" href="/css/main.css">
<linK rel="stylesheet" href="builds/merged/bsgrid.all.min.css"/>
<script type="text/javascript" src="plugins/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="builds/js/lang/grid.zh-CN.min.js"></script>
<script type="text/javascript" src="builds/merged/bsgrid.all.min.js"></script>
 <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/certify.css">
	<link rel="stylesheet" href="css/animate.css">

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">


	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body topmargin="0" marginwidth="0" onload="Act0()">
<div class="main">
<div class="loading" id="loading">
    <center>
    <img src="pic/loading.gif" alt="load"></img>
    <div class="progress" id="progress">加载中：0%</div>
    </center>
</div>
<script type="text/javascript">
var $loading = $('#loading')
var $progress = $('#progress')
var prg = 0

var timer = 0

progress([80, 90], [1, 3], 100)  // 使用数组来表示随机数的区间


function progress (dist, speed, delay, callbacK) {
  var _dist = random(dist)
  var _delay = random(delay)
  var _speed = random(speed)
  window.clearTimeout(timer)
  timer = window.setTimeout(() => {
    if (prg + _speed >= _dist) {
      window.clearTimeout(timer)
      prg = _dist
      callbacK && callbacK()
    } else {
      prg += _speed
      progress (_dist, speed, delay, callbacK)
    }

    $progress.html('加载中：'+parseInt(prg) + '%')  // 留意，由于已经不是自增1，所以这里要取整
    console.log(prg)
  }, _delay)
}

function random (n) {
  if (typeof n === 'object') {
    var times = n[1] - n[0]
    var offset = n[0]
    return Math.random() * times + offset
  } else {
    return n
  }
}
function Act0()
        {
			    progress(100, [1, 5], 10, () => {
    window.setTimeout(() => {  // 延迟了一秒再隐藏loading
      $loading.hide()
    }, 1000)
  })
        document.getElementById("wechat").style.display='none';
		document.getElementById("chart1").style.display="";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		document.getElementById("select1").style.display="";
		document.getElementById("select2").style.display="none";
		document.getElementById("select3").style.display="none";
		document.getElementById("button1").style.display="";
		document.getElementById("button2").style.display="none";
		document.getElementById("button3").style.display="none";
		document.getElementById("table1").style.display="";
		document.getElementById("table2").style.display="none";
		document.getElementById("table3").style.display="none";
		}
/*非法登陆*/
 $(window).load(function()
{
	if(document.referrer==="")
  {
window.location.href='login.html';
	}
});

</script>
<nav>
<div class="n1">
<div class="n2a">
<div style="height:10px"></div>
<img src="/pic/cau.bmp" alt="logo" height="80" width="100">
</div>
<div class="n2b">
<div style="height:10px"></div>
<img src="/pic/pacau.png" alt="logo" height="80" width="100">
</div>
<div class="n3">
<div class="n4">
    <ul>
      <li><a href="main.php" title="主页" target="_parent">主页</br>INDEX</a></li>
      <li><a href="greenhouse.php" title="温室监测" target="_parent">温室监测</br>Greenhouse</br>Monitoring</a></li>
      <li><a title="土壤养分监测" target="_parent">土壤养分监测</br>SoilNutrient</br>Monitoring</a>
	  <ul>
	  <li><a href="soil1.php" title="土壤养分监测(1)" target="_parent">土壤养分监测(1)</br>SoilNutrient</br>Monitoring(1)</a></li>
	  <li><a href="soil2.php" title="土壤养分监测(2)" target="_parent">土壤养分监测(2)</br>SoilNutrient</br>Monitoring(2)</a></li>
	  </ul>
	  </li>
	  <li><a title="水培作物" target="_parent">水培作物</br>Hydroponic</br>crop</a>
	  <ul>
      <li><a href="strawberry.php" title="水培草莓" target="_parent">水培草莓</br>Hydroponic</br>Strawberry</a></li>
	  <li><a href="tomato.php" title="水培番茄" target="_parent">水培番茄</br>Hydroponic</br>Tomato</a></li>
	  <li><a href="lettuce.php" title="水培生菜" target="_parent">水培生菜</br>Hydroponic</br>Lettuce</a></li>
	  </ul>
	  </li>
	  <li><a href="nutrient.php" title="营养液" target="_parent">营养液监测</br>Nutrient</br>Monitoring</a></li>
      <li><a href="intro.html" title="系统介绍" target="_parent">系统介绍</br>INFO</a></li>
	  <li><a href="member.php" title="成员介绍" target="_parent">成员介绍</br>MEMBERS</a></li>
    </ul>
</div>
</div>
<div class="n5">
<img src="/pic/wechat.jpg" alt="wechat" height="100" onmousemove="displaywechat(this)" onmouseout="undisplaywechat(this)"></img>
</div>
<div id="wechat">
<img src="/pic/wechatlogo.jpg" alt="welogo" height="100%" width="100%"></img>
</div>
</div>	
  </nav>   
  <script>
  function displaywechat(x)
  {
  document.getElementById("wechat").style.display='';
  }
  function undisplaywechat(x)
  {
  document.getElementById("wechat").style.display='none';
  }
  </script>   
     <div id="wrapper">
<div id="cell">
<h1>「ESSH组监测数据综合管理信息平台」</h1>
</div>
</div>  
   <div id="wrapper1">
      <div id="r1">
         <div class="e4">
   </div>
   <div class="e4">
   </div>
   <span class="se1"><td>表选择：</td>
   <td>
<select class="se2" onchange="ChangeSelect(this.options[this.options.selectedIndex].value)">
<option value="2016">2016</option>  
<option value="2017">2017</option>  
<option value="2018">2018</option>  
</select>
</td>
</span>
<script>
function ChangeSelect(val)
{     
if(val=="2016")
{
	    document.getElementById("chart1").style.display="";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		document.getElementById("select1").style.display="";
		document.getElementById("select2").style.display="none";
		document.getElementById("select3").style.display="none";
		document.getElementById("button1").style.display="";
		document.getElementById("button2").style.display="none";
		document.getElementById("button3").style.display="none";
		document.getElementById("table1").style.display="";
		document.getElementById("table2").style.display="none";
		document.getElementById("table3").style.display="none";
}
if(val=="2017")
{
	    document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		document.getElementById("select1").style.display="none";
		document.getElementById("select2").style.display="";
		document.getElementById("select3").style.display="none";
		document.getElementById("button1").style.display="none";
		document.getElementById("button2").style.display="";
		document.getElementById("button3").style.display="none";
		document.getElementById("table1").style.display="none";
		document.getElementById("table2").style.display="";
		document.getElementById("table3").style.display="none";
}
if(val=="2018")
{
	    document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		document.getElementById("select1").style.display="none";
		document.getElementById("select2").style.display="none";
		document.getElementById("select3").style.display="";
		document.getElementById("button1").style.display="none";
		document.getElementById("button2").style.display="none";
		document.getElementById("button3").style.display="";
		document.getElementById("table1").style.display="none";
		document.getElementById("table2").style.display="none";
		document.getElementById("table3").style.display="";
}
}
</script>      
   	  <div id="select1">
	  	  <div class="c5">
<div class="c6">
<p>「水培草莓数据快速查询」</p>
</div>
</div>
<span class="se1"><td>日期：</td>
<td>
<select class="se2" id="ss1" onchange="ChangeSelect1(this.options[this.options.selectedIndex].value)">
<option>--请选择--</option>
<?php
$con = mysql_connect("localhost","root1","123456");
mysql_select_db("ciee", $con);
$sql="select date from strawberry1";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result)){
?>

<option value=<?php echo $row['date'] ?>><?php echo $row['date'] ?></option>  
<?php
}

?>
</select>
</td>
</span>
<script>
var arr1=[],arr2=[],arr3=[],arr4=[],arr5=[],arr6=[],arr7=[],arr8=[],arr9=[],arr10=[];

function ChangeSelect1(val)
{           
$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/strawberry1-2.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr1.push(result[i].date);
                          arr2.push(result[i].number);
						  arr3.push(result[i].NO3_N);
	                      arr4.push(result[i].K);
                          arr5.push(result[i].Ca);
						  arr6.push(result[i].DO);
						  arr7.push(result[i].EC);
						  arr8.push(result[i].pH);
						  arr9.push(result[i].Nutrient_volume);
						  arr10.push(result[i].Weight);
                      }
                    }
                  },
error : function(XMLHttpRequest, textStatus, errorThrown) { //这个error函数调试时非常有用，如果解析不正确，将会弹出错误框 　　　　
alert(XMLHttpRequest.responseText);  
alert(XMLHttpRequest.status); 
alert(XMLHttpRequest.readyState); 
alert(textStatus); // parser error; 
} 

                })				  			
	for(var i=0;i<document.getElementById("ss1").options.length;i++)
	{   
		if(val==arr1[i])
	{
	 document.getElementById("z1").innerHTML=arr3[i];
	 document.getElementById("z2").innerHTML=arr4[i];
	 document.getElementById("z3").innerHTML=arr5[i];
	 document.getElementById("z4").innerHTML=arr6[i];
	 document.getElementById("z5").innerHTML=arr7[i];
	 document.getElementById("z6").innerHTML=arr8[i];
	 document.getElementById("z7").innerHTML=arr9[i];
	 document.getElementById("z8").innerHTML=arr10[i];
	}
}
}
</script>
<div class="c77">
<div class="e10"><p>NO3-N(ppm)</p><div id="z1" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>K(ppm)</p><div id="z2" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>Ca(ppm)</p><div id="z3" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>DO/mg/L))</p><div id="z4" class="e3" style="font-size:60px"></div></div>
<div class="e1"><p>EC(us/cm))</p><div id="z5" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>pH</p><div id="z6" class="e3" style="font-size:60px"></div></div>
<div class="e20"><p>Nutrient_volume(L)</p><div id="z7" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>Weight(g)</p><div id="z8" class="e3" style="font-size:60px"></div></div>
</div>
</div>
   	  <div id="select2">
	  	  <div class="c5">
<div class="c6">
<p>「水培草莓数据快速查询」</p>
</div>
</div>
<span class="se1"><td>日期：</td>
<td>
<select class="se2" id="ss2" onchange="ChangeSelect2(this.options[this.options.selectedIndex].value)">
<option>--请选择--</option>
<?php
$con = mysql_connect("localhost","root1","123456");
mysql_select_db("ciee", $con);
$sql="select date from strawberry2";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result)){
?>

<option value=<?php echo $row['date'] ?>><?php echo $row['date'] ?></option>  
<?php
}

?>
</select>
</td>
</span>
<script>
var arr11=[],arr12=[],arr13=[],arr14=[],arr15=[],arr16=[],arr17=[],arr18=[],arr19=[],arr20=[];

function ChangeSelect2(val)
{           
$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/strawberry2-2.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr11.push(result[i].date);
                          arr12.push(result[i].number);
						  arr13.push(result[i].NO3_N);
	                      arr14.push(result[i].K);
                          arr15.push(result[i].Ca);
						  arr16.push(result[i].DO);
						  arr17.push(result[i].EC);
						  arr18.push(result[i].pH);
						  arr19.push(result[i].Nutrient_volume);
						  arr20.push(result[i].Weight);
                      }
                    }
                  },
error : function(XMLHttpRequest, textStatus, errorThrown) { //这个error函数调试时非常有用，如果解析不正确，将会弹出错误框 　　　　
alert(XMLHttpRequest.responseText);  
alert(XMLHttpRequest.status); 
alert(XMLHttpRequest.readyState); 
alert(textStatus); // parser error; 
} 

                })				  			
	for(var i=0;i<document.getElementById("ss2").options.length;i++)
	{   
		if(val==arr11[i])
	{
	 document.getElementById("z11").innerHTML=arr13[i];
	 document.getElementById("z12").innerHTML=arr14[i];
	 document.getElementById("z13").innerHTML=arr15[i];
	 document.getElementById("z14").innerHTML=arr16[i];
	 document.getElementById("z15").innerHTML=arr17[i];
	 document.getElementById("z16").innerHTML=arr18[i];
	 document.getElementById("z17").innerHTML=arr19[i];
	 document.getElementById("z18").innerHTML=arr20[i];
	}
}
}
</script>
<div class="c77">
<div class="e1"><p>NO3-N(ppm)</p><div id="z11" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>K(ppm)</p><div id="z12" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>Ca(ppm)</p><div id="z13" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>DO/mg/L))</p><div id="z14" class="e3" style="font-size:60px"></div></div>
<div class="e1"><p>EC(us/cm))</p><div id="z15" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>pH</p><div id="z16" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>Nutrient_volume(L)</p><div id="z17" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>Weight(g)</p><div id="z18" class="e3" style="font-size:60px"></div></div>
</div>
</div>
   	  <div id="select3">
	  	  <div class="c5">
<div class="c6">
<p>「水培草莓数据快速查询」</p>
</div>
</div>
<span class="se1"><td>日期：</td>
<td>
<select class="se2" id="ss3" onchange="ChangeSelect3(this.options[this.options.selectedIndex].value)">
<option>--请选择--</option>
<?php
$con = mysql_connect("localhost","root1","123456");
mysql_select_db("ciee", $con);
$sql="select date from strawberry3";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result)){
?>

<option value=<?php echo $row['date'] ?>><?php echo $row['date'] ?></option>  
<?php
}

?>
</select>
</td>
</span>
<script>
var arr21=[],arr22=[],arr23=[],arr24=[],arr25=[],arr26=[],arr27=[],arr28=[],arr29=[],arr30=[];

function ChangeSelect3(val)
{           
$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/strawberry3-2.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr21.push(result[i].date);
                          arr22.push(result[i].number);
						  arr23.push(result[i].NO3_N);
	                      arr24.push(result[i].K);
                          arr25.push(result[i].Ca);
						  arr26.push(result[i].DO);
						  arr27.push(result[i].EC);
						  arr28.push(result[i].pH);
						  arr29.push(result[i].Nutrient_volume);
						  arr30.push(result[i].Weight);
                      }
                    }
                  },
error : function(XMLHttpRequest, textStatus, errorThrown) { //这个error函数调试时非常有用，如果解析不正确，将会弹出错误框 　　　　
alert(XMLHttpRequest.responseText);  
alert(XMLHttpRequest.status); 
alert(XMLHttpRequest.readyState); 
alert(textStatus); // parser error; 
} 

                })				  			
	for(var i=0;i<document.getElementById("ss3").options.length;i++)
	{   
		if(val==arr21[i])
	{
	 document.getElementById("z21").innerHTML=arr23[i];
	 document.getElementById("z22").innerHTML=arr24[i];
	 document.getElementById("z23").innerHTML=arr25[i];
	 document.getElementById("z24").innerHTML=arr26[i];
	 document.getElementById("z25").innerHTML=arr27[i];
	 document.getElementById("z26").innerHTML=arr28[i];
	 document.getElementById("z27").innerHTML=arr29[i];
	 document.getElementById("z28").innerHTML=arr30[i];
	}
}
}
</script>
<div class="c77">
<div class="e1"><p>NO3-N(ppm)</p><div id="z21" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>K(ppm)</p><div id="z22" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>Ca(ppm)</p><div id="z23" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>DO/mg/L))</p><div id="z24" class="e3" style="font-size:60px"></div></div>
<div class="e1"><p>EC(us/cm))</p><div id="z25" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>pH</p><div id="z26" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>Nutrient_volume(L)</p><div id="z27" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>Weight(g)</p><div id="z28" class="e3" style="font-size:60px"></div></div>
</div>
</div>
<div id="c2">
<div id="c3">
<p>「水培草莓详细数据」</p>
</div>
</div>
<center>
<div id="table1">
 <table id="searchTable1">
        <tr>
            <th w_index="date" width="5%;">日期</th>
            <th w_index="number" width="5%;">样本号</th>
            <th w_index="NO3_N"  width="5%;">NO3-N/ppm</th>
            <th w_index="K"  width="5%;">K/ppm</th>
            <th w_index="Ca" width="5%;">Ca/ppm</th>
            <th w_index="EC" width="5%;">EC(uS/cm)</th>
            <th w_index="pH" width="5%;">pH</th>
            <th w_index="DO" width="5%;">DO/(mg/L)</th>
<!--			<th w_index="Nutrient_volume" width="5%;">Nutrient_volume/L</th>
            <th w_index="Weight" width="5%;">Weight/g</th> -->
        </tr>
    </table>
    </div>
    <script type="text/javascript" >			  	
     
	    var gridObj1;
        $(function () {	  
            gridObj1 = $.fn.bsgrid.init('searchTable1', {
                url:'data/strawberry1-1.php',
                // autoLoad: true,
                pageSizeSelect: false,
                pageSize: 10
            });
        });
	


    </script>
	<div id="table2">
 <table id="searchTable2">
        <tr>
            <th w_index="date" width="5%;">日期</th>
            <th w_index="number" width="5%;">样本号</th>
            <th w_index="NO3_N"  width="5%;">NO3-N/ppm</th>
            <th w_index="K"  width="5%;">K/ppm</th>
            <th w_index="Ca" width="5%;">Ca/ppm</th>
            <th w_index="EC" width="5%;">EC(uS/cm)</th>
            <th w_index="pH" width="5%;">pH</th>
            <th w_index="DO" width="5%;">DO/(mg/L)</th>
			<th w_index="Nutrient_volume" width="5%;">Nutrient_volume/L</th>
            <th w_index="Weight" width="5%;">Weight/g</th>
        </tr>
    </table>
    </div>
    <script type="text/javascript" >			  	
     
	    var gridObj2;
        $(function () {	  
            gridObj2 = $.fn.bsgrid.init('searchTable2', {
                url:'data/strawberry2-1.php',
                // autoLoad: true,
                pageSizeSelect: false,
                pageSize: 10
            });
        });
	


    </script>
	<div id="table3">
 <table id="searchTable3">
        <tr>
            <th w_index="date" width="5%;">日期</th>
            <th w_index="number" width="5%;">样本号</th>
            <th w_index="NO3_N"  width="5%;">NO3-N/ppm</th>
            <th w_index="K"  width="5%;">K/ppm</th>
            <th w_index="Ca" width="5%;">Ca/ppm</th>
            <th w_index="EC" width="5%;">EC(uS/cm)</th>
            <th w_index="pH" width="5%;">pH</th>
            <th w_index="DO" width="5%;">DO/(mg/L)</th>
			<th w_index="Nutrient_volume" width="5%;">Nutrient_volume/L</th>
            <th w_index="Weight" width="5%;">Weight/g</th>
        </tr>
    </table>
    </div>
    <script type="text/javascript" >			  	
     
	    var gridObj1;
        $(function () {	  
            gridObj1 = $.fn.bsgrid.init('searchTable3', {
                url:'data/strawberry3-1.php',
                // autoLoad: true,
                pageSizeSelect: false,
                pageSize: 10
            });
        });
	


    </script>
</center>
<div class="e4"></div>
<div id="button1" style="weight:80%;">
<div style="width:80%;min-height:1px;margin-left:10%">
<button class="r2" id="b1" onclicK="Act1()">NO3-N/ppm</button>
<button class="r2" id="b2" onclicK="Act2()">K/ppm</button>
<button class="r2" id="b3" onclicK="Act3()">Ca/ppm</button>
<button class="r2" id="b4" onclicK="Act4()">Do/(mg/L)</button>
</div>
<div style="height:10px"></div>
<div style="width:80%;min-height:1px;margin-left:10%">
<button class="r2" id="b5" onclicK="Act5()">EC/(uS/cm)</button>
<button class="r2" id="b6" onclicK="Act6()">pH</button>
<button class="r2" id="b7" onclicK="Act7()">Nutrient_volume/L</button>
<button class="r2" id="b8" onclicK="Act8()">Weight/g</button>
</div>
</div>
<div id="button2" style="weight:80%;">
<div style="width:80%;min-height:1px;margin-left:10%">
<button class="r2" id="b9" onclicK="Act9()">NO3-N/ppm</button>
<button class="r2" id="b10" onclicK="Act10()">K/ppm</button>
<button class="r2" id="b11" onclicK="Act11()">Ca/ppm</button>
<button class="r2" id="b12" onclicK="Act12()">Do/(mg/L)</button>
</div>
<div style="height:10px"></div>
<div style="width:80%;min-height:1px;margin-left:10%">
<button class="r2" id="b13" onclicK="Act13()">EC/(uS/cm)</button>
<button class="r2" id="b14" onclicK="Act14()">pH</button>
<button class="r2" id="b15" onclicK="Act15()">Nutrient_volume/L</button>
<button class="r2" id="b16" onclicK="Act16()">Weight/g</button>
</div>
</div>
<div id="button3" style="weight:80%;">
<div style="width:80%;min-height:1px;margin-left:10%">
<button class="r2" id="b17" onclicK="Act17()">NO3-N/ppm</button>
<button class="r2" id="b18" onclicK="Act18()">K/ppm</button>
<button class="r2" id="b19" onclicK="Act19()">Ca/ppm</button>
<button class="r2" id="b20" onclicK="Act20()">Do/(mg/L)</button>
</div>
<div style="height:10px"></div>
<div style="width:80%;min-height:1px;margin-left:10%">
<button class="r2" id="b21" onclicK="Act21()">EC/(uS/cm)</button>
<button class="r2" id="b22" onclicK="Act22()">pH</button>
<button class="r2" id="b23" onclicK="Act23()">Nutrient_volume/L</button>
<button class="r2" id="b24" onclicK="Act24()">Weight/g</button>
</div>
</div>


        </center>
<div class="e4"></div>
<div id="j1">
<div id="chart1" style="height:500px;weight:100%;"></div>
<div id="chart2" style="height:500px;weight:100%;"></div>
<div id="chart3" style="height:500px;weight:100%;"></div>
<div id="chart4" style="height:500px;weight:100%;"></div>
<div id="chart5" style="height:500px;weight:100%;"></div>
<div id="chart6" style="height:500px;weight:100%;"></div>
<div id="chart7" style="height:500px;weight:100%;"></div>
<div id="chart8" style="height:500px;weight:100%;"></div>
<div id="chart9" style="height:500px;weight:100%;"></div>
<div id="chart10" style="height:500px;weight:100%;"></div>
<div id="chart11" style="height:500px;weight:100%;"></div>
<div id="chart12" style="height:500px;weight:100%;"></div>
<div id="chart13" style="height:500px;weight:100%;"></div>
<div id="chart14" style="height:500px;weight:100%;"></div>
<div id="chart15" style="height:500px;weight:100%;"></div>
<div id="chart16" style="height:500px;weight:100%;"></div>
<div id="chart17" style="height:500px;weight:100%;"></div>
<div id="chart18" style="height:500px;weight:100%;"></div>
<div id="chart19" style="height:500px;weight:100%;"></div>
<div id="chart20" style="height:500px;weight:100%;"></div>
<div id="chart21" style="height:500px;weight:100%;"></div>
<div id="chart22" style="height:500px;weight:100%;"></div>
<div id="chart23" style="height:500px;weight:100%;"></div>
<div id="chart24" style="height:500px;weight:100%;"></div>
</div>
</div>
 <script src="js/echarts.js"></script>
    <script type="text/javascript">
        var myChart1 = echarts.init(document.getElementById('chart1'));
		var myChart2 = echarts.init(document.getElementById('chart2')); 
		var myChart3 = echarts.init(document.getElementById('chart3')); 
		var myChart4 = echarts.init(document.getElementById('chart4'));  
		var myChart5 = echarts.init(document.getElementById('chart5'));
		var myChart6 = echarts.init(document.getElementById('chart6')); 
		var myChart7 = echarts.init(document.getElementById('chart7'));
		var myChart8 = echarts.init(document.getElementById('chart8')); 
		var myChart9 = echarts.init(document.getElementById('chart9'));
		var myChart10 = echarts.init(document.getElementById('chart10')); 
		var myChart11 = echarts.init(document.getElementById('chart11')); 
		var myChart12 = echarts.init(document.getElementById('chart12'));  
		var myChart13 = echarts.init(document.getElementById('chart13'));
		var myChart14 = echarts.init(document.getElementById('chart14')); 
		var myChart15 = echarts.init(document.getElementById('chart15'));
		var myChart16 = echarts.init(document.getElementById('chart16')); 
		var myChart17 = echarts.init(document.getElementById('chart17'));
		var myChart18 = echarts.init(document.getElementById('chart18')); 
		var myChart19 = echarts.init(document.getElementById('chart19')); 
		var myChart20 = echarts.init(document.getElementById('chart20'));  
		var myChart21 = echarts.init(document.getElementById('chart21'));
		var myChart22 = echarts.init(document.getElementById('chart22')); 
		var myChart23 = echarts.init(document.getElementById('chart23'));
		var myChart24 = echarts.init(document.getElementById('chart24')); 
		var arr1=[],arr2=[],arr3=[],arr4=[],arr5=[],arr6=[],arr7=[],arr8=[],arr9=[],arr10=[];
		var arr11=[],arr12=[],arr13=[],arr14=[],arr15=[],arr16=[],arr17=[],arr18=[],arr19=[],arr20=[];
		var arr21=[],arr22=[],arr23=[],arr24=[],arr25=[],arr26=[],arr27=[],arr28=[],arr29=[],arr30=[];
		function arrTest(){
			$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/strawberry1-2.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr1.push(result[i].date);
                          arr2.push(result[i].number);
						  arr3.push(result[i].NO3_N);
	                      arr4.push(result[i].K);
                          arr5.push(result[i].Ca);
						  arr6.push(result[i].DO);
						  arr7.push(result[i].EC);
						  arr8.push(result[i].pH);
						  arr9.push(result[i].Nutrient_volume);
						  arr10.push(result[i].Weight);
                      }
                    }
                  },
				  
error : function(XMLHttpRequest, textStatus, errorThrown) { //这个error函数调试时非常有用，如果解析不正确，将会弹出错误框 　　　　
alert(XMLHttpRequest.responseText);  
alert(XMLHttpRequest.status); 
alert(XMLHttpRequest.readyState); 
alert(textStatus); // parser error; 
} 

                })
				$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/strawberry2-2.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr11.push(result[i].date);
                          arr12.push(result[i].number);
						  arr13.push(result[i].NO3_N);
	                      arr14.push(result[i].K);
                          arr15.push(result[i].Ca);
						  arr16.push(result[i].DO);
						  arr17.push(result[i].EC);
						  arr18.push(result[i].pH);
						  arr19.push(result[i].Nutrient_volume);
						  arr20.push(result[i].Weight);
                      }
                    }
                  },
error : function(XMLHttpRequest, textStatus, errorThrown) { //这个error函数调试时非常有用，如果解析不正确，将会弹出错误框 　　　　
alert(XMLHttpRequest.responseText);  
alert(XMLHttpRequest.status); 
alert(XMLHttpRequest.readyState); 
alert(textStatus); // parser error; 
} 

                })	
$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/strawberry3-2.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr21.push(result[i].date);
                          arr22.push(result[i].number);
						  arr23.push(result[i].NO3_N);
	                      arr24.push(result[i].K);
                          arr25.push(result[i].Ca);
						  arr26.push(result[i].DO);
						  arr27.push(result[i].EC);
						  arr28.push(result[i].pH);
						  arr29.push(result[i].Nutrient_volume);
						  arr30.push(result[i].Weight);
                      }
                    }
                  },
error : function(XMLHttpRequest, textStatus, errorThrown) { //这个error函数调试时非常有用，如果解析不正确，将会弹出错误框 　　　　
alert(XMLHttpRequest.responseText);  
alert(XMLHttpRequest.status); 
alert(XMLHttpRequest.readyState); 
alert(textStatus); // parser error; 
} 

                })					
		}
			
              arrTest();
			//图线绘制  
var option1 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'NO3-N变化趋势/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [

		 {
            "name":"NO3-N",
            "type":"bar",
            "data":arr3
        },

    ]
};
                    
					/*K*/
					
					var option2 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'K变化趋势/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [

		 {
            "name":"K",
            "type":"bar",
            "data":arr4
        },

    ]
};                  
/*ca*/
var option3 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'Ca变化趋势/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [

				 {
            "name":"Ca",
            "type":"bar",
            "data":arr5
        },

    ]
};
/*do*/
var option4 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'DO变化趋势/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"DO",
            "type":"bar",
            "data":arr6
        },
    ]
};
/*ec*/
var option5 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'电导率变化趋势(us/cm)',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"EC",
            "type":"bar",
            "data":arr7
        },
    ]
};
/*ph*/
var option6 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'pH变化趋势',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"pH",
            "type":"bar",
            "data":arr8
        },
    ]
};
/*NV*/
var option7 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'Nutrient_volume变化趋势/L',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"Nutrient_volume",
            "type":"bar",
            "data":arr9
        },
    ]
};
/*Weight*/
var option8 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'Weight变化趋势/g',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"Weight",
            "type":"bar",
            "data":arr10
        },
    ]
};
var option9 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'NO3-N变化趋势/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [

		 {
            "name":"NO3-N",
            "type":"bar",
            "data":arr13
        },

    ]
};
                    
					/*K*/
					
					var option10 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'K变化趋势/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [

		 {
            "name":"K",
            "type":"bar",
            "data":arr14
        },

    ]
};                  
/*ca*/
var option11 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'Ca变化趋势/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [

				 {
            "name":"Ca",
            "type":"bar",
            "data":arr15
        },

    ]
};
/*do*/
var option12 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'DO变化趋势/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"DO",
            "type":"bar",
            "data":arr16
        },
    ]
};
/*ec*/
var option13 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'电导率变化趋势(us/cm)',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"EC",
            "type":"bar",
            "data":arr17
        },
    ]
};
/*ph*/
var option14 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'pH变化趋势',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"pH",
            "type":"bar",
            "data":arr18
        },
    ]
};
/*NV*/
var option15 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'Nutrient_volume变化趋势/L',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"Nutrient_volume",
            "type":"bar",
            "data":arr19
        },
    ]
};
/*Weight*/
var option16 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'Weight变化趋势/g',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"Weight",
            "type":"bar",
            "data":arr20
        },
    ]
};
var option17 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'NO3-N变化趋势/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [

		 {
            "name":"NO3-N",
            "type":"bar",
            "data":arr23
        },

    ]
};
                    
					/*K*/
					
					var option18 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'K变化趋势/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [

		 {
            "name":"K",
            "type":"bar",
            "data":arr24
        },

    ]
};                  
/*ca*/
var option19 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'Ca变化趋势/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [

				 {
            "name":"Ca",
            "type":"bar",
            "data":arr25
        },

    ]
};
/*do*/
var option20 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'DO变化趋势/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"DO",
            "type":"bar",
            "data":arr26
        },
    ]
};
/*ec*/
var option21 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'电导率变化趋势(us/cm)',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"EC",
            "type":"bar",
            "data":arr27
        },
    ]
};
/*ph*/
var option22 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'pH变化趋势',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"pH",
            "type":"bar",
            "data":arr28
        },
    ]
};
/*NV*/
var option23 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'Nutrient_volume变化趋势/L',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"Nutrient_volume",
            "type":"bar",
            "data":arr29
        },
    ]
};
/*Weight*/
var option24 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            marK : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
  calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			},
            data :arr1
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'Weight变化趋势/g',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [
    
				 {
            "name":"Weight",
            "type":"bar",
            "data":arr30
        },
    ]
};
        // 为echarts对象加载数据 
        myChart1.setOption(option1); 
		myChart2.setOption(option2); 
		myChart3.setOption(option3); 
		myChart4.setOption(option4); 
	    myChart5.setOption(option5); 
		myChart6.setOption(option6); 
        myChart7.setOption(option7); 
		myChart8.setOption(option8); 
		myChart9.setOption(option9); 
		myChart10.setOption(option10); 
		myChart11.setOption(option11); 
		myChart12.setOption(option12); 
	    myChart13.setOption(option13); 
		myChart14.setOption(option14); 
        myChart15.setOption(option15); 
		myChart16.setOption(option16); 
		myChart17.setOption(option17); 
		myChart18.setOption(option18); 
		myChart19.setOption(option19); 
		myChart20.setOption(option20); 
	    myChart21.setOption(option21); 
		myChart22.setOption(option22); 
        myChart23.setOption(option23); 
		myChart24.setOption(option24); 
</script>
<div class="e4"></div>


     <footer>
            <div id="f1">
 <center>
				版权所有：</br>
                现代精细农业系统集成研究教育部重点实验室，中国农业大学，北京100083</br>
                农业部农业信息获取技术重点实验室，中国农业大学，北京100083</br>
                </center>
            </div>
        </footer>
        </div>
</body>
</html>
<script type="text/javascript">
function Act1()
        { 		document.getElementById("chart1").style.display="";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act2()
        { 		document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act3()
        { 		document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act4()
        {		document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act5()
        { 		document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act6()
        { 		document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act7()
        { 		document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act8()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act9()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Ac10()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act11()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act12()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act13()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act14()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act15()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act16()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act17()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act18()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act19()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act20()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act21()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act22()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="none";
		}
		function Act23()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="";
		document.getElementById("chart24").style.display="none";
		}
		function Act24()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("chart19").style.display="none";
		document.getElementById("chart20").style.display="none";
		document.getElementById("chart21").style.display="none";
		document.getElementById("chart22").style.display="none";
		document.getElementById("chart23").style.display="none";
		document.getElementById("chart24").style.display="";
		}
		</script>