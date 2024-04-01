import '/resources/js/bootstrap.js'
import '~bootstrap/js/bootstrap.min.js';
import jQuery from 'jquery';
import Swiper from 'swiper/bundle'
import '@floating-ui/dom';
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

//config jquery
window.jQuery = window.$ = jQuery;
window.require = name => {
  if (name === 'jquery') return window.jQuery || window.Zepto
  else throw new Error(`Cannot require ${name}`)
}
//fim config jquery

window.Swiper = Swiper;
window.Floating = {
  computePosition,
  flip,
  shift,
  offset,
  arrow
};

