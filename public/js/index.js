// Main Carousel
var mainGlide = new Glide('.glide_main', {
    perView: 1,
    draggable: true,
    autoplay: 3000,
    hoverpause: true,
});

// Carousel para destaques
var destaquesGlide = new Glide('.glide_destaques', {
    type: 'carousel',
    dragThreshold: false,
    gap: 15,
    perView: 4,
});

// Carousel para ofertas
var ofertasGlide = new Glide('.glide_ofertas', {
    type: 'carousel', 
    dragThreshold: false,
    gap: 15,
    perView: 4,
});

// Carousel Responsivo
const perView4 = { perView: 4, };
const perView2 = { perView: 2, };
const perView1 = { perView: 1, };


// if (matchMedia('screen and (min-width: 992px)').matches) {
//     destaquesGlide = { ...perView4 };
//     ofertasGlide = { ...perView4 };
// }

// if (matchMedia('screen and (min-width: 768px)').matches) {
//     destaquesGlide = { ...perView2 };
//     ofertasGlide = { ...perView2 };
// }

// if (matchMedia('screen and (min-width: 576px)').matches) {
//     destaquesGlide = { ...perView1 };
//     ofertasGlide = { ...perView1 };
// }

mainGlide.mount();
destaquesGlide.mount();
ofertasGlide.mount();