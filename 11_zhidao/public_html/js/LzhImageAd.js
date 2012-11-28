/*
<script language="javascript">

//广告宽度
var w = "515px";
//广告高度
var h = "150px";
//广告背景色
var bg = "#99CCFF"; 
//图片地址
var imgSrc = new Array;
imgSrc[0] = './img/0.jpg';
imgSrc[1] = './img/1.jpg';
imgSrc[2] = './img/2.jpg';
imgSrc[3] = './img/3.jpg';

//图片链接地址
var imgLink = new Array;
imgLink[0] = 'http://www.mrbooks.cn';
imgLink[1] = 'http://www.mrbccd.com';
imgLink[2] = 'http://www.mrbooks.cn/listsepbook-sepprice.html';
imgLink[3] = 'booksjs.php?stypeid=12';

//图片链接提示文字
var imgLinkTitle = new Array;
imgLinkTitle[0] = '明日电脑书城';
imgLinkTitle[1] = '编程词典';
imgLinkTitle[2] = '优惠购书';
imgLinkTitle[3] = '优惠购书';
</script>
 */
var imgSrcCount = imgSrc.length;
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
var transCount = trans.length - 1;
var imgIndex = 0;
function showImg(ind) {

	for ( var i = 1; i <= imgSrcCount; i++) {
		document.getElementById('showImgArea_' + i).style.backgroundColor = 'FF0000';
		document.getElementById('showImgArea_' + i).style.color = '#FFFFFF';
		document.getElementById('showImgArea_' + i).style.borderColor = '#FFFFFF';
	}
	document.getElementById('showImgArea_' + ind).style.backgroundColor = '#E8FEF5';
	document.getElementById('showImgArea_' + ind).style.color = '#087749';
	document.getElementById('showImgArea_' + ind).style.borderColor = '#087749';

	document.images.im.src = imgSrc[ind - 1];
	document.all.aim.href = imgLink[ind - 1];
	document.all.aim.title = imgLinkTitle[ind - 1];
	var index = Math.floor(Math.random() * transCount);
	document.images.im.style.filter = trans[index];
	document.images.im.filters[0].apply();
	document.images.im.filters[0].play();
	imgIndex = ind - 1;

}
function imgDh() {
	var linkStr = "<ul style='margin:0px; padding:0px; list-style-type:none;'>";
	for ( var i = 1; i <= imgSrcCount; i++) {
		linkStr += "<li id='showImgArea_"
				+ i
				+ "' style='width:16px; height:16px; line-height:16px; font-family:Arial; font-weight:bold; display:block; margin-right:8px; font-size:12px; text-align:center; float:left; cursor:hand;  color:#0000FF; border:1px solid #0A5D6F; color:#0000FF; background-color:#E8FEF5' onclick='showImg("
				+ i + ")'>" + i + "</li>";
	}
	linkStr += "</ul>";
	return linkStr;
}
document
		.write("<div style='width:"
				+ w
				+ "; height:"
				+ h
				+ "; background-color:"
				+ bg
				+ "; font-size:0px; clear:both;'><div style='font-size:0px; clear:both;'><a name='aim' id='aim' href='"
				+ imgLink[0]
				+ "' target='_blank' title='"
				+ imgLinkTitle[0]
				+ "'><img name='im' id='im' width="
				+ w
				+ " height="
				+ h
				+ " src='"
				+ imgSrc[0]
				+ "' border='0'></a></div><div style='width:110px; height:16px; margin-top:-22px; float:right'>"
				+ imgDh() + "</div></div>");

function play() {
	for ( var i = 1; i <= imgSrcCount; i++) {
		document.getElementById('showImgArea_' + i).style.backgroundColor = '#FF0000';
		document.getElementById('showImgArea_' + i).style.color = '#FFFFFF';
		document.getElementById('showImgArea_' + i).style.borderColor = '#FFFFFF';
	}
	document.getElementById('showImgArea_' + parseInt(imgIndex + 1)).style.backgroundColor = '#E8FEF5';
	document.getElementById('showImgArea_' + parseInt(imgIndex + 1)).style.color = '#087749';
	document.getElementById('showImgArea_' + parseInt(imgIndex + 1)).style.borderColor = '#087749';

	document.images.im.src = imgSrc[imgIndex];
	document.all.aim.href = imgLink[imgIndex];
	document.all.aim.title = imgLinkTitle[imgIndex];
	var index = Math.floor(Math.random() * transCount);
	document.images.im.style.filter = trans[index];
	document.images.im.filters[0].apply();

	imgIndex++;
	if (imgIndex > imgSrcCount - 1) {
		imgIndex = 0;
	}
	document.images.im.filters[0].play();
	setTimeout("play()", 3200);
}
play();
