<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>提交表单</title>
</head>
<body onLoad="form_bank.submit()">
<form  action="https://mybank.icbc.com.cn/servlet/ICBCINBSEBusinessServlet" method="post" name="form_bank">
    <input name="interfaceName" type="hidden" value="ICBC_PERBANK_B2C"/>
    <input name="interfaceVersion" type="hidden" value="1.0.0.0"/>
       <input name="orderid" type="hidden" value="<?php echo $_GET["orderid"];?>"/>
       <input name="amount" type="hidden" value="<?php echo $_GET["amount"];?>"/>
    <input name="curType" type="hidden" value="001"/>
       <input name="merID" type="hidden" value=""/>
       <input name="merAcct" type="hidden" value=""/>
    <input name="verifyJoinFlag" type="hidden" value="0"/>
    <input name="notifyType" type="hidden" value="HS"/>
      <input name="merURL" type="hidden" value="http://www.dangdang.com/shoppingcart/ghreceive.asp"/>
    <input name="resultType" type="hidden"  value="0"/>
       <input name="orderDate" type="hidden" value="<?php echo $_GET["orderDate"];?>"/>
    <input name="merSignMsg" type="hidden" value="MkpzKWeDN4V7BGtymispqoerPQun3D7MeNZ3JwHwDhNVp7OFXZZqXkefNspCl/oBORzWpnKugXa1dnGCLSms1GP1UpE17hznpaxeL4ckblC0xFEvcz153x2Yk0+wqRTCgv/kTr3TiW1nNhbvbKYVXzk1ziw90FoPHfhz+OCc5Vo=" />
    <input name="merCert" type="hidden" value="MIICQzCCAaygAwIBAgIKYULKEHrkAAiKVjANBgkqhkiG9w0BAQUFADAnMQ8wDQYDVQQDEwZJY2JjQ0ExFDASBgNVBAoTC2ljYmMuY29tLmNuMB4XDTA2MDMyOTA2NTkzMloXDTA3MDMyOTA2NTkzMVowPzEYMBYGA1UEAxMPREFOR0RBTkcuZS4wMjAwMQ0wCwYDVQQLEwQwMjAwMRQwEgYDVQQKEwtpY2JjLmNvbS5jbjCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAySFtmcok8+JkjlTS2FBH6aCbmpoXT6qXU2bd8Q8BL+ReN3loZz9Cr6IArdFgu2ALc+DR1OUSBCNja2lynmLRZiL3KGkjgkknq/CzlalSyIACN2OMQfBGHhGmq5Kg90rCxGib9bORqOiVDdClwiXRMnXoTZBVBy2qLOwEa1w8oKcCAwEAAaNeMFwwSQYDVR0fBEIwQDA+oDygOqQ4MDYxEDAOBgNVBAMTB2NybDE4NjYxDDAKBgNVBAsTA2NybDEUMBIGA1UEChMLaWNiYy5jb20uY24wDwYDVR1jBAgDBgD/AAAAADANBgkqhkiG9w0BAQUFAAOBgQAVjiyKKGNUlPVQ6/bx32hu4vcCeQ+6FsuTqwSaekd4IQ7eZr49EJ1Kh61jgbYHvA9MZAXm7ie/HWZU/zxYz5o1gwdXR3dp/9UK5XT4x86epW+CVYMQrBuOXLQGkvTl5wBPzjkoI36d013MvriIU1yCCcBKzRnNC9DK7nqrL441GA==" />
</form>
</body>
</html>
