$(document).ready(function(){

        $(".mb").on("click", function(){
            $("nav ul").toggleClass("show");
        });
});



$(".message.sent:last").addClass("intro");

// $(function () {
//     $('main').animate({
//         scrollTop: $("div.message").last().offset().top
//     },
//         'slow');
// });