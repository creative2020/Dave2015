(function(a){a.fn.tweetscroll=function(c){var f={limit:5,visible_tweets:2,speed:600,delay:3000,username:"envatowebdesign",time:false,replies:false,date_format:"style1",animation:"slide_up",url_new_window:false,request_url:"twitter/tweets.php",logo:false,profile_image:false};var e=a.extend({},f,c);if(isNaN(e.speed)){e.speed=600;}if(isNaN(e.delay)){e.delay=3000;}e.instance_id=a(this).attr("data-instance-id");if(!e.instance_id){e.instance_id="";}e.action="pi_tweetscroll_ajax";return this.each(function(h){var g=a(this);var i;if(typeof(PiTweetScroll)=="undefined"){var j=e.request_url;}else{var j=PiTweetScroll.ajaxrequests;}if(e.animation==false){e.limit=e.visible_tweets;}a.getJSON(j,e,function(m){i=d(m,e);a(i).appendTo(g);k(i);setTimeout(function(){l(i);},e.delay);});function l(u){var t=e.speed;switch(e.animation){case"slide_down":var o=u.find("li").outerHeight();var m=0;var n=e.visible_tweets;for(var s=1;s<n;s++){var p=u.find("li:nth-child("+s+")");m+=a(p).outerHeight();}var r=parseInt(u.find("li:last").outerHeight());m+=r;u.parent().css({height:m});u.animate({bottom:-r},t,"linear",function(){u.find("li:first").before(u.find("li:last"));u.css({bottom:0});window.setTimeout(function(){l(u);},e.delay);});break;case"slide_up":var o=u.find("li").outerHeight();var m=0;var n=e.visible_tweets+2;for(var s=2;s<n;s++){var p=u.find("li:nth-child("+s+")");m+=a(p).outerHeight();}u.parent().css({height:m});u.animate({top:-o},t,"linear",function(){u.find("li:last").after(u.find("li:first"));u.css({top:0});window.setTimeout(function(){l(u);},e.delay);});break;case"fade":var o=u.outerHeight();var m=0;var q=parseInt(u.css("top"))+o;u.animate({opacity:0},t,"linear",function(){var x=u.find("li:lt("+e.visible_tweets+")");u.find("li:last").after(a(x));for(var w=1;w<=e.visible_tweets;w++){var v=u.find("li:nth-child("+w+")");m+=a(v).outerHeight();}u.parent().css({height:m});u.animate({opacity:1});window.setTimeout(function(){l(u);},e.delay);});break;}}function k(p){var q=0;if(e.animation=="slide_down"){var n=e.visible_tweets+1;for(var o=1;o<n;o++){var m=p.find("li:nth-child("+o+")");q+=a(m).outerHeight();}p.parent().css({height:q});p.css({bottom:0});}else{if(e.animation=="slide_up"){var n=e.visible_tweets+1;for(var o=1;o<n;o++){var m=p.find("li:nth-child("+o+")");q+=a(m).outerHeight();}p.parent().css({height:q});}else{if(e.animation=="fade"){var n=e.visible_tweets+1;for(var o=1;o<n;o++){var m=p.find("li:nth-child("+o+")");q+=a(m).outerHeight();}p.parent().css({height:q});}}}}});function b(m){var o=new Date();var k=new Date(m);if(a.browser.msie){k=Date.parse(m.replace(/( \+)/," UTC$1"));}var n=o-k;var h=1000,i=h*60,j=i*60,l=j*24,g=l*7;if(isNaN(n)||n<0){return"";}if(n<h*2){return"right now";}if(n<i){return Math.floor(n/h)+" seconds ago";}if(n<i*2){return"about 1 minute ago";}if(n<j){return Math.floor(n/i)+" minutes ago";}if(n<j*2){return"about 1 hour ago";}if(n<l){return Math.floor(n/j)+" hours ago";}if(n>l&&n<l*2){return"yesterday";}if(n<l*365){return Math.floor(n/l)+" days ago";
}else{return"over a year ago";}}function d(i,j){var l;var h="";var g=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];var k=["January","February","March","April","May","June","July","August","Septemper","October","November","December"];a.each(i,function(m,n){var o=n.user.profile_image_url;if(m==0){l=a('<ul class="tweet-list">');if(j.logo){l.addClass("twitter-logo");}}if(j.replies===false){if(n.in_reply_to_status_id===null){if(j.profile_image){l.append('<li class="profile-image tweet_content_'+m+'" style="background: url('+o+') no-repeat left top;"><p class="tweet_link_'+m+'">'+n.text.replace(/#(.*?)(\s|$)/g,'<span class="hash">#$1 </span>').replace(/(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig,'<a href="$&">$&</a> ').replace(/@(.*?)(\s|\(|\)|$)/g,'<a href="http://twitter.com/$1">@$1 </a>$2')+"</p></li>");}else{l.append('<li class="tweet_content_'+m+'"><p class="tweet_link_'+m+'">'+n.text.replace(/#(.*?)(\s|$)/g,'<span class="hash">#$1 </span>').replace(/(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig,'<a href="$&">$&</a> ').replace(/@(.*?)(\s|\(|\)|$)/g,'<a href="http://twitter.com/$1">@$1 </a>$2')+"</p></li>");}}}else{if(j.profile_image){l.append('<li class="profile-image tweet_content_'+m+'" style="background: url('+o+') no-repeat left top;"><p class="tweet_link_'+m+'">'+n.text.replace(/#(.*?)(\s|$)/g,'<span class="hash">#$1 </span>').replace(/(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig,'<a href="$&">$&</a> ').replace(/@(.*?)(\s|\(|\)|$)/g,'<a href="http://twitter.com/$1">@$1 </a>$2')+"</p></li>");}else{l.append('<li class="tweet_content_'+m+'"><p class="tweet_link_'+m+'">'+n.text.replace(/#(.*?)(\s|$)/g,'<span class="hash">#$1 </span>').replace(/(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig,'<a href="$&">$&</a> ').replace(/@(.*?)(\s|\(|\)|$)/g,'<a href="http://twitter.com/$1">@$1 </a>$2')+"</p></li>");}}if(j.time==true){var p=jQuery.inArray(n.created_at.substr(4,3),g);if(j.date_format=="style1"){h=p+1;if(h<10){h="0"+h;}l.find(".tweet_link_"+m).append("<small> "+n.created_at.substr(8,2)+"/"+h+"/"+n.created_at.substr(26,4)+" "+n.created_at.substr(11,8)+"</small>");}else{if(j.date_format=="style2"){h=k[p];l.find(".tweet_link_"+m).append("<small> "+h+" "+n.created_at.substr(8,2)+", "+n.created_at.substr(26,4)+" "+n.created_at.substr(11,8)+"</small>");}else{relativeTime=b(n.created_at);l.find(".tweet_link_"+m).append("<small> "+relativeTime+"</small>");}}}});if(j.animation=="slide_down"){l.find("li").each(function(){a(this).prependTo(a(this).parent());});}if(j.url_new_window==true){l.find("a").each(function(){a(this).attr({target:"_BLANK"});});}return l;}};})(jQuery);