import './main.scss';

import LocomotiveScroll from 'locomotive-scroll';
const scroll = new LocomotiveScroll({
  el: document.querySelector('[data-scroll-container]'),
  smooth: true,
});

import { Splide } from '@splidejs/splide';

window.addEventListener('DOMContentLoaded', () => {
  new Splide('.splide', {
    type: 'fade',
    perPage: 1,
  }).mount();
});
