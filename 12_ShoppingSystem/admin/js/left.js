// JavaScript Document
function change(nu,lx){
	if(nu.style.display == "none"){
		nu.style.display = "";
		lx.style.background="url(images/main_openroot.gif)";
	}else{
		nu.style.display = "none";
		lx.style.background="url(images/main_closeroot.gif)";
	}
}