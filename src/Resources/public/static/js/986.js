(window["webpackJsonpPluginnwgncy-product-configurator"]=window["webpackJsonpPluginnwgncy-product-configurator"]||[]).push([[986],{47:function(){},102:function(e,n,t){"use strict";t.r(n),t.d(n,{default:function(){return r}}),t(938);var r={template:'{% block sw_cms_element_nwgncy_product_configuration_preview %}\n    <div class="sw-cms-el-preview-nwgncy-product-configuration">\n        <p>{{ $tc(\'sw-cms.elements.preview.name\') }}</p>\n        <hr>\n        <div class="sw-cms-el-nwgncy-product-configuration-placeholder-listing">\n            <div class="sw-cms-el-nwgncy-product-configuration__placeholder"></div>\n            <hr>\n            <div class="sw-cms-el-nwgncy-product-configuration__placeholder"></div>\n            <div class="sw-cms-el-nwgncy-product-configuration__placeholder--subcategory"></div>\n            <div class="sw-cms-el-nwgncy-product-configuration__placeholder--subcategory"></div>\n        </div>\n    </div>\n{% endblock %}'}},938:function(e,n,t){var r=t(47);r.__esModule&&(r=r.default),"string"==typeof r&&(r=[[e.id,r,""]]),r.locals&&(e.exports=r.locals),t(346).Z("f613501e",r,!0,{})},346:function(e,n,t){"use strict";function r(e,n){for(var t=[],r={},s=0;s<n.length;s++){var o=n[s],i=o[0],a={id:e+":"+s,css:o[1],media:o[2],sourceMap:o[3]};r[i]?r[i].parts.push(a):t.push(r[i]={id:i,parts:[a]})}return t}t.d(n,{Z:function(){return v}});var s="undefined"!=typeof document;if("undefined"!=typeof DEBUG&&DEBUG&&!s)throw Error("vue-style-loader cannot be used in a non-browser environment. Use { target: 'node' } in your Webpack config to indicate a server-rendering environment.");var o={},i=s&&(document.head||document.getElementsByTagName("head")[0]),a=null,c=0,d=!1,u=function(){},l=null,p="data-vue-ssr-id",f="undefined"!=typeof navigator&&/msie [6-9]\b/.test(navigator.userAgent.toLowerCase());function v(e,n,t,s){d=t,l=s||{};var i=r(e,n);return g(i),function(n){for(var t=[],s=0;s<i.length;s++){var a=o[i[s].id];a.refs--,t.push(a)}n?g(i=r(e,n)):i=[];for(var s=0;s<t.length;s++){var a=t[s];if(0===a.refs){for(var c=0;c<a.parts.length;c++)a.parts[c]();delete o[a.id]}}}}function g(e){for(var n=0;n<e.length;n++){var t=e[n],r=o[t.id];if(r){r.refs++;for(var s=0;s<r.parts.length;s++)r.parts[s](t.parts[s]);for(;s<t.parts.length;s++)r.parts.push(m(t.parts[s]));r.parts.length>t.parts.length&&(r.parts.length=t.parts.length)}else{for(var i=[],s=0;s<t.parts.length;s++)i.push(m(t.parts[s]));o[t.id]={id:t.id,refs:1,parts:i}}}}function h(){var e=document.createElement("style");return e.type="text/css",i.appendChild(e),e}function m(e){var n,t,r=document.querySelector("style["+p+'~="'+e.id+'"]');if(r){if(d)return u;r.parentNode.removeChild(r)}if(f){var s=c++;n=y.bind(null,r=a||(a=h()),s,!1),t=y.bind(null,r,s,!0)}else n=b.bind(null,r=h()),t=function(){r.parentNode.removeChild(r)};return n(e),function(r){r?(r.css!==e.css||r.media!==e.media||r.sourceMap!==e.sourceMap)&&n(e=r):t()}}var w=function(){var e=[];return function(n,t){return e[n]=t,e.filter(Boolean).join("\n")}}();function y(e,n,t,r){var s=t?"":r.css;if(e.styleSheet)e.styleSheet.cssText=w(n,s);else{var o=document.createTextNode(s),i=e.childNodes;i[n]&&e.removeChild(i[n]),i.length?e.insertBefore(o,i[n]):e.appendChild(o)}}function b(e,n){var t=n.css,r=n.media,s=n.sourceMap;if(r&&e.setAttribute("media",r),l.ssrId&&e.setAttribute(p,n.id),s&&(t+="\n/*# sourceURL="+s.sources[0]+" */\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(s))))+" */"),e.styleSheet)e.styleSheet.cssText=t;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(t))}}}}]);
//# sourceMappingURL=986.js.map