<?php
/**
  * wechat php test
  */

//define your token
define("TOKEN", "weixin");
$wechatObj = new wechatCallbackapiTest();
$wechatObj->responseMsg();//调用回复消息方法

class wechatCallbackapiTest
{
	public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
        	echo $echoStr;
        	exit;
        }
    }

 //响应消息
    public function responseMsg()
    {
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
        if (!empty($postStr)){
            $this->logger("R \r\n".$postStr);
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $RX_TYPE = trim($postObj->MsgType);
            
            //消息类型分离
            switch ($RX_TYPE)
            {
                case "event":
                    $result = $this->receiveEvent($postObj);
                    break;
                case "text":
                    $result = $this->receiveText($postObj);
                    break;
                case "image":
                    $result = $this->receiveImage($postObj);
                    break;
                case "location":
                    $result = $this->receiveLocation($postObj);
                    break;
                case "voice":
                    $result = $this->receiveVoice($postObj);
                    break;
                case "video":
				case "shortvideo":
                    $result = $this->receiveVideo($postObj);
                    break;
                case "link":
                    $result = $this->receiveLink($postObj);
                    break;
                default:
                    $result = "unknown msg type: ".$RX_TYPE;
                    break;
            }
            $this->logger("T \r\n".$result);
            echo $result;
        }else {
            echo "";
            exit;
        }
    }

		
	private function checkSignature()
	{
        // you must define TOKEN by yourself
        if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }
        
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
//关注回复
  private function receiveEvent($object){
   $content = "";
   switch ($object->Event){
    case "subscribe":
    $content = "欢迎关注水培生菜环境监测系统\n"."本系统用于对水培生菜的环境参数检测\n"."1.回复“查询温室”进行温室数据查询\n"."2.回复“查询果园”进行果园数据查询\n"."3.回复“查询草莓”进行草莓数据查询\n"."4.回复“查询番茄”进行番茄数据查询\n"."5.回复“城市天气”进行天气查询（如：北京天气）";//这里是向关注者发送的提示信息
    break;
    case "unsubscribe":
    $content = "";
    break;
   }
   $result = $this->transmitText($object,$content);
   return $result;
 
    }
