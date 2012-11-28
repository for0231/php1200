/*************************************
 * LzhEditor在线编辑器V1.0
 * 作者：刘中华
 * 电话：15043191896
 * E-mail：jlnu_lzh@126.com
 * 
 * 使用说明
 * <form name="form">
 *     <script language="javascript">
 *         var lzhEditor = new LzhEditor('content');
 *         lzhEditor.Create();
 *     </script> 
 *     <input type="button" value="提交" onclick="fun()" />
 * </form>
 *    
 * <script language="javascript">
 *     function fun(){
 * 	       lzhEditor.Submit();
 * 	       form.submit();
 *     }
 * </script> 
 *   
 *  注意：PHP输出内容需要使用stripslashes()函数反转移  
 *        为编辑器初始划时
 *        PHP需要将chr(10)和chr(13)替换成空
 *        JSP需要将\r和\n替换为空
 * 
 */
/****************************上传代码*****************
 *       header('content-type:text/html; charset=utf-8');
 *       if ($this->_request->isPost()) {
 *             //图片保存目录
 *             $upfileDir = realpath($this->_config['bbs']['upfilesdir']);
 *             //网站根目录
 *             $baseUrl = $this->view->baseUrl();
 *             $upfileName = $_FILES["upfile"]["name"];
 *             $array = explode('.', $upfileName);
 *             $array = array_reverse($array);
 *             $newFileName = date("YmdHis") . mt_rand(1000, 9999) . '.' . $array[0];
 *             if (! is_dir($upfileDir)) {
 *                 mkdir($upfileDir);
 *             }
 *             $upfileNameAndDir = $upfileDir . "/" . $newFileName;
 *             @move_uploaded_file($_FILES["upfile"]["tmp_name"], $upfileNameAndDir);
 *             echo '<script language="javascript">
 *                       parent.window.frames["editor"].focus();
 *                       parent.window.frames["editor"].document.selection.createRange();
 *                       parent.window.frames["editor"].document.execCommand("InsertImage", false, "' . $baseUrl . '/upfiles/bbs/' . $newFileName . '");
 *                       parent.document.getElementById("uploadLayer").style.display="none";	
 *              </script>';
 *         }
 *         echo '
 *         <script language="javascript">
 *             function lzhEditor_chkinput(form)
 *             {
 *                 if(form.upfile.value==""){
 *                     alert("请选择要插入的图片！");
 *                     form.upfile.focus();
 *                     return false; 
 *                 }
 *               var v=form.upfile.value;
 *               var extsName=v.substring(v.lastIndexOf(".")+1).toLowerCase();
 *               if(!(extsName=="gif" || extsName=="jpg" || extsName=="png" || extsName=="bmp")){
 *                   alert("插入的图片只能为gif、jpg、png或bmp格式！");
 *                   form.upfile.focus();
 *                   return false; 
 *               }
 *               return true;
 *           }    
 *       </script>
 *       <body style="margin:0px; padding:10px; background-color:#F2F9F9; border:0px;">
 *           <form name="form_lzhEditor" method="post" action="" enctype="multipart/form-data" style="margin:0px; padding:0px; font-size:14px;" onsubmit="return lzhEditor_chkinput(this)">
 *               <br/>
 *               图片地址：<br/><input type="file" name="upfile" id="upfile"  size="30" style="font-size:12px; border:1px solid #777777; font-family:宋体; height:18px;"/><br/><br/><input type="submit" value="插入" />
 *           </form>
 *       </body>';
 *
 **********************************************/
/**
 * 执行命令
 */
function lzhEditorFormat(hc, pa) {
	window.frames["editor"].focus();
	window.frames["editor"].document.selection.createRange();
	if (pa == "") {
		window.frames["editor"].document.execCommand(hc, false);
	} else {
		window.frames["editor"].document.execCommand(hc, false, pa);
	}
}
/**
 * 创建链接
 */
function lzhEditorCreateLink() {
	var linkStr = prompt("\u8bf7\u8f93\u5165\u94fe\u63a5URL\u5730\u5740\uff01",
			"");
	if (linkStr != null) {
		lzhEditorFormat("CreateLink", linkStr);
	}
}

/**
 * 显示添加表情层
 */
