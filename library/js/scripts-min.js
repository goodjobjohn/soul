var cssua=function(e,t,i){var o=/\s*([\-\w ]+)[\s\/\:]([\d_]+\b(?:[\-\._\/]\w+)*)/,n=/([\w\-\.]+[\s\/][v]?[\d_]+\b(?:[\-\._\/]\w+)*)/g,r=/\b(?:(blackberry\w*|bb10)|(rim tablet os))(?:\/(\d+\.\d+(?:\.\w+)*))?/,a=/\bsilk-accelerated=true\b/,s=/\bfluidapp\b/,l=/(\bwindows\b|\bmacintosh\b|\blinux\b|\bunix\b)/,d=/(\bandroid\b|\bipad\b|\bipod\b|\bwindows phone\b|\bwpdesktop\b|\bxblwp7\b|\bzunewp7\b|\bwindows ce\b|\bblackberry\w*|\bbb10\b|\brim tablet os\b|\bmeego|\bwebos\b|\bpalm|\bsymbian|\bj2me\b|\bdocomo\b|\bpda\b|\bchtml\b|\bmidp\b|\bcldc\b|\w*?mobile\w*?|\w*?phone\w*?)/,p=/(\bxbox\b|\bplaystation\b|\bnintendo\s+\w+)/,c={parse:function(e,t){var i={};if(t&&(i.standalone=t),!(e=(""+e).toLowerCase()))return i;for(var c,b,m=e.split(/[()]/),u=0,w=m.length;u<w;u++)if(u%2){var h=m[u].split(";");for(c=0,b=h.length;c<b;c++)if(o.exec(h[c])){var g=RegExp.$1.split(" ").join("_"),f=RegExp.$2;(!i[g]||parseFloat(i[g])<parseFloat(f))&&(i[g]=f)}}else if(h=m[u].match(n))for(c=0,b=h.length;c<b;c++)(g=h[c].split(/[\/\s]+/)).length&&"mozilla"!==g[0]&&(i[g[0].split(" ").join("_")]=g.slice(1).join("-"));return d.exec(e)?(i.mobile=RegExp.$1,r.exec(e)&&(delete i[i.mobile],i.blackberry=i.version||RegExp.$3||RegExp.$2||RegExp.$1,RegExp.$1?i.mobile="blackberry":"0.0.1"===i.version&&(i.blackberry="7.1.0.0"))):p.exec(e)?(i.game=RegExp.$1,c=i.game.split(" ").join("_"),i.version&&!i[c]&&(i[c]=i.version)):l.exec(e)&&(i.desktop=RegExp.$1),i.intel_mac_os_x?(i.mac_os_x=i.intel_mac_os_x.split("_").join("."),delete i.intel_mac_os_x):i.cpu_iphone_os?(i.ios=i.cpu_iphone_os.split("_").join("."),delete i.cpu_iphone_os):i.cpu_os?(i.ios=i.cpu_os.split("_").join("."),delete i.cpu_os):"iphone"!==i.mobile||i.ios||(i.ios="1"),i.opera&&i.version?(i.opera=i.version,delete i.blackberry):a.exec(e)?i.silk_accelerated=!0:s.exec(e)&&(i.fluidapp=i.version),i.edge&&(delete i.applewebkit,delete i.safari,delete i.chrome,delete i.android),i.applewebkit?(i.webkit=i.applewebkit,delete i.applewebkit,i.opr&&(i.opera=i.opr,delete i.opr,delete i.chrome),i.safari&&(i.chrome||i.crios||i.fxios||i.opera||i.silk||i.fluidapp||i.phantomjs||i.mobile&&!i.ios?(delete i.safari,i.vivaldi&&delete i.chrome):i.safari=i.version&&!i.rim_tablet_os?i.version:{419:"2.0.4",417:"2.0.3",416:"2.0.2",412:"2.0",312:"1.3",125:"1.2",85:"1.0"}[parseInt(i.safari,10)]||i.safari)):i.msie||i.trident?(i.opera||(i.ie=i.msie||i.rv),delete i.msie,delete i.android,i.windows_phone_os?(i.windows_phone=i.windows_phone_os,delete i.windows_phone_os):"wpdesktop"!==i.mobile&&"xblwp7"!==i.mobile&&"zunewp7"!==i.mobile||(i.mobile="windows desktop",i.windows_phone=9>+i.ie?"7.0":10>+i.ie?"7.5":"8.0",delete i.windows_nt)):(i.gecko||i.firefox)&&(i.gecko=i.rv),i.rv&&delete i.rv,i.version&&delete i.version,i},format:function(e){var t="",i;for(i in e)if(i&&e.hasOwnProperty(i)){var o=i,n=e[i],o,r=" ua-"+(o=o.split(".").join("-"));if("string"==typeof n){for(var n,a=(n=n.split(" ").join("_").split(".").join("-")).indexOf("-");0<a;)r+=" ua-"+o+"-"+n.substring(0,a),a=n.indexOf("-",a+1);r+=" ua-"+o+"-"+n}t+=r}return t},encode:function(e){var t="",i;for(i in e)i&&e.hasOwnProperty(i)&&(t&&(t+="&"),t+=encodeURIComponent(i)+"="+encodeURIComponent(e[i]));return t}};return c.userAgent=c.ua=c.parse(t,i),t=c.format(c.ua)+" js",e.className=e.className?e.className.replace(/\bno-js\b/g,"")+t:t.substr(1),c}(document.documentElement,navigator.userAgent,navigator.standalone);function updateViewportDimensions(){var e=window,t=document,i=t.documentElement,o=t.getElementsByTagName("body")[0],n,r;return{width:e.innerWidth||i.clientWidth||o.clientWidth,height:e.innerHeight||i.clientHeight||o.clientHeight}}!function(e,t){e.fn.nearest=function(i){var o,n,r,a,s,l=t.querySelectorAll;function d(t){n=n?n.add(t):e(t)}return this.each(function(){o=this,e.each(i.split(","),function(){if((a=e.trim(this)).indexOf("#"))for(s=o.parentNode;s;){if((r=l?s.querySelectorAll(a):e(s).find(a)).length){d(r);break}s=s.parentNode}else d(l?t.querySelectorAll(a):e(a))})}),n||e()}}(jQuery,document);var viewport=updateViewportDimensions(),waitForFinalEvent=function(){var e={};return function(t,i,o){o||(o="Don't call this twice without a uniqueId"),e[o]&&clearTimeout(e[o]),e[o]=setTimeout(t,i)}}(),timeToWaitForLast=100;function loadGravatars(){(viewport=updateViewportDimensions()).width>=768&&jQuery(".comment img[data-gravatar]").each(function(){jQuery(this).attr("src",jQuery(this).attr("data-gravatar"))})}jQuery(document).ready(function(e){loadGravatars(),(viewport=updateViewportDimensions()).width,e("p > img").unwrap()});class ResponsiveBackgroundImage{constructor(e){this.element=e,this.img=e.querySelector("img.bg-swap"),this.src="",this.img.addEventListener("load",()=>{this.update()}),this.img.complete&&this.update()}update(){let e=void 0!==this.img.currentSrc?this.img.currentSrc:this.img.src;this.src!==e&&(this.src=e,this.element.style.backgroundImage='url("'+this.src+'")')}}let elements=document.querySelectorAll("[data-responsive-background-image]");for(let e=0;e<elements.length;e++)new ResponsiveBackgroundImage(elements[e]);let animation=document.getElementById("lottie");animation&&(setTimeout(function(){animation.classList.add("fade-out")},3e3),setTimeout(function(){animation.style.display="none"},4e3));