/*
 Highcharts JS v8.1.2 (2020-06-16)

 Exporting module

 (c) 2010-2019 Torstein Honsi

 License: www.highcharts.com/license
*/
(function(a){"object"===typeof module&&module.exports?(a["default"]=a,module.exports=a):"function"===typeof define&&define.amd?define("highcharts/modules/export-data",["highcharts","highcharts/modules/exporting"],function(e){a(e);a.Highcharts=e;return a}):a("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(a){function e(a,b,f,d){a.hasOwnProperty(b)||(a[b]=d.apply(null,f))}a=a?a._modules:{};e(a,"mixins/ajax.js",[a["parts/Globals.js"],a["parts/Utilities.js"]],function(a,b){var f=b.merge,
d=b.objectEach;a.ajax=function(b){var a=f(!0,{url:!1,type:"get",dataType:"json",success:!1,error:!1,data:!1,headers:{}},b);b={json:"application/json",xml:"application/xml",text:"text/plain",octet:"application/octet-stream"};var c=new XMLHttpRequest;if(!a.url)return!1;c.open(a.type.toUpperCase(),a.url,!0);a.headers["Content-Type"]||c.setRequestHeader("Content-Type",b[a.dataType]||b.text);d(a.headers,function(a,b){c.setRequestHeader(b,a)});c.onreadystatechange=function(){if(4===c.readyState){if(200===
c.status){var b=c.responseText;if("json"===a.dataType)try{b=JSON.parse(b)}catch(v){a.error&&a.error(c,v);return}return a.success&&a.success(b)}a.error&&a.error(c,c.responseText)}};try{a.data=JSON.stringify(a.data)}catch(p){}c.send(a.data||!0)};a.getJSON=function(b,d){a.ajax({url:b,success:d,dataType:"json",headers:{"Content-Type":"text/plain"}})}});e(a,"mixins/download-url.js",[a["parts/Globals.js"]],function(a){var b=a.win,f=b.navigator,d=b.document,e=b.URL||b.webkitURL||b,u=/Edge\/\d+/.test(f.userAgent);
a.dataURLtoBlob=function(a){if((a=a.match(/data:([^;]*)(;base64)?,([0-9A-Za-z+/]+)/))&&3<a.length&&b.atob&&b.ArrayBuffer&&b.Uint8Array&&b.Blob&&e.createObjectURL){var c=b.atob(a[3]),d=new b.ArrayBuffer(c.length);d=new b.Uint8Array(d);for(var f=0;f<d.length;++f)d[f]=c.charCodeAt(f);a=new b.Blob([d],{type:a[1]});return e.createObjectURL(a)}};a.downloadURL=function(c,p){var e=d.createElement("a");if("string"===typeof c||c instanceof String||!f.msSaveOrOpenBlob){if(u||2E6<c.length)if(c=a.dataURLtoBlob(c),
!c)throw Error("Failed to convert to blob");if("undefined"!==typeof e.download)e.href=c,e.download=p,d.body.appendChild(e),e.click(),d.body.removeChild(e);else try{var B=b.open(c,"chart");if("undefined"===typeof B||null===B)throw Error("Failed to open window");}catch(E){b.location.href=c}}else f.msSaveOrOpenBlob(c,p)}});e(a,"modules/export-data.src.js",[a["parts/Axis.js"],a["parts/Chart.js"],a["parts/Globals.js"],a["parts/Utilities.js"]],function(a,b,e,d){function f(a,b){var c=p.navigator,d=-1<c.userAgent.indexOf("WebKit")&&
0>c.userAgent.indexOf("Chrome"),g=p.URL||p.webkitURL||p;try{if(c.msSaveOrOpenBlob&&p.MSBlobBuilder){var e=new p.MSBlobBuilder;e.append(a);return e.getBlob("image/svg+xml")}if(!d)return g.createObjectURL(new p.Blob(["\ufeff"+a],{type:b}))}catch(M){}}var u=e.doc,c=e.seriesTypes,p=e.win,v=d.addEvent,B=d.defined,E=d.extend,J=d.find,D=d.fireEvent,K=d.getOptions,L=d.isNumber,w=d.pick;d=d.setOptions;var F=e.downloadURL;d({exporting:{csv:{columnHeaderFormatter:null,dateFormat:"%Y-%m-%d %H:%M:%S",decimalPoint:null,
itemDelimiter:null,lineDelimiter:"\n"},showTable:!1,useMultiLevelHeaders:!0,useRowspanHeaders:!0},lang:{downloadCSV:"Download CSV",downloadXLS:"Download XLS",exportData:{categoryHeader:"Category",categoryDatetimeHeader:"DateTime"},viewData:"View data table"}});v(b,"render",function(){this.options&&this.options.exporting&&this.options.exporting.showTable&&!this.options.chart.forExport&&this.viewData()});b.prototype.setUpKeyToAxis=function(){c.arearange&&(c.arearange.prototype.keyToAxis={low:"y",high:"y"});
c.gantt&&(c.gantt.prototype.keyToAxis={start:"x",end:"x"})};b.prototype.getDataRows=function(b){var c=this.hasParallelCoordinates,d=this.time,e=this.options.exporting&&this.options.exporting.csv||{},g=this.xAxis,q={},f=[],p=[],t=[],m;var k=this.options.lang.exportData;var z=k.categoryHeader,x=k.categoryDatetimeHeader,G=function(n,c,d){if(e.columnHeaderFormatter){var g=e.columnHeaderFormatter(n,c,d);if(!1!==g)return g}return n?n instanceof a?n.options.title&&n.options.title.text||(n.dateTime?x:z):
b?{columnTitle:1<d?c:n.name,topLevelColumnTitle:n.name}:n.name+(1<d?" ("+c+")":""):z},H=function(a,b,c){var n={},d={};b.forEach(function(b){var e=(a.keyToAxis&&a.keyToAxis[b]||b)+"Axis";e=L(c)?a.chart[e][c]:a[e];n[b]=e&&e.categories||[];d[b]=e&&e.dateTime});return{categoryMap:n,dateTimeValueAxisMap:d}},r=function(a,b){return a.data.filter(function(a){return a.name}).length&&b&&!b.categories&&!a.keyToAxis?a.pointArrayMap&&a.pointArrayMap.filter(function(a){return"x"===a}).length?(a.pointArrayMap.unshift("x"),
a.pointArrayMap):["x","y"]:a.pointArrayMap||["y"]},h=[];var y=0;this.setUpKeyToAxis();this.series.forEach(function(a){var x=a.xAxis,n=a.options.keys||r(a,x),f=n.length,l=!a.requireSorting&&{},z=g.indexOf(x),C=H(a,n),k;if(!1!==a.options.includeInDataExport&&!a.options.isInternal&&!1!==a.visible){J(h,function(a){return a[0]===z})||h.push([z,y]);for(k=0;k<f;)m=G(a,n[k],n.length),t.push(m.columnTitle||m),b&&p.push(m.topLevelColumnTitle||m),k++;var I={chart:a.chart,autoIncrement:a.autoIncrement,options:a.options,
pointArrayMap:a.pointArrayMap};a.options.data.forEach(function(b,g){c&&(C=H(a,n,g));var h={series:I};a.pointClass.prototype.applyOptions.apply(h,[b]);b=h.x;var r=a.data[g]&&a.data[g].name;k=0;if(!x||"name"===a.exportKey||!c&&x&&x.hasNames&&r)b=r;l&&(l[b]&&(b+="|"+g),l[b]=!0);q[b]||(q[b]=[],q[b].xValues=[]);q[b].x=h.x;q[b].name=r;for(q[b].xValues[z]=h.x;k<f;)g=n[k],r=h[g],q[b][y+k]=w(C.categoryMap[g][r],C.dateTimeValueAxisMap[g]?d.dateFormat(e.dateFormat,r):null,r),k++});y+=k}});for(l in q)Object.hasOwnProperty.call(q,
l)&&f.push(q[l]);var l=b?[p,t]:[t];for(y=h.length;y--;){var u=h[y][0];var v=h[y][1];var A=g[u];f.sort(function(a,b){return a.xValues[u]-b.xValues[u]});k=G(A);l[0].splice(v,0,k);b&&l[1]&&l[1].splice(v,0,k);f.forEach(function(a){var b=a.name;A&&!B(b)&&(A.dateTime?(a.x instanceof Date&&(a.x=a.x.getTime()),b=d.dateFormat(e.dateFormat,a.x)):b=A.categories?w(A.names[a.x],A.categories[a.x],a.x):a.x);a.splice(v,0,b)})}l=l.concat(f);D(this,"exportData",{dataRows:l});return l};b.prototype.getCSV=function(a){var b=
"",c=this.getDataRows(),d=this.options.exporting.csv,e=w(d.decimalPoint,","!==d.itemDelimiter&&a?(1.1).toLocaleString()[1]:"."),g=w(d.itemDelimiter,","===e?";":","),f=d.lineDelimiter;c.forEach(function(a,d){for(var m,k=a.length;k--;)m=a[k],"string"===typeof m&&(m='"'+m+'"'),"number"===typeof m&&"."!==e&&(m=m.toString().replace(".",e)),a[k]=m;b+=a.join(g);d<c.length-1&&(b+=f)});return b};b.prototype.getTable=function(a){var b='<table id="highcharts-data-table-'+this.index+'">',c=this.options,d=a?(1.1).toLocaleString()[1]:
".",e=w(c.exporting.useMultiLevelHeaders,!0);a=this.getDataRows(e);var f=0,g=e?a.shift():null,p=a.shift(),t=function(a,b,c,e){var f=w(e,"");b="text"+(b?" "+b:"");"number"===typeof f?(f=f.toString(),","===d&&(f=f.replace(".",d)),b="number"):e||(b="empty");return"<"+a+(c?" "+c:"")+' class="'+b+'">'+f+"</"+a+">"};!1!==c.exporting.tableCaption&&(b+='<caption class="highcharts-table-caption">'+w(c.exporting.tableCaption,c.title.text?c.title.text.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,
"&gt;").replace(/"/g,"&quot;").replace(/'/g,"&#x27;").replace(/\//g,"&#x2F;"):"Chart")+"</caption>");for(var m=0,k=a.length;m<k;++m)a[m].length>f&&(f=a[m].length);b+=function(a,b,d){var f="<thead>",g=0;d=d||b&&b.length;var h,k=0;if(h=e&&a&&b){a:if(h=a.length,b.length===h){for(;h--;)if(a[h]!==b[h]){h=!1;break a}h=!0}else h=!1;h=!h}if(h){for(f+="<tr>";g<d;++g){h=a[g];var l=a[g+1];h===l?++k:k?(f+=t("th","highcharts-table-topheading",'scope="col" colspan="'+(k+1)+'"',h),k=0):(h===b[g]?c.exporting.useRowspanHeaders?
(l=2,delete b[g]):(l=1,b[g]=""):l=1,f+=t("th","highcharts-table-topheading",'scope="col"'+(1<l?' valign="top" rowspan="'+l+'"':""),h))}f+="</tr>"}if(b){f+="<tr>";g=0;for(d=b.length;g<d;++g)"undefined"!==typeof b[g]&&(f+=t("th",null,'scope="col"',b[g]));f+="</tr>"}return f+"</thead>"}(g,p,Math.max(f,p.length));b+="<tbody>";a.forEach(function(a){b+="<tr>";for(var c=0;c<f;c++)b+=t(c?"td":"th",null,c?"":'scope="row"',a[c]);b+="</tr>"});b+="</tbody></table>";a={html:b};D(this,"afterGetTable",a);return a.html};
b.prototype.downloadCSV=function(){var a=this.getCSV(!0);F(f(a,"text/csv")||"data:text/csv,\ufeff"+encodeURIComponent(a),this.getFilename()+".csv")};b.prototype.downloadXLS=function(){var a='<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head>\x3c!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>Ark1</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--\x3e<style>td{border:none;font-family: Calibri, sans-serif;} .text{ mso-number-format:"@";}</style><meta name=ProgId content=Excel.Sheet><meta charset=UTF-8></head><body>'+
this.getTable(!0)+"</body></html>";F(f(a,"application/vnd.ms-excel")||"data:application/vnd.ms-excel;base64,"+p.btoa(unescape(encodeURIComponent(a))),this.getFilename()+".xls")};b.prototype.viewData=function(){this.dataTableDiv||(this.dataTableDiv=u.createElement("div"),this.dataTableDiv.className="highcharts-data-table",this.renderTo.parentNode.insertBefore(this.dataTableDiv,this.renderTo.nextSibling));this.dataTableDiv.innerHTML=this.getTable();D(this,"afterViewData",this.dataTableDiv)};if(b=K().exporting)E(b.menuItemDefinitions,
{downloadCSV:{textKey:"downloadCSV",onclick:function(){this.downloadCSV()}},downloadXLS:{textKey:"downloadXLS",onclick:function(){this.downloadXLS()}},viewData:{textKey:"viewData",onclick:function(){this.viewData()}}}),b.buttons&&b.buttons.contextButton.menuItems.push("separator","downloadCSV","downloadXLS","viewData");c.map&&(c.map.prototype.exportKey="name");c.mapbubble&&(c.mapbubble.prototype.exportKey="name");c.treemap&&(c.treemap.prototype.exportKey="name")});e(a,"masters/modules/export-data.src.js",
[],function(){})});
//# sourceMappingURL=export-data.js.map
