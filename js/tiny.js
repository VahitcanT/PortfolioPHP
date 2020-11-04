const slider = tns({
    container: '.my-slider',
    items: 1,
    slideby: 'page',
    controls: false,
    nav: false,
    autoplay: true,
    // autoplayButton: true,
    autoplayPosition: "#custom",
    autoplayButtonOutput: false,
    speed: 400,
    mouseDrag: true,
    responsive: {
        640: {
            edgePadding: 20,
            gutter: 20,
            items: 2
        },
        700: {
            gutter: 20,
            items: 1
        },
        900: {
            items: 2
        }, 1200: {
            items: 3
        }

    }
});

console.log(slider);