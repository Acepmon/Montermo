$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
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
});

$(document).ready(function() {
    $("#inbox_delete_btn").click(function() {
        var got_id = $(this).attr("data-target").split("-");
        var id = got_id[1];
        $.post("../backend/contact_inbox.php", {contact_inbox_id : id});
    });
    $('[brand_edit=change]').change(function() {
        if ($(this).is(":checked")) {
            $(this).nextAll("input").first().prop("required", true);
        } else {
            $(this).nextAll("input").first().removeProp("required");
        }
    });
    // $("#brand_edit").click(function() {
    //     var id = $(this).attr("value");
    //     $.post("../backend/brand_editing.php", {action : "get", id : id}, function(data) {
    //         var out = data.split(":::");
    //         console.log(out);
    //         var id = out[0];
    //         var title = out[1];
    //         var s_desc = out[2];
    //         var desc = out[3];
    //         var logo = out[4];
    //         var lang = out[5];
    //         $("#brand_edit_title").val(title);
    //         $("#brand_edit_s_desc").val(s_desc);
    //         $("#brand_edit_desc").val(desc);
    //         $("#brand_edit_logo").attr("src", "../../images/brand_images/"+logo);
    //         if (lang === "english") {
    //             $("#brand_edit_lang").attr('selectedIndex', 0);
    //         } else if (lang === "mongolian") {
    //             $("#brand_edit_lang").attr('selectedIndex', 1);
    //         }
    //     });
    // });

    
});
