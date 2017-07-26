$(document).ready(function(){
            $("#mycarousel").carousel( { interval: 10000 } );
                          $("#carousel-pause").click(function(){
                $("#mycarousel").carousel('pause');
            });
                        $("#carousel-play").click(function(){
                $("#mycarousel").carousel('cycle');
            });
        });
          
        function openModal(){
    $('#loginModal').modal();
        } 
        function openModal1(){
     $('#registerModal').modal();
        }
             var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
    $('.bg1').css('height', (jumboHeight-scrolled) + 'px');
    $('.bg2').css('height', (jumboHeight-scrolled) + 'px');
    $('.bg3').css('height', (jumboHeight-scrolled) + 'px');
    $('.bg4').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});