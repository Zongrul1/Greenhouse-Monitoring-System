<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /> 
<?php header("Content-Type: text/html;charset=utf-8"); ?>
<title>水培生菜信息-ESSH组监测数据综合管理信息平台</title>
<style>
td  
{  
 white-space: nowrap;  
}
#d1{margin:30px;}
#table-1 td{width:200px;text-align:center; }
</style>
<link rel="stylesheet" type="text/css" href="/css/spsc.css">
<link rel="stylesheet" type="text/css" href="/css/main.css">
 <link rel="stylesheet" href="builds/merged/bsgrid.all.min.css"/>
    <script type="text/javascript" src="plugins/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="builds/js/lang/grid.zh-CN.min.js"></script>
    <script type="text/javascript" src="builds/merged/bsgrid.all.min.js"></script>
	 <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/certify.css">
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

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


function progress (dist, speed, delay, callback) {
  var _dist = random(dist)
  var _delay = random(delay)
  var _speed = random(speed)
  window.clearTimeout(timer)
  timer = window.setTimeout(() => {
    if (prg + _speed >= _dist) {
      window.clearTimeout(timer)
      prg = _dist
      callback && callback()
    } else {
      prg += _speed
      progress (_dist, speed, delay, callback)
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
		document.getElementById("chart15").style.display="none"
		}

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
	  	  <div id="c5">
<div id="c6">
<p>「水培生菜数据快速查询」</p>
</div>
</div>
<span id="se1"><td>日期：</td>
<td>
<select id="se2" onchange="ChangeSelect(this.options[this.options.selectedIndex].value)">
<option>--请选择--</option>
<?php
$con = mysql_connect("localhost","root1","123456");
mysql_select_db("ciee", $con);
$sql="select date from lettuce";
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

function ChangeSelect(val)
{           
$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/lettuce2.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr1.push(result[i].date);
                          //arr2.push(result[i].number);
						  arr2.push(result[i].NO3_N);
	                      arr3.push(result[i].K);
                          arr4.push(result[i].Ca);
						  arr5.push(result[i].DO);
						  arr6.push(result[i].EC);
						  arr7.push(result[i].pH);
						  arr8.push(result[i].Nutrient_volume);
						  arr9.push(result[i].Number_blade);
						  arr10.push(result[i].Area);
						  arr11.push(result[i].Freshweight);
						  arr12.push(result[i].Dryweight);
						  arr13.push(result[i].Rootlength);
						  arr14.push(result[i].N_blade);
						  arr15.push(result[i].K_blade);
						  arr16.push(result[i].Ca_blade);
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
				  			
	for(var i=0;i<document.getElementById("se2").options.length;i++)
	{
		if(val==arr1[i])
	{
	 document.getElementById("z1").innerHTML=arr2[i];
	 document.getElementById("z2").innerHTML=arr3[i];
	 document.getElementById("z3").innerHTML=arr4[i];
	 document.getElementById("z4").innerHTML=arr5[i];
	 document.getElementById("z5").innerHTML=arr6[i];
	 document.getElementById("z6").innerHTML=arr7[i];
	 document.getElementById("z7").innerHTML=arr8[i];
	}
}
}
</script>
<div id="c77">
<div class="e1"><p>NO3_N(ppm)</p><div id="z1" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>K(ppm)</p><div id="z2" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>Ca(ppm)</p><div id="z3" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>DO(mg/L)</p><div id="z4" class="e3" style="font-size:60px"></div></div>
<div class="e1"><p>EC(uS/cm)</p><div id="z5" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>pH</p><div id="z6" class="e3" style="font-size:60px"></div></div>
<div class="e88"><p>Nutrient_volume(L)</p><div id="z7" class="e3" style="font-size:60px"></div></div>
</div>
	     <div id="c2">
<div id="c3">
<p>「水培生菜详细数据」</p>
</div>
</div>
         <div class="e4">
   </div>
<center>
 <table id="searchTable">
        <tr>
            <th w_index="date" width="3%;">date</th>
            <th w_index="NO3_N" width="3%;">NO3_N/ppm</th>
            <th w_index="K"  width="3%;">K/ppm</th>
            <th w_index="Ca"  width="3%;">Ca/ppm</th>
            <th w_index="DO" width="3%;">DO/(mg/L)</th>
            <th w_index="EC" width="3%;">EC/(uS/cm)</th>
            <th w_index="pH" width="3%;">pH</th>
            <th w_index="Nutrient_volume" width="3%;">Nutrient_volume/L</th>
			<!--<th w_index="Number_blade" width="3%;">Number_blade</th>
			<th w_index="Area" width="3%;">Area/cm2</th>
			<th w_index="Freshweight" width="3%;">Freshweight/g</th>
			<th w_index="Dryweight" width="3%;">Dryweight/g</th>
			<th w_index="Rootlength" width="3%;">Rootlength/cm</th>
			<th w_index="N_blade" width="3%;">N_blade/g</th>
			<th w_index="K_blade" width="3%;">K_blade/g</th>
			<th w_index="Ca_blade" width="3%;">Ca_blade/g</th>-->
        </tr>
    </table>
    <script type="text/javascript" >
        var gridObj;
        $(function () {	  
            gridObj = $.fn.bsgrid.init('searchTable', {
                url:'data/lettuce1.php',
                // autoLoad: true,
                pageSizeSelect: false,
                pageSize: 10
            });
        });


    </script>
</center>
<div class="e4"></div>
<div style="width:80%;min-height:1px;margin-left:10%">
<button class="r2" id="b1" onclick="Act1()">NO3-N/ppm</button>
<button class="r2" id="b2" onclick="Act2()">K/ppm</button>
<button class="r2" id="b3" onclick="Act3()">Ca/ppm</button>
<button class="r2" id="b4" onclick="Act4()">DO/(mg/L)</button>
<button class="r2" id="b5" onclick="Act5()">EC/(uS/cm)</button>
</div>
<div style="height:10px"></div>
<div style="width:80%;min-height:1px;margin-left:10%">
<button class="r2" id="b6" onclick="Act6()">pH</button>
<button class="r2" id="b7" onclick="Act7()">Nutrient_volume/L</button>
<button class="r2" id="b8" onclick="Act8()">Number_blade</button>
<button class="r2" id="b9" onclick="Act9()">Area/cm2</button>
<button class="r2" id="b10" onclick="Act10()">Freshweight/g</button>
</div>
<div style="height:10px"></div>
<div style="width:80%;min-height:1px;margin-left:10%">
<button class="r2" id="b11" onclick="Act11()">Dryweight/g</button>
<button class="r2" id="b12" onclick="Act12()">Rootlength/cm</button>
<button class="r2" id="b13" onclick="Act13()">N_blade/g</button>
<button class="r2" id="b14" onclick="Act14()">K_blade/g</button>
<button class="r2" id="b15" onclick="Act15()">Ca_blade/g</button>
</div>
<script type="text/javascript">
function Act1()
        { document.getElementById("chart1").style.display="";
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
		document.getElementById("chart15").style.display="none"
		}
		function Act2()
        { document.getElementById("chart1").style.display="none";
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
		document.getElementById("chart15").style.display="none"
		}
		function Act3()
        { document.getElementById("chart1").style.display="none";
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
		document.getElementById("chart15").style.display="none"
		}
		function Act4()
        { document.getElementById("chart1").style.display="none";
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
		document.getElementById("chart15").style.display="none"
		}
		function Act5()
        { document.getElementById("chart1").style.display="none";
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
		document.getElementById("chart15").style.display="none"
		}
		function Act6()
        { document.getElementById("chart1").style.display="none";
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
		document.getElementById("chart15").style.display="none"
		}
		function Act7()
        { document.getElementById("chart1").style.display="none";
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
		document.getElementById("chart15").style.display="none"
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
		document.getElementById("chart15").style.display="none"
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
		document.getElementById("chart15").style.display="none"
		}
				function Act10()
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
		document.getElementById("chart15").style.display="none"
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
		document.getElementById("chart15").style.display="none"
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
		document.getElementById("chart15").style.display="none"
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
		document.getElementById("chart15").style.display="none"
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
		document.getElementById("chart15").style.display="none"
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
		document.getElementById("chart15").style.display=""
		}
		</script>
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
		var arr1=[],arr2=[],arr3=[],arr4=[],arr5=[],arr6=[],arr7=[],arr8=[],arr9=[],arr10=[],arr11=[],arr12=[],arr13=[],arr14=[],arr15=[],arr16=[],arr17=[];
		function arrTest(){
			$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/lettuce2.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr1.push(result[i].date);
                          //arr2.push(result[i].number);
						  arr2.push(result[i].NO3_N);
	                      arr3.push(result[i].K);
                          arr4.push(result[i].Ca);
						  arr5.push(result[i].DO);
						  arr6.push(result[i].EC);
						  arr7.push(result[i].pH);
						  arr8.push(result[i].Nutrient_volume);
						  arr9.push(result[i].Number_blade);
						  arr10.push(result[i].Area);
						  arr11.push(result[i].Freshweight);
						  arr12.push(result[i].Dryweight);
						  arr13.push(result[i].Rootlength);
						  arr14.push(result[i].N_blade);
						  arr15.push(result[i].K_blade);
						  arr16.push(result[i].Ca_blade);
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
				                return arr1,arr2,arr3,arr4,arr5,arr6,arr7,arr8,arr9,arr10,arr11,arr12,arr13,arr14,arr15,arr16,arr17;
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
            mark : {show: true},
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
            "name":"NO3_N",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr2
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
            mark : {show: true},
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
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr3
        },

    ]
};                  
/*Ca*/
var option3 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
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
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr4
        },

    ]
};
/*DO*/
var option4 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
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
		    name:'DO变化趋势/(mg/L)',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"DO",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr5
        },
    ]
};
/*EC*/
var option5 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
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
		    name:'EC变化趋势/(us/cm)',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"EC",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr6
        },
    ]
};
/*pH*/
var option6 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
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
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr7
        },
    ]
};
/*Nutrient_volume*/
var option7 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
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
		    name:'营养液体积变化趋势/L',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"Nutrient_volume",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr8
        },
    ]
};
/*Number_blade*/
var option8 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
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
		    name:'叶片数变化趋势',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"Number_blade",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr9
        },
    ]
};
/*Area*/
var option9 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
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
		    name:'叶面积变化趋势/cm2',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"Area",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr10
        },
    ]
};
/*Freshweight*/
var option10 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
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
		    name:'鲜重变化趋势/g',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"Freshweight",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr11
        },
    ]
};
/*Dryweight*/
var option11 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
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
		    name:'干重变化趋势/g',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"Dryweight",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr12
        },
    ]
};
/*Rootlength*/
var option12 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
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
		    name:'根长变化趋势/cm',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"Rootlength",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr13
        },
    ]
};
/*N_blade*/
var option13 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
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
		    name:'叶片N含量变化趋势/g',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"N_blade",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr14
        },
    ]
};
/*K_blade*/
var option14 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
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
		    name:'叶片K含量变化趋势/g',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"K_blade",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr15
        },
    ]
};
/*Ca_blade*/
var option15 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
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
		    name:'叶片Ca含量变化趋势/g',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"Ca_blade",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr16
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