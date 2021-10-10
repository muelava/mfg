// scroll windows for navbar
window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.documentElement.scrollTop > 50) {
    document.getElementById("navbar").classList.add("colornav");
}else {
  // navbar
  document.getElementById("navbar").classList.remove("colornav");
  }

  // scrolll view
  // console.log(document.documentElement.scrollTop);
}



$('.nav-link').on('click', function(){

  let nav = $(this).html();
  $('section').hide();

    $(document).ajaxStart(function(){
      $('article').html('<center><img src="assets/img/loading.gif" class="my-5" width="250"></center>');
    })

      $.ajax({
        type:"POST",
        url:"content.php",
        data:{
         "nav":nav 
        },
        success:function(data){
          $(document).ajaxComplete(function(){
            $('article').html(data);
            $('.nav-link').click();
          })
        }
      })


})

// if scrol button up
$(window).scroll(function(){
  if(window.pageYOffset>=500){
    $('#btnTop').fadeIn("slow");    
  }else{
    $('#btnTop').fadeOut("slow");
  }
});

  $('#btnTop').click(topFunction)
  function topFunction() {
    // $(document).scrollTop(0);
    // $('body').scrollTop = 0;
    $('html,body').animate({scrollTop:0},1500,'easeInOutExpo');
  }

// if scroll animation
$(window).scroll(function(){
  if(window.pageYOffset>450){
    $(".back1").css({
      "transform":"scale(1)",
      "transition":".5s ease",
      "opacity":"1"
    });   
  }else{
    $(".back1").css({
      "transform":"scale(0)",
      "opacity":"0"
    });
  }
});

$(window).scroll(function(){
  if(window.pageYOffset>1500){
    $(".back2").css({
      "transform":"scale(1)",
      "transition":".5s ease",
      "opacity":"1"
    });   
  }else{
    $(".back2").css({
      "transform":"scale(0)",
      "opacity":"0"
    });
  }
});

$(window).scroll(function(){
  if(window.pageYOffset>2100){
    $(".back3").css({
      "transition":".5s ease",
      "opacity":"1"
    });   
  }else{
    $(".back3").css({
      "opacity":"0"
    });
  }
});

$(window).scroll(function(){
  if(window.pageYOffset>2600){
    $(".back4").css({
      "transform":"translateX(0%)",
      "transition":".5s ease",
      "opacity":"1"
    });   
  }else{
    $(".back4").css({
      "transform":"translateX(50%)",
      "opacity":"0"
    });
  }
});

$(window).scroll(function(){
  if(window.pageYOffset>3200){
    $("#back5").css({
      "transform":"translateX(0%)",
      "transition":".5s ease",
      "opacity":"1"
    });   
  }else{
    $("#back5").css({
      "transform":"translateX(-50%)",
      "opacity":"0"
    });
  }
});



// owlcarousel
$(document).ready(function($) {
  
  $('.loop').owlCarousel({
    center: true,
    items: 2,
      loop: true,
      autoplay:true,
      autoplayTimeout:5000,
      margin: 15,
      responsive: {
        600: {
          items: 2
        }
      }
  });

  $('.owl-carousel').owlCarousel({
    stagePadding: 50,
    loop:true,
    margin:15,
    autoplay:true,
    autoplayTimeout:2500,
    nav:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3,
        },
        1000:{
            items:6,
        }
    }
})


$('.carousel-mouse').on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
      $('.carousel-mouse').trigger('next.owl');
    } else {
      $('.carousel-mouse').trigger('prev.owl');
    }
    e.preventDefault();
});

});

