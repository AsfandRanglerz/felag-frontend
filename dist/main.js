$((function(){var a=(new Date).getFullYear();$(".footer #current-year").text(a),0!=$(window).scrollTop()&&($(".header-navbar").addClass("bg-white light-box-shadow"),$(window).width()>=992&&$(".sign-in-btn").css({border:"2px solid #48a955",color:"#48a955"}),$(".header-navbar .navbar-links .nav-link").css({color:"#000","text-shadow":"unset"}),$(".header-navbar .navbar-brand .feelag-logo").css("filter","invert(1)")),$(window).on("scroll",(function(){$(".header-navbar").addClass("bg-white light-box-shadow"),$(window).width()>=992&&($(".sign-in-btn").css({border:"2px solid #48a955",color:"#48a955"}),0==$(window).scrollTop()&&$(".sign-in-btn").css({border:"2px solid #FFF",color:"#FFF"})),$(".header-navbar .navbar-links .nav-link").css({color:"#000","text-shadow":"unset"}),$(".header-navbar .navbar-brand .feelag-logo").css("filter","invert(1)"),0==$(window).scrollTop()&&($(".header-navbar").removeClass("bg-white light-box-shadow"),$(".header-navbar .navbar-links .nav-link").css({color:"","text-shadow":""}),$(".header-navbar .navbar-brand .feelag-logo").css("filter",""))})),$(window).width()>=992&&$(".header-navbar .navbar-nav .nav-item.dropdown").hover((function(){$(this).addClass("show"),$(this).find(".dropdown-menu").addClass("show")}),(function(){$(this).removeClass("show"),$(this).find(".dropdown-menu").removeClass("show")})),$(window).resize((function(){$(window).width()>=992&&$(".header-navbar .navbar-nav .nav-item.dropdown").hover((function(){$(this).addClass("show"),$(this).find(".dropdown-menu").addClass("show")}),(function(){$(this).removeClass("show"),$(this).find(".dropdown-menu").removeClass("show")}))}))}));
//# sourceMappingURL=main.js.map