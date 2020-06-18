<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /> 
<?php header("Content-Type: text/html;charset=utf-8"); ?>
<title>土壤养分信息-ESSH组监测数据综合管理信息平台</title>
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
<p>「土壤养分数据快速查询」</p>
</div>
</div>
<span id="se1"><td>取样点：</td>
<td>
<select id="se2" onchange="ChangeSelect(this.options[this.options.selectedIndex].value)">
<option>--请选择--</option>
<?php
$con = mysql_connect("localhost","root1","123456");
mysql_select_db("ciee", $con);
$sql="select sample_ID from soil2";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result)){
?>

<option value=<?php echo $row['sample_ID'] ?>><?php echo $row['sample_ID'] ?></option>  
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
                  url:"/data/soil2-1.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr1.push(result[i].sample_ID);
                          arr2.push(result[i].Nutrient_content);
						  arr3.push(result[i].UV);
						  arr4.push(result[i].ISE_normal);
	                      arr5.push(result[i].ISE_wetsoil);
                          arr6.push(result[i].Ecw_normal);
						  arr7.push(result[i].Ecw_wetsoil);
						  arr8.push(result[i].Temperature);
						  arr9.push(result[i].pH_normal);
						  arr10.push(result[i].pH_wetsoil);
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
	 document.getElementById("z8").innerHTML=arr9[i];
	}
}
}
</script>
<div id="c77">
<div class="e11"><p>UV(ppm)</p><div id="z1" class="e3" style="font-size:41px"></div></div>
<div class="e22"><p>ISE_normal(ppm)</p><div id="z2" class="e3" style="font-size:41px"></div></div>
<div class="e22"><p>ISE_wetsoil(ppm)</p><div id="z3" class="e3" style="font-size:41px"></div></div>
<div class="e22"><p>Ecw_normal(ppm)</p><div id="z4" class="e3" style="font-size:41px"></div></div>
<div class="e11"><p>Ecw_wetsoil(ppm)</p><div id="z5" class="e3" style="font-size:41px"></div></div>
<div class="e22"><p>Temperature(℃)</p><div id="z6" class="e3" style="font-size:41px"></div></div>
<div class="e22"><p>pH_normal</p><div id="z7" class="e3" style="font-size:41px"></div></div>
<div class="e22"><p>pH_wetsoil</p><div id="z8" class="e3" style="font-size:41px"></div></div>
</div>
<div id="c2">
<div id="c3">
<p>「土壤养分详细数据」</p>
</div>
</div>
         <div class="e4">
   </div>
<center>
 <table id="searchTable">
        <tr>
            <th w_index="sample_ID" width="5%;">sample_ID</th>
            <th w_index="Nutrient_content" width="5%;">Nutrient_content/ppm</th>
			<th w_index="UV" width="5%;">UV/ppm</th>
            <th w_index="ISE_normal"  width="5%;">ISE_n/ppm</th>
            <th w_index="ISE_wetsoil"  width="5%;">ISE_w/ppm</th>
            <th w_index="Ecw_normal" width="5%;">Ecw_nl/ppm</th>
            <th w_index="Ecw_wetsoil" width="5%;">Ecw_w/ppm</th>
            <th w_index="Temperature" width="5%;">Temperature/℃</th>
            <th w_index="pH_normal" width="5%;">pH_n</th>
            <th w_index="pH_wetsoil" width="5%;">pH_w</th>
        </tr>
    </table>
    <script type="text/javascript" >
        var gridObj;
        $(function () {	  
            gridObj = $.fn.bsgrid.init('searchTable', {
                url:'data/soil2-2.php',
                // autoLoad: true,
                pageSizeSelect: false,
                pageSize: 10
            });
        });


    </script>
</center>
<div class="e4"></div>
<div style="width:80%;min-height:1px;margin-left:10%">
<button class="r2" id="b1" onclick="Act1()">UV</button>
<button class="r2" id="b2" onclick="Act2()">ISE_normal</button>
<button class="r2" id="b3" onclick="Act3()">ISE_wetsoil</button>
<button class="r2" id="b4" onclick="Act4()">Ecw_normal</button>
</div>
<div style="height:10px"></div>
<div style="width:80%;min-height:1px;margin-left:10%">
<button class="r2" id="b5" onclick="Act5()">Ecw_wetsoil</button>
<button class="r2" id="b6" onclick="Act6()">Temperature</button>
<button class="r2" id="b7" onclick="Act7()">pH_normal</button>
<button class="r2" id="b8" onclick="Act8()">pH_wetsoil</button>
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
		var arr1=[],arr2=[],arr3=[],arr4=[],arr5=[],arr6=[],arr7=[],arr8=[],arr9=[],arr10=[];
		function arrTest(){
			$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/soil2-1.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr1.push(result[i].sample_ID);
                          arr2.push(result[i].Nutrient_content);
						  arr3.push(result[i].UV);
						  arr4.push(result[i].ISE_normal);
	                      arr5.push(result[i].ISE_wetsoil);
                          arr6.push(result[i].Ecw_normal);
						  arr7.push(result[i].Ecw_wetsoil);
						  arr8.push(result[i].Temperature);
						  arr9.push(result[i].pH_normal);
						  arr10.push(result[i].pH_wetsoil);
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
				                return arr1,arr2,arr3,arr4,arr5,arr6,arr7,arr8,arr9,arr10;
              }
              arrTest();
			//图线绘制  
/*UV*/
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
		    name:'光学测定结果/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"UV",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr3
        },
    ]
};
                    
					/*ISE_normal*/
					
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
		    name:'ISE常规检测结果/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [

		 {
            "name":"ISE_normal",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr4
        },

    ]
};                  
/*ISE_wetsoil*/
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
		    name:'ISE湿土检测结果/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [

				 {
            "name":"ISE_wetsoil",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr5
        },

    ]
};
/*Ecw_normal*/
var option4= {
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
		    name:'Ecw常规检测结果/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"Ecw_normal",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr6
        },
    ]
};
/*Ecw_wetsoil*/
var option5= {
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
		    name:'Ecw湿土测定结果/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"Ecw_wetsoil",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr7
        },
    ]
};
/*Temperature*/
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
		    name:'温度测定结果/℃',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"Temperature",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr8
        },
    ]
};
/*pH_normal*/
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
		    name:'pH_normal变化趋势',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"pH_normal",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr9
        },
    ]
};
/*t*/
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
		    name:'ph_wetsoil变化趋势',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"ph_wetsoil",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr10
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
</script>
<div class="e4"></div>


     <footer>
            <div id="f1">
 <center>
				版权所有：</br>
                现代精细农业系统集成研究教育部重点实验室，中国农业大学，北京100083</br>
                农业部农业信息获取技术重点实验室，中国农业大学，北京100083/br>
                </center>
            </div>
        </footer>
        </div>
</body>
</html>