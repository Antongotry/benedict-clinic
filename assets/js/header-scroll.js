document.addEventListener('DOMContentLoaded', function () {
    var header = document.getElementById('header-40cd750b');
    if (!header) return;

    function updateHeaderState() {
        var scrolled = window.pageYOffset || document.documentElement.scrollTop || 0;
        if (scrolled > 10) {
            header.classList.add('is-solid');
        } else {
            header.classList.remove('is-solid');
        }
    }

    updateHeaderState();
    window.addEventListener('scroll', updateHeaderState, { passive: true });
});