function lzhEditorAddFace() {
	$("#faceLayer").css("left", $("#addFace").offset().left);
	$("#faceLayer").css("top", $("#addFace").offset().top + 22);
	$("#faceLayer").css("display", "inline");
}
/**
 * 插入表情
 */
function insertFace(faceUrl) {
	if (faceUrl != null && faceUrl != "") {
		lzhEditorFormat("InsertImage", faceUrl);
	}
	$("#faceLayer").css("display", "none");
}
/**
 * URL方式添加图片
 */
function lzhEditorInsertImage() {
	if ($.trim($("#imageUrl").val()) == "") {
		alert("请输入要插入图片的URL地址！");
	} else {
		var v = $.trim($("#imageUrl").val());
		var extsName = v.substring(v.lastIndexOf(".") + 1).toLowerCase();
		if (!(extsName == "gif" || extsName == "jpg" || extsName == "png" || extsName == "bmp")) {
			alert("插入的图片只能为gif、jpg、png或bmp格式！");
		} else {
			lzhEditorFormat("InsertImage", $.trim($("#imageUrl").val()));
			$("#uploadLayer").css("display", "none");
		}
	}
}
/**
 * 显示插入图片层
 */
function lzhEditorAddImage() {
	$("#uploadLayer").css("left", $("#addImage").offset().left);
	$("#uploadLayer").css("top", $("#addImage").offset().top + 22);
	$("#uploadLayer").css("display", "inline");
}
/**
 * 更改编辑器高度
 */
function changeEditorArea(type) {
	if (type == 1) {
		document.getElementById("editor").height = parseInt(document
				.getElementById("editor").height) + 100;
	} else {
		if (parseInt(document.getElementById("editor").height) > 100) {
			document.getElementById("editor").height = parseInt(document
					.getElementById("editor").height) - 100;
		}
	}
}
/**
 * 更改插入图片方式层
 */
function changUploadLayer(x) {
	if (x == 0) {
		$("#upLayer1").css("display", "block");
		$("#upLayer2").css("display", "none");
	} else {
		$("#upLayer1").css("display", "none");
		$("#upLayer2").css("display", "block");
	}
}
/**
 * 在线编辑器对象
 */
var LzhEditor = function(fieldName, width, height, value, baseUrl,
		iframeUploadUrl) {
	this.fieldName = fieldName || "content";
	this.width = width || "100%";
	this.height = height || "200";
	this.value = value || "";
	this.baseUrl = baseUrl || "/LzhEditor";
	this.iframeUploadUrl = iframeUploadUrl || "/";
	this.editorStr = "";
	this.fontSize = Array(Array(1, "8pt"), Array(2, "10pt"), Array(3, "12pt"),
			Array(4, "14pt"), Array(5, "18pt"), Array(6, "24pt"), Array(7,
					"36pt"));
	this.fontName = Array(Array("SimSun", "\u5b8b\u4f53"), Array("SimHei",
			"\u9ed1\u4f53"), Array("FangSong_GB2312", "\u4eff\u5b8b\u4f53"),
			Array("KaiTi_GB2312", "\u6977\u4f53"), Array("NSimSun",
					"\u65b0\u5b8b\u4f53"), Array("Arial", "Arial"), Array(
					"Arial Black", "Arial Black"), Array("Times New Roman",
					"Times New Roman"), Array("Courier New", "Courier New"),
			Array("Tahoma", "Tahoma"), Array("Verdana", "Verdana"), Array(
					"GulimChe", "GulimChe"), Array("MS Gothic", "MS Gothic"));
	this.color = Array("#FF0000", "#FFFF00", "#00FF00", "#00FFFF", "#0000FF",
			"#FF00FF", "#FFFFFF", "#F5F5F5", "#DCDCDC", "#FFFAFA", "#D3D3D3",
			"#C0C0C0", "#A9A9A9", "#808080", "#696969", "#000000", "#2F4F4F",
			"#708090", "#778899", "#4682B4", "#4169E1", "#6495ED", "#B0C4DE",
			"#7B68EE", "#6A5ACD", "#483D8B", "#191970", "#000080", "#00008B",
			"#0000CD", "#1E90FF", "#00BFFF", "#87CEFA", "#87CEEB", "#ADD8E6",
			"#B0E0E6", "#F0FFFF", "#E0FFFF", "#AFEEEE", "#00CED1", "#5F9EA0",
			"#48D1CC", "#00FFFF", "#40E0D0", "#20B2AA", "#008B8B", "#008080",
			"#7FFFD4", "#66CDAA", "#8FBC8F", "#3CB371", "#2E8B57", "#006400",
			"#008000", "#228B22", "#32CD32", "#00FF00", "#7FFF00", "#7CFC00",
			"#ADFF2F", "#98FB98", "#90EE90", "#00FF7F", "#00FA9A", "#556B2F",
			"#6B8E23", "#808000", "#BDB76B", "#B8860B", "#DAA520", "#FFD700",
			"#F0E68C", "#EEE8AA", "#FFEBCD", "#FFE4B5", "#F5DEB3", "#FFDEAD",
			"#DEB887", "#D2B48C", "#BC8F8F", "#A0522D", "#8B4513", "#D2691E",
			"#CD853F", "#F4A460", "#8B0000", "#800000", "#A52A2A", "#B22222",
			"#CD5C5C", "#F08080", "#FA8072", "#E9967A", "#FFA07A", "#FF7F50",
			"#FF6347", "#FF8C00", "#FFA500", "#FF4500", "#DC143C", "#FF0000",
			"#FF1493", "#FF00FF", "#FF69B4", "#FFB6C1", "#FFC0CB", "#DB7093",
			"#C71585", "#800080", "#8B008B", "#9370DB", "#8A2BE2", "#4B0082",
			"#9400D3", "#9932CC", "#BA55D3", "#DA70D6", "#EE82EE", "#DDA0DD",
			"#D8BFD8", "#E6E6FA", "#F8F8FF", "#F0F8FF", "#F5FFFA", "#F0FFF0",
			"#FAFAD2", "#FFFACD", "#FFF8DC", "#FFFFE0", "#FFFFF0", "#FFFAF0",
			"#FAF0E6", "#FDF5E6", "#FAEBD7", "#FFE4C4", "#FFDAB9", "#FFEFD5",
			"#FFF5EE", "#FFF0F5", "#FFE4E1");

};
/**
 * 创建并输出编辑器
 */
