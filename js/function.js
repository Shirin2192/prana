(function ($) {
  "use strict";

  var $window = $(window);
  var $body = $("body");

  /* Preloader Effect */
  $window.on("load", function () {
    $(".preloader").fadeOut(600);
  });

  /* Sticky Header */
  if ($(".active-sticky-header").length) {
    $window.on("resize", function () {
      setHeaderHeight();
    });

    function setHeaderHeight() {
      $("header.main-header").css(
        "height",
        $("header .header-sticky").outerHeight()
      );
    }

    $(window).on("scroll", function () {
      var fromTop = $(window).scrollTop();
      setHeaderHeight();
      var headerHeight = $("header .header-sticky").outerHeight();
      $("header .header-sticky").toggleClass(
        "hide",
        fromTop > headerHeight + 100
      );
      $("header .header-sticky").toggleClass("active", fromTop > 600);
    });
  }

  /* Slick Menu JS */
  $("#menu").slicknav({
    label: "",
    prependTo: ".responsive-menu",
  });

  if ($("a[href='#top']").length) {
    $("a[href='#top']").click(function () {
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
    });
  }

  /* Hero Slider Layout JS */
  const hero_slider_layout = new Swiper(".hero-slider-layout .swiper", {
    slidesPerView: 1,
    speed: 1000,
    spaceBetween: 0,
    loop: true,
    autoplay: {
      delay: 4000,
    },
    pagination: {
      el: ".hero-pagination",
      clickable: true,
    },
  });

  /* testimonial Slider JS */
  if ($(".testimonial-slider").length) {
    const testimonial_slider = new Swiper(".testimonial-slider .swiper", {
      slidesPerView: 1,
      speed: 1000,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".testimonial-button-next",
        prevEl: ".testimonial-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        991: {
          slidesPerView: 2,
        },
      },
    });
  }

  /* About testimonial Slider JS */
  if ($(".about-testimonial-slider").length) {
    const about_testimonial_slider = new Swiper(
      ".about-testimonial-slider .swiper",
      {
        slidesPerView: 1,
        speed: 1000,
        spaceBetween: 30,
        loop: true,
        autoplay: {
          delay: 3000,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".about-testimonial-button-next",
          prevEl: ".about-testimonial-button-prev",
        },
      }
    );
  }

  /* Winning Award Slider JS */
  if ($(".winning-award-slider").length) {
    const winning_award_slider = new Swiper(".winning-award-slider .swiper", {
      slidesPerView: 2,
      speed: 1000,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 3000,
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
        },
        991: {
          slidesPerView: 5,
        },
      },
    });
  }

  /* Youtube Background Video JS */
  if ($("#herovideo").length) {
    var myPlayer = $("#herovideo").YTPlayer();
  }

  /* Init Counter */
  if ($(".counter").length) {
    $(".counter").counterUp({ delay: 6, time: 3000 });
  }

  /* Image Reveal Animation */
  if ($(".reveal").length) {
    gsap.registerPlugin(ScrollTrigger);
    let revealContainers = document.querySelectorAll(".reveal");
    revealContainers.forEach((container) => {
      let image = container.querySelector("img");
      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: container,
          toggleActions: "play none none none",
        },
      });
      tl.set(container, {
        autoAlpha: 1,
      });
      tl.from(container, 1, {
        xPercent: -100,
        ease: Power2.out,
      });
      tl.from(image, 1, {
        xPercent: 100,
        scale: 1,
        delay: -1,
        ease: Power2.out,
      });
    });
  }

  /* Text Effect Animation */
  if ($(".text-anime-style-1").length) {
    let staggerAmount = 0.05,
      translateXValue = 0,
      delayValue = 0.5,
      animatedTextElements = document.querySelectorAll(".text-anime-style-1");

    animatedTextElements.forEach((element) => {
      let animationSplitText = new SplitText(element, { type: "chars, words" });
      gsap.from(animationSplitText.words, {
        duration: 1,
        delay: delayValue,
        x: 20,
        autoAlpha: 0,
        stagger: staggerAmount,
        scrollTrigger: { trigger: element, start: "top 85%" },
      });
    });
  }

  if ($(".text-anime-style-2").length) {
    let staggerAmount = 0.03,
      translateXValue = 20,
      delayValue = 0.1,
      easeType = "power2.out",
      animatedTextElements = document.querySelectorAll(".text-anime-style-2");

    animatedTextElements.forEach((element) => {
      let animationSplitText = new SplitText(element, { type: "chars, words" });
      gsap.from(animationSplitText.chars, {
        duration: 1,
        delay: delayValue,
        x: translateXValue,
        autoAlpha: 0,
        stagger: staggerAmount,
        ease: easeType,
        scrollTrigger: { trigger: element, start: "top 85%" },
      });
    });
  }

  var swiper = new Swiper(".mySwipers", {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: true,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
    },
  });

  // if ($('.text-anime-style-3').length) {
  // 	let animatedTextElements = document.querySelectorAll('.text-anime-style-3');

  // 	animatedTextElements.forEach((element) => {
  // 		//Reset if needed
  // 		if (element.animation) {
  // 			element.animation.progress(1).kill();
  // 			element.split.revert();
  // 		}

  // 		element.split = new SplitText(element, {
  // 			type: "lines,words,chars",
  // 			linesClass: "split-line",
  // 		});
  // 		gsap.set(element, { perspective: 800 });

  // 		gsap.set(element.split.chars, {
  // 			opacity: 0,
  // 			x: "50",
  // 		});

  // 		element.animation = gsap.to(element.split.chars, {
  // 			scrollTrigger: { trigger: element, start: "top 90%" },
  // 			x: "0",
  // 			y: "0",
  // 			rotateX: "0",
  // 			opacity: 1,
  // 			duration: 1,
  // 			ease: Back.easeOut,
  // 			stagger: 0.02,
  // 		});
  // 	});
  // }

  /* Parallaxie js */
  /* var $parallaxie = $('.parallaxie');
	if($parallaxie.length && ($window.width() > 991))
	{
		if ($window.width() > 768) {
			$parallaxie.parallaxie({
				speed: 0.55,
				offset: 0,
			});
		}
	} */

  /* Contact form validation */
  var $contactform = $("#contactForm");
  $contactform.validator({ focus: false }).on("submit", function (event) {
    if (!event.isDefaultPrevented()) {
      event.preventDefault();
      submitForm();
    }
  });

  function submitForm() {
    /* Ajax call to submit form */
    $.ajax({
      type: "POST",
      url: "form-process.php",
      data: $contactform.serialize(),
      success: function (text) {
        if (text == "success") {
          formSuccess();
        } else {
          submitMSG(false, text);
        }
      },
    });
  }

  function formSuccess() {
    $contactform[0].reset();
    submitMSG(true, "Message Sent Successfully!");
  }

  function submitMSG(valid, msg) {
    if (valid) {
      var msgClasses = "h3 text-success";
    } else {
      var msgClasses = "h3 text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
  }
  /* Contact form validation end */

  /* Appointment form validation */
  var $appointmentForm = $("#appointmentForm");
  $appointmentForm.validator({ focus: false }).on("submit", function (event) {
    if (!event.isDefaultPrevented()) {
      event.preventDefault();
      submitappointmentForm();
    }
  });

  function submitappointmentForm() {
    /* Ajax call to submit form */
    $.ajax({
      type: "POST",
      url: "form-appointment.php",
      data: $appointmentForm.serialize(),
      success: function (text) {
        if (text == "success") {
          appointmentformSuccess();
        } else {
          appointmentsubmitMSG(false, text);
        }
      },
    });
  }

  function appointmentformSuccess() {
    $appointmentForm[0].reset();
    appointmentsubmitMSG(true, "Message Sent Successfully!");
  }

  function appointmentsubmitMSG(valid, msg) {
    if (valid) {
      var msgClasses = "h3 text-success";
    } else {
      var msgClasses = "h3 text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
  }
  /* Appointment form validation end */

  /* Animated Wow Js */
  new WOW().init();

  /* Popup Video */
  if ($(".popup-video").length) {
    $(".popup-video").magnificPopup({
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: false,
      fixedContentPos: true,
    });
  }

  // $(document).ready(function(){
  //     $(window).scroll(function(){
  //         if ($(this).scrollTop() > 100) {
  //             $('#scroll').fadeIn();
  //         } else {
  //             $('#scroll').fadeOut();
  //         }
  //     });
  //     $('#scroll').click(function(){
  //         $("html, body").animate({ scrollTop: 0 }, 600);
  //         return false;
  //     });
  // });

  $(".moreless-button").click(function (event) {
    event.preventDefault(); // Stop anchor jump

    var $this = $(this); // store clicked button
    var $content = $this.siblings(".moretext"); // find .moretext in the same parent
    $content.slideToggle();
    if ($this.text() == "Read more") {
      $this.text("Read less");
    } else {
      $this.text("Read more");
    }
  });

  $(document).ready(function () {
    $(".read-more-btn").click(function () {
      var container = $(this).closest(".read-more-container");
      var content = container.find(".read-more-content");
      var button = $(this);
      content.toggleClass("expanded");
      if (content.hasClass("expanded")) {
        button.text("Read Less");
      } else {
        button.text("Read More");
      }
    });
  });

  $("body").on("focus", ".AlphaOnly", function () {
    $(".AlphaOnly").bind(
      "keyup blur",
      function () {
        var Node = $(this);

        Node.val(Node.val().replace(/[^A-Za-z_\s]/, ""));
      } // (/[^a-z]/g,''
    );
  });
  $("body").on("focus", ".NumberOnly", function () {
    $(".NumberOnly").keypress(function (evt) {
      evt = evt ? evt : window.event;

      var charCode = evt.which ? evt.which : evt.keyCode;

      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
      }

      return true;
    });
  });

  $(function () {
    var $btn = $("#button");

    $(window).on("scroll", function () {
      $btn.toggleClass("show", $(this).scrollTop() > 300);
    });

    $btn.on("click", function (e) {
      e.preventDefault();
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        300
      );
    });
  });

  document.querySelectorAll(".read-more-toggle").forEach(function (toggle) {
    toggle.addEventListener("click", function () {
      const box = this.previousElementSibling;
      box.classList.toggle("expanded");
      this.textContent = box.classList.contains("expanded")
        ? "Read less"
        : "Read more";
    });
  });

  (function () {
    const steps = Array.from(document.querySelectorAll(".step"));
    let idx = 0;
    function focusStep(i) {
      steps.forEach(
        (s, si) =>
          (s.style.outline =
            si === i ? "2px solid rgba(0,255,160,0.08)" : "none")
      );
    }
    focusStep(idx);
    document.addEventListener("keydown", (e) => {
      if (e.key === "ArrowRight") {
        idx = Math.min(idx + 1, steps.length - 1);
        steps[idx].scrollIntoView({ behavior: "smooth", block: "center" });
        focusStep(idx);
      }
      if (e.key === "ArrowLeft") {
        idx = Math.max(idx - 1, 0);
        steps[idx].scrollIntoView({ behavior: "smooth", block: "center" });
        focusStep(idx);
      }
    });
  })();

  $(document).ready(function () {
    const swiper = new Swiper(".mySwiper", {
      loop: true,
      autoplay: {
        delay: 2000, // 2 seconds
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      slidesPerView: 1,
      spaceBetween: 10,
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 1,
        },
      },
    });
  });

  // Handle visibility of WhatsApp button on scroll
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      // Adjust the scroll position as needed
      $(".cc-calto-action-ripple").fadeIn();
    } else {
      $(".cc-calto-action-ripple").fadeOut();
    }
  });
})(jQuery);