//接收文本消息
 private function receiveText($object)
    { 
	 $keyword = trim($object->Content);
	 $keywords = explode("+",$keyword);
        $str = mb_substr($keyword,-2,2,"UTF-8");
		$str_key = mb_substr($keyword,0,-2,"UTF-8");	
         if($keywords[0]=="查询温室")
	{
		$content="1.回复“查询温室温度”进行温室温度查询\n"."2.回复“查询温室湿度”进行温室湿度查询\n"."3.回复“查询温室二氧化碳浓度”进行温室二氧化碳浓度查询\n"."4.回复“查询温室光照强度”进行温室光照强度查询\n";
	}
	else if($keywords[0]=="查询果园")
	{
		$content="暂未开通";
	}
	
		else if($keywords[0] == "查询草莓")
	{
		$content="查询草莓数据请输入“草莓+日期”，如“草莓+2017.07.06” ";
	}
	
		else if($keywords[0] == "查询番茄")
	{
		$content="查询番茄数据请输入“番茄+日期”，如“番茄+2016.12.15” ";
	}
		else if($keywords[0] == "查询温室温度")
	{
		$content="查询温室温度请输入“温室温度+日期”，如“温室温度+2017-03-15” ";
	}
	
	else if($keywords[0] == "查询温室湿度")
	{
		$content="查询温室湿度请输入“温室湿度+日期”，如“温室湿度+2017-03-15” ";
	}
	
	else if($keywords[0] == "查询温室光照强度")
	{
		$content="查询温室光照强度请输入“温室光照强度+日期”，如“温室光照强度+2017-03-15” ";
	}
	
	else if($keywords[0] == "查询温室二氧化碳浓度")
	{
		$content="查询温室二氧化碳浓度请输入“温室二氧化碳浓度+日期”，如“温室二氧化碳浓度+2017-03-15” ";
	}
	/*测试接口
	else if($keywords[0]=='数据')
	{
	$con = mysql_connect("localhost","root1","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ciee", $con);

 $select_sql = mysql_query("SELECT * FROM data7 WHERE Date like '%$keywords[1]%' order by Date desc");
 //$result = mysql_query("select * from data7");
if(!$select_sql)
{
    die("SQL: {$sql}<br>Error:".mysql_error());
}   
     $i=0;
  while($rows=mysql_fetch_array($select_sql,MYSQL_ASSOC))
  {
	  
	  $contents[$i]="时间:$rows[Date]\n数据：$rows[Data]\n";
	  $i++;
  }
  $string=implode("\n",$contents);
	if($i==0){
	$content="提交参数不正确，无此日期";
	}
	else{
		//$content=$i;
   $content=$string;
   }
}
   /*温度*/
	else if($keywords[0] == "温室温度")
		{
	$con = mysql_connect("localhost","root1","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ciee", $con);

 $select_sql = mysql_query("SELECT * FROM greenhouse WHERE Time like '%$keywords[1]%' order by Time desc LIMIT 10");
if(!$select_sql)
{
    die("SQL: {$sql}<br>Error:".mysql_error());
}   
    $i=0;
  while($rows=mysql_fetch_array($select_sql,MYSQL_ASSOC))
  {
    $contents[$i]="时间:$rows[Time]\n"."温度：$rows[Temperature]\n";
	$i++;
   }	
    $string=implode("\n",$contents);
	if($i==0){
	$content="提交参数不正确，无此日期";
	}
	else{
   $content=$string;
   }
   }
   /*湿度*/
		else if($keywords[0] == "温室湿度")
		{
	$con = mysql_connect("localhost","root1","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ciee", $con);

 $select_sql = mysql_query("SELECT * FROM greenhouse WHERE Time like '%$keywords[1]%' order by Time desc LIMIT 10");
if(!$select_sql)
{
    die("SQL: {$sql}<br>Error:".mysql_error());
}   

  $i=0;
  while($rows=mysql_fetch_array($select_sql,MYSQL_ASSOC))
  {
    $contents[$i]="时间:$rows[Time]\n"."湿度:$rows[Humidity]\n";
	$i++;
   }	
    $string=implode("\n",$contents);
	if($i==0){
	$content="提交参数不正确，无此日期";
	}
	else{
   $content=$string;
   }
   }
		/*二氧化碳浓度*/
		else if($keywords[0] == "温室二氧化碳浓度")
		{
	$con = mysql_connect("localhost","root1","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ciee", $con);

 $select_sql = mysql_query("SELECT * FROM greenhouse WHERE Time like '%$keywords[1]%' order by Time desc LIMIT 10");
if(!$select_sql)
{
    die("SQL: {$sql}<br>Error:".mysql_error());
}   

  $i=0;
  while($rows=mysql_fetch_array($select_sql,MYSQL_ASSOC))
  {
   $contents[$i]="时间:$rows[Time]\n"."二氧化碳浓度:$rows[CO2]";
	$i++;
   }	
    $string=implode("\n",$contents);
	if($i==0){
	$content="提交参数不正确，无此日期";
	}
	else{
   $content=$string;
   }
   }
		/*光照强度*/
		else if($keywords[0] == "温室光照强度")
		{
	$con = mysql_connect("localhost","root1","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ciee", $con);

 $select_sql = mysql_query("SELECT * FROM greenhouse WHERE Time like '%$keywords[1]%' order by Time desc LIMIT 10");
if(!$select_sql)
{
    die("SQL: {$sql}<br>Error:".mysql_error());
}   

  $i=0;
  while($rows=mysql_fetch_array($select_sql,MYSQL_ASSOC))
  {
   $contents[$i]="时间:$rows[Time]\n"."光照强度:$rows[Illumination]";
	$i++;
   }	
    $string=implode("\n",$contents);
	if($i==0){
	$content="提交参数不正确，无此日期";
	}
	else{
   $content=$string;
   }
   }
   /*营养液*/
   else if($keywords[0] == "草莓")
		{
	$con = mysql_connect("localhost","root1","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ciee", $con);

 $select_sql = mysql_query("SELECT * FROM strawberry1 WHERE date like '%$keywords[1]%' order by date desc limit 3");
if(!$select_sql)
{
    die("SQL: {$sql}<br>Error:".mysql_error());
}   

  $i=0;
  while($rows=mysql_fetch_array($select_sql,MYSQL_ASSOC))
  {
   $contents[$i]="时间:$rows[date]\n"."序号:$rows[number]\n"."NO3_N:$rows[NO3_N]\n"."K:$rows[K]\n"."Ca:$rows[Ca]\n"."EC:$rows[EC]\n"."pH:$rows[pH]\n"."DO:$rows[DO]\n";
	$i++;
   }	
    $string=implode("\n",$contents);
	if($i==0)
	{
		 $select_sql = mysql_query("SELECT * FROM strawberry2 WHERE date like '%$keywords[1]%' order by date desc limit 3");
if(!$select_sql)
{
    die("SQL: {$sql}<br>Error:".mysql_error());
}   

  $i=0;
  while($rows=mysql_fetch_array($select_sql,MYSQL_ASSOC))
  {
   $contents[$i]="时间:$rows[date]\n"."序号:$rows[number]\n"."NO3_N:$rows[NO3_N]\n"."K:$rows[K]\n"."Ca:$rows[Ca]\n"."EC:$rows[EC]\n"."pH:$rows[pH]\n"."DO:$rows[DO]\n";
	$i++;
   }	
    $string=implode("\n",$contents);
	}
	if($i==0){
	$content="提交参数不正确，无此日期";
	}
	else{
   $content=$string;
   }
   }
   /*番茄*/
      else if($keywords[0] == "番茄")
		{
	$con = mysql_connect("localhost","root1","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ciee", $con);

 $select_sql = mysql_query("SELECT * FROM tomato WHERE date like '%$keywords[1]%' order by date desc limit 3");
if(!$select_sql)
{
    die("SQL: {$sql}<br>Error:".mysql_error());
}   

  $i=0;
  while($rows=mysql_fetch_array($select_sql,MYSQL_ASSOC))
  {
   $contents[$i]="时间:$rows[date]\n"."序号:$rows[number]\n"."NO3_N:$rows[NO3_N]\n"."K:$rows[K]\n"."Ca:$rows[Ca]\n"."EC:$rows[EC]\n"."pH:$rows[pH]\n"."DO:$rows[DO]\n";
	$i++;
   }	
    $string=implode("\n",$contents);
	if($i==0){
	$content="提交参数不正确，无此日期";
	}
	else{
   $content=$string;
   }
   }
   /*天气*/
	else if($str == '天气' && !empty($str_key))
            {
            $data = $this->weathernow($str_key);
			
            if($data['HeWeather5'][0]['status']=='ok')	
            {		$content ="  【".$str_key."】实时天气".
             "\n体感温度 ".$data['HeWeather5'][0]['now']['fl']."℃  ".$data['HeWeather5'][0]['now']['cond']['txt'].
             "\n相对湿度 ".$data['HeWeather5'][0]['now']['hum']."%".
             "\n空气质量 ".$data['HeWeather5'][0]['aqi']['city']['qlty'];   
            }
			}
			
	else{$content = "本系统用于对水培生菜的环境参数检测\n"."1.回复“查询温室”进行温室数据查询\n"."2.回复“查询果园”进行果园数据查询\n"."3.回复“查询草莓”进行草莓数据查询\n"."4.回复“查询番茄”进行番茄数据查询\n"."5.回复“城市天气”进行天气查询（如：北京天气）";}
		
$result = $this->transmitText($object, $content); 
        return $result;

		}
		
		
