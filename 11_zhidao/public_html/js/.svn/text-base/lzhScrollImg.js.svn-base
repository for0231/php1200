
/**
 * 广告切换
 * 
 * @版权：web968.com
 * @作者：刘中华
 * @电话：15043191896
 */

//图片个数
var imgSrcCount = imgSrc.length;
//当前图片索引
var imgIndex = 0;
//特效数组
var trans = new Array;
trans[0] = "progid:DXImageTransform.Microsoft.Fade(duration=1)";
trans[1] = "progid:DXImageTransform.Microsoft.Blinds(Duration=1,bands=20)";
trans[2] = "progid:DXImageTransform.Microsoft.Checkerboard(Duration=1,squaresX=20,squaresY=20)";
trans[3] = "progid:DXImageTransform.Microsoft.Strips(Duration=1,motion=rightdown)";
trans[4] = "progid:DXImageTransform.Microsoft.Barn(Duration=1,orientation=vertical)";
trans[5] = "progid:DXImageTransform.Microsoft.GradientWipe(duration=1)";
trans[6] = "progid:DXImageTransform.Microsoft.Iris(Duration=1,motion=out)";
trans[7] = "progid:DXImageTransform.Microsoft.Wheel(Duration=1,spokes=12)";
trans[8] = "progid:DXImageTransform.Microsoft.Pixelate(maxSquare=10,duration=1)";
trans[9] = "progid:DXImageTransform.Microsoft.RadialWipe(Duration=1,wipeStyle=clock)";
trans[10] = "progid:DXImageTransform.Microsoft.RandomBars(Duration=1,orientation=vertical)";
trans[11] = "progid:DXImageTransform.Microsoft.Slide(Duration=1,slideStyle=push)";
trans[12] = "progid:DXImageTransform.Microsoft.RandomDissolve(Duration=1,orientation=vertical)";
trans[13] = "progid:DXImageTransform.Microsoft.Spiral(Duration=1,gridSizeX=40,gridSizeY=40)";
trans[14] = "progid:DXImageTransform.Microsoft.Stretch(Duration=1,stretchStyle=push)";
trans[15] = "special case";
//特效个数
var transCount = trans.length - 1;
//定位文字显视层
document.write("<div style=\"width:" + w + "px; height:" + h + "px; clear:both; \">");
document.write("    <div style=\"width:" + w + "px; height:" + h + "px; font-size:0px; clear:both; \">");
document.write("       <a id=\"imgHref\" href=\"#\" target=\"_blank\"><img name=\"lzhScrollImg\" id=\"lzhScrollImg\" border=\"0\" src=\"" + imgSrc[0] + "\" width=\"" + w + "px\" height=\"" + (h - h1) + "px\"/></a>");
document.write("    </div>");
document.write("    <div style=\"width:" + w + "px; height:" + h1 + "px; margin-top:-" + h1 + "px; font-size:0px; background-color:#FFFFFF; clear:both; \">");
document.write("        <ul style=\"margin:0px; padding:0px; list-style-type:none\">");
for (var i = 0; i < 4; i++) {
	document.write("            <li style=\"width:" + w / 4 + "px; height:" + h1 + "px; display:block; float:left;\">");
	document.write("                <img onclick=\"selectImg(" + i + ")\" id=\"lzhScrollImg_" + (i + 1) + "\" name=\"lzhScrollImg_" + (i + 1) + "\" src=\"" + imgSrc[i].substring(0, imgSrc[i].lastIndexOf(".")) + "_1." + imgSrc[i].substring(imgSrc[i].lastIndexOf(".") + 1, imgSrc[i].length) + "\" style=\"width:" + (w / 4 - 4) + "px; height:" + (h1 - 4) + "px; border:2px solid #FFFFFF; cursor:pointer; \">");
	document.write("            </li>");
}
document.write("        </ul>");
document.write("    </div>");
document.write("    <div id=\"lzhScrollDiv1\" style=\"width:" + w + "; height:50px; margin-top:-115px; color:#FF0000; background-color:#000000; filter:alpha(opacity=50);  \">");
document.write("        <div id=\"lzhScrollDiv2\" style=\"position:relative; left:8px; top:8px; width:" + w + "; height:40px; color:#FFFFFF; font-weight:bold; line-height:20px; text-align:left; font-size:14px; \">");
document.write("        </div>");
document.write("    </div>");
document.write("</div>");

