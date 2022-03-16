(/*Copyright_2020_Erik_Neumann_All_Rights_Reserved_www.myphysicslab.com*/function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
'use strict';var k=this||self;function l(){}function m(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}function aa(a,b){function c(){}c.prototype=b.prototype;a.F=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.M=function(e,d,f){for(var g=Array(arguments.length-2),h=2;h<arguments.length;h++)g[h-2]=arguments[h];return b.prototype[d].apply(e,g)}};const ba=Array.prototype.indexOf?function(a,b){return Array.prototype.indexOf.call(a,b,void 0)}:function(a,b){if("string"===typeof a)return"string"!==typeof b||1!=b.length?-1:a.indexOf(b,0);for(var c=0;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},ca=Array.prototype.forEach?function(a,b){Array.prototype.forEach.call(a,b,void 0)}:function(a,b){for(var c=a.length,e="string"===typeof a?a.split(""):a,d=0;d<c;d++)d in e&&b.call(void 0,e[d],d,a)},da=Array.prototype.reduce?function(a,b,c){return Array.prototype.reduce.call(a,
b,c)}:function(a,b,c){var e=c;ca(a,function(d,f){e=b.call(void 0,e,d,f,a)});return e};function ea(a,b){a:{for(var c=a.length,e="string"===typeof a?a.split(""):a,d=0;d<c;d++)if(d in e&&b.call(void 0,e[d],d,a)){b=d;break a}b=-1}return 0>b?null:"string"===typeof a?a.charAt(b):a[b]}function fa(a,b){b=ba(a,b);var c;(c=0<=b)&&Array.prototype.splice.call(a,b,1);return c};function n(a,b){this.type=a;this.h=this.target=b;this.defaultPrevented=!1}n.prototype.i=function(){this.defaultPrevented=!0};var ha=String.prototype.trim?function(a){return a.trim()}:function(a){return/^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]};function q(a,b){return a<b?-1:a>b?1:0};var r;a:{var ia=k.navigator;if(ia){var ja=ia.userAgent;if(ja){r=ja;break a}}r=""};(class{constructor(a,b){this.g=b===ka?a:""}}).prototype.toString=function(){return this.g.toString()};var ka={};function t(a){t[" "](a);return a}t[" "]=l;var la=-1!=r.indexOf("Opera"),u=-1!=r.indexOf("Trident")||-1!=r.indexOf("MSIE"),ma=-1!=r.indexOf("Edge"),na=-1!=r.indexOf("Gecko")&&!(-1!=r.toLowerCase().indexOf("webkit")&&-1==r.indexOf("Edge"))&&!(-1!=r.indexOf("Trident")||-1!=r.indexOf("MSIE"))&&-1==r.indexOf("Edge"),oa=-1!=r.toLowerCase().indexOf("webkit")&&-1==r.indexOf("Edge");function pa(){var a=k.document;return a?a.documentMode:void 0}var v;
a:{var w="",x=function(){var a=r;if(na)return/rv:([^\);]+)(\)|;)/.exec(a);if(ma)return/Edge\/([\d\.]+)/.exec(a);if(u)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(oa)return/WebKit\/(\S+)/.exec(a);if(la)return/(?:Version)[ \/]?(\S+)/.exec(a)}();x&&(w=x?x[1]:"");if(u){var y=pa();if(null!=y&&y>parseFloat(w)){v=String(y);break a}}v=w}var z={},A;if(k.document&&u){var qa=pa();A=qa?qa:parseInt(v,10)||void 0}else A=void 0;var ra=A;var B;(B=!u)||(B=9<=Number(ra));var sa=B,C;
if(C=u){var ta=function(){{var a=0;const e=ha(String(v)).split("."),d=ha("9").split("."),f=Math.max(e.length,d.length);for(let g=0;0==a&&g<f;g++){var b=e[g]||"",c=d[g]||"";do{b=/(\d*)(\D*)(.*)/.exec(b)||["","","",""];c=/(\d*)(\D*)(.*)/.exec(c)||["","","",""];if(0==b[0].length&&0==c[0].length)break;a=q(0==b[1].length?0:parseInt(b[1],10),0==c[1].length?0:parseInt(c[1],10))||q(0==b[2].length,0==c[2].length)||q(b[2],c[2]);b=b[3];c=c[3]}while(0==a)}}return 0<=a};C=!(Object.prototype.hasOwnProperty.call(z,
"9")?z["9"]:z["9"]=ta())}var ua=C,va=function(){if(!k.addEventListener||!Object.defineProperty)return!1;var a=!1,b=Object.defineProperty({},"passive",{get:function(){a=!0}});try{k.addEventListener("test",l,b),k.removeEventListener("test",l,b)}catch(c){}return a}();function D(a,b){n.call(this,a?a.type:"");this.relatedTarget=this.h=this.target=null;this.button=this.screenY=this.screenX=this.clientY=this.clientX=0;this.key="";this.g=0;this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=!1;this.pointerId=0;this.pointerType="";this.j=null;if(a){var c=this.type=a.type,e=a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:null;this.target=a.target||a.srcElement;this.h=b;if(b=a.relatedTarget){if(na){a:{try{t(b.nodeName);var d=!0;break a}catch(f){}d=!1}d||
(b=null)}}else"mouseover"==c?b=a.fromElement:"mouseout"==c&&(b=a.toElement);this.relatedTarget=b;e?(this.clientX=void 0!==e.clientX?e.clientX:e.pageX,this.clientY=void 0!==e.clientY?e.clientY:e.pageY,this.screenX=e.screenX||0,this.screenY=e.screenY||0):(this.clientX=void 0!==a.clientX?a.clientX:a.pageX,this.clientY=void 0!==a.clientY?a.clientY:a.pageY,this.screenX=a.screenX||0,this.screenY=a.screenY||0);this.button=a.button;this.g=a.keyCode||0;this.key=a.key||"";this.ctrlKey=a.ctrlKey;this.altKey=
a.altKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.pointerId=a.pointerId||0;this.pointerType="string"===typeof a.pointerType?a.pointerType:wa[a.pointerType]||"";this.j=a;a.defaultPrevented&&D.F.i.call(this)}}aa(D,n);var wa={2:"touch",3:"pen",4:"mouse"};D.prototype.i=function(){D.F.i.call(this);var a=this.j;if(a.preventDefault)a.preventDefault();else if(a.returnValue=!1,ua)try{if(a.ctrlKey||112<=a.keyCode&&123>=a.keyCode)a.keyCode=-1}catch(b){}};var E="closure_listenable_"+(1E6*Math.random()|0);var xa=0;function ya(a,b,c,e,d){this.listener=a;this.proxy=null;this.src=b;this.type=c;this.capture=!!e;this.g=d;this.key=++xa;this.s=this.v=!1}function za(a){a.s=!0;a.listener=null;a.proxy=null;a.src=null;a.g=null};function F(a){this.src=a;this.g={};this.h=0}F.prototype.add=function(a,b,c,e,d){var f=a.toString();a=this.g[f];a||(a=this.g[f]=[],this.h++);var g;a:{for(g=0;g<a.length;++g){var h=a[g];if(!h.s&&h.listener==b&&h.capture==!!e&&h.g==d)break a}g=-1}-1<g?(b=a[g],c||(b.v=!1)):(b=new ya(b,this.src,f,!!e,d),b.v=c,a.push(b));return b};function Aa(a,b){var c=b.type;c in a.g&&fa(a.g[c],b)&&(za(b),0==a.g[c].length&&(delete a.g[c],a.h--))};var G="closure_lm_"+(1E6*Math.random()|0),H={},Ba=0;function I(a,b,c,e,d){if(e&&e.once)Ca(a,b,c,e,d);else if(Array.isArray(b))for(var f=0;f<b.length;f++)I(a,b[f],c,e,d);else c=Da(c),a&&a[E]?a.g.add(String(b),c,!1,m(e)?!!e.capture:!!e,d):Ea(a,b,c,!1,e,d)}
function Ea(a,b,c,e,d,f){if(!b)throw Error("Invalid event type");var g=m(d)?!!d.capture:!!d,h=J(a);h||(a[G]=h=new F(a));c=h.add(b,c,e,g,f);if(!c.proxy){e=Fa();c.proxy=e;e.src=a;e.listener=c;if(a.addEventListener)va||(d=g),void 0===d&&(d=!1),a.addEventListener(b.toString(),e,d);else if(a.attachEvent)a.attachEvent(Ga(b.toString()),e);else if(a.addListener&&a.removeListener)a.addListener(e);else throw Error("addEventListener and attachEvent are unavailable.");Ba++}}
function Fa(){var a=Ha,b=sa?function(c){return a.call(b.src,b.listener,c)}:function(c){c=a.call(b.src,b.listener,c);if(!c)return c};return b}function Ca(a,b,c,e,d){if(Array.isArray(b))for(var f=0;f<b.length;f++)Ca(a,b[f],c,e,d);else c=Da(c),a&&a[E]?a.g.add(String(b),c,!0,m(e)?!!e.capture:!!e,d):Ea(a,b,c,!0,e,d)}function Ga(a){return a in H?H[a]:H[a]="on"+a}
function Ia(a,b,c,e){var d=!0;if(a=J(a))if(b=a.g[b.toString()])for(b=b.concat(),a=0;a<b.length;a++){var f=b[a];f&&f.capture==c&&!f.s&&(f=Ja(f,e),d=d&&!1!==f)}return d}
function Ja(a,b){var c=a.listener,e=a.g||a.src;if(a.v&&"number"!==typeof a&&a&&!a.s){var d=a.src;if(d&&d[E])Aa(d.g,a);else{var f=a.type,g=a.proxy;d.removeEventListener?d.removeEventListener(f,g,a.capture):d.detachEvent?d.detachEvent(Ga(f),g):d.addListener&&d.removeListener&&d.removeListener(g);Ba--;(f=J(d))?(Aa(f,a),0==f.h&&(f.src=null,d[G]=null)):za(a)}}return c.call(e,b)}
function Ha(a,b){if(a.s)return!0;if(!sa){if(!b)a:{b=["window","event"];for(var c=k,e=0;e<b.length;e++)if(c=c[b[e]],null==c){b=null;break a}b=c}e=b;b=new D(e,this);c=!0;if(!(0>e.keyCode||void 0!=e.returnValue)){a:{var d=!1;if(0==e.keyCode)try{e.keyCode=-1;break a}catch(g){d=!0}if(d||void 0==e.returnValue)e.returnValue=!0}e=[];for(d=b.h;d;d=d.parentNode)e.push(d);a=a.type;for(d=e.length-1;0<=d;d--){b.h=e[d];var f=Ia(e[d],a,!0,b);c=c&&f}for(d=0;d<e.length;d++)b.h=e[d],f=Ia(e[d],a,!1,b),c=c&&f}return c}return Ja(a,
new D(b,this))}function J(a){a=a[G];return a instanceof F?a:null}var K="__closure_events_fn_"+(1E9*Math.random()>>>0);function Da(a){if("function"===typeof a)return a;a[K]||(a[K]=function(b){return a.handleEvent(b)});return a[K]};function Ka(){window.onerror=function(a,b,c){3>La++&&alert(a+"\n"+b+":"+c)}}function L(a){if(isNaN(a))throw"not a number "+a;return a}function M(a){return a.toUpperCase().replace(/[ -]/g,"_")}function N(a){if(!a.match(/^[A-Z_][A-Z_0-9]*$/))throw"not a valid name: "+a;return a}var Ma=Number.NaN,La=0;function Na(a){return a.replace(/\\(x|u00)([0-9a-fA-F]{2})/g,function(b,c,e){return String.fromCharCode(Number("0x"+e))})}
function Oa(a,b){for(let e in window){a:{for(let d=0,f=b.length;d<f;d++)if(e==b[d]){var c=!1;break a}c=(new RegExp("\\b"+e+"\\b","g")).test(a)}if(c)throw'prohibited name: "'+e+'" found in script: '+a;}if(/\b(myEval|Function|with|__proto__|call|apply|caller|callee|arguments|addWhiteList|vetCommand|badCommand|whiteList_|addRegex|addRegex2|regexs_|afterEvalFn_|setAfterEval|parentNode|parentElement|innerHTML|outerHTML|offsetParent|insertAdjacentHTML|appendChild|insertBefore|replaceChild|removeChild|ownerDocument|insertBefore|setParser|defineNames|globalEval|window|defineProperty|defineProperties|__defineGetter__|__defineSetter__)\b/g.test(a))throw"prohibited name in script: "+a;
}function O(a,b){a.j&&(a.j.value+=b+"\n",Pa(a))}function Qa(a){let b=0,c="",e,d,f="",g=!1,h=!1,X=!1,Y="",p,Z;p=0;for(Z=a.length;p<Z;p++)if(e=f," "!=f&&"\t"!=f&&"\n"!=f&&(c=f),f=a[p],d=p+1<Z?a[p+1]:"\x00",g){if("\n"==f&&(g=!1,0==b))break}else if(h)"/"==f&&"\\"!=e&&(h=!1);else if(X)f==Y&&"\\"!=e&&(X=!1,Y="");else if("/"==f)"/"==d?g=!0:"*"==d||!c||"="!=c&&"("!=c||(h=!0);else if('"'==f||"'"==f)X=!0,Y=f;else if(";"==f&&0==b)break;else"{"==f?b++:"}"==f&&b--;return[a.slice(0,p+1),a.slice(p+1)]}
function Ra(a,b){b=Sa(b);let c="",e=0;for(;b;){if(1E4<++e)throw"Terminal.expand";var d=b.match(/^[^'"/]+/);if(null!==d&&(d=d[0],b=b.slice(d.length),d=da(a.H,function(f,g){return f.replace(g.N,g.replace)},d),Oa(d,a.J),c+=d,0==b.length))break;if(c.match(/.*[=(][ ]*$/)&&(d=b.match(/^\/[^*/](\\\/|[^\\/])*\//),null!==d)){d=d[0];b=b.slice(d.length);c+=d;continue}0<b.length&&"/"==b[0]?(c+="/",b=b.slice(1)):(d=b.match(/^"(\\.|[^\\"])*"/),null!==d?(d=d[0],b=b.slice(d.length),c+=d):0<b.length&&'"'==b[0]?(c+=
'"',b=b.slice(1)):(d=b.match(/^'(\\.|[^\\'])*'/),null!==d?(d=d[0],b=b.slice(d.length),c+=d):0<b.length&&"'"==b[0]&&(c+="'",b=b.slice(1))))}return c}function Pa(a){a.g&&a.j&&(a.j.scrollTop=a.j.scrollHeight-a.j.offsetHeight,a.g.value="")}function Sa(a){const b=a.match(/^\s*(var|let|const)\s+(\w[\w_\d]*)(.*)/);return b?b[2]+b[3]:a}
class Ta{constructor(a,b){if(this.g=a)a.spellcheck=!1;if(this.j=b)b.spellcheck=!1;this.g&&I(this.g,"keydown",this.L,!1,this);this.g&&I(this.g,"change",this.G,!0,this);this.u=!1;this.l=[];this.h=-1;this.H=[];this.o=[];this.z={};this.J="myphysicslab goog length name terminal find".split(" ");this.m=0;O(this,"myPhysicsLab version 2.0.0, advanced-compiled on 2021-01-26 00:24:14.")}toString(){return""}eval(a,b,c){b="boolean"===typeof b?b:!0;if((c=c||!1)&&!b)throw"";a=Na(a).trim();if(!a.match(/^\s*$/)){this.m++;
1<this.m&&(b=!1);b?(this.l.unshift(a),this.h=-1):(this.o.push(this.i),this.i=void 0);try{{var e=a;const f=/^\w\s*\[\s*\d*\s*\]$/;var d=e.match(/\w\s*\[[^\]]*?\]/g);if(null!=d)for(let g=0,h=d.length;g<h;g++)if(!f.test(d[g]))throw"prohibited usage of square brackets in script: "+e+" Only positive integer is allowed in brackets.  Try using Util.get(array, index) or Util.set(array, index, value).";}for(d=["",a];d=Qa(d[1]),d[0];){const f=d[0].trim();if(0!=f.length){{b&&O(this,"> "+f);const g=Ra(this,f);
console.log("JavaScript is disabled due to advanced compilation; try a simple-compiled version: "+g);O(this,"JavaScript is disabled due to advanced compilation; try a simple-compiled version");this.i=void 0}}}b&&void 0!==this.i&&";"!=a.slice(-1)&&O(this,String(this.i));b&&void 0!==this.A&&this.A()}catch(f){if(b?(this.i=void 0,O(this,f)):this.i=this.o.pop(),!c)throw this.m--,f.message+="\nScript: "+a,f;}this.m--;if(b)return Pa(this),this.i;a=this.i;this.i=this.o.pop();return a}}L(a){this.g&&this.j&&
(a.metaKey&&75==a.g?(this.j.value="",a.i()):38==a.g||40==a.g?(-1==this.h&&""!=this.g.value&&(this.l.unshift(this.g.value),this.h=0),38==a.g?this.h<this.l.length-1&&(this.h++,this.g.value=this.l[this.h]):40==a.g&&(0<this.h?(this.h--,this.g.value=this.l[this.h]):(this.h=-1,this.g.value="")),a.i()):13==a.g&&this.eval(this.g.value,!0,!0))}G(){this.g&&this.eval(this.g.value,!0,!0)}};class Ua{constructor(){this.h=N(M("SIZE_CHANGED"))}toString(){return""}g(){return this.h}};class Va{constructor(a){this.h=N(M(a))}toString(){return""}g(){return this.h}};class Wa{constructor(){this.h=N(M(P.I))}toString(){return""}g(){return this.h}};function Xa(a){if(!a.j){for(let b=0,c=a.i.length;b<c;b++){const e=a.i[b];e.action?a.h.includes(e.D)||a.h.push(e.D):fa(a.h,e.D)}a.i=[]}}function Ya(a,b){b=M(b);return ea(a.l,c=>c.g()==b)}function Q(a,b){const c=b.g(),e=Ya(a,c);if(null!=e)throw"parameter "+c+" already exists: "+e;a.l.push(b)}function Za(a,b){a.j=!0;try{a.h.forEach(c=>c.g(b))}finally{a.j=!1,Xa(a)}}function $a(a,b){const c=Ya(a,b);if(null==c)throw"unknown Parameter "+b;Za(a,c)}
class ab{constructor(a){if(!a)throw"no name";N(M(a));this.h=[];this.l=[];this.j=!1;this.i=[]}toString(){return""}};class R{constructor(a,b,c){c="number"===typeof c?c:0;this.g=L(a);this.h=L(b);this.i=L(c);this.j=this.l=Ma}toString(){return""}add(a){return new R(this.g+a.g,this.h+a.h,this.i+a.i)}length(){if(isNaN(this.l)){var a=Math,b=a.sqrt;isNaN(this.j)&&(this.j=0===this.i?this.g*this.g+this.h*this.h:this.g*this.g+this.h*this.h+this.i*this.i);this.l=b.call(a,this.j)}return this.l}}new R(1,0);new R(0,1);new R(0,0);new R(0,-1);new R(-1,0);class bb{constructor(){L(0);L(0);L(0);L(0)}toString(){return""}}new bb;class cb{constructor(a,b){if("number"!==typeof a||"number"!==typeof b)throw"";if(0>a||0>b)throw"";}toString(){return""}}new cb(0,0);function db(a){const b=new cb(a.g.width,a.g.height);a.m.forEach(c=>c.g(b));Za(a,new Ua)}function eb(a){a.g.width=480;a.g.height=480;db(a);$a(a,P.C);$a(a,P.B)}class fb extends ab{constructor(a,b){super(b);this.g=a;a.contentEditable=!1;this.m=[];Q(this,new Va(P.C));Q(this,new Va(P.B));Q(this,new Va(P.ALPHA));Q(this,new Wa)}toString(){return""}}var P={C:"width",B:"height",ALPHA:"alpha",I:"background"};function gb(a,b){a=a[b];if("string"!==typeof a)throw"unknown elementId: "+b;return document.getElementById(a)}function S(a,b){a=a[b];if("string"!==typeof a)throw"unknown elementId: "+b;b=document.getElementById(a);if(!m(b))throw"not found: element with id="+a;return b}
class hb{constructor(a){var b=gb(a,"term_output");const c=gb(a,"term_input");this.m=new Ta(c,b);this.h=S(a,"sim_applet");this.h.style.position="relative";b=document.createElement("canvas");b.tabIndex=0;b.width=800;b.height=480;this.A=new fb(b,"simCanvas");this.h.appendChild(this.A.g);this.g=S(a,"div_graph");b=document.createElement("canvas");b.style.g="left";b.style.margin="0px 15px 15px 0px";this.i=new fb(b,"graphCanvas");eb(this.i);this.g.style.display="none";this.l=S(a,"graph_controls");this.g.insertBefore(this.i.g,
this.l);const e=S(a,"show_graph");this.u=f=>{this.g.style.display=f?"block":"none";e.checked=f};I(e,"click",()=>this.u(e.checked));this.j=S(a,"sim_controls");const d=S(a,"show_controls");this.j.style.display="none";this.o=f=>{this.j.style.display=f?"block":"none";d.checked=f};I(d,"click",()=>this.o(d.checked));S(a,"form_terminal").style.display="none";S(a,"label_terminal").style.display="none";S(a,"show_hide_form")}toString(){return""}};class T{constructor(a){Ka();this.h=new hb(a);this.g=this.h.m}K(){}eval(a,b){try{return this.g.eval(a,b)}catch(c){a=this.g,b=c,a.u?console.log(b):(a.u=!0,alert(b))}}}T.prototype.eval=T.prototype.eval;T.prototype.defineNames=T.prototype.K;function ib(a){return new T(a)}var U=["makeTerminalSpringApp"],V=k;U[0]in V||"undefined"==typeof V.execScript||V.execScript("var "+U[0]);for(var W;U.length&&(W=U.shift());)U.length||void 0===ib?V[W]&&V[W]!==Object.prototype[W]?V=V[W]:V=V[W]={}:V[W]=ib;}).call(window)