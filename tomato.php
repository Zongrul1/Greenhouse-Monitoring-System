<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /> 
<?php header("Content-Type: text/html;charset=utf-8"); ?>
<title>水培番茄信息-ESSH组监测数据综合管理信息平台</title>
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
		document.getElementById("chart7").style.display=" ";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		document.getElementById("table2").style.display=" ";
		document.getElementById("button2").style.display=" ";
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
	  <div id="c5">
<div id="c6">
<p>「水培番茄信息快速查询」</p>
</div>
</div>
<span id="se1"><td>日期：</td>
<td>
<select id="se2" onchange="ChangeSelect(this.options[this.options.selectedIndex].value)">
<option>--请选择--</option>
<?php
$con = mysql_connect("localhost","root1","123456");
mysql_select_db("ciee", $con);
$sql="select date from tomato";
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
var arr1=[],arr2=[],arr3=[],arr4=[],arr5=[],arr6=[],arr7=[],arr8=[];

function ChangeSelect(val)
{           
$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/tomato2.php",
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
<div class="e7"><p>NO3_N(ppm)</p><div id="z2" class="e3" style="font-size:60px"></div></div>
<div class="e8"><p>K(ppm)</p><div id="z3" class="e3" style="font-size:60px"></div></div>
<div class="e8"><p>Ca(ppm)</p><div id="z4" class="e3" style="font-size:60px"></div></div>
<div class="e7"><p>DO(ppm)</p><div id="z5" class="e3" style="font-size:60px"></div></div>
<div class="e8"><p>EC(us/cm)</p><div id="z6" class="e3" style="font-size:60px"></div></div>
<div class="e8"><p>pH</p><div id="z7" class="e3" style="font-size:60px"></div></div>
</div>
<div id="c2">
<div id="c3">
<p>「水培番茄详细数据」</p>
</div>
</div>
         <div class="e4">
   </div>
<center>
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
        </tr>
    </table>
    </div>
    <script type="text/javascript" >			  	
     
	    var gridObj1;
		var gridObj2;
		var gridObj3;
		        $(function () {	  
            gridObj2 = $.fn.bsgrid.init('searchTable2', {
                url:'data/tomato1.php',
                // autoLoad: true,
                pageSizeSelect: false,
                pageSize: 10
            });
        });
    </script>
</center>
<div class="e4"></div>
<div id="button2" style="weight:80%;">
<button class="r2" id="b7" onclick="Act7()">NO3-N</button>
<button class="r2" id="b8" onclick="Act8()">K</button>
<button class="r2" id="b9" onclick="Act9()">Ca</button>
<button class="r2" id="b10" onclick="Act10()">DO</button>
<button class="r2" id="b11" onclick="Act11()">EC</button>
<button class="r2" id="b12" onclick="Act12()">pH</button>
</div>
        </center>
<div class="e4"></div>
<div id="j1">
<div id="chart7" style="height:500px;weight:100%;"></div>
<div id="chart8" style="height:500px;weight:100%;"></div>
<div id="chart9" style="height:500px;weight:100%;"></div>
<div id="chart10" style="height:500px;weight:100%;"></div>
<div id="chart11" style="height:500px;weight:100%;"></div>
<div id="chart12" style="height:500px;weight:100%;"></div>
</div>
</div>
 <script src="js/echarts.js"></script>
    <script type="text/javascript">
		var myChart7 = echarts.init(document.getElementById('chart7')); 
		var myChart8 = echarts.init(document.getElementById('chart8')); 
		var myChart9 = echarts.init(document.getElementById('chart9'));  
		var myChart10 = echarts.init(document.getElementById('chart10'));
		var myChart11 = echarts.init(document.getElementById('chart11')); 
		var myChart12 = echarts.init(document.getElementById('chart12')); 
		var arr9=[],arr10=[],arr11=[],arr12=[],arr13=[],arr14=[],arr15=[],arr16=[];
		function arrTest(){			
				$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/tomato2.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for ( i = 0; i < result.length; i++) {
                          arr9.push(result[i].date);
                          arr10.push(result[i].number);
						  arr11.push(result[i].NO3_N);
	                      arr12.push(result[i].K);
                          arr13.push(result[i].Ca);
						  arr14.push(result[i].DO);
						  arr15.push(result[i].EC);
						  arr16.push(result[i].pH);
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
				                return arr9,arr10,arr11,arr12,arr13,arr14,arr15,arr16;
              }
			
              arrTest();
			//图线绘制  
var option7 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['scatter']},
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
            data :arr9
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
            "type":'scatter',
            "data":arr11
        },

    ]
};
                    
					/*k*/
					
					var option8 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['scatter']},
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
            data :arr9
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
            "type":'scatter',
            "data":arr12
        },

    ]
};                  
/*ca*/
var option9 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['scatter']},
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
            data :arr9
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
            "type":'scatter',
            "data":arr13
        },

    ]
};
/*do*/
var option10 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['scatter']},
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
            data :arr9
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
            "type":'scatter',
            "data":arr14
        },
    ]
};
/*ec*/
var option11 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['scatter']},
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
            data :arr9
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
            "type":'scatter',
            "data":arr15
        },
    ]
};
/*ph*/
var option12 = {
    tooltip : {
        trigger: 'axis'
    },

   toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['scatter']},
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
            data :arr9
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
            "type":'scatter',
            "data":arr16
        },
    ]
};
        // 为echarts对象加载数据 	
		myChart7.setOption(option7); 
		myChart8.setOption(option8); 
		myChart9.setOption(option9); 
		myChart10.setOption(option10); 
	    myChart11.setOption(option11); 
		myChart12.setOption(option12); 
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
		function Act7()
        { 		document.getElementById("chart7").style.display="";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		}
		function Act8()
        { 		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		}	
		function Act9()
        { 		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		}
				function Act10()
        { 		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="none";
		}
				function Act11()
        { 		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="";
		document.getElementById("chart12").style.display="none";
		}
				function Act12()
        { 
		document.getElementById("chart7").style.display="none";
		document.getElementById("chart8").style.display="none";
		document.getElementById("chart9").style.display="none";
		document.getElementById("chart10").style.display="none";
		document.getElementById("chart11").style.display="none";
		document.getElementById("chart12").style.display="";
		}
		</script>