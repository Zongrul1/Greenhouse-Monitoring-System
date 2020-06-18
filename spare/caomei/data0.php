<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>主页-封闭式栽培草莓生长信息监测系统</title>
<style>
</style>
<link rel="stylesheet" type="text/css" href="/spsc.css">
<link rel="stylesheet" type="text/css" href="/main.css">
<link rel="prefetch" href="/pic/mei1.jpg">  
<link rel="prefetch" href="/pic/mei2.jpg">
<link rel="prefetch" href="/pic/mei3.jpg">
<script type="text/javascript" src="/plugins/jquery-1.4.4.min.js"></script>
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
		}
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
<div id="wrapper_c">
<div id="cell">
<h1>「封闭式栽培草莓生长信息监测系统」</h1>
</div>
</div>

<div id="wrapper2">

   	  <div id="select1">
	  	  <div class="c5">
<div class="c6">
<h2>「水培草莓数据快速查询」</h2>
</div>
</div>
<span id="se1"><td>日期：</td>
<td>
<select id="se2" onchange="ChangeSelect(this.options[this.options.selectedIndex].value)">
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

function ChangeSelect(val)
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
				  			
	for(var i=0;i<document.getElementById("se2").options.length;i++)
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
<div id="c77">
<div class="e1"><p>NO3-N(ppm)</p><div id="z1" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>K(ppm)</p><div id="z2" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>Ca(ppm)</p><div id="z3" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>DO/mg/L))</p><div id="z4" class="e3" style="font-size:60px"></div></div>
<div class="e1"><p>EC(us/cm))</p><div id="z5" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>pH</p><div id="z6" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>Nutrient_volume(L)</p><div id="z7" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>Weight(g)</p><div id="z8" class="e3" style="font-size:60px"></div></div>
</div>
</div>

<div id="c2">
<div id="c3">
<h2>「生长情况」</h2>
</div>
</div>

<div id="c444">
   <center>
    <div class="x1">
	<div>
    <img src="/pic/mei1.jpg" alt="mei" width="100%" height="300px"></img>
    </div>
	<div class="x2">
	<p>草莓实物图</p>
	</div>
	</div>
    <div class="x1">
	<div>
    <img src="/pic/mei2.jpg" alt="mei" width="100%" height="300px"></img>
    </div>
	<div class="x2">
	<p>实验布局图</P>
	</div>
	</div>
    <div class="x1">
	<div>
    <img src="/pic/mei3.jpg" alt="mei" width="100%" height="300px"></img>
    </div>
	<div class="x2">
	<p>草莓实物图</p>
	</div>
	</div>
	</center> 
</div>
<div class="e4">
</div>
<div class="e4">
</div>
<div class="e4">
</div>
<div class="e4">
</div>
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
