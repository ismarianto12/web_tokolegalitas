(function e$jscomp$0(a,m,n){function c(d,k){if(!m[d]){if(!a[d]){var g="function"==typeof require&&require;if(!k&&g)return g(d,!0);if(f)return f(d,!0);g=Error("Cannot find module '"+d+"'");throw g.code="MODULE_NOT_FOUND",g;}g=m[d]={exports:{}};a[d][0].call(g.exports,function(g){var b=a[d][1][g];return c(b?b:g)},g,g.exports,e$jscomp$0,a,m,n)}return m[d].exports}for(var f="function"==typeof require&&require,d=0;d<n.length;d++)c(n[d]);return c})({1:[function(a,m,n){function e(d){d.fn.perfectScrollbar=
function(g){return this.each(function(){"object"===typeof g||"undefined"===typeof g?f.get(this)||c.initialize(this,g):"update"===g?c.update(this):"destroy"===g&&c.destroy(this);return d(this)})}}var c=a("../main"),f=a("../plugin/instances");"function"===typeof define&&define.amd?define(["jquery"],e):(a=window.jQuery?window.jQuery:window.$,"undefined"!==typeof a&&e(a));m.exports=e},{"../main":7,"../plugin/instances":18}],2:[function(a,m,n){n.add=function(a,c){if(a.classList)a.classList.add(c);else{var f=
a.className.split(" ");0>f.indexOf(c)&&f.push(c);a.className=f.join(" ")}};n.remove=function(a,c){if(a.classList)a.classList.remove(c);else{var f=a.className.split(" "),d=f.indexOf(c);0<=d&&f.splice(d,1);a.className=f.join(" ")}};n.list=function(a){return a.classList?Array.prototype.slice.apply(a.classList):a.className.split(" ")}},{}],3:[function(a,m,n){var e={e:function(c,f){var d=document.createElement(c);d.className=f;return d},appendTo:function(c,f){f.appendChild(c);return c},css:function(c,
f,d){if("object"===typeof f){for(var g in f)d=f[g],"number"===typeof d&&(d=d.toString()+"px"),c.style[g]=d;return c}if("undefined"===typeof d)return window.getComputedStyle(c)[f];g=d;"number"===typeof g&&(g=g.toString()+"px");c.style[f]=g;return c},matches:function(c,f){if("undefined"!==typeof c.matches)return c.matches(f);if("undefined"!==typeof c.matchesSelector)return c.matchesSelector(f);if("undefined"!==typeof c.webkitMatchesSelector)return c.webkitMatchesSelector(f);if("undefined"!==typeof c.mozMatchesSelector)return c.mozMatchesSelector(f);
if("undefined"!==typeof c.msMatchesSelector)return c.msMatchesSelector(f)},remove:function(c){"undefined"!==typeof c.remove?c.remove():c.parentNode&&c.parentNode.removeChild(c)},queryChildren:function(c,f){return Array.prototype.filter.call(c.childNodes,function(d){return e.matches(d,f)})}};m.exports=e},{}],4:[function(a,m,n){var e=function(c){this.element=c;this.events={}};e.prototype.bind=function(c,f){"undefined"===typeof this.events[c]&&(this.events[c]=[]);this.events[c].push(f);this.element.addEventListener(c,
f,!1)};e.prototype.unbind=function(c,f){var d="undefined"!==typeof f;this.events[c]=this.events[c].filter(function(g){if(d&&g!==f)return!0;this.element.removeEventListener(c,g,!1);return!1},this)};e.prototype.unbindAll=function(){for(var c in this.events)this.unbind(c)};a=function(){this.eventElements=[]};a.prototype.eventElement=function(c){var f=this.eventElements.filter(function(d){return d.element===c})[0];"undefined"===typeof f&&(f=new e(c),this.eventElements.push(f));return f};a.prototype.bind=
function(c,f,d){this.eventElement(c).bind(f,d)};a.prototype.unbind=function(c,f,d){this.eventElement(c).unbind(f,d)};a.prototype.unbindAll=function(){for(var c=0;c<this.eventElements.length;c++)this.eventElements[c].unbindAll()};a.prototype.once=function(c,f,d){var g=this.eventElement(c),a=function(c){g.unbind(f,a);d(c)};g.bind(f,a)};m.exports=a},{}],5:[function(a,m,n){m.exports=function(){function a(){return Math.floor(65536*(1+Math.random())).toString(16).substring(1)}return function(){return a()+
a()+"-"+a()+"-"+a()+"-"+a()+"-"+a()+a()+a()}}()},{}],6:[function(a,m,n){var e=a("./class"),c=a("./dom");n.toInt=function(a){return parseInt(a,10)||0};n.clone=function(a){if(null===a)return null;if("object"===typeof a){var d={},c;for(c in a)d[c]=this.clone(a[c]);return d}return a};n.extend=function(a,d){var c=this.clone(a),k;for(k in d)c[k]=this.clone(d[k]);return c};n.isEditable=function(a){return c.matches(a,"input,[contenteditable]")||c.matches(a,"select,[contenteditable]")||c.matches(a,"textarea,[contenteditable]")||
c.matches(a,"button,[contenteditable]")};n.removePsClasses=function(a){for(var d=e.list(a),c=0;c<d.length;c++){var k=d[c];0===k.indexOf("ps-")&&e.remove(a,k)}};n.outerWidth=function(a){return this.toInt(c.css(a,"width"))+this.toInt(c.css(a,"paddingLeft"))+this.toInt(c.css(a,"paddingRight"))+this.toInt(c.css(a,"borderLeftWidth"))+this.toInt(c.css(a,"borderRightWidth"))};n.startScrolling=function(a,d){e.add(a,"ps-in-scrolling");"undefined"!==typeof d?e.add(a,"ps-"+d):(e.add(a,"ps-x"),e.add(a,"ps-y"))};
n.stopScrolling=function(a,d){e.remove(a,"ps-in-scrolling");"undefined"!==typeof d?e.remove(a,"ps-"+d):(e.remove(a,"ps-x"),e.remove(a,"ps-y"))};n.env={isWebKit:"WebkitAppearance"in document.documentElement.style,supportsTouch:"ontouchstart"in window||window.DocumentTouch&&document instanceof window.DocumentTouch,supportsIePointer:null!==window.navigator.msMaxTouchPoints}},{"./class":2,"./dom":3}],7:[function(a,m,n){n=a("./plugin/destroy");var e=a("./plugin/initialize");a=a("./plugin/update");m.exports=
{initialize:e,update:a,destroy:n}},{"./plugin/destroy":9,"./plugin/initialize":17,"./plugin/update":21}],8:[function(a,m,n){m.exports={maxScrollbarLength:null,minScrollbarLength:null,scrollXMarginOffset:0,scrollYMarginOffset:0,stopPropagationOnClick:!0,suppressScrollX:!1,suppressScrollY:!1,swipePropagation:!0,useBothWheelAxes:!1,useKeyboard:!0,useSelectionScroll:!1,wheelPropagation:!1,wheelSpeed:1,theme:"default"}},{}],9:[function(a,m,n){var e=a("../lib/dom"),c=a("../lib/helper"),f=a("./instances");
m.exports=function(a){var d=f.get(a);d&&(d.event.unbindAll(),e.remove(d.scrollbarX),e.remove(d.scrollbarY),e.remove(d.scrollbarXRail),e.remove(d.scrollbarYRail),c.removePsClasses(a),f.remove(a))}},{"../lib/dom":3,"../lib/helper":6,"./instances":18}],10:[function(a,m,n){function e(a,h){var k=window.Event.prototype.stopPropagation.bind;h.settings.stopPropagationOnClick&&h.event.bind(h.scrollbarY,"click",k);h.event.bind(h.scrollbarYRail,"click",function(b){var k=c.toInt(h.scrollbarYHeight/2);k=h.railYRatio*
(b.pageY-window.pageYOffset-h.scrollbarYRail.getBoundingClientRect().top-k)/(h.railYRatio*(h.railYHeight-h.scrollbarYHeight));0>k?k=0:1<k&&(k=1);g(a,"top",(h.contentHeight-h.containerHeight)*k);d(a);b.stopPropagation()});h.settings.stopPropagationOnClick&&h.event.bind(h.scrollbarX,"click",k);h.event.bind(h.scrollbarXRail,"click",function(b){var k=c.toInt(h.scrollbarXWidth/2);k=h.railXRatio*(b.pageX-window.pageXOffset-h.scrollbarXRail.getBoundingClientRect().left-k)/(h.railXRatio*(h.railXWidth-h.scrollbarXWidth));
0>k?k=0:1<k&&(k=1);g(a,"left",(h.contentWidth-h.containerWidth)*k-h.negativeScrollAdjustment);d(a);b.stopPropagation()})}var c=a("../../lib/helper"),f=a("../instances"),d=a("../update-geometry"),g=a("../update-scroll");m.exports=function(a){var d=f.get(a);e(a,d)}},{"../../lib/helper":6,"../instances":18,"../update-geometry":19,"../update-scroll":20}],11:[function(a,m,n){function e(a,b){var c=null,g=null,l=function(l){var f=c+(l.pageX-g)*b.railXRatio,p=Math.max(0,b.scrollbarXRail.getBoundingClientRect().left)+
b.railXRatio*(b.railXWidth-b.scrollbarXWidth);b.scrollbarXLeft=0>f?0:f>p?p:f;f=d.toInt(b.scrollbarXLeft*(b.contentWidth-b.containerWidth)/(b.containerWidth-b.railXRatio*b.scrollbarXWidth))-b.negativeScrollAdjustment;h(a,"left",f);k(a);l.stopPropagation();l.preventDefault()},e=function(){d.stopScrolling(a,"x");b.event.unbind(b.ownerDocument,"mousemove",l)};b.event.bind(b.scrollbarX,"mousedown",function(k){g=k.pageX;c=d.toInt(f.css(b.scrollbarX,"left"))*b.railXRatio;d.startScrolling(a,"x");b.event.bind(b.ownerDocument,
"mousemove",l);b.event.once(b.ownerDocument,"mouseup",e);k.stopPropagation();k.preventDefault()})}function c(a,b){var c=null,g=null,l=function(l){var f=c+(l.pageY-g)*b.railYRatio,q=Math.max(0,b.scrollbarYRail.getBoundingClientRect().top)+b.railYRatio*(b.railYHeight-b.scrollbarYHeight);b.scrollbarYTop=0>f?0:f>q?q:f;f=d.toInt(b.scrollbarYTop*(b.contentHeight-b.containerHeight)/(b.containerHeight-b.railYRatio*b.scrollbarYHeight));h(a,"top",f);k(a);l.stopPropagation();l.preventDefault()},e=function(){d.stopScrolling(a,
"y");b.event.unbind(b.ownerDocument,"mousemove",l)};b.event.bind(b.scrollbarY,"mousedown",function(k){g=k.pageY;c=d.toInt(f.css(b.scrollbarY,"top"))*b.railYRatio;d.startScrolling(a,"y");b.event.bind(b.ownerDocument,"mousemove",l);b.event.once(b.ownerDocument,"mouseup",e);k.stopPropagation();k.preventDefault()})}var f=a("../../lib/dom"),d=a("../../lib/helper"),g=a("../instances"),k=a("../update-geometry"),h=a("../update-scroll");m.exports=function(a){var b=g.get(a);e(a,b);c(a,b)}},{"../../lib/dom":3,
"../../lib/helper":6,"../instances":18,"../update-geometry":19,"../update-scroll":20}],12:[function(a,m,n){function e(a,d){function b(b,c){var k=a.scrollTop;if(0===b){if(!d.scrollbarYActive)return!1;if(0===k&&0<c||k>=d.contentHeight-d.containerHeight&&0>c)return!d.settings.wheelPropagation}k=a.scrollLeft;if(0===c){if(!d.scrollbarXActive)return!1;if(0===k&&0>b||k>=d.contentWidth-d.containerWidth&&0<b)return!d.settings.wheelPropagation}return!0}var l=!1;d.event.bind(a,"mouseenter",function(){l=!0});
d.event.bind(a,"mouseleave",function(){l=!1});var h=!1;d.event.bind(d.ownerDocument,"keydown",function(q){if(!q.isDefaultPrevented||!q.isDefaultPrevented()){var e=f.matches(d.scrollbarX,":focus")||f.matches(d.scrollbarY,":focus");if(l||e){if(e=document.activeElement?document.activeElement:d.ownerDocument.activeElement){for(;e.shadowRoot;)e=e.shadowRoot.activeElement;if(c.isEditable(e))return}var p=e=0;switch(q.which){case 37:e=-30;break;case 38:p=30;break;case 39:e=30;break;case 40:p=-30;break;case 33:p=
90;break;case 32:p=q.shiftKey?90:-90;break;case 34:p=-90;break;case 35:p=q.ctrlKey?-d.contentHeight:-d.containerHeight;break;case 36:p=q.ctrlKey?a.scrollTop:d.containerHeight;break;default:return}k(a,"top",a.scrollTop-p);k(a,"left",a.scrollLeft+e);g(a);(h=b(e,p))&&q.preventDefault()}}})}var c=a("../../lib/helper"),f=a("../../lib/dom"),d=a("../instances"),g=a("../update-geometry"),k=a("../update-scroll");m.exports=function(a){var c=d.get(a);e(a,c)}},{"../../lib/dom":3,"../../lib/helper":6,"../instances":18,
"../update-geometry":19,"../update-scroll":20}],13:[function(a,m,n){function e(a,c){function k(b,d){var k=a.scrollTop;if(0===b){if(!c.scrollbarYActive)return!1;if(0===k&&0<d||k>=c.contentHeight-c.containerHeight&&0>d)return!c.settings.wheelPropagation}k=a.scrollLeft;if(0===d){if(!c.scrollbarXActive)return!1;if(0===k&&0>b||k>=c.contentWidth-c.containerWidth&&0<b)return!c.settings.wheelPropagation}return!0}function g(g){var e=g.deltaX;var l=-1*g.deltaY;if("undefined"===typeof e||"undefined"===typeof l)e=
-1*g.wheelDeltaX/6,l=g.wheelDeltaY/6;g.deltaMode&&1===g.deltaMode&&(e*=10,l*=10);e!==e&&l!==l&&(e=0,l=g.wheelDelta);l=[e,l];e=l[0];l=l[1];var h;a:{if(h=a.querySelector("textarea:hover")){var q=h.scrollHeight-h.clientHeight;if(0<q&&!(0===h.scrollTop&&0<l||h.scrollTop===q&&0>l)){h=!0;break a}q=h.scrollLeft-h.clientWidth;if(0<q&&!(0===h.scrollLeft&&0>e||h.scrollLeft===q&&0<e)){h=!0;break a}}h=!1}!h&&(b=!1,c.settings.useBothWheelAxes?c.scrollbarYActive&&!c.scrollbarXActive?(l?d(a,"top",a.scrollTop-l*
c.settings.wheelSpeed):d(a,"top",a.scrollTop+e*c.settings.wheelSpeed),b=!0):c.scrollbarXActive&&!c.scrollbarYActive&&(e?d(a,"left",a.scrollLeft+e*c.settings.wheelSpeed):d(a,"left",a.scrollLeft-l*c.settings.wheelSpeed),b=!0):(d(a,"top",a.scrollTop-l*c.settings.wheelSpeed),d(a,"left",a.scrollLeft+e*c.settings.wheelSpeed)),f(a),b=b||k(e,l))&&(g.stopPropagation(),g.preventDefault())}var b=!1;"undefined"!==typeof window.onwheel?c.event.bind(a,"wheel",g):"undefined"!==typeof window.onmousewheel&&c.event.bind(a,
"mousewheel",g)}var c=a("../instances"),f=a("../update-geometry"),d=a("../update-scroll");m.exports=function(a){var d=c.get(a);e(a,d)}},{"../instances":18,"../update-geometry":19,"../update-scroll":20}],14:[function(a,m,n){function e(a,c){c.event.bind(a,"scroll",function(){f(a)})}var c=a("../instances"),f=a("../update-geometry");m.exports=function(a){var d=c.get(a);e(a,d)}},{"../instances":18,"../update-geometry":19}],15:[function(a,m,n){function e(a,e){function k(){var a=window.getSelection?window.getSelection():
document.getSelection?document.getSelection():"";return 0===a.toString().length?null:a.getRangeAt(0).commonAncestorContainer}function b(){m||(m=setInterval(function(){f.get(a)?(g(a,"top",a.scrollTop+n.top),g(a,"left",a.scrollLeft+n.left),d(a)):clearInterval(m)},50))}function h(){m&&(clearInterval(m),m=null);c.stopScrolling(a)}var m=null,n={top:0,left:0},r=!1;e.event.bind(e.ownerDocument,"selectionchange",function(){a.contains(k())?r=!0:(r=!1,h())});e.event.bind(window,"mouseup",function(){r&&(r=!1,
h())});e.event.bind(window,"mousemove",function(d){if(r){var k=d.pageX;d=d.pageY;var e=a.offsetLeft+a.offsetWidth,g=a.offsetTop,l=a.offsetTop+a.offsetHeight;k<a.offsetLeft+3?(n.left=-5,c.startScrolling(a,"x")):k>e-3?(n.left=5,c.startScrolling(a,"x")):n.left=0;d<g+3?(n.top=5>g+3-d?-5:-20,c.startScrolling(a,"y")):d>l-3?(n.top=5>d-l+3?5:20,c.startScrolling(a,"y")):n.top=0;0===n.top&&0===n.left?h():b()}})}var c=a("../../lib/helper"),f=a("../instances"),d=a("../update-geometry"),g=a("../update-scroll");
m.exports=function(a){var d=f.get(a);e(a,d)}},{"../../lib/helper":6,"../instances":18,"../update-geometry":19,"../update-scroll":20}],16:[function(a,m,n){function e(a,e,h,l){var b;function g(b,c){d(a,"top",a.scrollTop-c);d(a,"left",a.scrollLeft-b);f(a)}function k(){x=!0}function n(){x=!1}function m(a){return a.targetTouches&&1===a.targetTouches.length||a.pointerType&&"mouse"!==a.pointerType&&a.pointerType!==a.MSPOINTER_TYPE_MOUSE?!0:!1}function p(a){if(m(a)){y=!0;var b=a.targetTouches?a.targetTouches[0]:
a;v.pageX=b.pageX;v.pageY=b.pageY;C=(new Date).getTime();null!==t&&clearInterval(t);a.stopPropagation()}}function A(d){if(!x&&y&&m(d)){var c=d.targetTouches?d.targetTouches[0]:d,l={pageX:c.pageX,pageY:c.pageY};c=l.pageX-v.pageX;var f=l.pageY-v.pageY;g(c,f);v=l;l=(new Date).getTime();var k=l-C;0<k&&(b=c/k,z=f/k,C=l);a:{l=a.scrollTop;k=a.scrollLeft;var h=Math.abs(c),q=Math.abs(f);if(q>h){if(0>f&&l===e.contentHeight-e.containerHeight||0<f&&0===l){c=!e.settings.swipePropagation;break a}}else if(h>q&&
(0>c&&k===e.contentWidth-e.containerWidth||0<c&&0===k)){c=!e.settings.swipePropagation;break a}c=!0}c&&(d.stopPropagation(),d.preventDefault())}}function B(){!x&&y&&(y=!1,clearInterval(t),t=setInterval(function(){c.get(a)?.01>Math.abs(b)&&.01>Math.abs(z)?clearInterval(t):(g(30*b,30*z),b*=.8,z*=.8):clearInterval(t)},10))}var v={},C=0;var z=b=void 0;var t=null,x=!1,y=!1;h&&(e.event.bind(window,"touchstart",k),e.event.bind(window,"touchend",n),e.event.bind(a,"touchstart",p),e.event.bind(a,"touchmove",
A),e.event.bind(a,"touchend",B));l&&(window.PointerEvent?(e.event.bind(window,"pointerdown",k),e.event.bind(window,"pointerup",n),e.event.bind(a,"pointerdown",p),e.event.bind(a,"pointermove",A),e.event.bind(a,"pointerup",B)):window.MSPointerEvent&&(e.event.bind(window,"MSPointerDown",k),e.event.bind(window,"MSPointerUp",n),e.event.bind(a,"MSPointerDown",p),e.event.bind(a,"MSPointerMove",A),e.event.bind(a,"MSPointerUp",B)))}var c=a("../instances"),f=a("../update-geometry"),d=a("../update-scroll");
m.exports=function(a,d,f){var l=c.get(a);e(a,l,d,f)}},{"../instances":18,"../update-geometry":19,"../update-scroll":20}],17:[function(a,m,n){var e=a("../lib/class"),c=a("../lib/helper"),f=a("./instances"),d=a("./update-geometry"),g=a("./handler/click-rail"),k=a("./handler/drag-scrollbar"),h=a("./handler/keyboard"),l=a("./handler/mouse-wheel"),b=a("./handler/native-scroll"),q=a("./handler/selection"),w=a("./handler/touch");m.exports=function(a,n){n="object"===typeof n?n:{};e.add(a,"ps-container");
var m=f.add(a);m.settings=c.extend(m.settings,n);e.add(a,"ps-theme-"+m.settings.theme);g(a);k(a);l(a);b(a);m.settings.useSelectionScroll&&q(a);(c.env.supportsTouch||c.env.supportsIePointer)&&w(a,c.env.supportsTouch,c.env.supportsIePointer);m.settings.useKeyboard&&h(a);d(a)}},{"../lib/class":2,"../lib/helper":6,"./handler/click-rail":10,"./handler/drag-scrollbar":11,"./handler/keyboard":12,"./handler/mouse-wheel":13,"./handler/native-scroll":14,"./handler/selection":15,"./handler/touch":16,"./instances":18,
"./update-geometry":19}],18:[function(a,m,n){function e(a){function b(){f.add(a,"ps-focus")}function c(){f.remove(a,"ps-focus")}this.settings=l.clone(g);this.contentHeight=this.contentWidth=this.containerHeight=this.containerWidth=null;this.isRtl="rtl"===d.css(a,"direction");this.negativeScrollAdjustment=(this.isNegativeScroll=function(){var b=a.scrollLeft;a.scrollLeft=-1;var c=0>a.scrollLeft;a.scrollLeft=b;return c}())?a.scrollWidth-a.clientWidth:0;this.event=new k;this.ownerDocument=a.ownerDocument||
document;this.scrollbarXRail=d.appendTo(d.e("div","ps-scrollbar-x-rail"),a);this.scrollbarX=d.appendTo(d.e("div","ps-scrollbar-x"),this.scrollbarXRail);this.scrollbarX.setAttribute("tabindex",0);this.event.bind(this.scrollbarX,"focus",b);this.event.bind(this.scrollbarX,"blur",c);this.scrollbarXLeft=this.scrollbarXWidth=this.scrollbarXActive=null;this.scrollbarXBottom=l.toInt(d.css(this.scrollbarXRail,"bottom"));this.scrollbarXTop=(this.isScrollbarXUsingBottom=this.scrollbarXBottom===this.scrollbarXBottom)?
null:l.toInt(d.css(this.scrollbarXRail,"top"));this.railBorderXWidth=l.toInt(d.css(this.scrollbarXRail,"borderLeftWidth"))+l.toInt(d.css(this.scrollbarXRail,"borderRightWidth"));d.css(this.scrollbarXRail,"display","block");this.railXMarginWidth=l.toInt(d.css(this.scrollbarXRail,"marginLeft"))+l.toInt(d.css(this.scrollbarXRail,"marginRight"));d.css(this.scrollbarXRail,"display","");this.railXRatio=this.railXWidth=null;this.scrollbarYRail=d.appendTo(d.e("div","ps-scrollbar-y-rail"),a);this.scrollbarY=
d.appendTo(d.e("div","ps-scrollbar-y"),this.scrollbarYRail);this.scrollbarY.setAttribute("tabindex",0);this.event.bind(this.scrollbarY,"focus",b);this.event.bind(this.scrollbarY,"blur",c);this.scrollbarYTop=this.scrollbarYHeight=this.scrollbarYActive=null;this.scrollbarYRight=l.toInt(d.css(this.scrollbarYRail,"right"));this.scrollbarYLeft=(this.isScrollbarYUsingRight=this.scrollbarYRight===this.scrollbarYRight)?null:l.toInt(d.css(this.scrollbarYRail,"left"));this.scrollbarYOuterWidth=this.isRtl?l.outerWidth(this.scrollbarY):
null;this.railBorderYWidth=l.toInt(d.css(this.scrollbarYRail,"borderTopWidth"))+l.toInt(d.css(this.scrollbarYRail,"borderBottomWidth"));d.css(this.scrollbarYRail,"display","block");this.railYMarginHeight=l.toInt(d.css(this.scrollbarYRail,"marginTop"))+l.toInt(d.css(this.scrollbarYRail,"marginBottom"));d.css(this.scrollbarYRail,"display","");this.railYRatio=this.railYHeight=null}function c(a){return"undefined"===typeof a.dataset?a.getAttribute("data-ps-id"):a.dataset.psId}var f=a("../lib/class"),d=
a("../lib/dom"),g=a("./default-setting"),k=a("../lib/event-manager"),h=a("../lib/guid"),l=a("../lib/helper"),b={};n.add=function(a){var c=h();"undefined"===typeof a.dataset?a.setAttribute("data-ps-id",c):a.dataset.psId=c;b[c]=new e(a);return b[c]};n.remove=function(a){delete b[c(a)];"undefined"===typeof a.dataset?a.removeAttribute("data-ps-id"):delete a.dataset.psId};n.get=function(a){return b[c(a)]}},{"../lib/class":2,"../lib/dom":3,"../lib/event-manager":4,"../lib/guid":5,"../lib/helper":6,"./default-setting":8}],
19:[function(a,m,n){function e(a,b){a.settings.minScrollbarLength&&(b=Math.max(b,a.settings.minScrollbarLength));a.settings.maxScrollbarLength&&(b=Math.min(b,a.settings.maxScrollbarLength));return b}function c(a,b){var c={width:b.railXWidth};c.left=b.isRtl?b.negativeScrollAdjustment+a.scrollLeft+b.containerWidth-b.contentWidth:a.scrollLeft;b.isScrollbarXUsingBottom?c.bottom=b.scrollbarXBottom-a.scrollTop:c.top=b.scrollbarXTop+a.scrollTop;d.css(b.scrollbarXRail,c);c={top:a.scrollTop,height:b.railYHeight};
b.isScrollbarYUsingRight?c.right=b.isRtl?b.contentWidth-(b.negativeScrollAdjustment+a.scrollLeft)-b.scrollbarYRight-b.scrollbarYOuterWidth:b.scrollbarYRight-a.scrollLeft:c.left=b.isRtl?b.negativeScrollAdjustment+a.scrollLeft+2*b.containerWidth-b.contentWidth-b.scrollbarYLeft-b.scrollbarYOuterWidth:b.scrollbarYLeft+a.scrollLeft;d.css(b.scrollbarYRail,c);d.css(b.scrollbarX,{left:b.scrollbarXLeft,width:b.scrollbarXWidth-b.railBorderXWidth});d.css(b.scrollbarY,{top:b.scrollbarYTop,height:b.scrollbarYHeight-
b.railBorderYWidth})}var f=a("../lib/class"),d=a("../lib/dom"),g=a("../lib/helper"),k=a("./instances"),h=a("./update-scroll");m.exports=function(a){var b=k.get(a);b.containerWidth=a.clientWidth;b.containerHeight=a.clientHeight;b.contentWidth=a.scrollWidth;b.contentHeight=a.scrollHeight;if(!a.contains(b.scrollbarXRail)){var l=d.queryChildren(a,".ps-scrollbar-x-rail");0<l.length&&l.forEach(function(a){d.remove(a)});d.appendTo(b.scrollbarXRail,a)}a.contains(b.scrollbarYRail)||(l=d.queryChildren(a,".ps-scrollbar-y-rail"),
0<l.length&&l.forEach(function(a){d.remove(a)}),d.appendTo(b.scrollbarYRail,a));!b.settings.suppressScrollX&&b.containerWidth+b.settings.scrollXMarginOffset<b.contentWidth?(b.scrollbarXActive=!0,b.railXWidth=b.containerWidth-b.railXMarginWidth,b.railXRatio=b.containerWidth/b.railXWidth,b.scrollbarXWidth=e(b,g.toInt(b.railXWidth*b.containerWidth/b.contentWidth)),b.scrollbarXLeft=g.toInt((b.negativeScrollAdjustment+a.scrollLeft)*(b.railXWidth-b.scrollbarXWidth)/(b.contentWidth-b.containerWidth))):b.scrollbarXActive=
!1;!b.settings.suppressScrollY&&b.containerHeight+b.settings.scrollYMarginOffset<b.contentHeight?(b.scrollbarYActive=!0,b.railYHeight=b.containerHeight-b.railYMarginHeight,b.railYRatio=b.containerHeight/b.railYHeight,b.scrollbarYHeight=e(b,g.toInt(b.railYHeight*b.containerHeight/b.contentHeight)),b.scrollbarYTop=g.toInt(a.scrollTop*(b.railYHeight-b.scrollbarYHeight)/(b.contentHeight-b.containerHeight))):b.scrollbarYActive=!1;b.scrollbarXLeft>=b.railXWidth-b.scrollbarXWidth&&(b.scrollbarXLeft=b.railXWidth-
b.scrollbarXWidth);b.scrollbarYTop>=b.railYHeight-b.scrollbarYHeight&&(b.scrollbarYTop=b.railYHeight-b.scrollbarYHeight);c(a,b);b.scrollbarXActive?f.add(a,"ps-active-x"):(f.remove(a,"ps-active-x"),b.scrollbarXWidth=0,b.scrollbarXLeft=0,h(a,"left",0));b.scrollbarYActive?f.add(a,"ps-active-y"):(f.remove(a,"ps-active-y"),b.scrollbarYHeight=0,b.scrollbarYTop=0,h(a,"top",0))}},{"../lib/class":2,"../lib/dom":3,"../lib/helper":6,"./instances":18,"./update-scroll":20}],20:[function(a,m,n){var e=a("./instances"),
c=document.createEvent("Event"),f=document.createEvent("Event"),d=document.createEvent("Event"),g=document.createEvent("Event"),k=document.createEvent("Event"),h=document.createEvent("Event"),l=document.createEvent("Event"),b=document.createEvent("Event"),q=document.createEvent("Event"),w=document.createEvent("Event"),u,r;c.initEvent("ps-scroll-up",!0,!0);f.initEvent("ps-scroll-down",!0,!0);d.initEvent("ps-scroll-left",!0,!0);g.initEvent("ps-scroll-right",!0,!0);k.initEvent("ps-scroll-y",!0,!0);h.initEvent("ps-scroll-x",
!0,!0);l.initEvent("ps-x-reach-start",!0,!0);b.initEvent("ps-x-reach-end",!0,!0);q.initEvent("ps-y-reach-start",!0,!0);w.initEvent("ps-y-reach-end",!0,!0);m.exports=function(a,n,m){if("undefined"===typeof a)throw"You must provide an element to the update-scroll function";if("undefined"===typeof n)throw"You must provide an axis to the update-scroll function";if("undefined"===typeof m)throw"You must provide a value to the update-scroll function";"top"===n&&0>=m&&(a.scrollTop=m=0,a.dispatchEvent(q));
"left"===n&&0>=m&&(a.scrollLeft=m=0,a.dispatchEvent(l));var p=e.get(a);"top"===n&&m>=p.contentHeight-p.containerHeight&&(a.scrollTop=m=p.contentHeight-p.containerHeight,a.dispatchEvent(w));"left"===n&&m>=p.contentWidth-p.containerWidth&&(a.scrollLeft=m=p.contentWidth-p.containerWidth,a.dispatchEvent(b));u||(u=a.scrollTop);r||(r=a.scrollLeft);"top"===n&&m<u&&a.dispatchEvent(c);"top"===n&&m>u&&a.dispatchEvent(f);"left"===n&&m<r&&a.dispatchEvent(d);"left"===n&&m>r&&a.dispatchEvent(g);"top"===n&&(a.scrollTop=
u=m,a.dispatchEvent(k));"left"===n&&(a.scrollLeft=r=m,a.dispatchEvent(h))}},{"./instances":18}],21:[function(a,m,n){var e=a("../lib/dom"),c=a("../lib/helper"),f=a("./instances"),d=a("./update-geometry"),g=a("./update-scroll");m.exports=function(a){var h=f.get(a);h&&(h.negativeScrollAdjustment=h.isNegativeScroll?a.scrollWidth-a.clientWidth:0,e.css(h.scrollbarXRail,"display","block"),e.css(h.scrollbarYRail,"display","block"),h.railXMarginWidth=c.toInt(e.css(h.scrollbarXRail,"marginLeft"))+c.toInt(e.css(h.scrollbarXRail,
"marginRight")),h.railYMarginHeight=c.toInt(e.css(h.scrollbarYRail,"marginTop"))+c.toInt(e.css(h.scrollbarYRail,"marginBottom")),e.css(h.scrollbarXRail,"display","none"),e.css(h.scrollbarYRail,"display","none"),d(a),g(a,"top",a.scrollTop),g(a,"left",a.scrollLeft),e.css(h.scrollbarXRail,"display",""),e.css(h.scrollbarYRail,"display",""))}},{"../lib/dom":3,"../lib/helper":6,"./instances":18,"./update-geometry":19,"./update-scroll":20}]},{},[1]);