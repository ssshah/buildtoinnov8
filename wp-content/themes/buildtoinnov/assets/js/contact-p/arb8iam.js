window.Typekit||(window.Typekit={}),window.Typekit.config={a:"685232",c:[".tk-ff-tisa-web-pro",'"ff-tisa-web-pro",serif',".tk-nudista-web",'"nudista-web",sans-serif'],dl:"AAAA5wAAAAoPdl+rGa+4WFM1FhTThjdqBmwpqxC1jfpSiIuvAAAAVA==",f:"//use.typekit.net/c/004741/1w;ff-tisa-web-pro,2,ft8:W:i4,ftH:W:n4,ft4:W:n7;nudista-web,2,Y09:W:i4,Y0F:W:i7,Y06:W:n3,Y08:W:n4,Y0B:W:n6,Y0D:W:n7/{format}{/extras*}",fc:[{id:4455,family:"ff-tisa-web-pro",src:"{scheme}://{hostname}/af/85938d/00000000000000000001707c/27/{format}{?primer,subset_id,fvd}",descriptors:{weight:"700",style:"normal",subset_id:2}},{id:5018,family:"ff-tisa-web-pro",src:"{scheme}://{hostname}/af/851cae/000000000000000000017080/27/{format}{?primer,subset_id,fvd}",descriptors:{weight:"400",style:"italic",subset_id:2}},{id:5045,family:"ff-tisa-web-pro",src:"{scheme}://{hostname}/af/9d5abb/000000000000000000017087/27/{format}{?primer,subset_id,fvd}",descriptors:{weight:"400",style:"normal",subset_id:2}},{id:1791,family:"nudista-web",src:"{scheme}://{hostname}/af/37450d/000000000000000000013256/27/{format}{?primer,subset_id,fvd}",descriptors:{weight:"300",style:"normal",subset_id:2}},{id:1793,family:"nudista-web",src:"{scheme}://{hostname}/af/225f7e/000000000000000000013258/27/{format}{?primer,subset_id,fvd}",descriptors:{weight:"400",style:"normal",subset_id:2}},{id:1794,family:"nudista-web",src:"{scheme}://{hostname}/af/846437/000000000000000000013259/27/{format}{?primer,subset_id,fvd}",descriptors:{weight:"400",style:"italic",subset_id:2}},{id:1795,family:"nudista-web",src:"{scheme}://{hostname}/af/c3c035/00000000000000000001325a/27/{format}{?primer,subset_id,fvd}",descriptors:{weight:"600",style:"normal",subset_id:2}},{id:1797,family:"nudista-web",src:"{scheme}://{hostname}/af/87e677/00000000000000000001325c/27/{format}{?primer,subset_id,fvd}",descriptors:{weight:"700",style:"normal",subset_id:2}},{id:1798,family:"nudista-web",src:"{scheme}://{hostname}/af/e1a673/00000000000000000001325d/27/{format}{?primer,subset_id,fvd}",descriptors:{weight:"700",style:"italic",subset_id:2}}],fi:[4455,5018,5045,1791,1793,1794,1795,1797,1798],fn:["ff-tisa-web-pro",["i4","n4","n7"],"nudista-web",["i4","i7","n3","n4","n6","n7"]],hn:"use.typekit.net",ht:"tk",js:"1.18.3",kt:"arb8iam",l:"typekit",p:"p.typekit.net",ps:1,type:"configurable"},function(t,e,n){function i(t,e,n){return t.call.apply(t.bind,arguments)}function r(t,e,n){if(!t)throw Error();if(2<arguments.length){var i=Array.prototype.slice.call(arguments,2);return function(){var n=Array.prototype.slice.call(arguments);return Array.prototype.unshift.apply(n,i),t.apply(e,n)}}return function(){return t.apply(e,arguments)}}function o(t,e,n){return o=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?i:r,o.apply(null,arguments)}function s(t,e,n,i){this.b=null!=t?t:null,this.g=null!=e?e:null,this.m=null!=n?n:null,this.u=null!=i?i:null}function a(t,e){return t.b>e.b||t.b===e.b&&t.g>e.g||t.b===e.b&&t.g===e.g&&t.m>e.m?1:t.b<e.b||t.b===e.b&&t.g<e.g||t.b===e.b&&t.g===e.g&&t.m<e.m?-1:0}function f(t,e){return-1===a(t,e)}function u(t,e){return!a(t,e)||1===a(t,e)}function h(t,e){return!a(t,e)||-1===a(t,e)}function c(t,e){return!a(t,e)}function l(t){t=jt.exec(t);var e=null,n=null,i=null,r=null;return t&&(null!==t[1]&&t[1]&&(e=parseInt(t[1],10)),null!==t[2]&&t[2]&&(n=parseInt(t[2],10)),null!==t[3]&&t[3]&&(i=parseInt(t[3],10)),null!==t[4]&&t[4]&&(r=/^[0-9]+$/.test(t[4])?parseInt(t[4],10):t[4])),new s(e,n,i,r)}function b(t){return"Safari"===t.getName()&&"AppleWebKit"===t.H||"Unknown"===t.getName()&&"AppleWebKit"===t.H&&("iPhone"===t.v||"iPad"===t.v||"iPod"===t.v)}function d(t){return"Safari"===t.getName()&&"AppleWebKit"===t.H&&u(t.G,new s(602,1))}function p(t){return"Chrome"===t.getName()&&u(t.C,new s(6))&&h(t.C,new s(35))}function w(t){return"Chrome"===t.getName()&&u(t.C,new s(36))}function m(t){return"BuiltinBrowser"===t.getName()}function g(){this.N=this.R=this.J=this.O=this.P=!0}function v(t){this.g=t||"-"}function y(){var t=[{name:"font-family",value:ve.c[Se+1]}];this.g=[ve.c[Se]],this.b=t}function k(t){for(var e=t.g.join(","),n=[],i=0;i<t.b.length;i++){var r=t.b[i];n.push(r.name+":"+r.value+";")}return e+"{"+n.join("")+"}"}function A(t,e){return(65535&t)*e+(((t>>>16)*e&65535)<<16)}function C(t,e){if(this.b=e||Array(Math.ceil(t/32)),!e)for(var n=0;n<this.b.length;n++)this.b[n]=0}function S(t,e,n){this.b=t,this.m=e,this.g=new C(t,n)}function x(e){if(t.atob)e=t.atob(e);else{if(e=e.replace(/=+$/,""),1==e.length%4)throw Error("'atob' failed: The string to be decoded is not correctly encoded.");for(var n,i,r=0,o=0,s="";i=e.charAt(o++);~i&&(n=r%4?64*n+i:i,r++%4)?s+=String.fromCharCode(255&n>>(-2*r&6)):0)i="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(i);e=s}for(n=[],r=0;r<e.length;r+=4)n.push(e.charCodeAt(r)<<24|e.charCodeAt(r+1)<<16|e.charCodeAt(r+2)<<8|e.charCodeAt(r+3)<<0);e=n.shift(),r=n.shift(),this.b=new S(e,r,n)}function O(t,e,n,i){if(e=t.b.createElement(e),n)for(var r in n)n.hasOwnProperty(r)&&("style"==r?e.style.cssText=n[r]:e.setAttribute(r,n[r]));return i&&e.appendChild(t.b.createTextNode(i)),e}function T(t,n,i){t=t.b.getElementsByTagName(n)[0],t||(t=e.documentElement),t.insertBefore(i,t.lastChild)}function B(t,e){t.b.body?e():t.b.addEventListener?t.b.addEventListener("DOMContentLoaded",e):t.b.attachEvent("onreadystatechange",function(){"interactive"!=t.b.readyState&&"complete"!=t.b.readyState||e()})}function P(t){t.parentNode&&t.parentNode.removeChild(t)}function N(t,e,n){e=e||[],n=n||[];for(var i=t.className.split(/\s+/),r=0;r<e.length;r+=1){for(var o=!1,s=0;s<i.length;s+=1)if(e[r]===i[s]){o=!0;break}o||i.push(e[r])}for(e=[],r=0;r<i.length;r+=1){for(o=!1,s=0;s<n.length;s+=1)if(i[r]===n[s]){o=!0;break}o||e.push(i[r])}t.className=e.join(" ").replace(/\s+/g," ").replace(/^\s+|\s+$/,"")}function _(t,e){for(var n=t.className.split(/\s+/),i=0,r=n.length;r>i;i++)if(n[i]==e)return!0;return!1}function M(t,n){var i=O(t,"style");i.setAttribute("type","text/css"),i.styleSheet?(T(t,"head",i),i.styleSheet.cssText=n):(i.appendChild(e.createTextNode(n)),T(t,"head",i))}function I(t,e,n){var i=t.b.getElementsByTagName("head")[0];if(i){var r=O(t,"script",{src:e}),o=!1;r.onload=r.onreadystatechange=function(){o||this.readyState&&"loaded"!=this.readyState&&"complete"!=this.readyState||(o=!0,n&&n(null),r.onload=r.onreadystatechange=null,"HEAD"==r.parentNode.tagName&&i.removeChild(r))},i.appendChild(r),setTimeout(function(){o||(o=!0,n&&n(Error("Script load timeout")))},5e3)}}function E(t,e,n){this.g=t.g.document.documentElement,this.u=e,this.w=n,this.b=new v("-"),this.A=!1!==e.events,this.m=!1!==e.classes}function W(t){if(t.m){var e=_(t.g,t.b.b("wf","active")),n=[],i=[t.b.b("wf","loading")];e||n.push(t.b.b("wf","inactive")),N(t.g,n,i)}j(t,"inactive")}function j(t,e,n){if(t.A&&t.u[e])try{n?t.u[e](n.b,U(n)):t.u[e]()}catch(i){console.error('Typekit: Error in "'+e+'" callback',i)}t.w[e]&&(n?t.w[e](n.b,U(n)):t.w[e]())}function F(t,e,n){n=n||{},this.b=t,this.g=e,this.weight=n.weight||"400",this.style=n.style||"normal",this.L=n.primer||void 0,this.M=n.subset_id||void 0}function D(t){return("tk-"+t.b).slice(0,26)+"-"+U(t)}function K(t,e){return new F(e,t.g,{weight:t.weight,style:t.style,L:t.L,M:t.M})}function U(t){return t.style.charAt(0)+t.weight.charAt(0)}function G(t){this.b=t}function R(t,e){return t.b.replace(/\{([^\{\}]+)\}/g,function(t,n){if("?"==n.charAt(0)){for(var i=n.slice(1).split(","),r=[],o=0;o<i.length;o++)e[i[o]]&&r.push(i[o]+"="+encodeURIComponent(e[i[o]]));return r.length?"?"+r.join("&"):""}return encodeURIComponent(e[n]||"")})}function L(){this.b=[]}function H(t,e){for(var n=0;n<e.length;n++)t.b.push(e[n])}function J(t,e){for(var n=0;n<t.b.length;n++)e(t.b[n],n,t)}function V(t,e){if("i"===e){var n={},i=new L;J(t,function(t){n[t.b]||(n[t.b]={}),n[t.b][t.weight]||(n[t.b][t.weight]=[]),n[t.b][t.weight].push(t)});for(var r in n){for(var o=[400,300,200,100,500,600,700,800,900],s=0;s<o.length;s++){var a=o[s];if(n[r][a]){H(i,n[r][a]);break}}for(o=[700,800,900,600,500,400,300,200,100],s=0;s<o.length;s++){var f=o[s];if(n[r][f]&&a!==f){H(i,n[r][f]);break}}}return J(t,function(t){t=K(t,t.b.replace(/(-1|-2)$/,"").slice(0,28)+"-"+U(t)),i.b.push(t)}),i}return"x"===e?new L:t}function Y(t,e,n){for(var i=[],r=0;r<e.length;r++){var o=e[r],s=R(new G(t.g),{scheme:"https",hostname:n,format:o,primer:t.L,subset_id:t.M,fvd:U(t),extension:X(o)});"i"===o?i.push("url("+s+")"):i.push("url("+s+') format("'+$(o)+'")')}return i.join(",")}function q(t,e,n,i){if("x"===e)return"";var r=[];return r.push("font-family:"+(i?D(t):t.b)),e="k"===e?Y(t,["l","d","j"],n):Y(t,[e],n),r.push("src:"+e),r.push("font-weight:"+t.weight),r.push("font-style:"+t.style),"@font-face{"+r.join(";")+";}"}function $(t){switch(t){case"d":return"woff";case"i":return"eot";case"l":return"woff2";default:return"opentype"}}function X(t){switch(t){case"d":return"woff";case"i":return"eot";case"l":return"woff2";default:return"otf"}}function z(t,e,n,i){var r=[];return J(t,function(t){r.push(q(t,e,n,i))}),r.join("")}function Z(t,e){this.g=t,this.m=e,this.b=O(this.g,"span",{"aria-hidden":"true"},this.m)}function Q(t){T(t.g,"body",t.b)}function tt(t){return"display:block !important;position:absolute !important;top:-9999px !important;left:-9999px !important;font-size:300px !important;width:auto !important;height:auto !important;line-height:normal !important;margin:0 !important;padding:0 !important;font-variant:normal !important;white-space:nowrap !important;font-family:"+t.b+" !important;font-weight:"+t.weight+" !important;font-style:"+t.style+" !important;"}function et(t,e,n,i,r,o,s,a){this.I=t,this.U=e,this.B=n,this.b=i,this.D=s||"BESbswy",this.g={},this.V=r||3e3,this.T=a,this.F=o||null,this.m=new Z(this.B,this.D),this.u=new Z(this.B,this.D),this.w=new Z(this.B,this.D),this.A=new Z(this.B,this.D),t=this.T?D(this.b):this.b.b,this.m.b.style.cssText=tt(K(this.b,t+",serif")),this.u.b.style.cssText=tt(K(this.b,t+",sans-serif")),this.w.b.style.cssText=tt(K(this.b,"serif")),this.A.b.style.cssText=tt(K(this.b,"sans-serif")),Q(this.m),Q(this.u),Q(this.w),Q(this.A)}function nt(){if(null===Ut){var e=/AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(t.navigator.userAgent);Ut=!!e&&(536>parseInt(e[1],10)||536===parseInt(e[1],10)&&11>=parseInt(e[2],10))}return Ut}function it(t,e,n){for(var i in Kt)if(Kt.hasOwnProperty(i)&&e===t.g[Kt[i]]&&n===t.g[Kt[i]])return!0;return!1}function rt(t){var e,n=t.m.b.offsetWidth,i=t.u.b.offsetWidth;(e=n===t.g.serif&&i===t.g["sans-serif"])||(e=nt()&&it(t,n,i)),e?Wt()-t.S>=t.V?nt()&&it(t,n,i)&&(!t.F||t.F.hasOwnProperty(t.b.b))?st(t,t.I):st(t,t.U):ot(t):st(t,t.I)}function ot(t){setTimeout(o(function(){rt(this)},t),50)}function st(t,e){setTimeout(o(function(){P(this.m.b),P(this.u.b),P(this.w.b),P(this.A.b),e(this.b)},t),0)}function at(t,e,n,i,r,o,s){this.m=t,this.B=e,this.b=i,this.w=n,this.g=r||3e3,this.A=o||void 0,this.u=s}function ft(t,e,n,i){this.D=t,this.b=e,this.g=0,this.A=this.w=!1,this.F=n,this.B=i}function ut(e,n,i){var r={},s=n.b.length;if(!s&&i)W(e.b);else{e.g+=s,i&&(e.w=i);var a=[];for(J(n,function(n){var i=e.b;if(i.m&&N(i.g,[i.b.b("wf",n.b,U(n),"loading")]),j(i,"fontloading",n),i=null,null===Gt)if(t.FontFace){var s=/Gecko.*Firefox\/(\d+)/.exec(t.navigator.userAgent);Gt=s?42<parseInt(s[1],10):!0}else Gt=!1;i=Gt?new at(o(e.m,e),o(e.u,e),e.D,n,e.F,"BESbswy",e.B):new et(o(e.m,e),o(e.u,e),e.D,n,e.F,r,"BESbswy",e.B),a.push(i)}),n=0;n<a.length;n++)a[n].start()}}function ht(t){!--t.g&&t.w&&(t.A?(t=t.b,t.m&&N(t.g,[t.b.b("wf","active")],[t.b.b("wf","loading"),t.b.b("wf","inactive")]),j(t,"active")):W(t.b))}function ct(t){return"Windows"===t.v}function lt(t){return ct(t)&&u(t.o,new s(6,1))}function bt(t){return ct(t)&&c(t.o,new s(5,1))||ct(t)&&c(t.o,new s(5,2))||ct(t)&&c(t.o,new s(6,0))||lt(t)}function dt(t){return"Macintosh"===t.v&&u(t.o,new s(10,4))&&f(t.o,new s(10,12))||null===t.o.b}function pt(t){return"Macintosh"===t.v&&u(t.o,new s(10,12))}function wt(t,e){return e.P&&("iPhone"===t.v||"iPod"===t.v)||e.O&&"iPad"===t.v}function mt(t,e){return wt(t,e)&&u(t.o,new s(4,2))&&f(t.o,new s(5))}function gt(t,e){return wt(t,e)&&u(t.o,new s(5))&&f(t.o,new s(10))}function vt(t,e){return e.J&&"Android"===t.v}function yt(t,e){return vt(t,e)&&u(t.o,new s(2,2))&&f(t.o,new s(3,1))}function kt(t,e){return vt(t,e)&&u(t.o,new s(3,1))&&f(t.o,new s(4,1))}function At(t){return"Linux"===t.v||"Ubuntu"===t.v}function Ct(t,e){this.b=t,this.g="x",this.A=this.I=null,this.m=[],this.w=e,this.u=this.D=null,this.B=new L}function St(t,e){this.u=t,this.g=e,this.b=[]}function xt(t,e,n){e=R(t.u,{id:e}),I(t.g,e,n)}function Ot(t,e){if(t.b.length){for(var n=new E(t.g,e,{}),i=!1,r=0;r<t.b.length;r++)t.b[r].init(),i=i||t.b[r].supportsConfiguredBrowser();if(i)for(n.m&&N(n.g,[n.b.b("wf","loading")]),j(n,"loading"),n=0;n<t.b.length;n++)i=t.b[n],i.supportsConfiguredBrowser()&&i.load(null,n==t.b.length-1,e);else W(n);t.b=[]}}function Tt(t){var e=new Image(1,1),n=!1;e.src=t,e.onload=function(){n=!0,e.onload=null},setTimeout(function(){n||(e.src="about:blank",e.onload=null)},3e3)}function Bt(t,e,n,i,r,o,s){this.b=t,this.C=e,this.H=n,this.G=i,this.v=r,this.o=o,this.K=s}function Pt(t){var e=It(t.b,/(iPod|iPad|iPhone|Android|Windows Phone|BB\d{2}|BlackBerry)/,1);return""!==e?(/BB\d{2}/.test(e)&&(e="BlackBerry"),e):(t=It(t.b,/(Linux|Mac_PowerPC|Macintosh|Windows|CrOS|PlayStation|CrKey)/,1),""!==t?("Mac_PowerPC"==t?t="Macintosh":"PlayStation"==t&&(t="Linux"),t):"Unknown")}function Nt(t){var e=It(t.b,/(OS X|Windows NT|Android) ([^;)]+)/,2);if(e||(e=It(t.b,/Windows Phone( OS)? ([^;)]+)/,2))||(e=It(t.b,/(iPhone )?OS ([\d_]+)/,2)))return e;if(e=It(t.b,/(?:Linux|CrOS|CrKey) ([^;)]+)/,1))for(var e=e.split(/\s/),n=0;n<e.length;n+=1)if(/^[\d\._]+$/.test(e[n]))return e[n];return(t=It(t.b,/(BB\d{2}|BlackBerry).*?Version\/([^\s]*)/,2))?t:"Unknown"}function _t(){var t=Vt,e="Unknown",n=l(It(t.b,/Presto\/([\d\w\.]+)/,1)),i=l(Nt(t)),r=Et(t.g);if(null!==n.b?e="Presto":(-1!=t.b.indexOf("Gecko")&&(e="Gecko"),n=l(It(t.b,/rv:([^\)]+)/,1))),-1!=t.b.indexOf("Opera Mini/")){var o=l(It(t.b,/Opera Mini\/([\d\.]+)/,1));return new Bt("OperaMini",o,e,n,Pt(t),i,r)}return-1!=t.b.indexOf("Version/")&&(o=l(It(t.b,/Version\/([\d\.]+)/,1)),null!==o.b)?new Bt("Opera",o,e,n,Pt(t),i,r):(o=l(It(t.b,/Opera[\/ ]([\d\.]+)/,1)),null!==o.b?new Bt("Opera",o,e,n,Pt(t),i,r):new Bt("Opera",new s,e,n,Pt(t),i,r))}function Mt(){var t,e=Vt,n=Pt(e),i=l(Nt(e)),r=l(It(e.b,/AppleWeb(?:K|k)it\/([\d\.\+]+)/,1)),o="Unknown";return t="Unknown",/OPR\/[\d.]+/.test(e.b)?o="Opera":-1!=e.b.indexOf("Chrome")||-1!=e.b.indexOf("CrMo")||-1!=e.b.indexOf("CriOS")?o="Chrome":/Silk\/\d/.test(e.b)?o="Silk":"BlackBerry"==n||"Android"==n?o="BuiltinBrowser":-1!=e.b.indexOf("PhantomJS")?o="PhantomJS":-1!=e.b.indexOf("Safari")?o="Safari":-1!=e.b.indexOf("AdobeAIR")?o="AdobeAIR":-1!=e.b.indexOf("PlayStation")&&(o="BuiltinBrowser"),"BuiltinBrowser"==o?t="Unknown":"Silk"==o?t=It(e.b,/Silk\/([\d\._]+)/,1):"Chrome"==o?t=It(e.b,/(Chrome|CrMo|CriOS)\/([\d\.]+)/,2):-1!=e.b.indexOf("Version/")?t=It(e.b,/Version\/([\d\.\w]+)/,1):"AdobeAIR"==o?t=It(e.b,/AdobeAIR\/([\d\.]+)/,1):"Opera"==o?t=It(e.b,/OPR\/([\d.]+)/,1):"PhantomJS"==o&&(t=It(e.b,/PhantomJS\/([\d.]+)/,1)),t=l(t),new Bt(o,t,"AppleWebKit",r,n,i,Et(e.g))}function It(t,e,n){return(t=t.match(e))&&t[n]?t[n]:""}function Et(t){return t.documentMode?t.documentMode:void 0}if(!e.querySelector)return void(e.documentElement.className+=" wf-inactive");var Wt=Date.now||function(){return+new Date},jt=/^([0-9]+)(?:[\._-]([0-9]+))?(?:[\._-]([0-9]+))?(?:[\._+-]?(.*))?$/;s.prototype.toString=function(){return[this.b,this.g||"",this.m||"",this.u||""].join("")},v.prototype.b=function(t){for(var e=[],n=0;n<arguments.length;n++)e.push(arguments[n].replace(/[\W_]+/g,"").toLowerCase());return e.join(this.g)},C.prototype.set=function(t){if(Math.floor(t/32+1)>this.b.length)throw Error("Index is out of bounds.");var e=Math.floor(t/32);this.b[e]|=1<<t-32*e},C.prototype.has=function(t){if(Math.floor(t/32+1)>this.b.length)throw Error("Index is out of bounds.");var e=Math.floor(t/32);return!!(this.b[e]&1<<t-32*e)};var Ft=[2449897292,4218179547,2675077685,1031960064,1478620578,1386343184,3194259988,2656050674,3012733295,2193273665];S.prototype.has=function(t){if("string"!=typeof t&&"number"!=typeof t)throw Error("Value should be a string or number.");for(var e="number"==typeof t,n=0;n<this.m;n++){var i;if(e)i=A(4294967295&t,3432918353),i=i<<15|i>>>17,i=A(i,461845907),i^=Ft[n]||0,i=i<<13|i>>>19,i=A(i,5)+3864292196,i^=4,i^=i>>>16,i=A(i,2246822507),i^=i>>>13,i=A(i,3266489909),i^=i>>>16,i=(i>>>0)%this.b;else{i=Ft[n]||0;var r,o,s=t.length%4,a=t.length-s;for(o=0;a>o;o+=4)r=(4294967295&t.charCodeAt(o+0))<<0|(4294967295&t.charCodeAt(o+1))<<8|(4294967295&t.charCodeAt(o+2))<<16|(4294967295&t.charCodeAt(o+3))<<24,r=A(r,3432918353),r=r<<15|r>>>17,r=A(r,461845907),i^=r,i=i<<13|i>>>19,i=A(i,5)+3864292196;switch(r=0,s){case 3:r^=(4294967295&t.charCodeAt(o+2))<<16;case 2:r^=(4294967295&t.charCodeAt(o+1))<<8;case 1:r^=(4294967295&t.charCodeAt(o+0))<<0,r=A(r,3432918353),r=r<<15|r>>>17,r=A(r,461845907),i^=r}i^=t.length,i=A(i^i>>>16,2246822507),i=A(i^i>>>13,3266489909),i=((i^i>>>16)>>>0)%this.b}if(!this.g.has(i))return!1}return!0},x.prototype.has=function(t){if(""===t)return!0;for(t=t.split(".");t.length;){var e=t.join("."),n="*."+e;if(this.b.has(e)||this.b.has(n)||this.b.has(encodeURIComponent(e))||this.b.has(encodeURIComponent(n)))return!0;t.shift()}return!1};var Dt={Y:"a",ca:"d",X:"i",Z:"j",W:"k",ba:"l",NONE:"x"},Kt={aa:"serif",$:"sans-serif"},Ut=null;et.prototype.start=function(){this.g.serif=this.w.b.offsetWidth,this.g["sans-serif"]=this.A.b.offsetWidth,this.S=Wt(),rt(this)},at.prototype.start=function(){var t=this.w.g.document,e=this,n=Wt(),i=new Promise(function(i,r){function o(){Wt()-n>=e.g?r():t.fonts.load(e.b.style+" "+e.b.weight+" 300px "+(e.u?D(e.b):e.b.b),e.A).then(function(t){1<=t.length?i():setTimeout(o,25)},function(){r()})}o()}),r=new Promise(function(t,n){setTimeout(n,e.g)});Promise.race([r,i]).then(function(){e.m(e.b)},function(){e.B(e.b)})};var Gt=null;ft.prototype.m=function(t){var e=this.b;e.m&&N(e.g,[e.b.b("wf",t.b,U(t),"active")],[e.b.b("wf",t.b,U(t),"loading"),e.b.b("wf",t.b,U(t),"inactive")]),j(e,"fontactive",t),this.A=!0,ht(this)},ft.prototype.u=function(t){var e=this.b;if(e.m){var n=_(e.g,e.b.b("wf",t.b,U(t),"active")),i=[],r=[e.b.b("wf",t.b,U(t),"loading")];n||i.push(e.b.b("wf",t.b,U(t),"inactive")),N(e.g,i,r)}j(e,"fontinactive",t),ht(this)};var Rt={a:function(t,e){return"Safari"===t.getName()&&"AppleWebKit"===t.H&&u(t.G,new s(525,13))&&f(t.G,new s(534,50))&&(bt(t)||"Macintosh"===t.v&&(u(t.o,new s(10,4))||null===t.o.b))||m(t)&&(yt(t,e)||vt(t,e)&&u(t.o,new s(4,1)))||e.J&&"Silk"===t.getName()&&f(t.C,new s(2))&&(yt(t,e)||dt(t)||pt(t))||e.J&&"Silk"===t.getName()&&u(t.C,new s(2))&&vt(t,e)&&u(t.o,new s(4,1))||b(t)&&mt(t,e)||p(t)&&mt(t,e)||w(t)&&mt(t,e)||"AdobeAIR"===t.getName()&&u(t.C,new s(2,5))&&(ct(t)&&null===t.o.b||At(t)||dt(t)||pt(t))},d:function(t,e){return p(t)&&(bt(t)||At(t)||dt(t)||pt(t)||vt(t,e)||"CrOS"===t.v||"CrKey"===t.v||gt(t,e))||w(t)&&gt(t,e)||"Gecko"===t.H&&1===a(t.G,new s(1,9,1))&&h(t.G,new s(38))&&(bt(t)||At(t)||dt(t)||pt(t)||vt(t,e))||"Safari"===t.getName()&&"AppleWebKit"===t.H&&u(t.G,new s(534,50))&&f(t.G,new s(601,7))&&(bt(t)||dt(t)||pt(t))||d(t)&&dt(t)||b(t)&&gt(t,e)||"Opera"===t.getName()&&u(t.C,new s(11,10))&&h(t.C,new s(22))&&(bt(t)||At(t)||dt(t)||pt(t)||vt(t,e))||"MSIE"===t.getName()&&9<=t.K&&(lt(t)||ct(t)&&c(t.o,new s(6,0)))||"Edge"===t.getName()&&lt(t)||"MSIE"===t.getName()&&e.R&&"Windows Phone"===t.v&&u(t.o,new s(8))||m(t)&&(e.N&&"BlackBerry"===t.v&&u(t.o,new s(10))||At(t))},j:function(t,e){return m(t)&&kt(t,e)||e.J&&"Silk"===t.getName()&&u(t.C,new s(2))&&(kt(t,e)||At(t))},i:function(t){return"MSIE"===t.getName()&&u(t.C,new s(6,0))&&(void 0===t.K||9>t.K)&&bt(t)},l:function(t,e){return w(t)&&(bt(t)||At(t)||dt(t)||pt(t)||vt(t,e)||"CrOS"===t.v||"CrKey"===t.v)||"Gecko"===t.H&&u(t.G,new s(39))&&(bt(t)||At(t)||dt(t)||pt(t)||vt(t,e))||d(t)&&pt(t)||b(t)&&wt(t,e)&&u(t.o,new s(10))||"Opera"===t.getName()&&u(t.C,new s(23))&&(bt(t)||At(t)||dt(t)||pt(t)||vt(t,e))},x:function(){return!1}};Ct.prototype.supportsConfiguredBrowser=function(){return"x"!==this.g},Ct.prototype.init=function(){if(0<this.m.length){for(var t=[],e=0;e<this.m.length;e++)t.push(k(this.m[e]));M(this.b,t.join(""))}},Ct.prototype.load=function(e,n,i){var r=this;i=i||{},e=i.timeout;var o=!!i.async,s=V(this.B,this.g);if(i=new E(this.b,i,{active:function(){if(o){var e=z(s,r.g,r.w,!1);M(r.b,e)}if(r.F){var e=r.F,n=r.b,i=new G("{scheme}://{hostname}/p.gif{?s,k,app,ht,h,f,a,js,_}"),a=(t.__adobewebfontsappname__||e.app||"").toString().substr(0,20),n=n.g.location.hostname||n.m.location.hostname,f=[],u=[];t.Typekit?(t.Typekit.fonts||(t.Typekit.fonts=[]),u=t.Typekit.fonts):t.TypekitPreview&&(t.TypekitPreview.fonts||(t.TypekitPreview.fonts=[]),u=t.TypekitPreview.fonts);for(var h=0;h<e.b.length;h++){for(var c=!1,l=0;l<u.length;l++)if(e.b[h]===u[l]){c=!0;break}c||(f.push(e.b[h]),u.push(e.b[h]))}f.length&&Tt(R(i,{scheme:"https",hostname:e.A,s:e.u,k:e.w,app:a,ht:e.m,h:n,f:f.join("."),a:e.g,js:e.version,_:(+new Date).toString()}))}},inactive:function(){if(o){var t=z(s,r.g,r.w,!1);M(r.b,t)}}}),this.u){var a=location.hostname;if(!this.u.has(a))return console.error('Typekit: the domain "'+a+'" isn\'t in the list of published domains for kit "'+this.D+'".'),void W(i)}if(s.b.length){a=z(s,this.g,this.w,o),M(this.b,a);var f=new ft(this.b,i,e,o);B(r.b,function(){ut(f,s,n)})}else W(i)},St.prototype.m=function(t){this.b.push(t)},St.prototype.load=function(t,e){var n=t,i=e||{};if("string"==typeof n?n=[n]:n&&n.length||(i=n||{},n=[]),n.length)for(var r=this,o=n.length,s=0;s<n.length;s++)xt(this,n[s],function(){--o||Ot(r,i)});else Ot(this,i)},Bt.prototype.getName=function(){return this.b};var Lt,Ht,Jt=new Bt("Unknown",new s,"Unknown",new s,"Unknown",new s,void 0),Vt=new function(){var t=e;this.b=navigator.userAgent,this.g=t};if(-1!=Vt.b.indexOf("MSIE")||-1!=Vt.b.indexOf("Trident/")){var Yt,qt,$t,Xt=Vt,zt=Pt(Xt),Zt=l(Nt(Xt)),Qt=It(Xt.b,/Trident\/([\d\w\.]+)/,1),te=Et(Xt.g);Yt=l(-1!=Xt.b.indexOf("MSIE")?It(Xt.b,/MSIE ([\d\w\.]+)/,1):It(Xt.b,/rv:([\d\w\.]+)/,1)),""!==Qt?(qt="Trident",$t=l(Qt)):(qt="Unknown",$t=new s),Ht=new Bt("MSIE",Yt,qt,$t,zt,Zt,te)}else{var ee;if(-1!=Vt.b.indexOf("Edge/")){var ne=Vt,ie=Pt(ne),re=l(Nt(ne)),oe=l(It(ne.b,/Edge\/([\d\w\.]+)/,1));ee=new Bt("Edge",oe,"Edge",oe,ie,re,Et(ne.g))}else{var se;if(-1!=Vt.b.indexOf("Opera"))se=_t();else{var ae;if(/OPR\/[\d.]+/.test(Vt.b))ae=Mt();else{var fe;if(/AppleWeb(K|k)it/.test(Vt.b))fe=Mt();else{var ue;if(-1!=Vt.b.indexOf("Gecko")){var he=Vt,ce="Unknown",le=new s,be=l(Nt(he));-1!=he.b.indexOf("Firefox")?(ce="Firefox",le=l(It(he.b,/Firefox\/([\d\w\.]+)/,1))):-1!=he.b.indexOf("Mozilla")&&(ce="Mozilla");var de=l(It(he.b,/rv:([^\)]+)/,1));ue=new Bt(ce,le,"Gecko",de,Pt(he),be,Et(he.g))}else ue=Jt;fe=ue}ae=fe}se=ae}ee=se}Ht=ee}Lt=Ht;var pe=new function(){var e=t;this.g=this.m=e,this.b=this.g.document};if(t.Typekit||(t.Typekit={}),!t.Typekit.load){var we=new St(new G("//"+(t.Typekit.config||{}).hn+"/{id}.js"),pe);t.Typekit.load=function(){we.load.apply(we,arguments)},t.Typekit.addKit=function(){we.m.apply(we,arguments)}}var me,ge,ve=t.Typekit.config||{};if(ge=new Ct(pe,ve.hn),ge.F=new function(){var t=ve.ps,e=ve.ht,n=ve.fi,i=ve.a,r=ve.kt,o=ve.js,s=ve.l;this.A=ve.p,this.u=t,this.m=e,this.b=n||[],this.g=i||null,this.w=r||null,this.version=o||null,this.app=s||null},me=new g,me.P=!ve.si,me.O=!ve.st,me.J=!ve.sa,me.R=!ve.sw,me.N=!ve.sb,ge.A=me,ve.fc)for(var ye=ve.fc,ke=0;ke<ye.length;ke++)ge.B.b.push(new F(ye[ke].family,ye[ke].src,ye[ke].descriptors));if(ve.dl){var Ae=ve.dl;try{ge.u=new x(Ae)}catch(Ce){}}if(ve.kt&&(ge.D=ve.kt),ve.c)for(var Se=0;Se<ve.c.length;Se+=2)ge.m.push(new y);ge.I=Lt;var xe;t:{var Oe,Te=ge.I,Be=new g,Pe=ge.A||Be;for(Oe in Dt){var Ne=Dt[Oe];if(Rt[Ne]&&Rt[Ne](Te,Pe)){xe=Ne;break t}}for(Oe in Dt)if(Ne=Dt[Oe],Rt[Ne]&&Rt[Ne](Te,Be)){xe="x";break t}xe="k"}if(ge.g=xe,t.Typekit.addKit(ge),1===Math.round(30*Math.random())){var _e=t.Typekit.load,Me=[];t.Typekit.load=function(e){e=e||{};var n=e.active||function(){},i=e.fontactive||function(){},r=(new Date).getTime();e.active=function(){n();var e=JSON.stringify({fonts:Me,augmentations:[],font_loading:t.FontFace?"native":"non-native",active_duration:(new Date).getTime()-r,javascript_version:ve.js,kit_type:"configurable"});if(!t.XDomainRequest){var i=new XMLHttpRequest;i.open("POST","https://performance.typekit.net/"),i.send(e)}},e.fontactive=function(t,e){var n,o;i(t,e);t:{n=e.charAt(0),o=e.charAt(1),n="i"===n?"italic":"o"===n?"oblique":"normal",/[1-9]/.test(o)||(o=4),o+="00";for(var s=ve.fc,a=0;a<s.length;a++)if(s[a].family===t&&s[a].descriptors.weight===o&&s[a].descriptors.style===n){n=s[a].id;break t}n=0}Me.push({id:n,duration:(new Date).getTime()-r,dynamic:!1})},_e(e)}}if(t.WebFont)try{t.Typekit.load()}catch(Ce){}}(this,document);