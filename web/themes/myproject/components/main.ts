// Example Behavior
//
// (($, Drupal) => {
//   Drupal.behaviors.changeThis = {
//     attach(settings, context) {
//       if (context) {
//         $(context);
//       }
//       if (settings) {
//         (settings.card as { [key: string]: number }).toString();
//       }
//     },
//   };
// })(jQuery, Drupal);

(function ($): void {
  $('.astudio__slick-slider-container').slick({
    dots: true,
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
})(jQuery);
