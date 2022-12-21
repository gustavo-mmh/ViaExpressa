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

function Widget() {
	
	this.rbsProxy;
	
	this.loaded = function(obj) {
		var t, objs = obj.parentNode.childNodes;
		
		for (var i=0; i<objs.length; i++)
			if (objs[i].className == "ct") {
				if (objs[i].getAttribute("rel") == undefined)
					obj = objs[i].firstChild;
				else
					obj = objs[i];
			}
		
		t = (obj.getAttribute("rel")).replace(/,/ig, "_");
		
		obj.id += "_";
		obj.id += t;
		
		widRbs.getContent(getUrl(obj), obj, obj.id);
	}
	
	this.getContent = function(url, obj, t) {
		var sc,n;
		
		sc = document.createElement("script");
		n = 0;
		
		obj.innerHTML = "<p class=\"nresult\">Carregando...</p>";
		
		sc.src = "https://web.archive.org/web/20160314175032/http://www.clicrbs.com.br/widgets/noticias/jsp/proxy.jsp?url="+ escape(url) +"&callback=widRbs.getContentAux&id="+ t;
		obj.parentNode.appendChild(sc);
	}
	
	function getUrl(obj) {
		var arr,uf,lc,cn,sc,ct,es;
		
		arr = obj.getAttribute("rel").split(",");
		uf = arr[0];
		lc = arr[1];
		cn = arr[2];
		sc = arr[3];
		ct = arr[4];
		es = arr[5];
		
		return "https://web.archive.org/web/20160314175032/http://www.clicrbs.com.br/widgets/noticias/jsp/default.jspx?uf="+ uf +"&local="+ lc +"&action=widgetContent&canal="+ cn +"&secao="+ sc +"&cartola="+ ct +"&especial="+ es +"&omit=true";
	}
	
	this.getContentAux = function(t, ct) {
		try {
			widRbs.rbsProxy = ct;
			var dv = document.getElementById(t);
			
			if (ct) {
				dv.innerHTML = ct;
				try {
					wizRbs.setLinksNull();
				} catch(e) {}
			} else
				dv.innerHTML = "Erro";
		} catch(e) {}
	}
	
} var widRbs = new Widget();

}
/*
     FILE ARCHIVED ON 17:50:32 Mar 14, 2016 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 23:48:23 Dec 20, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 263.269
  exclusion.robots: 0.107
  exclusion.robots.policy: 0.096
  RedisCDXSource: 1.053
  esindex: 0.009
  LoadShardBlock: 230.938 (3)
  PetaboxLoader3.datanode: 90.444 (5)
  CDXLines.iter: 23.82 (3)
  PetaboxLoader3.resolve: 247.15 (3)
  load_resource: 357.713 (2)
*/