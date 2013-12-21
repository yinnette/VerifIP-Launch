

$(function() {
    $("a[href*=#]:not([href=#])").click(function() {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") || location.hostname == this.hostname) {
            var n = $(this.hash);
            if (n = n.length ? n : $("[name=" + this.hash.slice(1) + "]"), n.length)
                return $("html,body").animate({scrollTop: n.offset().top - $("header").height()}, 1500, function() {
                    $("html,body").animate({scrollTop: n.offset().top - $("header").height()}, 1e3)
                }), !1
        }
    })
})


