gsap.to(".jumbotron", {
    opacity: 1,
    delay: 0.2
})
gsap.fromTo(".card", {
    opacity: 0,
    x: -100,
}, {
    opacity: 1,
    delay: 0.5,
    x: 0
})
gsap.fromTo(".fasilitas", {
    opacity: 0,
    y: -30
}, {
    opacity: 1,
    delay: 0.7,
    y: 0,
    ease: "back.out(1.7)"
})
gsap.fromTo(".title-fasilitas", {
    x: -50,
    opacity: 0,
}, {
    x: 0,
    opacity: 1,
    delay: 0.5,
    ease: "back.out(1.7)"
})
gsap.fromTo(".garis-bawah", {
    x: -50,
    opacity: 0,
}, {
    x: 0,
    opacity: 1,
    delay: 0.7,
    ease: "back.out(1.7)"
})