(function($) {

  $(document).ready(function() {

    $('#main-content').viewportChecker({
      classToAdd: 'ta-visible animated fadeIn',
      offset: 150    
    });

    $('#bottom').viewportChecker({
      classToAdd: 'ta-visible animated fadeIn',
      offset: 100    
    });

    $('#footer').viewportChecker({
      classToAdd: 'ta-visible animated fadeIn',
      offset: 50    
    });

    $('#navigation-bar').addClass('ta-visible animated fadeInDown');
    $('#slidebox .flex-caption').addClass('ta-visible animated fadeIn');
    
  });

})(jQuery);