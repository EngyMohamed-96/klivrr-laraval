new WOW().init();


if ($('body').hasClass('accountpage')) {
    accountPage();
} else if ($('body').hasClass('homepage')) {
    homePage();
} else if ($('body').hasClass('booking')) {
    bookingpage();
} else if ($('body').hasClass('rewards')) {
    rewardspage();
} else if ($('body').hasClass('payment')) {
    paymentpage();
} else if ($('body').hasClass('about-page')) {
    aboutpage();
}

function homePage() {
    var firstTl = gsap.timeline({
        paused: true
    });


    // Start hide first scene
    firstTl.to('.first-scene .data-logos ', 0.3, {
            opacity: 0,
        })



        .to('.first-scene .first-scene-wrapper .primary-title.one ', 0.3, {
            opacity: 0,
            position: 'relative',
            top: '-2rem',
            display: 'none'
        })










        // ----------------------------------------
        // START SHOW
        .fromTo('.first-scene .first-scene-wrapper .primary-title.second', 0.3, {
            opacity: 0,
            display: 'none',
            position: 'relative',
        }, {
            opacity: 1,
            position: 'relative',
            display: 'block'
        })


        .to('.first-scene .first-scene-wrapper .primary-title.second ', 0.3, {
            opacity: 0,
            position: 'relative',
            top: '-2rem',
            display: 'none'
        })

        .fromTo('.first-scene .first-scene-wrapper .primary-title.three', 0.3, {
            opacity: 0,
            display: 'none',
            position: 'relative',
        }, {
            opacity: 1,
            position: 'relative',
            display: 'block'
        })

        .to('.first-scene .first-scene-wrapper .primary-title.three ', 0.3, {
            opacity: 0,
            position: 'relative',
            top: '-2rem',
            display: 'none'
        })



        .fromTo('.first-scene .first-scene-wrapper .primary-title.four', 0.3, {
            opacity: 0,
            display: 'none',
            position: 'relative',
        }, {
            opacity: 1,
            position: 'relative',
            display: 'block'
        })





    ScrollTrigger.create({
        animation: firstTl,
        trigger: "#panels",
        start: "top top",
        end: "=+1000",
        pin: true,
        markers: true,
        scrub: 2,
    });

}

function accountPage() {

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll < 950) {
            $(" #Charts_Area_charts_Single-01-small").removeClass("show");
            $(" #Donut_size_05-color-03").removeClass("show");
            $(" #Charts_Donut_size-01").removeClass("show");
            $(" #Category-01").removeClass("show");
            $(" #Category-02").removeClass("show");
        } else {
            $(" #Charts_Area_charts_Single-01-small").addClass("show");
            $(" #Donut_size_05-color-03").addClass("show");
            $("  #Charts_Donut_size-01").addClass("show");
            $("  #Category-01").addClass("show");
            $("  #Category-02").addClass("show");
        }

    })




    // To make this code work in account page only
    TweenMax.fromTo('.one img ', 1, {
        opacity: 0,
        y: -50
    }, {
        opacity: 1,
        y: 0,
        stagger: '0.2'
    });


    // Contactless
    var ContactlessTl = gsap.timeline({
        paused: true
    });



    ContactlessTl.fromTo('.Contactless .img-container img', 0.3, {

      y: '30px',
      ease: Power3.out
  }, {
  
      y: '0',
      ease: Power3.out
  
  })
  
  ScrollTrigger.create({
    animation: ContactlessTl,
    trigger: ".Contactless",
      start: "+=200 center",
      end: "bottom +=900",
      pin: true,
      markers: true,
      scrub: 1.75,
  });


  
// END Contactless






// request
var requestTl = gsap.timeline({
    paused: true
});


requestTl.fromTo('.account-rec ', 6, {
    y: '2rem',
    ease: Power3.out
}, {
    y: "-3rem",
    ease: Power3.out
}, '-=3')

ScrollTrigger.create({
    animation: requestTl,
    trigger: ".request",
    start: "+=200 center",
    end: "bottom +=900",
    pin: true,
    markers: true,
    scrub: 1.75,
});

