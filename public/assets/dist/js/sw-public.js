!function(t){var e={};function n(o){if(e[o])return e[o].exports;var r=e[o]={i:o,l:!1,exports:{}};return t[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=t,n.c=e,n.d=function(t,e,o){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:o})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)n.d(o,r,function(e){return t[e]}.bind(null,r));return o},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="/",n(n.s=0)}([function(t,e,n){t.exports=n(1)},function(t,e){!function(t){"use strict";function e(e,n,o){o.status&&(e.siblings(t(".sw-button-remove")).show(),e.hide()),isSinglePage&&t(".woocommerce-notices-wrapper").html(o.notice);var r=new CustomEvent("sw_add",{detail:{btn:e,id:n,result:o}});document.dispatchEvent(r)}function n(e,n,o){isProductPage&&(o.status&&(t("#sw-button-add-"+n).show(),t("#sw-button-remove-"+n).hide()),isSinglePage&&t(".woocommerce-notices-wrapper").html(o.notice)),isAccountPage&&t(".woocommerce-notices-wrapper").html(o.notice);var r=new CustomEvent("sw_remove",{detail:{btn:e,id:n,result:o}});document.dispatchEvent(r)}function o(e,n,o){t(".woocommerce-notices-wrapper").html(o.notice),isProductPage&&o.status&&(t(".sw-button-add").show(),t(".sw-button-remove").hide());var r=new CustomEvent("sw_clear",{detail:{btn:e,id:n,result:o}});document.dispatchEvent(r)}function r(t){var e=t?t.split("?")[1]:window.location.search.slice(1),n={};if(e)for(var o=(e=e.split("#")[0]).split("&"),r=0;r<o.length;r++){var a=o[r].split("="),s=a[0],i=void 0===a[1]||a[1];if(s=s.toLowerCase(),"string"==typeof i&&(i=i.toLowerCase()),s.match(/\[(\d+)?\]$/)){var u=s.replace(/\[(\d+)?\]/,"");if(n[u]||(n[u]=[]),s.match(/\[\d+\]$/)){var c=/\[(\d+)\]/.exec(s)[1];n[u][c]=i}else n[u].push(i)}else n[s]?n[s]&&"string"==typeof n[s]?(n[s]=[n[s]],n[s].push(i)):n[s].push(i):n[s]=i}return n}t(document).click((function(a){if(t(a.target).hasClass("sw-button-ajax")||!(t(a.target).parents(".sw-button-ajax").length<1)){var s;a.preventDefault(),t(a.target).hasClass("sw-button-ajax")&&(s=t(a.target)),t(a.target).parents(".sw-button-ajax").length>0&&(s=t(a.target).parents(".sw-button-ajax"));var i,u,c,l,d=s.attr("href");s.hasClass("sw-button-add")&&(c="sw-add",l=e),s.hasClass("sw-button-remove")&&(c="sw-remove",l=n),s.hasClass("sw-button-clear")&&(c="sw-clear",l=o),i=parseInt(r(d)[c]),u=r(d)["nonce-token"],t.ajax({url:ajaxURL,data:"action=sw_ajax&"+c+"="+i+"&nonce-token="+u+"&sw-ajax=1",success:function(e){e=JSON.parse(e);var n=t(".sw-content");n.length>0&&n.replaceWith(e.template),l(s,i,e)}})}}))}(jQuery)}]);