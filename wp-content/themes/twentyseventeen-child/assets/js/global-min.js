!function(o){var n=o("body"),e=n.find(".custom-header"),t=e.find(".site-branding"),i=n.find(".navigation-top"),s=i.find(".wrap"),a=i.find(".menu-item"),r=i.find(".menu-toggle"),d=n.find(".menu-scroll-down"),c=n.find("#secondary"),l=n.find(".entry-content"),u=n.find(".format-quote blockquote"),h=n.hasClass("twentyseventeen-front-page")||n.hasClass("home blog"),m="site-navigation-fixed",f,g,p,b,w,v,y,C=0,x;function T(){f=i.height(),g=i.outerHeight(),p=2*parseFloat(s.css("padding-top")),b=2*a.outerHeight(),v=f<=(w=p+b)}function k(){"none"===r.css("display")&&(v?(y=h&&(n.hasClass("has-header-image")||n.hasClass("has-header-video"))?e.innerHeight()-g:e.innerHeight(),o(window).scrollTop()>=y?i.addClass(m):i.removeClass(m)):i.removeClass(m))}function q(){"none"===r.css("display")?h?t.css("margin-bottom",g):e.css("margin-bottom",g):(e.css("margin-bottom","0"),t.css("margin-bottom","0"))}function E(){o(twentyseventeenScreenReaderText.quote).prependTo(u)}function H(e){var t,s;!n.hasClass("has-sidebar")||n.hasClass("search")||n.hasClass("single-attachment")||n.hasClass("error404")||n.hasClass("twentyseventeen-front-page")||(t=c.offset(),s=t.top+(c.height()+28),l.find(e).each(function(){var e=o(this),t,n=e.offset().top;s<n?e.addClass("below-entry-meta"):e.removeClass("below-entry-meta")}))}function A(){var e=document.createElement("div");return e.innerHTML="<svg/>","http://www.w3.org/2000/svg"===("undefined"!=typeof SVGRect&&e.firstChild&&e.firstChild.namespaceURI)}function S(){return/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream}function N(){var e=document.createElement("div"),t;try{return"backgroundAttachment"in e.style&&!S()&&(t=(e.style.backgroundAttachment="fixed")===e.style.backgroundAttachment)}catch(e){return!1}}o("a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, [tabindex], [contenteditable]",".site-content-contain").filter(":visible").focus(function(){if(i.hasClass("site-navigation-fixed")){var e=o(window).scrollTop(),t=i.height(),n=o(this).offset().top,s=n-e;o("#wpadminbar").length&&(s-=o("#wpadminbar").height()),s<t&&o(window).scrollTo(n-(t+50),0)}}),o(document).ready(function(){o(".home .responsive-menu-button").css("right","4px"),o(window).scroll(function(){0<o(window).scrollTop()?(o(".sticky-site-branding").css("height","60px"),o(".home .responsive-menu-button").css("top","4px")):(o(".sticky-site-branding").css("height","0px"),o(".home .responsive-menu-button").css("top","80px"))}),i.length&&(T(),k()),d.length&&(o("body").hasClass("admin-bar")&&(C-=32),o("body").hasClass("blog")&&(C-=30),i.length||(g=0),d.click(function(e){e.preventDefault(),o(window).scrollTo("#primary",{duration:600,offset:{top:C-g}})})),q(),E(),!0===A()&&(document.documentElement.className=document.documentElement.className.replace(/(\s*)no-svg(\s*)/,"$1svg$2")),!0===N()&&(document.documentElement.className+=" background-fixed")}),i.length&&(o(window).on("scroll",function(){k(),q()}),o(window).resize(function(){T(),setTimeout(k,500)})),o(window).resize(function(){clearTimeout(x),x=setTimeout(function(){H("blockquote.alignleft, blockquote.alignright")},300),setTimeout(q,1e3)}),o(document).on("wp-custom-header-video-loaded",function(){n.addClass("has-header-video")}),o(".site-branding").hasClass("site-branding-mini")&&o("#responsive-menu-button").css({top:"4px",right:"4px"})}(jQuery);