!function(e,n,t){function r(e,n){return typeof e===n}function o(){var e,n,t,o,i,s,a;for(var u in C)if(C.hasOwnProperty(u)){if(e=[],n=C[u],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(o=r(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)s=e[i],a=s.split("."),1===a.length?S[a[0]]=o:(!S[a[0]]||S[a[0]]instanceof Boolean||(S[a[0]]=new Boolean(S[a[0]])),S[a[0]][a[1]]=o),x.push((o?"":"no-")+a.join("-"))}}function i(e){var n=b.className,t=S._config.classPrefix||"";if(T&&(n=n.baseVal),S._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}S._config.enableClasses&&(n+=" "+t+e.join(" "+t),T?b.className.baseVal=n:b.className=n)}function s(e,n){if("object"==typeof e)for(var t in e)E(e,t)&&s(t,e[t]);else{e=e.toLowerCase();var r=e.split("."),o=S[r[0]];if(2==r.length&&(o=o[r[1]]),"undefined"!=typeof o)return S;n="function"==typeof n?n():n,1==r.length?S[r[0]]=n:(!S[r[0]]||S[r[0]]instanceof Boolean||(S[r[0]]=new Boolean(S[r[0]])),S[r[0]][r[1]]=n),i([(n&&0!=n?"":"no-")+r.join("-")]),S._trigger(e,n)}return S}function a(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):T?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function u(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function f(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function l(){var e=n.body;return e||(e=a(T?"svg":"body"),e.fake=!0),e}function d(e,t,r,o){var i,s,u,f,d="modernizr",c=a("div"),p=l();if(parseInt(r,10))for(;r--;)u=a("div"),u.id=o?o[r]:d+(r+1),c.appendChild(u);return i=a("style"),i.type="text/css",i.id="s"+d,(p.fake?p:c).appendChild(i),p.appendChild(c),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(n.createTextNode(e)),c.id=d,p.fake&&(p.style.background="",p.style.overflow="hidden",f=b.style.overflow,b.style.overflow="hidden",b.appendChild(p)),s=t(c,e),p.fake?(p.parentNode.removeChild(p),b.style.overflow=f,b.offsetHeight):c.parentNode.removeChild(c),!!s}function c(e,n){return!!~(""+e).indexOf(n)}function p(n,r){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(u(n[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+u(n[o])+":"+r+")");return i=i.join(" or "),d("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function m(e,n){return function(){return e.apply(n,arguments)}}function v(e,n,t){var o;for(var i in e)if(e[i]in n)return t===!1?e[i]:(o=n[e[i]],r(o,"function")?m(o,t||n):o);return!1}function h(e,n,o,i){function s(){l&&(delete M.style,delete M.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var u=p(e,o);if(!r(u,"undefined"))return u}for(var l,d,m,v,h,g=["modernizr","tspan","samp"];!M.style&&g.length;)l=!0,M.modElem=a(g.shift()),M.style=M.modElem.style;for(m=e.length,d=0;m>d;d++)if(v=e[d],h=M.style[v],c(v,"-")&&(v=f(v)),M.style[v]!==t){if(i||r(o,"undefined"))return s(),"pfx"==n?v:!0;try{M.style[v]=o}catch(y){}if(M.style[v]!=h)return s(),"pfx"==n?v:!0}return s(),!1}function g(e,n,t,o,i){var s=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+O.join(s+" ")+s).split(" ");return r(n,"string")||r(n,"undefined")?h(a,n,o,i):(a=(e+" "+A.join(s+" ")+s).split(" "),v(a,n,t))}function y(e,n,r){return g(e,t,t,n,r)}var x=[],C=[],w={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){C.push({name:e,fn:n,options:t})},addAsyncTest:function(e){C.push({name:null,fn:e})}},S=function(){};S.prototype=w,S=new S,S.addTest("history",function(){var n=navigator.userAgent;return-1===n.indexOf("Android 2.")&&-1===n.indexOf("Android 4.0")||-1===n.indexOf("Mobile Safari")||-1!==n.indexOf("Chrome")||-1!==n.indexOf("Windows Phone")?e.history&&"pushState"in e.history:!1}),S.addTest("svg",!!n.createElementNS&&!!n.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect);var _=w._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];w._prefixes=_;var b=n.documentElement,T="svg"===b.nodeName.toLowerCase(),P="Moz O ms Webkit",A=w._config.usePrefixes?P.toLowerCase().split(" "):[];w._domPrefixes=A;var E;!function(){var e={}.hasOwnProperty;E=r(e,"undefined")||r(e.call,"undefined")?function(e,n){return n in e&&r(e.constructor.prototype[n],"undefined")}:function(n,t){return e.call(n,t)}}(),w._l={},w.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),S.hasOwnProperty(e)&&setTimeout(function(){S._trigger(e,S[e])},0)},w._trigger=function(e,n){if(this._l[e]){var t=this._l[e];setTimeout(function(){var e,r;for(e=0;e<t.length;e++)(r=t[e])(n)},0),delete this._l[e]}},S._q.push(function(){w.addTest=s});var O=w._config.usePrefixes?P.split(" "):[];w._cssomPrefixes=O;var z=function(n){var r,o=_.length,i=e.CSSRule;if("undefined"==typeof i)return t;if(!n)return!1;if(n=n.replace(/^@/,""),r=n.replace(/-/g,"_").toUpperCase()+"_RULE",r in i)return"@"+n;for(var s=0;o>s;s++){var a=_[s],u=a.toUpperCase()+"_"+r;if(u in i)return"@-"+a.toLowerCase()+"-"+n}return!1};w.atRule=z;var j=function(){function e(e,n){var o;return e?(n&&"string"!=typeof n||(n=a(n||"div")),e="on"+e,o=e in n,!o&&r&&(n.setAttribute||(n=a("div")),n.setAttribute(e,""),o="function"==typeof n[e],n[e]!==t&&(n[e]=t),n.removeAttribute(e)),o):!1}var r=!("onblur"in n.documentElement);return e}();w.hasEvent=j;var N=function(e,n){var t=!1,r=a("div"),o=r.style;if(e in o){var i=A.length;for(o[e]=n,t=o[e];i--&&!t;)o[e]="-"+A[i]+"-"+n,t=o[e]}return""===t&&(t=!1),t};w.prefixedCSSValue=N;var L=function(){var n=e.matchMedia||e.msMatchMedia;return n?function(e){var t=n(e);return t&&t.matches||!1}:function(n){var t=!1;return d("@media "+n+" { #modernizr { position: absolute; } }",function(n){t="absolute"==(e.getComputedStyle?e.getComputedStyle(n,null):n.currentStyle).position}),t}}();w.mq=L;var k=w.testStyles=d;S.addTest("touch",function(){var t;if("ontouchstart"in e||e.DocumentTouch&&n instanceof DocumentTouch)t=!0;else{var r=["@media (",_.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");k(r,function(e){t=9===e.offsetTop})}return t});var q={elem:a("modernizr")};S._q.push(function(){delete q.elem});var M={style:q.elem.style};S._q.unshift(function(){delete M.style}),w.testProp=function(e,n,r){return h([e],t,n,r)},w.testAllProps=g;var R=w.prefixed=function(e,n,t){return 0===e.indexOf("@")?z(e):(-1!=e.indexOf("-")&&(e=f(e)),n?g(e,n,t):g(e,"pfx"))};w.prefixedCSS=function(e){var n=R(e);return n&&u(n)},w.testAllProps=y,S.addTest("cssanimations",y("animationName","a",!0)),S.addTest("flexbox",y("flexBasis","1px",!0)),S.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&y("transform","scale(1)",!0)}),S.addTest("csstransitions",y("transition","all",!0)),o(),i(x),delete w.addTest,delete w.addAsyncTest;for(var B=0;B<S._q.length;B++)S._q[B]();e.Modernizr=S}(window,document);