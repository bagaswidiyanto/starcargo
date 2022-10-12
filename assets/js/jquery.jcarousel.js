/*! jCarousel - v0.3.0-beta - 2012-12-17
* http://sorgalla.com/jcarousel/
* Copyright 2012 Jan Sorgalla
* Released under the MIT license */
(function(e){"use strict";var t=e.jCarousel={};t.version="0.3.0-beta";var n=/^([+\-]=)?(.+)$/;t.parseTarget=function(e){var t=!1,r=typeof e!="object"?n.exec(e):null;return r?(e=parseInt(r[2],10)||0,r[1]&&(t=!0,r[1]==="-="&&(e*=-1))):typeof e!="object"&&(e=parseInt(e,10)||0),{target:e,relative:t}},t.detectCarousel=function(e){var t;while(e.size()>0){t=e.filter("[data-jcarousel]");if(t.size()>0)return t;t=e.find("[data-jcarousel]");if(t.size()>0)return t;e=e.parent()}return null},t.base=function(n){return{version:t.version,_options:{},_element:null,_carousel:null,_init:e.noop,_create:e.noop,_destroy:e.noop,_reload:e.noop,create:function(){return this._element.attr("data-"+n.toLowerCase(),!0).data(n,this),!1===this._trigger("create")?this:(this._create(),this._trigger("createend"),this)},destroy:function(){return!1===this._trigger("destroy")?this:(this._destroy(),this._trigger("destroyend"),this._element.removeData(n).removeAttr("data-"+n.toLowerCase()),this)},reload:function(e){return!1===this._trigger("reload")?this:(e&&this.options(e),this._reload(),this._trigger("reloadend"),this)},element:function(){return this._element},options:function(t,n){if(arguments.length===0)return e.extend({},this._options);if(typeof t=="string"){if(typeof n=="undefined")return typeof this._options[t]=="undefined"?null:this._options[t];this._options[t]=n}else this._options=e.extend({},this._options,t);return this},carousel:function(){return this._carousel||(this._carousel=t.detectCarousel(this.options("carousel")||this._element),this._carousel||e.error('Could not detect carousel for plugin "'+n+'"')),this._carousel},_trigger:function(t,r,i){var s=e.Event((t+"."+n).toLowerCase());return(r||this._element).trigger(s,[this].concat(i||[])),!s.isDefaultPrevented()}}},t.plugin=function(n,r){var i=e[n]=function(t,n){this._element=e(t),this.options(n),this._init(),this.create()};return i.fn=i.prototype=e.extend({},t.base(n),r),e.fn[n]=function(t){var r=Array.prototype.slice.call(arguments,1),s=this;return typeof t=="string"?this.each(function(){var i=e(this).data(n);if(!i)return e.error("Cannot call methods on "+n+" prior to initialization; "+'attempted to call method "'+t+'"');if(!e.isFunction(i[t])||t.charAt(0)==="_")return e.error('No such method "'+t+'" for '+n+" instance");var o=i[t].apply(i,r);if(o!==i&&typeof o!="undefined")return s=o,!1}):this.each(function(){var r=e(this).data(n);r?r.reload(t):new i(this,t)}),s},i}})(jQuery),function(e,t){"use strict";var n=function(e){return parseFloat(e)||0};e.jCarousel.plugin("jcarousel",{animating:!1,tail:0,inTail:!1,resizeTimer:null,lt:null,vertical:!1,rtl:!1,circular:!1,_options:{list:function(){return this.element().children().eq(0)},items:function(){return this.list().children()},animation:400,wrap:null,vertical:null,rtl:null,center:!1},_list:null,_items:null,_target:null,_first:null,_last:null,_visible:null,_fullyvisible:null,_init:function(){var t=this;return this.onWindowResize=function(){t.resizeTimer&&clearTimeout(t.resizeTimer),t.resizeTimer=setTimeout(function(){t.reload()},100)},this.onAnimationComplete=function(n){t.animating=!1;var r=t.list().find("[data-jcarousel-clone]");r.size()>0&&(r.remove(),t._reload()),t._trigger("animateend"),e.isFunction(n)&&n.call(t,!0)},this},_create:function(){this._reload(),e(t).bind("resize.jcarousel",this.onWindowResize)},_destroy:function(){e(t).unbind("resize.jcarousel",this.onWindowResize)},_reload:function(){this.vertical=this.options("vertical"),this.vertical==null&&(this.vertical=this.list().height()>this.list().width()),this.rtl=this.options("rtl"),this.rtl==null&&(this.rtl=function(t){if((""+t.attr("dir")).toLowerCase()==="rtl")return!0;var n=!1;return t.parents("[dir]").each(function(){if(/rtl/i.test(e(this).attr("dir")))return n=!0,!1}),n}(this._element)),this.lt=this.vertical?"top":"left",this._items=null;var t=this._target&&this.index(this._target)>=0?this._target:this.closest();return this.circular=this.options("wrap")==="circular",t.size()>0?(this._prepare(t),this.list().find("[data-jcarousel-clone]").remove(),this._items=null,this.circular=this.options("wrap")==="circular"&&this._fullyvisible.size()<this.items().size(),this.list().css(this.lt,this._position(t)+"px")):this.list().css({left:0,top:0}),this},list:function(){if(this._list===null){var t=this.options("list");this._list=e.isFunction(t)?t.call(this):this._element.find(t)}return this._list},items:function(){if(this._items===null){var t=this.options("items");this._items=(e.isFunction(t)?t.call(this):this.list().find(t)).not("[data-jcarousel-clone]")}return this._items},index:function(e){return this.items().index(e)},closest:function(){var t=this,r=this.list().position()[this.lt],i=e(),s=!1,o=this.vertical?"bottom":this.rtl?"left":"right",u;return this.rtl&&!this.vertical&&(r=(r+this.list().width()-this.clipping())*-1),this.items().each(function(){i=e(this);if(s)return!1;var a=t.dimension(i);r+=a;if(r>=0){u=a-n(i.css("margin-"+o));if(!(Math.abs(r)-a+u/2<=0))return!1;s=!0}}),i},target:function(){return this._target},first:function(){return this._first},last:function(){return this._last},visible:function(){return this._visible},fullyvisible:function(){return this._fullyvisible},hasNext:function(){if(!1===this._trigger("hasnext"))return!0;var e=this.options("wrap"),t=this.items().size()-1;return t>=0&&(e&&e!=="first"||this.index(this._last)<t||this.tail&&!this.inTail)?!0:!1},hasPrev:function(){if(!1===this._trigger("hasprev"))return!0;var e=this.options("wrap");return this.items().size()>0&&(e&&e!=="last"||this.index(this._first)>0||this.tail&&this.inTail)?!0:!1},clipping:function(){return this._element["inner"+(this.vertical?"Height":"Width")]()},dimension:function(e){return e["outer"+(this.vertical?"Height":"Width")](!0)},scroll:function(t,r,i){if(this.animating)return this;if(!1===this._trigger("scroll",null,[t,r]))return this;e.isFunction(r)&&(i=r,r=!0);var s=e.jCarousel.parseTarget(t);if(s.relative){var o=this.items().size()-1,u=Math.abs(s.target),a=this.options("wrap"),f,l,c,h;if(s.target>0){var p=this.index(this._last);if(p>=o&&this.tail)this.inTail?a==="both"||a==="last"?this._scroll(0,r,i):this._scroll(Math.min(this.index(this._target)+u,o),r,i):this._scrollTail(r,i);else if(p!==o||a!=="both"&&a!=="last"){f=this.index(this._target),l=f+u;if(this.circular&&l>o){h=o,c=this.items().get(-1);while(h++<l)c=this.items().eq(0),c.after(c.clone(!0).attr("data-jcarousel-clone",!0)),this.list().append(c),this._items=null;this._scroll(c,r,i)}else this._scroll(Math.min(l,o),r,i)}else this._scroll(0,r,i)}else if(this.inTail)this._scroll(Math.max(this.index(this._first)-u+1,0),r,i);else{f=this.index(this._first),l=f-u;if(f!==0||a!=="both"&&a!=="first")if(this.circular&&l<0){h=l,c=this.items().get(0);while(h++<0){c=this.items().eq(-1),c.after(c.clone(!0).attr("data-jcarousel-clone",!0)),this.list().prepend(c),this._items=null;var d=n(this.list().css(this.lt)),v=this.dimension(c);this.rtl&&!this.vertical?d+=v:d-=v,this.list().css(this.lt,d+"px")}this._scroll(c,r,i)}else this._scroll(Math.max(f-u,0),r,i);else this._scroll(o,r,i)}}else this._scroll(s.target,r,i);return this._trigger("scrollend"),this},_scroll:function(t,r,i){if(this.animating)return e.isFunction(i)&&i.call(this,!1),this;typeof t!="object"?t=this.items().eq(t):typeof t.jquery=="undefined"&&(t=e(t));if(t.size()===0)return e.isFunction(i)&&i.call(this,!1),this;this.inTail=!1,this._prepare(t);var s=this._position(t),o=n(this.list().css(this.lt));if(s===o)return e.isFunction(i)&&i.call(this,!1),this;var u={};return u[this.lt]=s+"px",this._animate(u,r,i),this},_scrollTail:function(t,n){if(this.animating||!this.tail)return e.isFunction(n)&&n.call(this,!1),this;var r=this.list().position()[this.lt];this.rtl?r+=this.tail:r-=this.tail,this.inTail=!0;var i={};return i[this.lt]=r+"px",this._update({target:this._target.next(),fullyvisible:this._fullyvisible.slice(1).add(this._visible.last())}),this._animate(i,t,n),this},_animate:function(t,n,r){if(!1===this._trigger("animate"))return e.isFunction(r)&&r.call(this,!1),this;this.animating=!0;var i=this.options("animation");if(!i||n===!1)this.list().css(t),this.onAnimationComplete(r);else{var s=this;if(e.isFunction(i))i.call(this,t,function(){s.onAnimationComplete(r)});else{var o=typeof i=="object"?e.extend({},i):{duration:i},u=o.complete;o.complete=function(){s.onAnimationComplete(r),e.isFunction(u)&&u.call(this)},this.list().animate(t,o)}}return this},_prepare:function(t){var r=this.index(t),i=r,s=this.dimension(t),o=this.clipping(),u=this.vertical?"bottom":this.rtl?"left":"right",a={target:t,first:t,last:t,visible:t,fullyvisible:s<=o?t:e()},f,l;this.options("center")&&(s/=2,o/=2);if(s<o)for(;;){f=this.items().eq(++i);if(f.size()===0){if(!this.circular)break;f=this.items().eq(0);if(t.get(0)===f.get(0))break;f.after(f.clone(!0).attr("data-jcarousel-clone",!0)),this.list().append(f),this._items=null}s+=this.dimension(f),a.last=f,a.visible=a.visible.add(f),l=n(f.css("margin-"+u)),s-l<=o&&(a.fullyvisible=a.fullyvisible.add(f));if(s>=o)break}if(!this.circular&&s<o){i=r;for(;;){if(--i<0)break;f=this.items().eq(i);if(f.size()===0)break;s+=this.dimension(f),a.first=f,a.visible=a.visible.add(f),l=n(f.css("margin-"+u)),s-l<=o&&(a.fullyvisible=a.fullyvisible.add(f));if(s>=o)break}}return this._update(a),this.tail=0,this.options("wrap")!=="circular"&&this.options("wrap")!=="custom"&&this.index(a.last)===this.items().size()-1&&(s-=n(a.last.css("margin-"+u)),s>o&&(this.tail=s-o)),this},_position:function(e){var t=this._first,n=t.position()[this.lt];return this.rtl&&!this.vertical&&(n-=this.clipping()-this.dimension(t)),this.options("center")&&(n-=this.clipping()/2-this.dimension(t)/2),(this.index(e)>this.index(t)||this.inTail)&&this.tail?(n=this.rtl?n-this.tail:n+this.tail,this.inTail=!0):this.inTail=!1,-n},_update:function(t){var n=this,r={target:this._target||e(),first:this._first||e(),last:this._last||e(),visible:this._visible||e(),fullyvisible:this._fullyvisible||e()},i=this.index(t.first||r.first)<this.index(r.first),s,o=function(s){var o=[],u=[];t[s].each(function(){r[s].index(this)<0&&o.push(this)}),r[s].each(function(){t[s].index(this)<0&&u.push(this)}),i?o=o.reverse():u=u.reverse(),n._trigger("item"+s+"in",e(o)),n._trigger("item"+s+"out",e(u)),n["_"+s]=t[s]};for(s in t)o(s);return this}})}(jQuery,window),function(e){"use strict";e.jcarousel.fn.scrollIntoView=function(t,n,r){var i=typeof t!="object"?parseInt(t,10):this.index(t),s=this.index(this._fullyvisible.first());if(i<s)return this.scroll(i,n,r);if(i>=s&&i<=this.index(this._fullyvisible.last()))return e.isFunction(r)&&r.call(this,!1),this;var o=this.items(),u=this.clipping(),a=this.vertical?"bottom":this.rtl?"left":"right",f=0,l;for(;;){l=o.eq(i);if(l.size()===0)break;f+=this.dimension(l);if(f>=u){var c=parseFloat(l.css("margin-"+a))||0;f-c!==u&&i++;break}if(i<=0)break;i--}return this.scroll(i,n,r)}}(jQuery),function(e){"use strict";e.jCarousel.plugin("jcarouselControl",{_options:{target:"+=1",event:"click"},_active:null,_init:function(){this.onDestroy=e.proxy(function(){this._destroy(),this.carousel().one("createend.jcarousel",e.proxy(this._create,this))},this),this.onReload=e.proxy(this._reload,this),this.onEvent=e.proxy(function(e){e.preventDefault(),this.carousel().jcarousel("scroll",this.options("target"))},this)},_create:function(){this.carousel().one("destroy.jcarousel",this.onDestroy).bind("reloadend.jcarousel scrollend.jcarousel",this.onReload),this._element.bind(this.options("event")+".jcarouselcontrol",this.onEvent),this._reload()},_destroy:function(){this._element.unbind(".jcarouselcontrol",this.onEvent),this.carousel().unbind("destroy.jcarousel",this.onDestroy).unbind("reloadend.jcarousel scrollend.jcarousel",this.onReload)},_reload:function(){var t=e.jCarousel.parseTarget(this.options("target")),n=this.carousel(),r;if(t.relative)r=n.jcarousel(t.target>0?"hasNext":"hasPrev");else{var i=typeof t.target!="object"?n.jcarousel("items").eq(t.target):t.target;r=n.jcarousel("target").index(i)>=0}return this._active!==r&&(this._trigger(r?"active":"inactive"),this._active=r),this}})}(jQuery),function(e){"use strict";e.jCarousel.plugin("jcarouselPagination",{_options:{perPage:null,item:function(e){return'<a href="#'+e+'">'+e+"</a>"}},_pages:{},_items:{},_init:function(){this.onDestroy=e.proxy(function(){this._destroy(),this.carousel().one("createend.jcarousel",e.proxy(this._create,this))},this),this.onReload=e.proxy(this._reload,this)},_create:function(){this.carousel().one("destroy.jcarousel",this.onDestroy).bind("reloadend.jcarousel",this.onReload),this._reload()},_destroy:function(){e.fn.jcarouselControl&&e.each(this._items,function(e,t){t.jcarouselControl("destroy")}),this._element.empty(),this.carousel().unbind("destroy.jcarousel",this.onDestroy).unbind("reloadend.jcarousel",this.onReload)},_reload:function(){var t=this.options("perPage");this._pages={},this._items={},e.isFunction(t)&&(t=t.call(this));if(t==null)this._pages=this._calculatePages();else{var n=parseInt(t,10)||0,r=this.carousel().jcarousel("items"),i=1,s=0,o;for(;;){o=r.eq(s++);if(o.size()===0)break;this._pages[i]?this._pages[i]=this._pages[i].add(o):this._pages[i]=o,s%n===0&&i++}}var u=this,a=this._element.empty(),f=this.options("item");e.each(this._pages,function(t,n){var r=u._items[t]=e(f.call(u,t,n));a.append(r),e.fn.jcarouselControl&&r.jcarouselControl({carousel:u.carousel(),target:n.eq(0)})})},items:function(){return this._items},_calculatePages:function(){var e=this.carousel().data("jcarousel"),t=e.items(),n=e.clipping(),r=0,i=0,s=1,o={},u;for(;;){u=t.eq(i++);if(u.size()===0)break;o[s]?o[s]=o[s].add(u):o[s]=u,r+=e.dimension(u),r>=n&&(s++,r=0)}return o}})}(jQuery),function(e){"use strict";e.jCarousel.plugin("jcarouselAutoscroll",{_options:{target:"+=1",interval:3e3,autostart:!0},_timer:null,_init:function(){this.onDestroy=e.proxy(function(){this._destroy(),this.carousel().one("createend.jcarousel",e.proxy(this._create,this))},this),this.onAnimateEnd=e.proxy(this.start,this)},_create:function(){this.carousel().one("destroy.jcarousel",this.onDestroy),this.options("autostart")&&this.start()},_destroy:function(){this.stop(),this.carousel().unbind("destroy.jcarousel",this.onDestroy)},start:function(){return this.stop(),this.carousel().one("animateend.jcarousel",this.onAnimateEnd),this._timer=setTimeout(e.proxy(function(){this.carousel().jcarousel("scroll",this.options("target"))},this),this.options("interval")),this},stop:function(){return this._timer&&(this._timer=clearTimeout(this._timer)),this.carousel().unbind("animateend.jcarousel",this.onAnimateEnd),this}})}(jQuery);/*! jCarousel - v0.3.0-beta - 2012-12-17
* http://sorgalla.com/jcarousel/
* Copyright 2012 Jan Sorgalla
* Released under the MIT license */
(function(e){"use strict";e.jCarousel.plugin("jcarouselControl",{_options:{target:"+=1",event:"click"},_active:null,_init:function(){this.onDestroy=e.proxy(function(){this._destroy(),this.carousel().one("createend.jcarousel",e.proxy(this._create,this))},this),this.onReload=e.proxy(this._reload,this),this.onEvent=e.proxy(function(e){e.preventDefault(),this.carousel().jcarousel("scroll",this.options("target"))},this)},_create:function(){this.carousel().one("destroy.jcarousel",this.onDestroy).bind("reloadend.jcarousel scrollend.jcarousel",this.onReload),this._element.bind(this.options("event")+".jcarouselcontrol",this.onEvent),this._reload()},_destroy:function(){this._element.unbind(".jcarouselcontrol",this.onEvent),this.carousel().unbind("destroy.jcarousel",this.onDestroy).unbind("reloadend.jcarousel scrollend.jcarousel",this.onReload)},_reload:function(){var t=e.jCarousel.parseTarget(this.options("target")),n=this.carousel(),r;if(t.relative)r=n.jcarousel(t.target>0?"hasNext":"hasPrev");else{var i=typeof t.target!="object"?n.jcarousel("items").eq(t.target):t.target;r=n.jcarousel("target").index(i)>=0}return this._active!==r&&(this._trigger(r?"active":"inactive"),this._active=r),this}})})(jQuery);
