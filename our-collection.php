<?php
$title = "Our Collection";
include('header.php');
?>
<section class="hero">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-8">
                <img src="images/our-collection-banner.jpg" class="img-fluid hero-banner" alt="">
            </div>
            <div class="col-lg-4">
                <div class="hero__wrap">
                    <div class="overflow-hidden">
                        <h1 class="hero-h1">
                            Our Collection
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-body" id="our-blog">
    <div class="container-fluid px-lg-5 px-3 pt-0 pb-5">
        <div class="row align-items-center ">
            <div class="col-12 m-auto">
                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-8 m-auto text-center pb-5">
                        <h3 class="heading-3">Our collection</h3>
                        <p class="body-text-18 font-weight-normal mb-2">We’re proud of our work and have lots of happy customers who love it too. Every company we partner with is special in their own way, so when you choose Fire Up Design you’ll be guaranteed a personal experience that’s centred around your unique business needs.</p>
                        <p class="body-text-18 font-weight-normal mb-2">Whether you’re a multi-national corporation, just starting out, or somewhere in-between, we’ll dedicate ourselves to creating something incredible just for you.</p>
                        <p class="body-text-18 font-weight-normal">Take a look at some of our latest projects and if you like what you see, drop us a line.</p>
                    </div>
                    <div class="col-12">
                        <div class="grid">
                            <div class="grid-item grid-item--1"> <img src="images/collection-p-1.jpg" alt=""> </div>
                            <div class="grid-item"> <img src="images/collection-p-2.jpg" alt=""> </div>
                            <div class="grid-item grid-item--3"> <img src="images/collection-p-3.jpg" alt=""> </div>
                            <div class="grid-item"> <img src="images/collection-p-4.jpg" alt=""> </div>
                            <div class="grid-item"> <img src="images/collection-p-5.jpg" alt=""> </div>
                            <div class="grid-item"> <img src="images/collection-p-6.jpg" alt=""> </div>
                            <div class="grid-item"> <img src="images/collection-p-7.jpg" alt=""> </div>
                            <div class="grid-item"> <img src="images/collection-p-8.jpg" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section id="lets-connect" class="content-body pb-extra">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11 col-xl-10  mx-auto col-custom">
                <div class="row fade-in">
                    <div class="col-12 text-center mb-5">
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
                                <a href="mailto:Hello@fireupdesign.com">hello@fireupdesign.com</a>
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