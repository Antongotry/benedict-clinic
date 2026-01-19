document.addEventListener('DOMContentLoaded', function () {
    var header = document.getElementById('header-40cd750b');
    if (!header) return;

    function updateHeaderState() {
        var scrolled = window.pageYOffset || document.documentElement.scrollTop || 0;
        if (scrolled > 10) {
            header.classList.add('is-solid');
            header.classList.add('scrolled');
        } else {
            header.classList.remove('is-solid');
            header.classList.remove('scrolled');
        }
    }

    updateHeaderState();
    window.addEventListener('scroll', updateHeaderState, { passive: true });
});



