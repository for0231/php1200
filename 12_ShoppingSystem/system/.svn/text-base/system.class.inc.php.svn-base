<?php
//数据库连接类
class ConnDB{
	var $dbtype;
	var $host;
    	var $user;
    	var $pwd;
    	var $dbname;
    	var $debug;
    	var $conn;    
    function ConnDB($dbtype,$host,$user,$pwd,$dbname,$debug=false){	//构造方法，为成员变量赋值
		$this->dbtype=$dbtype;
    		$this->host=$host;
		$this->user=$user;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
		$this->debug=$debug;
	}
    function GetConnId(){		    							//实现与不同数据库的连接并返回连接对象
  	require("adodb/adodb.inc.php");						//调用ADODB类库文件
    		if($this->dbtype=="mysql"){		//判断成员变量传递的数据库类型
    		   		$this->conn=NewADOConnection("mysql");		//执行与MySQl数据库的连接
    	    		$this->conn->Connect($this->host,$this->user,$this->pwd,$this->dbname);	//数据库连接的用户、密码
		}
    		$this->conn->Execute("set names gb2312");				//设置数据库的编码格式
    		if($this->dbtype=="mysql")
    	    		$this->conn->debug=$this->debug;
    		return $this->conn;								//返回连接对象
    }
	function CloseConnId(){								//定义关闭数据库的方法
    		$this->conn->Disconnect();							//执行关闭的操作
    }
}	

//数据库管理类
class AdminDB{
	function ExecSQL($sqlstr,$conn){					//定义方法，参数为SQl语句和连接数据库返回的对象
		$sqltype=strtolower(substr(trim($sqlstr),0,6));	//截取SQL中的前6个字符串，并转换成小写
		$rs=$conn->Execute($sqlstr);					//执行SQL语句
		if($sqltype=="select"){						//判断如果SQL语句的类型为SELECT
			$array=$rs->GetRows();				//执行该语句，获取查询结果
			if(count($array)==0 || $rs==false)			//判断语句是否执行成功
				return false;					//如果查询结果为0，或者执行失败，则返回false
			else
				return $array;					//否则返回查询结果的数组
		}elseif ($sqltype=="update" || $sqltype=="insert" || $sqltype=="delete"){
			//判断如果SQL语句类型不为select、则执行如下操作
			if($rs)
			    return true;						//执行成功返回true
			else 
			    return false;    					//是否返回false
		}
	}
}


//分页类
class SepPage{
	var $rs;
	var $pagesize;
	var $nowpage;
	var $nowpages;
	var $array;
	var $conn;
	var $sqlstr;
	function ShowDate($sqlstr,$conn,$pagesize,$nowpage){	//定义方法
		if(!isset($nowpage) || $nowpage=="")			//判断变量值是否为空
			$this->nowpage=10;						//定义每页输出的记录数
		else
			$this->nowpage=$nowpage;
		$this->pagesize=$pagesize;					//定义每页输出的记录数
		$this->conn=$conn;							//连接数据库返回的标识
		$this->sqlstr=$sqlstr;							//执行的查询语句
		$this->rs=$this->conn->PageExecute($this->sqlstr,$this->pagesize,$this->nowpage);
		@$this->array=$this->rs->GetRows();			//获取记录数
			if(count($this->array)==0 || $this->rs==false)
				return false;
			else
				return $this->array;
	}
	function ShowPage($contentname,$utits,$anothersearchstr,$class,$page){
		$allrs=$this->conn->Execute($this->sqlstr);		//执行查询语句
		$record=count($allrs->GetRows());				//统计记录总数
		$pagecount=ceil($record/$this->pagesize);		//计算共有几页
		$str.="共有".$contentname."&nbsp;".$record."&nbsp;".$utits."&nbsp;每页显示&nbsp;".$this->pagesize."&nbsp;".$utits."&nbsp;第&nbsp;".$this->rs->AbsolutePage()."&nbsp;页/共&nbsp;".$pagecount."&nbsp;页";
		$str.="&nbsp;&nbsp;&nbsp;&nbsp;";
		if(!$this->rs->AtFirstPage())
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".$page."&pages=1".$anothersearchstr." class=".$class.">首页</a>";
		else
			$str.="<font color='#555555'>首页</font>";
		$str.="&nbsp;";
		if(!$this->rs->AtFirstPage())
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".$page."&pages=".($this->rs->AbsolutePage()-1).$anothersearchstr." class=".$class.">上一页</a>";
		else
			$str.="<font color='#555555'>上一页</font>";
		$str.="&nbsp;";	
		if(!$this->rs->AtLastPage())
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".$page."&pages=".($this->rs->AbsolutePage()+1).$anothersearchstr." class=".$class.">下一页</a>";
		else
			$str.="<font color='#555555'>下一页</font>";	
		$str.="&nbsp;";
		if(!$this->rs->AtLastPage())
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".$page."&pages=".$pagecount.$anothersearchstr." class=".$class.">尾页</a>";
		else
			$str.="<font color='#555555'>尾页</font>";
		if(count($this->array)==0 || $this->rs==false)			
			return "";
		else
		    return $str;	
	}
}


//系统常用方法
class UseFun{
	
	function UnHtml($text){
	   $content=(nl2br(htmlspecialchars($text)));
	   $content=str_replace("[strong]","<strong>",$content);
	   $content=str_replace("[/strong]","</strong>",$content);
	   $content=str_replace("[em]","<em>",$content);
	   $content=str_replace("[/em]","</em>",$content);
	   $content=str_replace("[u]","<u>",$content);
	   $content=str_replace("[/u]","</u>",$content);
	
	
	   $content=str_replace("[font color=#FF0000]","<font color=#FF0000>",$content);
	   $content=str_replace("[font color=#00FF00]","<font color=#00FF00>",$content);
	   $content=str_replace("[font color=#0000FF]","<font color=#0000FF>",$content);
	
	   $content=str_replace("[font face=楷体_GB2312]","<font face=楷体_GB2312>",$content);
	   $content=str_replace("[font face=宋体]","<font face=新宋体>",$content);
	   $content=str_replace("[font face=隶书]","<font face=隶书>",$content);
       $content=str_replace("[/font]","</font>",$content);
	   //$content=str_replace(chr(32)," ",$content);
	   $content=str_replace("[font size=1]","<font size=1>",$content);
	   $content=str_replace("[font size=2]","<font size=2>",$content);
	   $content=str_replace("[font size=3]","<font size=3>",$content);
	   $content=str_replace("[font size=4]","<font size=4>",$content);
       $content=str_replace("[font size=5]","<font size=5>",$content);
	   $content=str_replace("[font size=6]","<font size=6>",$content);
	   
	   $content=str_replace("[FIELDSET][LEGEND]","<FIELDSET><LEGEND>",$content);
	   $content=str_replace("[/LEGEND]","</LEGEND>",$content);
	   $content=str_replace("[/FIELDSET]","</FIELDSET>",$content);
	   return $content;
	}
	
}

?>