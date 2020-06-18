<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>详细数据-无土栽培番茄营养液监测系统</title>
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
  <div id="wrapper_d">
<div id="cell">
<h1>「无土栽培番茄营养液监测系统」</h1>
</div>
</div>  
    <div id="wrapper1">
      <div id="r1">
         <div class="e4">
   </div>
<div id="c2">
<div id="c3">
<h2>「水培番茄详细数据」</h2>
</div>
</div>
<div id="button2" style="weight:80%;">
<button class="r2" id="b7" onclick="Act7()">第一页</button>
<button class="r2" id="b8" onclick="Act8()">第二页</button>
</div>
<div class="e4"></div>
<div id="j1">
<div id="chart7" style="height:400px;weight:80%;"></div>
<div id="chart8" style="height:400px;weight:80%;"></div>
<div id="chart9" style="height:400px;weight:80%;"></div>
</div>
<div id="j2">
<div id="chart10" style="height:400px;weight:80%;"></div>
<div id="chart11" style="height:400px;weight:80%;"></div>
<div id="chart12" style="height:400px;weight:80%;"></div>
</div>
</div>
 <script src="/js/echarts.js"></script>
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
                  url:"/data/data9.php",
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
<script type="text/javascript">
		function Act7()
        {
		document.getElementById("j1").style.display="";
		document.getElementById("j2").style.display="none";
		}
		function Act8()
        { 
		document.getElementById("j1").style.display="none";
		document.getElementById("j2").style.display="";
		}
		</script>