//回复文本消息
    private function transmitText($object, $content)
    {
        
      
        $xmlTpl = "<xml>
    <ToUserName><![CDATA[%s]]></ToUserName>
    <FromUserName><![CDATA[%s]]></FromUserName>
    <CreateTime>%s</CreateTime>
    <MsgType><![CDATA[text]]></MsgType>
    <Content><![CDATA[%s]]></Content>
</xml>";
        $result = sprintf($xmlTpl, $object->FromUserName, $object->ToUserName, time(), $content);
        return $result;
    }

   

    

    //回复语音消息
    private function transmitVoice($object, $voiceArray)
    {
        $itemTpl = "<Voice>
        <MediaId><![CDATA[%s]]></MediaId>
    </Voice>";

        $item_str = sprintf($itemTpl, $voiceArray['MediaId']);
        $xmlTpl = "<xml>
    <ToUserName><![CDATA[%s]]></ToUserName>
    <FromUserName><![CDATA[%s]]></FromUserName>
    <CreateTime>%s</CreateTime>
    <MsgType><![CDATA[voice]]></MsgType>
    $item_str
</xml>";

        $result = sprintf($xmlTpl, $object->FromUserName, $object->ToUserName, time());
        return $result;
    }
	    //天气
    private function weathernow($n)
    {
        $key="1d41d8bd12284505ba5e57da0e4e39bb";
		$weather1=file_get_contents("https://free-api.heweather.com/v5/weather?city=".$n."&key=".$key);
			return json_decode($weather1,true);
     }
  //日志记录
    private function logger($log_content)
    {
        if(isset($_SERVER['HTTP_APPNAME']))
        {   //SAE
            sae_set_display_errors(false);
            sae_debug($log_content);
            sae_set_display_errors(true);
         }
        else if($_SERVER['REMOTE_ADDR'] != "127.0.0.1")
        { //LOCAL
            $max_size = 1000000;
            $log_filename = "log.xml";
            if(file_exists($log_filename) and (abs(filesize($log_filename)) > $max_size))
            {
                unlink($log_filename);
             }
            file_put_contents($log_filename, date('Y-m-d H:i:s')." ".$log_content."\r\n", FILE_APPEND);
        }
    }	
}
?>