$(document).ready(function() {

  $('a[href*=#]').click(function(){
    return false;
  });

  var choices = [];

  var animationEndEvent = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";

  var App = {
    yesButton: $('.button.yes .trigger'),
    noButton: $('.button.no .trigger'),
    blocked: false,
    like: function(liked){
      var animate = liked ? 'animateYes' : 'animateNo';
      var self = this;

      var choice = {};
      choice['type'] = $('.component').data('type');
      choice['name_id'] = $('.component').data('nameid');
      choice['wanted'] = liked ? 1 : 0;

      choices.push(choice);

      if (!this.blocked) {
        this.blocked = true;
        $('.component').eq(0).addClass(animate).one(animationEndEvent, function() {
          $(this).remove();
          self.blocked = false;
        });
      }
    }
  };

  var clicks = 0;

  App.yesButton.on('mousedown', function() {
    clickme();
    App.like(true);
  });

  App.noButton.on('mousedown', function() {
    clickme();
    App.like(false);
  });

  function clickme() {
    clicks++;
    if(clicks == 3) {
        $('#control').hide();
        setTimeout(function() {makePostRequest()}, 1000);
    }
  }

  function makePostRequest(){
    $.post('/find-bartender', {choices : choices}, function(data) {
      setTimeout($('.content-wrap').html(data), 3000);
    });
  }
});
