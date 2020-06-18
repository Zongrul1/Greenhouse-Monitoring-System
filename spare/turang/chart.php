<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>详细数据-智慧果园土壤养分信息管理系统</title>
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
        document.getElementById("j1").style.display="";
		document.getElementById("j2").style.display="none";
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
<a href="http://www.causpsc.com/interface.html/interface.html"><img src="/pic/pacau.png" alt="logo" height="80" width="100"></a>
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
     <div id="wrapper_b">
<div id="cell">
<h1>「智慧果园土壤养分信息管理系统」</h1>
</div>
</div>  
   <div id="wrapper1">
<div class="e4"></div>
<div id="r1">
<div class="e4"></div>
<div id="c2">
<div id="c3">
<h2>「土壤养分信息」</h2>
</div>
</div>
<div id="button1" style="weight:80%;">
<button class="r2" id="b1" onclick="Act1()">第一页</button>
<button class="r2" id="b2" onclick="Act2()">第二页</button>
</div>
<script type="text/javascript">
function Act1()
        { document.getElementById("j1").style.display="";
		document.getElementById("j2").style.display="none";
		}
		function Act2()
        { document.getElementById("j1").style.display="none";
		document.getElementById("j2").style.display="";

		}
</script>		
<div class="e4"></div>
<div id="j1">
<div id="chart1" style="height:400px;weight:80%;"></div>
<div id="chart2" style="height:400px;weight:80%;"></div>
<div id="chart3" style="height:400px;weight:80%;"></div>
<div id="chart4" style="height:400px;weight:80%;"></div>
</div>
<div id="j2">
<div id="chart5" style="height:400px;weight:80%;"></div>
<div id="chart6" style="height:400px;weight:80%;"></div>
<div id="chart7" style="height:400px;weight:80%;"></div>
<div id="chart8" style="height:400px;weight:80%;"></div>
<div id="chart9" style="height:400px;weight:80%;"></div>
</div>
</div>
<div class="e4"></div>
</div>   
 <script src="/js/echarts.js"></script>
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
                  url:"/data/data2.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr1.push(result[i].sample_ID);
                          arr2.push(result[i].UV_N);
						  arr3.push(result[i].ISE_N);
	                      arr4.push(result[i].ISE_Cl);
                          arr5.push(result[i].ISE_K);
						  arr6.push(result[i].AAS_K);
						  arr7.push(result[i].UV_P);
						  arr8.push(result[i].EC);
						  arr9.push(result[i].pH);
						  arr10.push(result[i].t);
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
		    name:'硝态氮光学测定结果/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [

		 {
            "name":"UV_N",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr2
        },

    ]
};
                    
					/*ISE_N*/
					
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
		    name:'硝态氮电极法检测结果/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [

		 {
            "name":"ISE_N",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr3
        },

    ]
};                  
/*ISE_Cl*/
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
		    name:'氯离子电极法检测结果/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [

				 {
            "name":"ISE_Cl",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr4
        },

    ]
};
/*ISE_K*/
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
		    name:'速效钾电极检测结果/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"ISE_K",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr5
        },
    ]
};
/*AAS_K*/
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
		    name:'速效钾原子吸收测定结果/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"AAS_K",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr6
        },
    ]
};
/*UV_P*/
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
		    name:'速效磷光学测定结果/ppm',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"UV_P",
            "type":"line",
			"itemStyle": {normal: {areaStyle: {type: 'default'}}},
            "data":arr7
        },
    ]
};
/*EC*/
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
		    name:'电导率变化趋势(us/cm)',
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
            "data":arr8
        },
    ]
};
/*pH*/
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
            "data":arr9
        },
    ]
};
/*t*/
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
		    name:'t变化趋势',
			nameTextStyle:{
			fontSize:18,
			}
        }
		],
    series : [
    
				 {
            "name":"t",
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
        myChart9.setOption(option9);
</script>



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