//选择图片时触发动作
function selectImg(ind) {
	var index = Math.floor(Math.random() * transCount);
	$("#lzhScrollImg").css("filter", trans[index]);
	document.images.lzhScrollImg.filters[0].apply();
	$("#lzhScrollImg").attr("src", imgSrc[ind]);
	for (var i = 0; i < imgSrcCount; i++) {
		if (i == ind) {
			$("#lzhScrollImg_" + (i + 1)).css("border", "2px solid #33CC33");
		} else {
			$("#lzhScrollImg_" + (i + 1)).css("border", "2px solid #FFFFFF");
		}
	}
	$("#lzhScrollDiv2").html(imgLinkTitle[ind]);
	$("#imgHref").attr("href", imgLink[ind]);
	imgIndex = ind;
	document.images.lzhScrollImg.filters[0].play();
}
//图片播放方法
function play() {
	var index = Math.floor(Math.random() * transCount);
	$("#lzhScrollImg").css("filter", trans[index]);
	document.images.lzhScrollImg.filters[0].apply();
	$("#lzhScrollImg").attr("src", imgSrc[imgIndex]);
	for (var i = 0; i < imgSrcCount; i++) {
		if (i == imgIndex) {
			$("#lzhScrollImg_" + (i + 1)).css("border", "2px solid #33CC33");
		} else {
			$("#lzhScrollImg_" + (i + 1)).css("border", "2px solid #FFFFFF");
		}
	}
	$("#lzhScrollDiv2").html(imgLinkTitle[imgIndex]);
	$("#imgHref").attr("href", imgLink[imgIndex]);
	imgIndex++;
	if (imgIndex > imgSrcCount - 1) {
		imgIndex = 0;
	}
	document.images.lzhScrollImg.filters[0].play();
	setTimeout("play()", 2800);
}
//开发自动播放图片
play();
/******************************************************
客户端代码
<script src="{util->baseUrl}/js/jquery.js"></script>

<script language="javascript">        
//广告宽度
var w = "320";

//广告高度
var h = "400";

//小广告高度
var h1 = "60";


//图片地址
var imgSrc = new Array;
imgSrc[0] = '{util->baseUrl}/upfiles/gg/1.gif';
imgSrc[1] = '{util->baseUrl}/upfiles/gg/2.gif';
imgSrc[2] = '{util->baseUrl}/upfiles/gg/3.gif';
imgSrc[3] = '{util->baseUrl}/upfiles/gg/4.gif';

//图片链接地址
var imgLink = new Array;
imgLink[0] = 'http://www.mrbooks.cn';
imgLink[1] = 'http://www.mrbccd.com';
imgLink[2] = 'http://www.mrbooks.cn/listsepbook-sepprice.html';
imgLink[3] = 'booksjs.php?stypeid=12';

//图片链接提示文字
var imgLinkTitle = new Array;
imgLinkTitle[0] = '吉林省明日科技有限公司将推出编程词典<br /><font style="color:#FFB900; font-size:12px; font-weight:normal">预计将于2008年8月20日震撼推出</font>';
imgLinkTitle[1] = '明日网络学院<br /><font style="color:#FFB900; font-size:12px; font-weight:normal">最专业、最前面的IT技术视频网站</font>';
imgLinkTitle[2] = '明日网上书店<br /><font style="color:#FFB900; font-size:12px; font-weight:normal">预计将于2008年8月20日开业</font>';
imgLinkTitle[3] = '编程词典服务社区<br /><font style="color:#FFB900; font-size:12px; font-weight:normal">国内最具势力的IT技术服务专区</font>';

</script>

<script src="{util->baseUrl}/js/lzhScrollImg.js"></script>  

*****************************************************************/

