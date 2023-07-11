import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

function scrollToAnchor(event, anchorID) {
    event.preventDefault();
    const element = document.getElementById(anchorID);
    const offset = 20;
    const bodyRect = document.body.getBoundingClientRect().top;
    const elementRect = element.getBoundingClientRect().top;
    const elementPosition = elementRect - bodyRect;
    const offsetPosition = elementPosition - offset;

    window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth'
    });
}
//
// Alpine.directive('scrollTo', (el, { value }) => {
//     el.addEventListener('click', (event) => {
//         scrollToAnchor(event, value);
//     });
// });
