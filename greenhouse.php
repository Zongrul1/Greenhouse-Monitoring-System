<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>温室环境信息-ESSH组监测数据综合管理信息平台</title>
<style>
td  
{  
 white-space: nowrap;  
}
#d1{margin:30px;}
#table-1 td{width:200px;text-align:center; }
</style>
<link rel="stylesheet" type="text/css" href="./css/spsc.css">
<link rel="stylesheet" type="text/css" href="./css/main.css">
 <link rel="stylesheet" href="./builds/merged/bsgrid.all.min.css"/>
    <script type="text/javascript" src="./plugins/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="./builds/js/lang/grid.zh-CN.min.js"></script>
    <script type="text/javascript" src="./builds/merged/bsgrid.all.min.js"></script>
	 <link rel="stylesheet" href="./css/swiper.min.css">
    <link rel="stylesheet" href="./css/certify.css">
	<link rel="stylesheet" href="./css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="./css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="./css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="./css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="./css/owl.carousel.min.css">
	<link rel="stylesheet" href="./css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="./css/style.css">

</head>

<body topmargin="0" marginwidth="0" onload="Act0()">
<div class="main">
<div class="loading" id="loading">
    <center>
    <img src="./pic/loading.gif" alt="load"></img>
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
<img src="./pic/cau.bmp" alt="logo" height="80" width="100">
</div>
<div class="n2b">
<div style="height:10px"></div>
<img src="./pic/pacau.png" alt="logo" height="80" width="100">
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
<img src="./pic/wechat.jpg" alt="wechat" height="100" onmousemove="displaywechat(this)" onmouseout="undisplaywechat(this)"></img>
</div>
<div id="wechat">
<img src="./pic/wechatlogo.jpg" alt="welogo" height="100%" width="100%"></img>
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
   <p>「温室环境信息快速查询」</p>
</div>
</div>
<span id="se1"><td>日期：</td>
<td>
<select id="se2" onchange="ChangeSelect(this.options[this.options.selectedIndex].value)">
<option>--请选择--</option>
<?php
$con = mysql_connect("localhost","root1","123456");
mysql_select_db("ciee", $con);
$sql="select Time from greenhouse";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result)){
?>

<option value=<?php echo $row['Time'] ?>><?php echo $row['Time'] ?></option>  
<?php
}

?>
</select>
</td>
</span>
<script>
var arr1=[],arr2=[],arr3=[],arr4=[],arr5=[];

function ChangeSelect(val)
{    
$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/greenhouse1.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr1.push(result[i].Time);
                          arr2.push(result[i].Temperature);
						  arr3.push(result[i].Humidity);
	                      arr4.push(result[i].CO2);
                          arr5.push(result[i].Illumination);						  
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
	}
}
}
</script>
<div class="e4"></div>
<div id="c77">
<div class="e5"><p>温度(℃)</p><div id="z1" class="e3" style="font-size:60px"></div></div>
<div class="e6"><p>湿度(%)</p><div id="z2" class="e3" style="font-size:60px"></div></div>
<div class="e5"><p>二氧化碳浓度(ppm)</p><div id="z3" class="e3" style="font-size:60px"></div></div>
<div class="e6"><p>光照强度(lux)</p><div id="z4" class="e3" style="font-size:60px"></div></div>
</div>
   <div id="c2">
<div id="c3">
<p>「温室环境详细数据」</p>
</div>
</div>
   <div class="e4">
   </div>
<center>
 <table id="searchTable">
        <tr>
            <th w_index="Time" width="5%;">Time</th>
            <th w_index="Temperature" width="5%;">Temperature/℃</th>
            <th w_index="Humidity"  width="5%;">Humidity/%</th>
            <th w_index="CO2"  width="5%;">CO2/ppm</th>
            <th w_index="Illumination" width="5%;">Illumination/lux</th>
        </tr>
    </table>
    <script type="text/javascript">
        var gridObj;
        $(function () {	  
            gridObj = $.fn.bsgrid.init('searchTable', {
                url:'data/greenhouse2.php',
                // autoLoad: true,
                pageSizeSelect: false,
                pageSize: 10
            });
        });


    </script>
</center>
<div class="e4"></div>
<center>
<button class="r2" id="b1" onclick="Act1()">温度图线</button>
<button class="r2" id="b2" onclick="Act2()">湿度图线</button>
<button class="r2" id="b3" onclick="Act3()">二氧化碳浓度图线</button>
<button class="r2" id="b4" onclick="Act4()">光照强度图线</button>
<script type="text/javascript">
function Act1()
        { document.getElementById("chart1").style.display="";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		}
		function Act2()
       { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		}
		function Act3()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="";
		document.getElementById("chart4").style.display="none";
		}
		function Act4()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="";
		}

</script>
</center>
<div class="e4"></div>
<div id="j1">
<div id="chart1" style="height:500px;weight:100%;"></div>
<div id="chart2" style="height:500px;weight:100%;"></div>
<div id="chart3" style="height:500px;weight:100%;"></div>
<div id="chart4" style="height:500px;weight:100%;"></div>
</div>
<div class="e4"></div>
  <script src="js/echarts.js"></script>
    <script type="text/javascript">
        var myChart1 = echarts.init(document.getElementById('chart1'));
		var myChart2 = echarts.init(document.getElementById('chart2')); 
		var myChart3 = echarts.init(document.getElementById('chart3')); 
		var myChart4 = echarts.init(document.getElementById('chart4'));  
        //ajax部分
		var arr1=[],arr2=[],arr3=[],arr4=[],arr5=[];
              function arrTest(){
                $.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/greenhouse1.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr1.push(result[i].Time);
                          arr2.push(result[i].Temperature);
	                      arr3.push(result[i].Humidity);
                          arr4.push(result[i].CO2);
						  arr5.push(result[i].Illumination);
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
                return arr1,arr2,arr3,arr4,arr5;
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
            data :arr1,
			name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			}
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'温度变化趋势/℃',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [

		 {
            "name":"温度",
            "type":"line",
            "data":arr2
        },

    ]
};
                    
					/*湿度*/
					
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
            data :arr1,
			name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			}
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'湿度变化趋势/%',
			nameTextStyle:{
			fontSize:18,
			}
        }
    ],
    series : [

		 {
            "name":"湿度",
            "type":"line",
            "data":arr3
        },

    ]
};                  
/*co2*/
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
            data :arr1,
			name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			}
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'二氧化碳变化趋势/ppm',
			nameTextStyle:{
			fontSize:15,
			}
		}
    ],
    series : [

				 {
            "name":"二氧化碳浓度",
            "type":"line",
            "data":arr4
        },

    ]
};
/*光照强度*/
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
            data :arr1,
			name:'\n\n\n\n时间',
			nameLocation:'bottom',
			nameTextStyle:
			{
			fontSize:20
			}
        }
    ],
   yAxis : [
        {
            type : 'value',
		    name:'光照强度变化趋势/lux',
			nameTextStyle:{
			fontSize:15,
			}
		}
    ],
    series : [
    
				 {
            "name":"光照强度",
            "type":"line",
            "data":arr5
        },
    ]
};

        // 为echarts对象加载数据 
        myChart1.setOption(option1); 
		myChart2.setOption(option2); 
		myChart3.setOption(option3); 
		myChart4.setOption(option4); 
</script>
</div>
<div class="e4"></div>
</div>
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