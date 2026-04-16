document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-bs-toggle="popover"]').forEach(function (element) {
        new bootstrap.Popover(element);
    });
});