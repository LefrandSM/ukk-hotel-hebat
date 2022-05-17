gsap.fromTo(".login", {
    y: -50
}, {
    y: 0,
    opacity: 1,
    duration: 1,
    ease: "bounce.out"
})
gsap.fromTo("header h1", {
    opacity: 0
}, {   
    delay: 1,
    opacity: 1
})
gsap.fromTo(".form-label", {
    opacity: 0,
    x: -10
}, {   
    delay: 0.9,
    x: 0,
    opacity: 1
})
gsap.fromTo(".form-control", {
    opacity: 0,
    x: -10
}, {   
    delay: 1.1,
    x: 0,
    opacity: 1
})
gsap.fromTo(".btn", {
    opacity: 0,
}, {   
    delay: 0.9,
    opacity: 1
})
gsap.fromTo(".home", {
    opacity: 0,
}, {   
    delay: 0.9,
    opacity: 1
})

