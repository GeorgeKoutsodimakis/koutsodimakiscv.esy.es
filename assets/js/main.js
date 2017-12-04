
//parallax
  $(function(){

  //cache the window object
  var $window = $(window);

  //parallax background effect
  $('section[data-type="background"]').each(function(){

    var $bobj = $(this);//assigning the object

    $(window).scroll(function(){
      //scroll the backgroud at var speed
      // the ypos is a negative value beacuse we're scrolling it UP!

      var yPos = - ($window.scrollTop() / $bobj.data('speed'));
      //put together our final background position

      var coords = '50%' + yPos + 'px';

      //move the background
      $bobj.css({backgroundPosition: coords});

    });//end window scroll
  });
});;



//smooth scrolling
      $(function() {
			     $('ul a').click(function() {
			          var $anchor = $(this);

			             $('html, body').animate({
			                  scrollTop: $($anchor.attr('href')).offset().top
			                   }, 2000);
			                      return false;
			                         helpers : {
			                            }
			                             });
			});



//go to top
      $(function(){
          $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span></div>');
          	 $(window).scroll(function () {
      			      if ($(this).scrollTop() != 0) {
      				          $('#toTop').fadeIn();
      			             } else {
      				                 $('#toTop').fadeOut();
      			                    }
      		                      });
                                $('#toTop').click(function(){
                                  $("html, body").animate({ scrollTop: 0 }, 600);
                                  return false;
                                });
      });
