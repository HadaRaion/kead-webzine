!function(){"use strict";var e,t={966:function(){window.addEventListener("load",(()=>{let e=.01*window.innerHeight;document.documentElement.style.setProperty("--vh",`${e}px`),window.addEventListener("resize",(()=>{let e=.01*window.innerHeight;document.documentElement.style.setProperty("--vh",`${e}px`)}))}));const e=document.querySelector(".hamburger-menu"),t=document.querySelector(".site-nav"),n=document.querySelector(".alert-exit-menu");e.addEventListener("click",(n=>{e.classList.toggle("open"),t.classList.toggle("active"),document.querySelector(body).classList.toggle("fix-position")})),n.addEventListener("focus",(()=>{e.classList.remove("open"),t.classList.remove("active"),document.querySelector(body).classList.remove("fix-position")}));const o=document.querySelector(".kead-audio__btn"),r=document.querySelector(".kead-audio__player");o&&o.addEventListener("click",(()=>{r.paused?r.play():r.pause()}));const c=document.querySelector(".btn--copy-url");c&&c.addEventListener("click",(()=>function(){let e=window.location.href;navigator.clipboard.writeText(e).then((e=>{alert("URL이 복사 되었습니다. 원하시는 곳에 붙여넣기 해 주세요.")}))}()));const i=document.querySelector(".btn--go-to-top");function l(){document.body.scrollTop=0,document.documentElement.scrollTop=0}i&&i.addEventListener("click",(()=>l())),window.onscroll=function(){document.body.scrollTop>20||document.documentElement.scrollTop>20?s.classList.add("active"):s.classList.remove("active")};const s=document.querySelector(".scroll-to-top");s&&s.addEventListener("click",(()=>l()))}},n={};function o(e){var r=n[e];if(void 0!==r)return r.exports;var c=n[e]={exports:{}};return t[e](c,c.exports,o),c.exports}o.m=t,e=[],o.O=function(t,n,r,c){if(!n){var i=1/0;for(d=0;d<e.length;d++){n=e[d][0],r=e[d][1],c=e[d][2];for(var l=!0,s=0;s<n.length;s++)(!1&c||i>=c)&&Object.keys(o.O).every((function(e){return o.O[e](n[s])}))?n.splice(s--,1):(l=!1,c<i&&(i=c));if(l){e.splice(d--,1);var u=r();void 0!==u&&(t=u)}}return t}c=c||0;for(var d=e.length;d>0&&e[d-1][2]>c;d--)e[d]=e[d-1];e[d]=[n,r,c]},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e={826:0,431:0};o.O.j=function(t){return 0===e[t]};var t=function(t,n){var r,c,i=n[0],l=n[1],s=n[2],u=0;if(i.some((function(t){return 0!==e[t]}))){for(r in l)o.o(l,r)&&(o.m[r]=l[r]);if(s)var d=s(o)}for(t&&t(n);u<i.length;u++)c=i[u],o.o(e,c)&&e[c]&&e[c][0](),e[c]=0;return o.O(d)},n=self.webpackChunkkead_webzine_theme=self.webpackChunkkead_webzine_theme||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))}();var r=o.O(void 0,[431],(function(){return o(966)}));r=o.O(r)}();