!function(b){var a={};b(function(){a.Load()}),a.Load=function(){if(1==b("#counter").length){var c;if(c=b("#counter").text(),c=parseInt(c,10),TheLink=b("#link").attr("href"),0===c){switch(Link.exit){case"btn":b(".counter").remove(),b(".text").fadeIn(2e3),b("#link").fadeIn(700);break;case"clo":window.location.replace(TheLink);}return}c--,b("#counter").html(c),setTimeout(a.Load,1e3)}}}(jQuery);
