var affInterfaceOptions = '&pr_code=946SXuu3wH3Y1H2F204MZd625tOjHa&cols=3&rows=4&shop=z2-deepSky';

function IncludeAffInterface(options,file){
	if(!file) file = 'pr_interface';
	options = affInterfaceOptions + (options ? '&'+options : '');
	document.write('<SCRIPT type="text/javascript" language="JavaScript" src="http://www.templatehelp.com/codes/'+file+'.php?'+options+'"><'+'/SCRIPT>');
}

function Popup(url){
	window.open(
		url,
		'window',
		'width=600, height=600, resizable=yes, scrollbars=yes, location=no,  toolbar=no, menubar=no, status=no'
	);
}
// Hide "www.mytemplatestorage.com" from status bar
function HideStatus(){
	window.status = document.readyState!="complete" ?
		"Loading..." : window.defaultStatus;
}
document.onreadystatechange = HideStatus;

