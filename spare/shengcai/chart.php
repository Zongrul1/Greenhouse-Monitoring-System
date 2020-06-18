<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>详细数据-水培生菜环境信息管理系统</title>
<style>
td  
{  
 white-space: nowrap;  
}
#d1{margin:30px;}
#table-1 td{width:200px;text-align:center; }
</style>
<link rel="stylesheet" type="text/css" href="/spsc.css">
<link rel="stylesheet" type="text/css" href="/main.css">
 <link rel="stylesheet" href="/builds/merged/bsgrid.all.min.css"/>
    <script type="text/javascript" src="/plugins/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="/builds/js/lang/grid.zh-CN.min.js"></script>
    <script type="text/javascript" src="/builds/merged/bsgrid.all.min.js"></script>

</head>

<body topmargin="0" marginwidth="0" onload="Act0()">
<div class="main">
<div class="loading" id="loading">
    <center>
    <img src="/pic/loading.gif" alt="load"></img>
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
window.location.href='main.html';
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
<a href="http://www.causpsc.com/interface.html"><img src="/pic/pacau.png" alt="logo" height="80" width="100"></a>
</div>
<div class="n3">
<div class="n4">
    <ul>
      <li><a href="data0.php" title="主页" target="_parent">主页</br>INDEX</a></li>
	  <li><a href="chart.php" title="详细数据" target="_parent">详细数据</br>DATABASE</a></li>
      <li><a href="info0.html" title="系统介绍" target="_parent">系统介绍</br>INFO</a></li>
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
<h1>「水培生菜环境信息管理系统」</h1>
</div>
</div>  
   <div id="wrapper1">
      <div class="e4">
   </div>
   <div id="r1">
<div id="c2">
<div id="c3">
<h2>「水培生菜环境数据」</h2>
</div>
</div>
<center>
 <table id="searchTable">
        <tr>
            <th w_index="Time" width="20%;">Time</th>
            <th w_index="Temperature" width="5%;">Temperature</th>
            <th w_index="Humidity"  width="5%;">Humidity</th>
            <th w_index="CO2"  width="5%;">CO2</th>
            <th w_index="Illumination" width="5%;">Illumination</th>
        </tr>
    </table>
    <script type="text/javascript">
        var gridObj;
        $(function () {	  
            gridObj = $.fn.bsgrid.init('searchTable', {
                url:'/data/data3.php',
                // autoLoad: true,
                pageSizeSelect: false,
                pageSize: 10
            });
        });


    </script>
</center>
<div class="e4"></div>
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
  <script src="/js/echarts.js"></script>
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
                  url:"/data/data1.php",
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