$(function(){$(".control").click(function(){$("body").addClass("mode-search"),$(".input-search").focus()}),$(".icon-close").click(function(){$("body").removeClass("mode-search")})}),$(function(){var n=document.getElementById("morphsearch"),t=n.querySelector("input.morphsearch-input"),e=n.querySelector("span.morphsearch-close"),o=isAnimating=!1,c=function(e){if("focus"===e.type.toLowerCase()&&o)return!1;morphsearch.getBoundingClientRect();o?(classie.remove(n,"open"),""!==t.value&&setTimeout(function(){classie.add(n,"hideInput"),setTimeout(function(){classie.remove(n,"hideInput"),t.value=""},300)},500),t.blur()):classie.add(n,"open"),o=!o};t.addEventListener("focus",c),e.addEventListener("click",c),document.addEventListener("keydown",function(e){27===(e.keyCode||e.which)&&o&&c(e)}),n.querySelector('button[type="submit"]').addEventListener("click",function(e){e.preventDefault()})});