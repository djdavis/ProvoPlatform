var $body = $('body');

$(function() {

    $('#side-menu').metisMenu();

    //Loads the correct sidebar on window load,
    //collapses the sidebar on window resize.
    // Sets the min-height of #page-wrapper to window size

    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }


    $('#sidebar_toggle').on('click', function(e) {
        e.preventDefault();
        $body.toggleClass('small_sidebar');

        if($body.hasClass('small_sidebar')) {
          //  $('#side-menu').find("li").has("ul").children("a").off("click.metisMenu").removeData("metisMenu");
            
        } else {
            $('#side-menu').metisMenu();
        }

        if( $body.hasClass('small_sidebar') ) {

            $('#side-menu [data-toggle="side_tooltip"]').tooltip({
                animation: false
            });
            $('#side-menu [data-toggle="side_tooltip_offset"]').tooltip({
                animation: false
            });

            $("[data-toggle=side_tooltip_offset]").hover(
                function(){
                    $('.tooltip').css('left',parseInt($('.tooltip').css('left')) + 160 + 'px')
                });

        } else {
            $('#side-menu [data-toggle="side_tooltip"]').tooltip('destroy');
            $('#side-menu [data-toggle="side_tooltip_offset"]').tooltip('destroy');
        }

    })

});