import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$( document ).ready(function() {
    console.log( "ready!" );
});