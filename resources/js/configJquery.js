import jQuery from 'jquery';
//config jquery
window.jQuery = window.$ = jQuery;
window.require = name => {
  if (name === 'jquery') return window.jQuery || window.Zepto
  else throw new Error(`Cannot require ${name}`)
}