$(document).ready(function () {
  var myScrollSpy = $("#myScrollSpy").offset().top;

  $(window).scroll(function () {

    var scrollbarLocation = $(window).scrollTop();


    // Up button
    if (scrollbarLocation > 500) {
      $("#up").show(300);
    } else {
      $("#up").hide(300);
    }

    //Fixed nav-bar
    function scrollFunction() {
      // console.log(scrollbarLocation);
      // console.log(myScrollSpy);

      if (scrollbarLocation > myScrollSpy) {
        $("#myScrollSpy").css({
          "position": "fixed",
          "top": "0",
          "z-index": "150",
          // "padding-bottom":"450px"
        });
        // $("#section1").css({
        //   "margin-top":"100px"
        // })
        $("#title").css({
          "display": "flex"
        });
        $("#title1").css({
          "font-size": "20px",
          "width": "70%"
        });
        if ($( window ).width() < 576){

          $("#myScrollSpy").css({
            "position": "fixed",
            "top": "0",
            "left": "90%",
            "z-index": "150",
          });
          $("#navbarNav").css({
            "right": "0"
          });
          var ind=($("#clear").length);
          if(ind!=1){
          $(".container__scroll").append(
         `<div id="clear" style="clear:both;"></div>`)
          }
        }
      } else {
        $("#myScrollSpy").css({
          "position": "inherit",
          "top": "inherit",
          "z-index": "inherit",
          // "width":"1140px !important"
        });
        $("#title").css({
          "display": "block"
        });
        $("#title1").css({
          "font-size": "25px",
        });
      }


    }
    scrollFunction()
  });


  $(".nav-link").click(function () {
    let target = $(this).attr("href");
    var scroll = $(target).offset().top - $("#section1").offset().top;
    // alert(scroll)
    $('.container__scroll').stop().animate({
      scrollTop: scroll
    }, 600);

    $('body,html').animate({
      scrollTop: myScrollSpy
    }, 700);
    console.log(myScrollSpy);
    event.preventDefault();

  });


  // Up button
  $('#up').click(function (elem) {
    elem.preventDefault();
    $('body,html').animate({
      scrollTop: $('#home').offset().top
    }, 700);

  });


});



window.onload = function () {
  $('body,html').scrollTop(0);


  // function getSelectedValues() {
  //   var selectedVal = $(".multiselect").val();
  //   for (var i = 0; i < selectedVal.length; i++) {
  //     var innerFunc = function innerFunc(i) {
  //       setTimeout(function () {
  //         location.href = selectedVal[i];
  //       }, i * 2000);
  //     };
  //     if (window.CP.shouldStopExecution(0)) break;
  //     innerFunc(i);
  //   }
  //   window.CP.exitedLoop(0);
  // }

  $(".btnrating").on('click', (function (e) {

    var previous_value = $("#selected_rating").val();

    var selected_value = $(this).attr("data-attr");
    $("#selected_rating").val(selected_value);

    $(".selected-rating").empty();
    $(".selected-rating").html(selected_value);

    for (i = 1; i <= selected_value; ++i) {
      $("#rating-star-" + i).toggleClass('btn-warning');
      $("#rating-star-" + i).toggleClass('btn-default');
    }

    for (ix = 1; ix <= previous_value; ++ix) {
      $("#rating-star-" + ix).toggleClass('btn-warning');
      $("#rating-star-" + ix).toggleClass('btn-default');
    }

  }));


};



function initialize() {
  var myLatlng = new google.maps.LatLng(16.053763, 108.201557);
  var mapOptions = {
    zoom: 12,
    center: myLatlng
  };
  var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
  var marker = new google.maps.Marker({
    position: myLatlng,
    title: 'Hello World!'
  });

  marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
