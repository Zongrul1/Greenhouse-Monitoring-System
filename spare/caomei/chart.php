<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>详细数据-封闭式栽培草莓生长信息监测系统</title>
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
  		document.getElementById("chart1").style.display=" ";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		document.getElementById("chart13").style.display="";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		document.getElementById("button1").style.display=" ";
		document.getElementById("button3").style.display="";
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
<img src="/pic/pacau.png" alt="logo" height="80" width="100">
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
     <div id="wrapper_c">
<div id="cell">
<h1>「封闭式栽培草莓生长信息监测系统」</h1>
</div>
</div>  
   <div id="wrapper1">
      <div id="r1">
         <div class="e4">
   </div>
   <div class="e4">
   </div>
<div class="e4"></div>
<div id="c5">
<div id="c6">
<h2>「草莓2016」</h2>
</div>
</div>
<div id="button1" style="weight:80%;">
<button class="r2" id="b1" onclick="Act1()">NO3-N</button>
<button class="r2" id="b2" onclick="Act2()">K</button>
<button class="r2" id="b3" onclick="Act3()">Ca</button>
<button class="r2" id="b4" onclick="Act4()">DO</button>
<button class="r2" id="b5" onclick="Act5()">EC</button>
<button class="r2" id="b6" onclick="Act6()">pH</button>
</div>
<div class="e4">
</div>
<div  id="j1">
<div id="chart1" style="height:400px;weight:80%;"></div>
<div id="chart2" style="height:400px;weight:80%;"></div>
<div id="chart3" style="height:400px;weight:80%;"></div>
<div id="chart4" style="height:400px;weight:80%;"></div>
<div id="chart5" style="height:400px;weight:80%;"></div>
<div id="chart6" style="height:400px;weight:80%;"></div>
</div>
<div id="c2">
<div id="c3">
<h2>「草莓2017」</h2>
</div>
</div>
<div class="e4"></div>
<div id="button3" style="weight:80%;">
<button class="r2" id="b13" onclick="Act13()">NO3-N</button>
<button class="r2" id="b14" onclick="Act14()">K</button>
<button class="r2" id="b15" onclick="Act15()">Ca</button>
<button class="r2" id="b16" onclick="Act16()">DO</button>
<button class="r2" id="b17" onclick="Act17()">EC</button>
<button class="r2" id="b18" onclick="Act18()">pH</button>
</div>
<div class="e4">
</div>
<div id="j2">
<div id="chart13" style="height:400px;weight:80%;"></div>
<div id="chart14" style="height:400px;weight:80%;"></div>
<div id="chart15" style="height:400px;weight:80%;"></div>
<div id="chart16" style="height:400px;weight:80%;"></div>
<div id="chart17" style="height:400px;weight:80%;"></div>
<div id="chart18" style="height:400px;weight:80%;"></div>
</div>
</div>
 <script src="/js/echarts.js"></script>
    <script type="text/javascript">
        var myChart1 = echarts.init(document.getElementById('chart1'));
		var myChart2 = echarts.init(document.getElementById('chart2')); 
		var myChart3 = echarts.init(document.getElementById('chart3')); 
		var myChart4 = echarts.init(document.getElementById('chart4'));  
		var myChart5 = echarts.init(document.getElementById('chart5'));
		var myChart6 = echarts.init(document.getElementById('chart6')); 
		var myChart13 = echarts.init(document.getElementById('chart13'));
		var myChart14 = echarts.init(document.getElementById('chart14'));
		var myChart15 = echarts.init(document.getElementById('chart15')); 
		var myChart16 = echarts.init(document.getElementById('chart16')); 
		var myChart17 = echarts.init(document.getElementById('chart17')); 
		var myChart18 = echarts.init(document.getElementById('chart18')); 
		var arr1=[],arr2=[],arr3=[],arr4=[],arr5=[],arr6=[],arr7=[],arr8=[];
		var arr17=[],arr18=[],arr19=[],arr20=[],arr21=[],arr22=[],arr23=[],arr24=[];
		function arrTest(){
			$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/data8.php",
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
							$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/data10.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for ( i = 0; i < result.length; i++) {
                          arr17.push(result[i].date);
                          arr18.push(result[i].number);
						  arr19.push(result[i].NO3_N);
	                      arr20.push(result[i].K);
                          arr21.push(result[i].Ca);
						  arr22.push(result[i].DO);
						  arr23.push(result[i].EC);
						  arr24.push(result[i].pH);
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
				
				
				
				                return arr1,arr2,arr3,arr4,arr5,arr6,arr7,arr8,arr17,arr18,arr19,arr20,arr21,arr22,arr23,arr24;
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
            "name":"NO3-N",
            "type":"bar",
            "data":arr3
        },

    ]
};
                    
					/*k*/
					
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
            "type":"bar",
            "data":arr8
        },
    ]
};
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
            data :arr17
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
            "data":arr19
        },

    ]
};
                    
					/*k*/
					
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
            data :arr17
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
            "data":arr20
        },

    ]
};                  
/*ca*/
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
            data :arr17
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
            "data":arr21
        },

    ]
};
/*do*/
var option16 = {
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
            data :arr17
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
            "data":arr22
        },
    ]
};
/*ec*/
var option17 = {
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
            data :arr17
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
            "data":arr23
        },
    ]
};
/*ph*/
var option18 = {
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
            data :arr17
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
            "data":arr24
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
		myChart13.setOption(option13); 
		myChart14.setOption(option14); 
		myChart15.setOption(option15); 
		myChart16.setOption(option16); 
	    myChart17.setOption(option17); 
		myChart18.setOption(option18); 
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
        { document.getElementById("chart1").style.display="";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		}
		function Act2()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		}
		function Act3()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		}
		function Act4()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="none";
		}
		function Act5()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="";
		document.getElementById("chart6").style.display="none";
		}
		function Act6()
        { document.getElementById("chart1").style.display="none";
		document.getElementById("chart2").style.display="none";
		document.getElementById("chart3").style.display="none";
		document.getElementById("chart4").style.display="none";
		document.getElementById("chart5").style.display="none";
		document.getElementById("chart6").style.display="";
		}							
				function Act13()
        { 
		document.getElementById("chart13").style.display="";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		}
		function Act14()
        { 
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		}
				function Act15()
        { 
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		}
						function Act16()
        { 
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="none";
		}
						function Act17()
        { 
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="";
		document.getElementById("chart18").style.display="none";
		}
						function Act18()
        { 
		document.getElementById("chart13").style.display="none";
		document.getElementById("chart14").style.display="none";
		document.getElementById("chart15").style.display="none";
		document.getElementById("chart16").style.display="none";
		document.getElementById("chart17").style.display="none";
		document.getElementById("chart18").style.display="";
		}
		</script>