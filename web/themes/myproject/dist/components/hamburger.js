"use strict";
(function ($) {
    const hamburger = document.querySelector('.hamburger');
    const responsiveMenu = document.querySelector('.header-container');
    hamburger === null || hamburger === void 0 ? void 0 : hamburger.addEventListener('click', function () {
        if (responsiveMenu === null || responsiveMenu === void 0 ? void 0 : responsiveMenu.classList.contains('active')) {
            responsiveMenu === null || responsiveMenu === void 0 ? void 0 : responsiveMenu.classList.remove('active');
            responsiveMenu === null || responsiveMenu === void 0 ? void 0 : responsiveMenu.classList.add('in-active');
            // document.querySelector('.astudio__menu-link').style.display = 'block';
        }
        else {
            responsiveMenu === null || responsiveMenu === void 0 ? void 0 : responsiveMenu.classList.remove('in-active');
            responsiveMenu === null || responsiveMenu === void 0 ? void 0 : responsiveMenu.classList.add('active');
            // document.querySelector('.astudio__menu-link').style.display = 'none';
        }
    });
})(jQuery);

//# sourceMappingURL=../maps/hamburger.js.map
