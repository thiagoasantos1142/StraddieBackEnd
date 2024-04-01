import '/resources/js/bootstrap.js'
import '~bootstrap/js/bootstrap.min.js';
import jQuery from 'jquery';
import Swiper from 'swiper/bundle'
import '@floating-ui/dom';
// import '~resources/js/jquery.mask.js';
// import '~resources/js/basicMask.js';
import.meta.glob([
  '../images/**',
  '../fonts/**',
  '../icons/**'
]);

import {
  computePosition,
  flip,
  shift,
  offset,
  arrow
} from '@floating-ui/dom';

window.jQuery = window.$ = jQuery;
window.Swiper = Swiper;
window.Floating = {
  computePosition,
  flip,
  shift,
  offset,
  arrow
};


