<?php
$title = "Contact Us";
include('header.php');
?>
<!-- <section class="hero">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-8">
                <img src="images/contact-banner.jpg" class="img-fluid hero-banner" alt="">
            </div>
            <div class="col-lg-4">
                <div class="hero__wrap">
                    <div class="overflow-hidden">
                        <h1 class="hero-h1">
                            Defining Your <br>
                            Story <br>
                            Together
                        </h1>
                    </div>
                    <p class="hero-subline">When you partner with Fire Up Design you are guaranteed affordable
                        web design and a unique, user-friendly website that allows your business to shine.</p>
                    <a href="javascript:void(0)" class="orange-link hero-link">Learn More <i class="fas fa-chevron-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section id="lets-connect" class="content-body pb-extra">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11 col-xl-10  mx-auto col-custom">
                <div class="row fade-in">
                    <div class="col-12 text-center mb-5 mt-5">
                        <h3 class="heading-3">
                            Let’s create your story together
                        </h3>
                        <p class="body-text-18">Get in touch and lets get those creative juices flowing</p>
                    </div>
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <form action="#" class="contact_form">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="fireup-input" placeholder="Full Name">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="email" class="fireup-input" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input type="number" class="fireup-input" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="fireup-input" placeholder="Select Service">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <textarea name="" id="" class="fireup-textarea" placeholder="Description Of Project" cols="30" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="form-submit">Submit Request <i class="fas fa-chevron-right ml-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <ul class="connect">
                            <li>
                                <a href="mailto:hello@fireupdesign.com">hello@fireupdesign.com</a>
                            </li>
                            <li>
                                <a href="telto:+447912108120">+44 79 121 08 120</a>
                            </li>
                            <li>
                                <a href="telto:+441276489005">+44 1276 489 005</a>
                            </li>
                            <li>
                                <p class="social-heading">Connect with us</p>
                                <ul class="social">
                                    <li>
                                        <a href="https://twitter.com/fireupdesign?s=08" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/fireupdesign/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/fireupdesign?igshid=198v0grqib17l" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="content-body pt-0" id="subscribe">
    <div class="container-fluid position-relative p-0">
        <div class="row no-gutters">
            <div class="col-12 talk-banner">
                <img src="images/subscribe-bg.jpg" class="" alt="">
            </div>
        </div>
        <div class="custom-container-wrap subscribe-wrap pb-5">
            <div class="row">
                <div class="col-12 col-lg-6 m-auto mb-4 mb-lg-5 subscribe">
                    <h3 class="heading-3 text-center">Let's talk design</h3>
                    <p class="text-center font-weight-regular body-text-16">Subscribe to our newsletter today and never miss out on design news & updates</p>
                    <form action="" class="position-relative mt-3">
                        <input type="email" class="form-control" placeholder="Enter Email Address Here.....">
                        <button type="sumit" class="btn-submit">Subscribe! <i class="fas fa-chevron-right ml-2"></i></button>
                    </form>
                </div>
            </div>
            <div class="row mt-3 mt-lg-0">
                <div class="col-12 col-lg-4 text-center d-flex mb-3 mb-lg-0">
                    <div class="contact-card mx-0 mx-xl-2 w-100">
                        <h4 class="heading-4">Start live Chat</h4>
                        <p class="body-text-16 font-weight-regular">with one of our representative and get all <br>
                            the assistance that you need.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center d-flex mb-3 mb-lg-0">
                    <div class="contact-card mx-0 mx-xl-2 w-100">
                        <h4 class="heading-4">Call us now</h4>
                        <p class="body-text-16 font-weight-regular">for any queries that you may have</p>
                        <a class="link" href="telto:+441276489005">+44 1276 489 005</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center d-flex mb-3 mb-lg-0">
                    <div class="contact-card mx-0 mx-xl-2 w-100">
                        <h4 class="heading-4">Email us</h4>
                        <p class="body-text-16 font-weight-regular"> <a href="mailto:hello@fireupdesign.com">hello@fireupdesign.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php include('footer.php') ?>

<!-- --GSAP-- -->
<script>
    let fadein = document.getElementsByClassName('fade-in');
    let riseUp = document.querySelectorAll('.rise-up');

    gsap.to(".hero-h1", {
        scrollTrigger: ".hero__wrap", // start the animation when ".box" enters the viewport (once)
        y: 0,
        delay: 1,
        duration: 1.5,
        stagger: 1
    });
    gsap.to(".hero-subline", {
        opacity: 1,
        delay: 3.5,
        duration: 1.5
    });
    gsap.from(".hero-link", {
        opacity: 0,
        delay: 4,
        duration: 1.5
    });
    gsap.from(".hero-banner", {
        opacity: 0,
        delay: .5,
        duration: 1
    });
    // if (window.innerWidth > 1000) {
    //     Array.from(fadein).forEach((el, index) => {
    //         gsap.from(el, {
    //             scrollTrigger: {
    //                 id: `section-${index+1}`,
    //                 trigger: el,
    //                 start: "-=480", // when the top of the trigger hits the top of the viewport
    //                 end: "bottom bottom", // end after scrolling 500px beyond the start
    //                 markers: false,
    //                 toggleActions: 'play none none reverse'
    //             },
    //             opacity: 0,
    //             delay: 0,
    //             duration: 1,
    //             ease: "power2.inOut",
    //         });
    //     });

    //     gsap.from(riseUp, {
    //         duration: 1,
    //         y: '100vh',
    //         opacity: 1,
    //         stagger: .1,
    //         scrollTrigger: {
    //             trigger: '#collections',
    //             toggleActions: 'play none none reverse',
    //             start: '-=300',
    //             markers: false
    //         }
    //     })
    // } else {
    //     Array.from(fadein).forEach((el, index) => {
    //         gsap.from(el, {
    //             scrollTrigger: {
    //                 id: `section-${index+1}`,
    //                 trigger: el,
    //                 start: "-=600", // when the top of the trigger hits the top of the viewport
    //                 end: "bottom bottom", // end after scrolling 500px beyond the start
    //                 markers: false,
    //                 toggleActions: 'play none none reverse'
    //             },
    //             opacity: 0,
    //             delay: 0,
    //             duration: 1,
    //             ease: "power2.inOut",
    //         });
    //     });

    //     gsap.from(riseUp, {
    //         duration: 1,
    //         y: '100vh',
    //         opacity: 1,
    //         stagger: .1,
    //         scrollTrigger: {
    //             trigger: '#collections',
    //             toggleActions: 'play none none reverse',
    //             start: '-=600',
    //             markers: false
    //         }
    //     })
    // }
</script>