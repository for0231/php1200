<?php
set_time_limit(120);
class send_email
 {
   var $host;
   var $port;
   var $user;
   var $pass;
   var $from;
   var $to;
   var $cc;
   var $subject;
   var $content;
   var $extend;
   var $socket;
   var $conn;
   var $mimetype;
  var $filename;
   var $fromuser;
    function send_email($host,$port,$user,$pass,$from,$to,$cc,$subject,$content,$extend,$mimetype,$filename,$fromuser)
    {
	   $this->host=$host;
	   $this->port=$port;
	   $this->user=base64_encode($user);
	   $this->pass=base64_encode($pass);
	   $this->from=$from;
	   $this->to=$to;
	   $this->cc=$cc;
	   $this->subject=$subject;
	   $this->content=$content;
	   $this->extend=$extend;
	   $this->mimetype=$mimetype;
	   $this->filename=$filename;
           $this->fromuser=$fromuser;
     }   
    
	  function connect_host()
	  {
	     $this->socket=@socket_create(AF_INET,SOCK_STREAM,SOL_TCP); 
		 /*
        if(!$this->socket)
		  {
		    echo "<script>alert('初使化失败,请检查您的网络连接!');</script>";
		    exit; 
		  }
		 */ 
	     $this->conn=@socket_connect($this->socket,$this->host,$this->port);
	    /*
		if(!$this->conn)
		  {
		    echo "<script>alert('初使化失败,请检查您的网络连接!');</script>";
		    exit;
		  }
		 */ 
	  }
   
     function command()
	 {    
       @socket_write($this->socket,  $this->in,  strlen($this->in));    
       @socket_read($this->socket,1024);    
	  } 
  
	 function send()
	 {
	   
               $this->connect_host();




if($this->filename=="")
{
$All=  "From:$this->fromuser\r\n";    
$All.=  "To:".$this->to."\r\n"; 
//$All.="Cc:$this->Cc.\r\n";   
$All.=  "Subject:".$this->subject."\r\n\r\n";    
$All .=  $this->content; 
}
else
{
//$boundary =md5(uniqid(rand(), true));
$All="From:$this->fromuser\r\n";
$All.="To:$this->to\r\n";
//$All.="Cc:$this->Cc\r\n";
$All.="Subject:$this->subject\r\n";
$All.="X-Priority:3\r\n";
$All.="Content-Type: Multipart/mixed; boundary=\"Boundary-=_hnMZBOkuDbkNZXevPcloTsEUUwBw\"\r\n\r\n\r\n";
$All.="--Boundary-=_hnMZBOkuDbkNZXevPcloTsEUUwBw\r\n";
$All.="Content-Type: Multipart/Alternative; boundary=\"Boundary-1=_hnMZBOkuDbkNZXevPcloTsEUUwB\"\r\n\r\n";
$All.="--Boundary-1=_hnMZBOkuDbkNZXevPcloTsEUUwB\r\n";
$All.="Content-Type: text/plain; charset=\"gb2312\"\r\n";
$All.="Content-Transfer-Encoding: 7bit\r\n\r\n";
$All.="$this->content\r\n\r\n";
$All.="--Boundary-=_hnMZBOkuDbkNZXevPcloTsEUUwBw\r\n";
$All.="Content-type: $this->mimetype; name=$this->filename\r\n";
$All.="Content-Transfer-Encoding: base64\r\n";
$All.="Content-Disposition: attachment; filename=$this->filename\r\n\r\n";
$All.="$this->extend\r\n";
$All.="--Boundary-=_hnMZBOkuDbkNZXevPcloTsEUUwBw--";
}
		
	$this->in="EHLO HELO\r\n";    
        $this->command();    
        $this->in="AUTH LOGIN\r\n";    
        $this->command();    
        $this->in=$this->user."\r\n";    
        $this->command();    
        $this->in=$this->pass."\r\n";    
        $this->command();    
        $this->in="MAIL FROM:<".$this->from.">\r\n";    
        $this->command();    
        $this->in="RCPT TO:<".$this->to.">\r\n";    
        $this->command();    
        $this->in="DATA\r\n";    
        $this->command();    
        $this->in=$All."\r\n.\r\n";    
        $this->command();
	$this->in="QUIT\r\n";    
        $this->command();
	 }
 
 }

?>