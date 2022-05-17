gsap.to(".title-form", {
    x: 50,
    opacity: 1,
    delay: 0.5,
    ease: "back.out(1.7)"
})
gsap.to(".jumbotron", {
    opacity: 1,
    delay: 0.2
})
gsap.to(".pemesanan", {
    opacity: 1,
    delay: 1
})
gsap.fromTo('.tentang h1', {
    opacity: 0,
    y: 50
}, { 
    opacity: 1,
    y: 0,
    ease: "back.out(1.7)",
    scrollTrigger: {
        trigger: '.tentang p',
        start: 'center bottom',
        toggleActions: 'play reverse none reverse',
    }
})
gsap.fromTo('.tentang p', {
    opacity: 0,
    y: 50
}, { 
    opacity: 1,
    y: 0,
    ease: "back.out(1.7)",
    scrollTrigger: {
        trigger: '.tentang p',
        start: 'bottom bottom',
        toggleActions: 'play reverse none reverse',
    }
})