// END request







    // confidence
    var confidenceTl = gsap.timeline({
      paused: true
  });



  confidenceTl.fromTo('.confidence .img-container img', 0.3, {

    y: '30px',
    ease: Power3.out
}, {

    y: '0',
    ease: Power3.out

})

ScrollTrigger.create({
  animation: confidenceTl,
  trigger: ".confidence",
    start: "+=200 center",
    end: "bottom +=900",
    pin: true,
    markers: true,
    scrub: 1.75,
});



// END Contactless


















// Start fastsection animation
var fastTl = gsap.timeline({
    paused: true
});

fastTl.fromTo('.fast .img-container img', 0.3, {

    y: '30px',
    ease: Power3.out
}, {

    y: '0',
    ease: Power3.out

})

ScrollTrigger.create({
    animation: fastTl,
    trigger: ".fast",
    start: "+=200 center",
    end: "bottom +=900",
    pin: true,
    markers: true,
    scrub: 1.75,
});

var endTl = gsap.timeline({
    paused: true
});

endTl.fromTo('.endless .img-container img', 0.3, {

    y: '30px',
    ease: Power3.out
}, {

    y: '0',
    ease: Power3.out

})
ScrollTrigger.create({
    animation: endTl,
    trigger: ".endless",
    start: "+=200 center",
    end: "bottom +=900",
    pin: true,
    markers: true,
    scrub: 1.75,
});


// End fastsection animation


// Start compatibility animation
var CompatibilityTl = gsap.timeline({
    paused: true
});

CompatibilityTl.fromTo('.Compatibility .img-container img ', 0.3, {
    y: '30px',
    ease: Power3.out
}, {

    y: '0',
    ease: Power3.out

})


ScrollTrigger.create({
    animation: CompatibilityTl,
    trigger: ".Compatibility",
    start: "+=200 center",
    end: "bottom +=900",
    pin: true,
    markers: true,
    scrub: 1.75,
});
// End compatibility animation



}

function bookingpage() {

    // start event
    var eventTl = gsap.timeline({
        paused: true
    });

    eventTl.fromTo('.event .img-container img', 3, {
        y: '1rem',
        position: 'relative',
        ease: Power3.out
    }, {
        y: "0",
        ease: Power3.out

    })

    eventTl.fromTo('.account-rec ', 6, {
        y: '2rem',
        ease: Power3.out
    }, {
        y: "-3rem",
        ease: Power3.out
    }, '-=3')

    ScrollTrigger.create({
        animation: eventTl,
        trigger: ".event",
        start: "+=200 center",
        end: "bottom +=900",
        pin: true,
        markers: true,
        scrub: 1.75,
    });

    // END event



    // start cinemas
    var cinemasTl = gsap.timeline({
        paused: true
    });

    cinemasTl.fromTo('.cinemas .img-container img', 3, {
        y: '1rem',
        position: 'relative',
        ease: Power3.out
    }, {
        y: "0",
        ease: Power3.out

    })

    cinemasTl.fromTo('.account-rec ', 6, {
        y: '2rem',
        ease: Power3.out
    }, {
        y: "-3rem",
        ease: Power3.out
    }, '-=3')

    ScrollTrigger.create({
        animation: cinemasTl,
        trigger: ".cinemas",
        start: "+=200 center",
        end: "bottom +=900",
        pin: true,
        markers: true,
        scrub: 1.75,
    });

    // END cinemas

}

function rewardspage() {
    // start booking-one


    // start insurance
    var rewardTl = gsap.timeline({
        paused: true
    });

    rewardTl.fromTo('.insurance .img-container img', 3, {
        y: '1rem',
        position: 'relative',
        ease: Power3.out
    }, {
        y: "0",
        ease: Power3.out

    })

    rewardTl.fromTo('.account-rec ', 6, {
        y: '-3rem',
        ease: Power3.out
    }, {
        y: "0rem",
        ease: Power3.out
    }, '-=3')

    ScrollTrigger.create({
        animation: rewardTl,
        trigger: ".insurance",
        start: "+=200 center",
        end: "bottom +=600",
        pin: true,
        markers: true,
        scrub: 1.75,
    });

    // END insurance




}

