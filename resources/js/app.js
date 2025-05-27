import './bootstrap';
import M from 'materialize-css';
window.M = M;

document.addEventListener('DOMContentLoaded', () => {
    const elems = document.querySelectorAll('.sidenav');
    M.Sidenav.init(elems);
});
