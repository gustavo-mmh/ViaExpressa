var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

function martin(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=848,height=580 top=0,left=30');");
}
function martinfierro(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=700,height=586 top=0,left=30');");
}

function Abrir_ventana (pagina) {
var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=yes,width=130,height=365,top=0,left=100";
window.open(pagina,"",opciones);
}
function Abrir_msn (pagina) {
var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=yes,width=200,height=150,top=0,left=450";
window.open(pagina,"",opciones);
}
function Abrir_ventana5 (pagina) {
var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=630,height=220,top=0,left=100";
window.open(pagina,"",opciones);
}
function Abrir_ventana6 (pagina) {
var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=460,height=470,top=0,left=100";
window.open(pagina,"",opciones);
}
function Abrir_ventana7 (pagina) {
var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=650,height=400,top=0,left=50";
window.open(pagina,"",opciones);
}
function Abrir_ventana8 (pagina) {
var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=539,height=317,top=0,left=50";
window.open(pagina,"",opciones);
}
function Abrir_ventana8 (pagina) {
var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=539,height=317,top=0,left=50";
window.open(pagina,"",opciones);
}
function tim(pagina) {
var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=550,height=480,top=0,left=100";
window.open(pagina,"",opciones);
}
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=300,height=125 top=0,left=500');");
}
function vivo(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=171,height=410 top=20,left=590');");
}
function gsm(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=270,height=200 top=0,left=520');");
}
function popUprcc(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=427,height=228 top=0,left=250');");
}
function banner(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=137,height=186 top=0,left=600');");
}
function paipasso(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=420,height=520 top=0,left=30');");
}
function mOvr(src,clrOver) {
    if (!src.contains(event.fromElement)) {
	  src.style.cursor = 'hand';
	  src.bgColor = clrOver;
	}
  }
  function mOut(src,clrIn) {
	if (!src.contains(event.toElement)) {
	  src.style.cursor = 'default';
	  src.bgColor = clrIn;
	}
  }
  function mClk(src) {
    if(event.srcElement.tagName=='TD'){
	  src.children.tags('A')[0].click();
    }
  }
  
var defaultColor;
var Var_Path="";
//var Var_Path="";

function mOvr(src,clrOver) {
	if(clrOver=='') {clrOver = '#B9D7EA'};
	//if (!src.contains(event.fromElement)) { defaultColor = src.bgColor; src.bgColor = clrOver; }
	defaultColor = src.bgColor;
	src.bgColor = clrOver;
}

function mOut(src) {
	//if (!src.contains(event.toElement)) src.bgColor = defaultColor;
	src.bgColor = defaultColor;
}

var n=rnd(46),contImgs=1,maxImgs=46;
function rnd(max) {
	var x = Math.random() * max;
	x = x + 1;
	return parseInt(x);
}  




}
/*
     FILE ARCHIVED ON 12:53:27 Nov 14, 2016 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 23:48:20 Dec 20, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 595.103
  exclusion.robots: 0.063
  exclusion.robots.policy: 0.057
  cdx.remote: 0.055
  esindex: 0.007
  LoadShardBlock: 431.86 (3)
  PetaboxLoader3.datanode: 399.245 (5)
  CDXLines.iter: 13.918 (3)
  load_resource: 207.414 (2)
  PetaboxLoader3.resolve: 70.824 (2)
*/