(/*Copyright_2020_Erik_Neumann_All_Rights_Reserved_www.myphysicslab.com*/function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
'use strict';var m=this||self;function n(){}function p(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}function aa(a,b){function c(){}c.prototype=b.prototype;a.O=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.ea=function(d,e,f){for(var g=Array(arguments.length-2),h=2;h<arguments.length;h++)g[h-2]=arguments[h];return b.prototype[e].apply(d,g)}};const ba=Array.prototype.indexOf?function(a,b){return Array.prototype.indexOf.call(a,b,void 0)}:function(a,b){if("string"===typeof a)return"string"!==typeof b||1!=b.length?-1:a.indexOf(b,0);for(var c=0;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1};function ca(a,b){a:{for(var c=a.length,d="string"===typeof a?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){b=e;break a}b=-1}return 0>b?null:"string"===typeof a?a.charAt(b):a[b]}
function da(a,b){b=ba(a,b);var c;(c=0<=b)&&Array.prototype.splice.call(a,b,1);return c}function ea(a,b,c,d){Array.prototype.splice.apply(a,fa(arguments,1))}function fa(a,b,c){return 2>=arguments.length?Array.prototype.slice.call(a,b):Array.prototype.slice.call(a,b,c)}function ha(a,b){a.sort(b||ia)}
function ja(a,b){for(var c=Array(a.length),d=0;d<a.length;d++)c[d]={index:d,value:a[d]};var e=b||ia;ha(c,function(f,g){return e(f.value,g.value)||f.index-g.index});for(d=0;d<a.length;d++)a[d]=c[d].value}function ia(a,b){return a>b?1:a<b?-1:0};var ka=String.prototype.trim?function(a){return a.trim()}:function(a){return/^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]};function t(a,b){return a<b?-1:a>b?1:0};var v;a:{var la=m.navigator;if(la){var ma=la.userAgent;if(ma){v=ma;break a}}v=""};(class{constructor(a,b){this.g=b===na?a:""}}).prototype.toString=function(){return this.g.toString()};var na={};function w(a){w[" "](a);return a}w[" "]=n;var oa=-1!=v.indexOf("Opera"),z=-1!=v.indexOf("Trident")||-1!=v.indexOf("MSIE"),pa=-1!=v.indexOf("Edge"),qa=-1!=v.indexOf("Gecko")&&!(-1!=v.toLowerCase().indexOf("webkit")&&-1==v.indexOf("Edge"))&&!(-1!=v.indexOf("Trident")||-1!=v.indexOf("MSIE"))&&-1==v.indexOf("Edge"),sa=-1!=v.toLowerCase().indexOf("webkit")&&-1==v.indexOf("Edge");function ta(){var a=m.document;return a?a.documentMode:void 0}var A;
a:{var B="",C=function(){var a=v;if(qa)return/rv:([^\);]+)(\)|;)/.exec(a);if(pa)return/Edge\/([\d\.]+)/.exec(a);if(z)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(sa)return/WebKit\/(\S+)/.exec(a);if(oa)return/(?:Version)[ \/]?(\S+)/.exec(a)}();C&&(B=C?C[1]:"");if(z){var ua=ta();if(null!=ua&&ua>parseFloat(B)){A=String(ua);break a}}A=B}var va={},wa;if(m.document&&z){var xa=ta();wa=xa?xa:parseInt(A,10)||void 0}else wa=void 0;var ya=wa;var za;(za=!z)||(za=9<=Number(ya));var Aa=za,Ba;
if(Ba=z){var Ca=function(){{var a=0;const d=ka(String(A)).split("."),e=ka("9").split("."),f=Math.max(d.length,e.length);for(let g=0;0==a&&g<f;g++){var b=d[g]||"",c=e[g]||"";do{b=/(\d*)(\D*)(.*)/.exec(b)||["","","",""];c=/(\d*)(\D*)(.*)/.exec(c)||["","","",""];if(0==b[0].length&&0==c[0].length)break;a=t(0==b[1].length?0:parseInt(b[1],10),0==c[1].length?0:parseInt(c[1],10))||t(0==b[2].length,0==c[2].length)||t(b[2],c[2]);b=b[3];c=c[3]}while(0==a)}}return 0<=a};Ba=!(Object.prototype.hasOwnProperty.call(va,
"9")?va["9"]:va["9"]=Ca())}var Da=Ba,Ea=function(){if(!m.addEventListener||!Object.defineProperty)return!1;var a=!1,b=Object.defineProperty({},"passive",{get:function(){a=!0}});try{m.addEventListener("test",n,b),m.removeEventListener("test",n,b)}catch(c){}return a}();function Fa(a,b){this.type=a;this.g=this.target=b}Fa.prototype.h=function(){};function D(a,b){Fa.call(this,a?a.type:"");this.relatedTarget=this.g=this.target=null;this.button=this.screenY=this.screenX=this.clientY=this.clientX=0;this.key="";this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=!1;this.pointerId=0;this.pointerType="";this.i=null;if(a){var c=this.type=a.type,d=a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:null;this.target=a.target||a.srcElement;this.g=b;if(b=a.relatedTarget){if(qa){a:{try{w(b.nodeName);var e=!0;break a}catch(f){}e=!1}e||(b=null)}}else"mouseover"==
c?b=a.fromElement:"mouseout"==c&&(b=a.toElement);this.relatedTarget=b;d?(this.clientX=void 0!==d.clientX?d.clientX:d.pageX,this.clientY=void 0!==d.clientY?d.clientY:d.pageY,this.screenX=d.screenX||0,this.screenY=d.screenY||0):(this.clientX=void 0!==a.clientX?a.clientX:a.pageX,this.clientY=void 0!==a.clientY?a.clientY:a.pageY,this.screenX=a.screenX||0,this.screenY=a.screenY||0);this.button=a.button;this.key=a.key||"";this.ctrlKey=a.ctrlKey;this.altKey=a.altKey;this.shiftKey=a.shiftKey;this.metaKey=
a.metaKey;this.pointerId=a.pointerId||0;this.pointerType="string"===typeof a.pointerType?a.pointerType:Ga[a.pointerType]||"";this.i=a;a.defaultPrevented&&D.O.h.call(this)}}aa(D,Fa);var Ga={2:"touch",3:"pen",4:"mouse"};D.prototype.h=function(){D.O.h.call(this);var a=this.i;if(a.preventDefault)a.preventDefault();else if(a.returnValue=!1,Da)try{if(a.ctrlKey||112<=a.keyCode&&123>=a.keyCode)a.keyCode=-1}catch(b){}};var Ha="closure_listenable_"+(1E6*Math.random()|0);var Ia=0;function Ja(a,b,c,d,e){this.listener=a;this.proxy=null;this.src=b;this.type=c;this.capture=!!d;this.g=e;this.key=++Ia;this.B=this.J=!1}function Ka(a){a.B=!0;a.listener=null;a.proxy=null;a.src=null;a.g=null};function La(a){this.src=a;this.g={};this.h=0}La.prototype.add=function(a,b,c,d,e){var f=a.toString();a=this.g[f];a||(a=this.g[f]=[],this.h++);var g;a:{for(g=0;g<a.length;++g){var h=a[g];if(!h.B&&h.listener==b&&h.capture==!!d&&h.g==e)break a}g=-1}-1<g?(b=a[g],c||(b.J=!1)):(b=new Ja(b,this.src,f,!!d,e),b.J=c,a.push(b));return b};var Ma="closure_lm_"+(1E6*Math.random()|0),Na={},Oa=0;function Pa(a,b,c,d,e){if(d&&d.once)Qa(a,b,c,d,e);else if(Array.isArray(b))for(var f=0;f<b.length;f++)Pa(a,b[f],c,d,e);else c=Ra(c),a&&a[Ha]?a.g(b,c,p(d)?!!d.capture:!!d,e):Sa(a,b,c,!1,d,e)}
function Sa(a,b,c,d,e,f){if(!b)throw Error("Invalid event type");var g=p(e)?!!e.capture:!!e,h=Ta(a);h||(a[Ma]=h=new La(a));c=h.add(b,c,d,g,f);if(!c.proxy){d=Ua();c.proxy=d;d.src=a;d.listener=c;if(a.addEventListener)Ea||(e=g),void 0===e&&(e=!1),a.addEventListener(b.toString(),d,e);else if(a.attachEvent)a.attachEvent(Va(b.toString()),d);else if(a.addListener&&a.removeListener)a.addListener(d);else throw Error("addEventListener and attachEvent are unavailable.");Oa++}}
function Ua(){var a=Wa,b=Aa?function(c){return a.call(b.src,b.listener,c)}:function(c){c=a.call(b.src,b.listener,c);if(!c)return c};return b}function Qa(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)Qa(a,b[f],c,d,e);else c=Ra(c),a&&a[Ha]?a.h(b,c,p(d)?!!d.capture:!!d,e):Sa(a,b,c,!0,d,e)}function Va(a){return a in Na?Na[a]:Na[a]="on"+a}
function Xa(a,b,c,d){var e=!0;if(a=Ta(a))if(b=a.g[b.toString()])for(b=b.concat(),a=0;a<b.length;a++){var f=b[a];f&&f.capture==c&&!f.B&&(f=Ya(f,d),e=e&&!1!==f)}return e}
function Ya(a,b){var c=a.listener,d=a.g||a.src;if(a.J&&"number"!==typeof a&&a&&!a.B){var e=a.src;if(e&&e[Ha])e.i(a);else{var f=a.type,g=a.proxy;e.removeEventListener?e.removeEventListener(f,g,a.capture):e.detachEvent?e.detachEvent(Va(f),g):e.addListener&&e.removeListener&&e.removeListener(g);Oa--;(f=Ta(e))?(g=a.type,g in f.g&&da(f.g[g],a)&&(Ka(a),0==f.g[g].length&&(delete f.g[g],f.h--)),0==f.h&&(f.src=null,e[Ma]=null)):Ka(a)}}return c.call(d,b)}
function Wa(a,b){if(a.B)return!0;if(!Aa){if(!b)a:{b=["window","event"];for(var c=m,d=0;d<b.length;d++)if(c=c[b[d]],null==c){b=null;break a}b=c}d=b;b=new D(d,this);c=!0;if(!(0>d.keyCode||void 0!=d.returnValue)){a:{var e=!1;if(0==d.keyCode)try{d.keyCode=-1;break a}catch(g){e=!0}if(e||void 0==d.returnValue)d.returnValue=!0}d=[];for(e=b.g;e;e=e.parentNode)d.push(e);a=a.type;for(e=d.length-1;0<=e;e--){b.g=d[e];var f=Xa(d[e],a,!0,b);c=c&&f}for(e=0;e<d.length;e++)b.g=d[e],f=Xa(d[e],a,!1,b),c=c&&f}return c}return Ya(a,
new D(b,this))}function Ta(a){a=a[Ma];return a instanceof La?a:null}var Za="__closure_events_fn_"+(1E9*Math.random()>>>0);function Ra(a){if("function"===typeof a)return a;a[Za]||(a[Za]=function(b){return a.handleEvent(b)});return a[Za]};function $a(){window.onerror=function(a,b,c){3>ab++&&alert(a+"\n"+b+":"+c)}}function E(){return bb&&!cb?.001*performance.now():.001*Date.now()}function F(a){if(!isFinite(a))throw"not a finite number "+a;return a}function G(a){if(isNaN(a))throw"not a number "+a;return a}function H(a){return a.toUpperCase().replace(/[ -]/g,"_")}function I(a){if(!a.match(/^[A-Z_][A-Z_0-9]*$/))throw"not a valid name: "+a;return a}
function db(a,b,c){c=c||1E-14;if(isNaN(a)||isNaN(b))throw"argument is NaN";if(0>=c)throw"epsilon must be positive "+c;var d=d||1;if(0>=d)throw"magnitude must be positive "+d;const e=Math.max(Math.abs(a),Math.abs(b));return Math.abs(a-b)>(e>d?e:d)*c}var cb=!1,bb=p(performance)&&"function"===typeof performance.now,eb=Number.NaN,fb=Number.NEGATIVE_INFINITY,ab=0,gb=Number.POSITIVE_INFINITY;class K{constructor(a,b){this.i=I(H(a));this.j=b}toString(){return""}h(){return this.i}g(){return this.j}};class hb{constructor(a){this.j=I(H(L.aa));this.i=a}toString(){return""}h(){return this.j}g(){return this.i()}};function ib(a){var b=Number.NEGATIVE_INFINITY;if(b>a.g()||b>a.i)throw"out of range: "+b+" value="+a.g()+" upper="+a.i;return a}class M{constructor(a,b){this.l=I(H(a));this.j=b;this.i=gb}toString(){return""}h(){return this.l}g(){return this.j()}};class jb{constructor(a,b,c,d){this.j=I(H(a));this.i=b;if(null!=c)if(null!=d){if(d.length!==c.length)throw"different lengths choices:"+c+" values:"+d;}else throw"values is not defined";}toString(){return""}h(){return this.j}g(){return this.i()}};function kb(a){if(!a.v){for(let b=0,c=a.u.length;b<c;b++){const d=a.u[b];d.action?a.s.includes(d.N)||a.s.push(d.N):da(a.s,d.N)}a.u=[]}}function lb(a,b){b=H(b);return ca(a.M,c=>c.h()==b)}function N(a,b){const c=b.h(),d=lb(a,c);if(null!=d)throw"parameter "+c+" already exists: "+d;a.M.push(b)}function O(a,b){a.v=!0;try{a.s.forEach(c=>c.g(b))}finally{a.v=!1,kb(a)}}function mb(a,b){const c=lb(a,b);if(null==c)throw"unknown Parameter "+b;O(a,c)}
class P{constructor(a){if(!a)throw"no name";I(H(a));this.s=[];this.M=[];this.v=!1;this.u=[]}toString(){return""}};function nb(a){a.m.forEach(b=>b.cancel())}function Q(a){return a.g?E()-a.h:a.j}function ob(a){a.g&&(a.j=Q(a),a.i=a.g?E()-a.l:a.i,nb(a),a.g=!1,O(a,new K("CLOCK_PAUSE")))}function pb(a,b){a.g?(a.h=E()-b,a.m.forEach(c=>{c.cancel();if(a.g){const e=Q(a)+a.h;var d=c.h()+a.h;db(d,e)?d>e&&c.i(d-e):c.g()}})):a.j=b}function qb(a,b){db(Q(a),b,.001)&&(pb(a,b),O(a,new K("CLOCK_SET_TIME")))}
class rb extends P{constructor(){super("CLOCK");this.l=this.h=E();this.i=this.j=0;this.g=!1;this.m=[];N(this,new M(sb.ba,()=>1))}toString(){return""}}var sb={ba:"time rate"};class R{constructor(a,b,c){c="number"===typeof c?c:0;this.g=G(a);this.h=G(b);this.i=G(c);this.j=this.l=eb}toString(){return""}add(a){return new R(this.g+a.g,this.h+a.h,this.i+a.i)}u(a){return null===a?!1:a.g===this.g&&a.h===this.h&&a.i===this.i}length(){if(isNaN(this.l)){var a=Math,b=a.sqrt;isNaN(this.j)&&(this.j=0===this.i?this.g*this.g+this.h*this.h:this.g*this.g+this.h*this.h+this.i*this.i);this.l=b.call(a,this.j)}return this.l}}new R(1,0);new R(0,1);var tb=new R(0,0);new R(0,-1);new R(-1,0);class ub{constructor(a,b,c,d,e,f){this.g=a;this.h=b;this.i=c;this.j=d;this.l=e;this.m=f}toString(){return""}scale(a,b){return new ub(this.g*a,this.h*a,this.i*b,this.j*b,this.l,this.m)}transform(a,b){"number"!==typeof a&&(b=a.h,a=a.g);if("number"!==typeof a||"number"!==typeof b)throw"need a Vector or two numbers";return new R(this.g*a+this.i*b+this.l,this.h*a+this.j*b+this.m)}translate(a,b){"number"!==typeof a&&(b=a.h,a=a.g);if("number"!==typeof a||"number"!==typeof b)throw"need a Vector or two numbers";
return new ub(this.g,this.h,this.i,this.j,this.l+this.g*a+this.i*b,this.m+this.h*a+this.j*b)}}var vb=new ub(1,0,0,1,0,0);class S{constructor(a,b,c,d){this.l=G(a);this.j=G(c);this.g=G(b);this.m=G(d);if(a>c)throw"DoubleRect: left > right "+a+" > "+c;if(b>d)throw"DoubleRect: bottom > top "+b+" > "+d;}toString(){return""}u(a){return a===this?!0:a instanceof S?a.s()==this.l&&a.j==this.j&&a.g==this.g&&a.o()==this.m:!1}h(){return this.m-this.g}s(){return this.l}o(){return this.m}i(){return this.j-this.l}v(){return 1E-16>this.i()||1E-16>this.h()}scale(a,b){b=void 0===b?a:b;const c=(this.l+this.j)/2,d=(this.g+this.m)/2,e=this.i(),
f=this.h();return new S(c-a*e/2,d-b*f/2,c+a*e/2,d+b*f/2)}translate(a,b){"number"!==typeof a&&(b=a.h,a=a.g);if("number"!==typeof a||"number"!==typeof b)throw"";return new S(this.l+a,this.g+b,this.j+a,this.m+b)}}new S(0,0,0,0);var T={Z:"left",H:"middle",$:"right",G:"full",I:"value"};class U{constructor(a,b){if("number"!==typeof a||"number"!==typeof b)throw"";if(0>a||0>b)throw"";this.j=a;this.g=b}toString(){return""}u(a){return this.j==a.j&&this.g==a.g}h(){return this.g}s(){return 0}o(){return 0}i(){return this.j}v(){return 1E-14>this.j||1E-14>this.g}}new U(0,0);var V={ca:"top",H:"middle",S:"bottom",G:"full",I:"value"};function wb(a,b){a:{var c="MIDDLE";var d=["LEFT","MIDDLE","RIGHT","FULL","VALUE"];for(let x=0,ra=d.length;x<ra;x++)if(c===d[x]){c=d[x];break a}throw"invalid HorizAlign value:  "+c;}a:{d="MIDDLE";var e=["TOP","MIDDLE","BOTTOM","FULL","VALUE"];for(let x=0,ra=e.length;x<ra;x++)if(d===e[x]){var f=e[x];break a}throw"invalid VerticalAlign value: "+d;}var g=1;if(1E-15>g||!isFinite(g))throw"bad aspectRatio "+g;d=b.s();e=b.g;const h=b.j-d,q=b.o()-e;if(1E-15>h||1E-15>q)throw"simRect cannot be empty "+b;b=a.o();
const J=a.s(),r=a.i();a=a.h();var l=0;let k=0,y=0,u=0;"FULL"==c&&(y=r/h,l=0);"FULL"==f&&(u=a/q,k=0);if("FULL"!=c||"FULL"!=f)if("FULL"==c?(u=y*g,l=!0):"FULL"==f?(y=u/g,l=!1):(y=r/h,u=y*g,l=!0,a<Math.floor(.5+u*q)&&(u=a/q,y=u/g,l=!1)),l)switch(l=0,c=Math.floor(.5+q*u),f){case "BOTTOM":k=0;break;case "MIDDLE":k=(a-c)/2;break;case "TOP":k=a-c;break;default:throw"unsupported alignment "+f;}else switch(k=0,f=Math.floor(.5+h*y),c){case "LEFT":l=0;break;case "MIDDLE":l=(r-f)/2;break;case "RIGHT":l=r-f;break;
default:throw"unsupported alignment "+c;}return new xb(J,b+a,d-l/y,e-k/u,y,u)}class xb{constructor(a,b,c,d,e,f){this.j=F(a);this.i=F(b);this.m=F(c);this.l=F(d);this.g=F(e);this.h=F(f);a=vb;a=a.translate(this.j,this.i);a=a.scale(this.g,-this.h);a.translate(-this.m,-this.l)}toString(){return""}};class yb{constructor(){var a=new R(2,-1);this.l="0.0";this.h=a||tb}toString(){return""}};class zb{constructor(){this.g=[]}toString(){return""}j(a){this.g.includes(a)||this.g.push(a)}};function Ab(a){let b=!0,c=fb;for(let d=0,e=a.g.length;d<e;d++){if(0<c){b=!1;break}c=0}b||ja(a.g,function(){return 0})}function Bb(a,b,c){Ab(a);a.g.forEach(d=>{b.save();b.fillStyle=void 0!==d.m?d.m:"black";b.font=void 0!==d.g?d.g:"12pt sans-serif";b.textAlign=void 0!==d.i?d.i:"left";b.textBaseline=void 0!==d.j?d.j:"alphabetic";b.fillText(d.l,c.j+(d.h.g-c.m)*c.g,c.i-(d.h.h-c.l)*c.h);b.restore()})}
class Cb extends P{constructor(){super("DISPLAY_LIST_"+Db++);this.g=[]}toString(){return""}add(a){if(!p(a))throw"non-object passed to DisplayList.add";Ab(this);let b=this.g.length,c;for(c=0;c<b;c++);ea(this.g,c,0,a);O(this,new K("OBJECT_ADDED",a))}get(a){const b=this.g.length;if(0>a||a>=b)throw a+" is not in range 0 to "+(b-1);Ab(this);return this.g[a]}length(){return this.g.length}}var Db=1;function Eb(a,b){if(0<a.i()&&0<a.h()){const c=new U(a.i(),a.h());Fb(b,c)}a.l.push(b);a.j(b);O(a,new K("VIEW_ADDED",b));O(a,new K("VIEW_LIST_MODIFIED"));if(null==a.o){if(null!=b&&!a.l.includes(b))throw"cannot set focus to unknown view "+b;a.o!=b&&(a.o=b,O(a,new K("FOCUS_VIEW_CHANGED",b)))}}function Gb(a){const b=new U(a.g.width,a.g.height);a.l.forEach(c=>Fb(c,b));O(a,new K("SIZE_CHANGED"))}
function Hb(a){if(null!=a.g.offsetParent){const b=a.g.getContext("2d");b.save();try{""!=a.m?(b.globalAlpha=a.A,b.fillStyle=a.m,b.fillRect(0,0,a.g.width,a.g.height),b.globalAlpha=1):b.clearRect(0,0,a.g.width,a.g.height),a.l.forEach(c=>{b.save();b.globalAlpha=c.W;Bb(c.L,b,c.K);b.restore()})}finally{b.restore()}}}function Ib(a){a.g.width=800;a.g.height=500;Gb(a);mb(a,W.F);mb(a,W.D)}
class Jb extends P{constructor(){var a=document.createElement("canvas");super("canvas1");this.g=a;a.contentEditable=!1;this.l=[];this.C=new zb;this.o=null;this.A=1;this.m="";N(this,new M(W.F,()=>this.i()));N(this,new M(W.D,()=>this.h()));N(this,new M(W.ALPHA,()=>this.A));N(this,new jb(W.R,()=>this.m))}toString(){return""}j(a){this.C.j(a)}h(){return this.g.height}i(){return this.g.width}}var W={F:"width",D:"height",ALPHA:"alpha",R:"background"};function Fb(a,b){if(!(b instanceof U))throw"not a ScreenRect: "+b;if(b.v())throw"empty screenrect";if(!a.o.u(b)){a.o=b;b=wb(a.o,a.g);if(!(b instanceof xb))throw"not a CoordMap: "+b;a.K=b;O(a,new K("COORD_MAP_CHANGED"));a.m=a.g.i();a.l=a.g.h();b=a.g;a.A=(b.l+b.j)/2;b=a.g;a.C=(b.g+b.m)/2;a.Y=a.l/a.m;O(a,new K("SCREEN_RECT_CHANGED"))}}
class Kb extends P{constructor(a){super("simView");if(!(a instanceof S)||a.v())throw"bad simRect: "+a;this.g=a;this.o=new U(800,600);this.L=new Cb;this.W=1;this.K=wb(this.o,this.g);this.m=a.i();this.l=a.h();this.A=(a.l+a.j)/2;this.C=(a.g+a.m)/2;this.Y=this.l/this.m;this.V=new zb;N(this,new M(L.F,()=>this.i()));N(this,new M(L.D,()=>this.h()));N(this,ib(new M(L.T,()=>this.A)));N(this,ib(new M(L.U,()=>this.C)));N(this,new hb(()=>!0));N(this,new jb(L.da,()=>"MIDDLE",[V.ca,V.H,V.S,V.G,V.I],["TOP","MIDDLE",
"BOTTOM","FULL","VALUE"]));N(this,new jb(L.X,()=>"MIDDLE",[T.Z,T.H,T.$,T.G,T.I],["LEFT","MIDDLE","RIGHT","FULL","VALUE"]));N(this,new M(L.P,()=>1))}toString(){return""}j(a){this.V.j(a)}h(){return this.l}i(){return this.m}}var L={aa:"scale X-Y together",F:"width",D:"height",T:"center-x",U:"center-y",da:"vertical-align",X:"horizontal-align",P:"aspect-ratio"};function Lb(a){if(null!=a.j){var b=E();0<=b-(a.i-a.h)&&(a.j(),a.i=b,a.h=0);a.g=a.m?setTimeout(a.s,17):requestAnimationFrame(a.s)}}function Mb(a,b){a.l=!1;void 0!==a.g&&(a.m?clearTimeout(a.g):cancelAnimationFrame(a.g),a.g=void 0);a.i=NaN;a.h=0;a.j=b}function Nb(a){a.l||(a.l=!0,a.h=0,a.i=E()-1E-7,Lb(a))}class Ob{constructor(){this.m="function"!==typeof requestAnimationFrame;this.g=void 0;this.j=null;this.s=()=>Lb(this);this.l=!1;this.i=eb;this.h=0}toString(){return""}};function Pb(a){$a();var b=window.document.getElementById("sim_applet");if(null===b)throw"cannot find sim_applet";const c=new Jb;Ib(c);b.appendChild(c.g);b=new S(-5,-5,5,5);const d=new Kb(b);b=new Ob;const e=new rb,f=new yb;f.g="160pt sans-serif";f.i="center";f.j="middle";d.L.add(f);Eb(c,d);const g=new Audio(a);let h=10.1,q=3,J=!0;qb(e,-q);Mb(b,()=>{var k=Q(e);k=h*Math.ceil(k/h)-k;f.l=k.toFixed(1);k>h-2?J&&(g.play(),J=!1):J=!0;Hb(c)});a=document.getElementById("reset_button");null!=a&&(a.onclick=()=>
{ob(e);qb(e,-q);J=!0});a=document.getElementById("stop_button");null!=a&&(a.onclick=()=>ob(e));a=document.getElementById("start_button");null!=a&&(a.onclick=()=>{if(!e.g){e.g=!0;pb(e,e.j);var k=e.i;e.g?e.l=E()-k:e.i=k;O(e,new K("CLOCK_RESUME"))}});const r=document.getElementById("period_field");null!=r&&(r.textAlign="right",r.value=h.toFixed(1),Pa(r,"change",()=>{const k=parseFloat(r.value);isNaN(k)?r.value=h.toFixed(1):h=k}));const l=document.getElementById("start_field");null!=l&&(l.textAlign="right",
l.value=q.toFixed(1),Pa(l,"change",()=>{const k=parseFloat(l.value);isNaN(k)?l.value=q.toFixed(1):q=k}));Nb(b);ob(e)}var X=["makeBikeTimerApp"],Y=m;X[0]in Y||"undefined"==typeof Y.execScript||Y.execScript("var "+X[0]);for(var Z;X.length&&(Z=X.shift());)X.length||void 0===Pb?Y[Z]&&Y[Z]!==Object.prototype[Z]?Y=Y[Z]:Y=Y[Z]={}:Y[Z]=Pb;}).call(window)