(function fullMenu() {

    let menuTl = new TimelineMax({
        paused: true
    });

    menuTl.fromTo('.full-menu', 0.3, {
            width: '0'
        }, {
            width: '100%'
        })
        .fromTo('.full-menu .accordion-item', 0.3, {
            opacity: 0
        }, {
            opacity: 1,
            stagger: 0.2
        })
        .fromTo('.full-menu .accordion-item ul li', 0.3, {
            opacity: 0
        }, {
            opacity: 1,
            stagger: 0.2
        }, '-=1')

        .fromTo('.full-menu .menu-shape', 2.9, {
            opacity: 0.1
        }, {
            opacity: 0.3,
            repeat: -1,
            yoyo: true

        }, '-=3')
        .fromTo('.full-menu .full-menu-socialIcons li', 0.3, {
            opacity: 0
        }, {
            opacity: 1,
            stagger: 0.2

        }, '-=1')
    menuTl.reverse()
    // To close full menu if screen larger than 1024 by reverse menuTL  - not working on resize
    window.innerWidth > 1024 ? menuTl.reverse() : null;

    // To CLose full menu when resize browser and if bowser size more than 1024px 
    // will close menu - by reverse menuTL
    window.addEventListener('resize', () => {
        window.innerWidth > 1024 ? menuTl.reverse() : null;
    })
    var progress = menuTl.progress();
    $('#burger').on('click', function () {
        $('html').toggleClass('stopScroll');
        if (menuTl.reversed()) {
            menuTl.reversed(!menuTl.reversed()).timeScale(3)
        } else {
            menuTl.reverse()
        }
    })
})()


$(document).ready(function () {
    $(".list-content").click(function () {
        $(".k-drobdown").toggle();
    });
})


function paymentpage() {
    TweenMax.fromTo('.money img ', 1, {
        opacity: 0,
        y: -100
    }, {
        opacity: 1,
        y: 0,
        stagger: '0.2'
    }, 1);


    var shapesTl = gsap.timeline({
        paused: true
    });

    shapesTl.fromTo('.recurring .floated-box .bottom-right', 0.4, {
        x: '-3rem',
        ease: Power3.out
    }, {
        x: "0rem",
        ease: Power3.out

    })

    shapesTl.fromTo('.recurring .floated-box .top-left', 0.4, {
        y: '2rem',
        ease: Power3.out
    }, {
        y: "0rem",
        ease: Power3.out

    })

    ScrollTrigger.create({
        animation: shapesTl,
        trigger: ".recurring",
        start: "+=200 center",
        end: "bottom +=600",
        pin: true,
        markers: true,
        scrub: 1.75,
    });

}


function aboutpage() {

    $('.member-data').click(function(){
        window.location = $(this).find("a").attr("href"); 
  return false;
      });

    TweenMax.fromTo('.brains img ', 0.3, {
        opacity: 0,
        y: -50
    }, {
        opacity: 1,
        y: 0,
        stagger: '0.2'
    });


}

// $('select').on('change', function () {
//   localStorage.setItem('lang', this.value);
//   if (this.value === "ar") {
//     $('link[href="css/App.css"]').attr('href', 'css/App-rtl.css')

//   } else if (this.value === "en") {
//     $('link[href="css/App-rtl.css"]').attr('href', 'css/App.css')
//   }

// });
// $(document).ready(function(){


//       var retrievedObject = localStorage.getItem('lang');

//         if(retrievedObject === 'ar'){
//           $('link[href="css/App.css"]').attr('href', 'css/App-rtl.css')
//         }

//         else if(retrievedObject === 'en'){
//           $('link[href="css/App-rtl.css"]').attr('href', 'css/App.css')
//         }


// }) 
