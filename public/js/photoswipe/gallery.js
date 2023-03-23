import PhotoSwipeLightbox from './photoswipe-lightbox.esm.min.js';
import PhotoSwipe from './photoswipe.esm.min.js';
const galleryElement = document.querySelector('.js-lightbox-gallery');
const galleryLinks = galleryElement.querySelectorAll('.js-lightbox-link');
const options = {
    arrowPrevSVG: `<svg viewBox="0 0 24 14" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.41387 9.81571C2.21327 8.99672 10.6129 0.994835 10.6129 0.994835C11.042 0.557905 11.6004 0.338461 12.1588 0.338461C12.7172 0.338461 13.2756 0.557905 13.7008 0.994835C13.7008 0.994835 22.1043 8.99672 22.8998 9.81571C23.6992 10.6347 23.7541 12.1081 22.8998 12.98C22.0495 13.8539 20.8602 13.9225 19.8158 12.98L12.1588 5.63843L4.50176 12.98C3.45744 13.9225 2.26617 13.8539 1.41387 12.98C0.559601 12.1081 0.612502 10.6347 1.41387 9.81571Z"/>
            </svg>`,
    arrowNextSVG: `<svg viewBox="0 0 24 14" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.41387 9.81571C2.21327 8.99672 10.6129 0.994835 10.6129 0.994835C11.042 0.557905 11.6004 0.338461 12.1588 0.338461C12.7172 0.338461 13.2756 0.557905 13.7008 0.994835C13.7008 0.994835 22.1043 8.99672 22.8998 9.81571C23.6992 10.6347 23.7541 12.1081 22.8998 12.98C22.0495 13.8539 20.8602 13.9225 19.8158 12.98L12.1588 5.63843L4.50176 12.98C3.45744 13.9225 2.26617 13.8539 1.41387 12.98C0.559601 12.1081 0.612502 10.6347 1.41387 9.81571Z"/>
            </svg>`,
    gallery: '.js-lightbox-gallery',
    children: '.js-lightbox-link',
    pswpModule: PhotoSwipe,
    bgOpacity: 0.9,
    paddingTop: 65,
    paddingBottom: 75,
    zoom: false
};

const lightbox = new PhotoSwipeLightbox(options);

galleryLinks.forEach(el => {
    const element = el;
    const image = new Image();
    const image2x = new Image();

    image.src = element.href;
    image2x.src = element.dataset.pswpSrcset.replace(' 2x', '');

    image.addEventListener('load', () => {
        element.dataset.pswpWidth = image.width;
        element.dataset.pswpHeight = image.height;
        element.dataset.mobileSizes = `${image2x.width}x${image2x.height}`;
    });
});

lightbox.on('uiRegister', () => {
    lightbox.pswp.ui.registerElement({
        name: 'caption',
        order: 9,
        isButton: false,
        appendTo: 'root',
        onInit: (el, pswp) => {
            lightbox.pswp.on('change', () => {
                const element = el;
                const currSlideElement = lightbox.pswp.currSlide.data.element;
                let captionHTML = '';

                if (currSlideElement) {
                    captionHTML = currSlideElement.dataset.title;
                }

                element.innerHTML = captionHTML || '';
            });
        }
    });
});

lightbox.on('itemData', event => {
    const { itemData } = event;
    const { element } = itemData;
    const size = element.dataset.mobileSizes.split('x');

    if (window.devicePixelRatio > 1) {
        itemData.w = +size[0];
        itemData.h = +size[1];
    }
});

lightbox.on('close', () => {
    const index = lightbox.pswp.currSlide.index;

    galleryElement.dataset.activeSlide = index;
    setTimeout(() => {
        galleryElement.dispatchEvent(new CustomEvent('gallery.close', {
            bubbles: true
        }));
    });
});

lightbox.init();
