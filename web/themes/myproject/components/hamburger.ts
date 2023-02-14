(function ($): void {
  const hamburger = document.querySelector('.hamburger');
  const responsiveMenu = document.querySelector('.header-container');

  hamburger?.addEventListener('click', function () {
    if (responsiveMenu?.classList.contains('active')) {
      responsiveMenu?.classList.remove('active');
      responsiveMenu?.classList.add('in-active');
      // document.querySelector('.astudio__menu-link').style.display = 'block';
    } else {
      responsiveMenu?.classList.remove('in-active');
      responsiveMenu?.classList.add('active');
      // document.querySelector('.astudio__menu-link').style.display = 'none';
    }
  });
})(jQuery);
