// LOGO SPINNER

gsap.registerPlugin(ScrollTrigger);

// GSAP timeline for spinning to the right
gsap.to(".logo-spinner", {
    rotation: 360,
    duration: 30,
    repeat: -1,
    ease: "linear"
});

// Function to reverse the spinning direction
function reverseSpin() {
    gsap.to(".logo-spinner", {
        rotation: -360,
        duration: 30,
        repeat: -1,
        ease: "linear"
    });
}

// ScrollTrigger to detect scrolling
ScrollTrigger.create({
    onUpdate: (self) => {
        if (self.direction === 1) { // scrolling down
        reverseSpin();
        } else if (self.direction === -1) { // scrolling up
            gsap.to(".logo-spinner", {
                rotation: 360,
                duration: 30,
                repeat: -1,
                ease: "linear"
            });
        }
    }
});

// RUNNING TEXT LINE
// animates elements with the class .running ul li
gsap.to(".running-line ul li", {
    // set the animation duration to 6 seconds
    duration: 4,
    // moves the elements horizontally by -102%
    x: "-105%",
    // linear easing
    ease: "linear",
    // makes the animation repeat infinitely
    repeat: -1
});

gsap.to(".mobile-running-line ul", {
    // set the animation duration to 6 seconds
    duration: 10,
    // moves the elements horizontally by -102%
    x: "-104%",
    // linear easing
    ease: "linear",
    // makes the animation repeat infinitely
    repeat: -1
});


// RUNNING CARDS LINE
// animates elements with the class .running ul li
gsap.to(".project-scroll ul li", {
    // set the animation duration to 6 seconds
    duration: 15,
    // moves the elements horizontally by -102%
    x: "-100%",
    // linear easing
    ease: "linear",
    // makes the animation repeat infinitely
    repeat: -1
});
  