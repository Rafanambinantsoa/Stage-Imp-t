const titrespan = document.querySelectorAll('h4 span');
const btns = document.querySelectorAll('.btn-first');
const logo = document.querySelector('.logo');
const medias = document.querySelectorAll('.bulle');
const l1 = document.querySelector('.l1');
const l2 = document.querySelector('.l2');
const l3 = document.querySelector('.l3');

window.addEventListener('load' , () => {
    const TL = gsap.timeline({paused: true});

    TL
    .staggerFrom(titrespan, 1 , {top : -50 , opacity : 0 , ease : "power2.out"}, 0.3)
    .staggerFrom(btns, 1 , { opacity : 0 , ease : "power2.out"},  0.3 , '-=1')
    .staggerFrom(l1 , 1 , {width : 0 ,  ease : "power2.out"} , 0.3  , '-=2')
    .staggerFrom(l2 , 1 , {width : 0 ,  ease : "power2.out"} , 0.3  , '-=2')
    .staggerFrom(l3 , 1 , {width : 0 ,  ease : "power2.out"} , 0.3  , '-=2')
    .staggerFrom(medias , 0.4 , {right : -200 ,  ease : "power2.out"} , 0.3  , '-=1')

    TL.play();
})