LzhEditor.prototype.Create = function() {
	this.editorStr += "<div id=\"faceLayer\" style=\"position: absolute; width:445px; z-index: 1; border:1px solid #77B7DD; background-color:#F2F9F9; clear:both;  display:none;\" onmouseleave=\"this.style.display='none'\">";
	this.editorStr += "    <ul style=\"margin:0px; padding:0px; list-style-type:none;\">";
	for ( var i = 1; i <= 40; i++) {
		var faceUrl = this.baseUrl + "/skins/face/a" + i + ".gif";
		this.editorStr += "        <li style=\"display:block; width:50px; float:left; height:50px; margin:0px; padding-top:3px; padding-left:3px;\"><img src=\""
				+ faceUrl
				+ "\" style=\"cursor:hand; border:1px solid #FFFFFF\" title=\"LzhEditor表情\" onmouseover=\"this.style.border='1px solid #719FE9'\" onmouseout=\"this.style.border='1px solid #FFFFFF'\" onclick=\"insertFace('"
				+ faceUrl + "')\" /></li>";
	}
	this.editorStr += "    </ul>";
	this.editorStr += "</div>";

	this.editorStr += "<div id=\"uploadLayer\" style=\"position: absolute; width:300px; z-index: 1; border:1px solid #77B7DD; background-color:#F2F9F9; clear:both;  display:none;\" >";
	this.editorStr += "    <div style=\"width:100%; height:25px; clear:both;\">";
	this.editorStr += "       链接插入：<input name=\"r1\" type=\"radio\" checked onclick=\"changUploadLayer(0)\"/>　　上传后插入：<input name=\"r1\" type=\"radio\" onclick=\"changUploadLayer(1)\"/>　　<a href=\"#\" onclick=\"document.getElementById('uploadLayer').style.display='none'\">关闭</a>";
	this.editorStr += "    </div>";
	this.editorStr += "    <div id=\"upLayer1\" style=\"width:100%; height:30px; clear:both; display:block\">";
	this.editorStr += "        图片URL：<input type=\"text\" name=\"imageUrl\" id=\"imageUrl\" size=\"30\" style=\"font-size:12px; border:1px solid #777777; font-family:宋体; height:14px;\">&nbsp;<input type=\"button\" value=\"插入\" onclick=\"lzhEditorInsertImage()\">";
	this.editorStr += "    </div>";
	this.editorStr += "    <div id=\"upLayer2\" style=\"width:100%; clear:both; display:none;\" >";
	this.editorStr += "        <iframe src=\"" + this.iframeUploadUrl
			+ "\" style=\"border:0px;margin:0px; padding:0px;\"></iframe>";
	this.editorStr += "    </div>";
	this.editorStr += "</div>";

	this.editorStr += "<div style=\"width:" + this.width
			+ "; height:26px; background:url(" + this.baseUrl
			+ "/skins/toolbar_bg.gif); position:relative; clear:both;\">";

	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/undo.gif\" title=\"\u64a4\u6d88\" style=\"cursor:pointer; position:absolute; left:5px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorFormat('Undo','')\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/redo.gif\" title=\"\u91cd\u505a\" style=\"cursor:pointer; position:absolute; left:25px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorFormat('Redo','')\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/toolbar_sep.gif\" style=\"position:absolute; left:45px; top:4px;\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/cut.gif\" title=\"\u526a\u5207\" style=\"cursor:pointer; position:absolute; left:50px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorFormat('Cut','')\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/copy.gif\" title=\"\u590d\u5236\" style=\"cursor:pointer; position:absolute; left:70px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorFormat('Copy','')\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/paste.gif\" title=\"\u7c98\u8d34\" style=\"cursor:pointer; position:absolute; left:90px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorFormat('Paste','')\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/toolbar_sep.gif\" style=\"position:absolute; left:115px; top:4px;\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/justifyleft.gif\" title=\"\u5de6\u5bf9\u9f50\" style=\"cursor:pointer; position:absolute; left:120px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorFormat('JustifyLeft','')\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/justifycenter.gif\" title=\"\u5c45\u4e2d\u5bf9\u9f50\" style=\"cursor:pointer; position:absolute; left:140px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorFormat('JustifyCenter','')\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/justifyright.gif\" title=\"\u53f3\u5bf9\u9f50\" style=\"cursor:pointer; position:absolute; left:160px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorFormat('JustifyRight','')\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/toolbar_sep.gif\" style=\"position:absolute; left:180px; top:4px;\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/bold.gif\" title=\"\u7c97\u4f53\" style=\"cursor:pointer; position:absolute; left:185px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorFormat('bold','')\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/italic.gif\" title=\"\u659c\u4f53\" style=\"cursor:pointer; position:absolute; left:205px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorFormat('italic','')\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/underline.gif\" title=\"\u4e0b\u5212\u7ebf\" style=\"cursor:pointer; position:absolute; left:225px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorFormat('underline','')\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/strikethrough.gif\" title=\"\u5220\u9664\u7ebf\" style=\"cursor:pointer; position:absolute; left:245px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorFormat('strikethrough','')\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/toolbar_sep.gif\" style=\"position:absolute; left:265px; top:4px;\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/link.gif\" title=\"\u521b\u5efa\u94fe\u63a5\" style=\"cursor:pointer; position:absolute; left:270px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorCreateLink()\" />";
	this.editorStr += "<img id=\"addImage\" src=\""
			+ this.baseUrl
			+ "/skins/image.gif\" title=\"\u63d2\u5165\u56fe\u7247\" style=\"cursor:pointer; position:absolute; left:290px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorAddImage()\" />";
	this.editorStr += "<img id=\"addFace\" src=\""
			+ this.baseUrl
			+ "/skins/face.gif\" title=\"\u63d2\u5165\u8868\u60c5\" style=\"cursor:pointer; position:absolute; left:310px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"lzhEditorAddFace()\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/toolbar_sep.gif\" style=\"position:absolute; left:330px; top:4px;\" />";
	this.editorStr += "<select name='font-size' onchange='lzhEditorFormat(\"FontSize\", this.value)' style=\"position:absolute; left:335px; top:3px; width:50px; font-size:12px\">";
	this.editorStr += "    <option selected='selected'>\u5b57\u53f7</option>";
	for ( var j = 0; j < this.fontSize.length; j++) {
		this.editorStr += "<option value='" + this.fontSize[j][0] + "'>"
				+ this.fontSize[j][1] + "</option>";
	}
	this.editorStr += "</select>";
	this.editorStr += "<select name='font-name' onchange='lzhEditorFormat(\"FontName\", this.value)' style=\"position:absolute; left:387px; top:3px; width:80px; font-size:12px\">";
	this.editorStr += "    <option selected='selected'>\u5b57\u4f53</option>";
	for ( var j = 0; j < this.fontSize.length; j++) {
		this.editorStr += "<option value='" + this.fontName[j][0] + "'>"
				+ this.fontName[j][1] + "</option>";
	}
	this.editorStr += "</select>";
	this.editorStr += "<select name='fore-color' onchange='lzhEditorFormat(\"ForeColor\", this.value)' style=\"position:absolute; left:469px; top:3px; width:80px; font-size:12px\">";
	this.editorStr += "    <option selected='selected'>\u524d\u666f\u8272</option>";
	for ( var j = 0; j < this.color.length; j++) {
		this.editorStr += "<option value='" + this.color[j]
				+ "' style='background-color:" + this.color[j] + "'>"
				+ this.color[j] + "</option>";
	}
	this.editorStr += "</select>";
	this.editorStr += "<select name='back-color' onchange='lzhEditorFormat(\"BackColor\", this.value)' style=\"position:absolute; left:551px; top:3px;width:80px; font-size:12px\">";
	this.editorStr += "    <option selected='selected'>\u80cc\u666f\u8272</option>";
	for ( var j = 0; j < this.color.length; j++) {
		this.editorStr += "<option value='" + this.color[j]
				+ "' style='background-color:" + this.color[j] + "'>"
				+ this.color[j] + "</option>";
	}
	this.editorStr += "</select>";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/toolbar_sep.gif\" style=\"position:absolute; left: 631px; top:4px;\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/jia.gif\" title=\"\u589e\u5927\u7f16\u8f91\u533a\" style=\"cursor:pointer; position:absolute; left:636px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"changeEditorArea(1)\" />";
	this.editorStr += "<img src=\""
			+ this.baseUrl
			+ "/skins/jian.gif\" title=\"\u51cf\u5c0f\u7f16\u8f91\u533a\" style=\"cursor:pointer; position:absolute; left:656px; top:3px;\" onmouseover=\"this.style.backgroundColor='#DFF1FF'\" onmouseout=\"this.style.backgroundColor=''\" onclick=\"changeEditorArea(0)\" />";
	this.editorStr += "</div>";

	this.editorStr += "<div style=\"width:" + this.width + "; clear:both; \">";
	this.editorStr += "<iframe id=\"editor\" name=\"editor\" width=\"100%\" height=\""
			+ this.height + "\" scrolling=\"auto\" frameborder=\"0\"></iframe>";
	this.editorStr += "<input type=\"hidden\" id=\"" + this.fieldName
			+ "\" name=\"" + this.fieldName + "\" value=\"\" />";
	this.editorStr += "</div>";

	document.write(this.editorStr);
	window.frames["editor"].document.open();
	window.frames["editor"].document
			.write("<BODY style=\"PADDING-RIGHT: 5px; PADDING-LEFT: 5px; FONT-SIZE: 12px; PADDING-BOTTOM: 5px; MARGIN: 0px; PADDING-TOP: 5px\">"
					+ this.value + "</BODY>");
	window.frames["editor"].document.close();
	window.frames["editor"].document.designMode = "on";
	window.frames["editor"].focus();
	window.frames["editor"].document.onkeydown = function() {
		if (window.frames["editor"].event.keyCode == 13) {
			window.frames['editor'].document.selection.createRange().pasteHTML(
					'<br><!---->');
			window.frames['editor'].event.returnValue = false;
		}
	};
};
/**
 * 将编辑器内容赋给隐藏域（表单提交时调用）
 */
LzhEditor.prototype.Submit = function() {
	var content = window.frames["editor"].document.body.outerHTML;
	content = content
			.replace(
					'<BODY style="PADDING-RIGHT: 5px; PADDING-LEFT: 5px; FONT-SIZE: 12px; PADDING-BOTTOM: 5px; MARGIN: 0px; PADDING-TOP: 5px">',
					'');
	content = content.replace('</BODY>', '');
	document.getElementById(this.fieldName).value = content;
};
