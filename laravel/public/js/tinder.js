$(document).ready(function() {

  $('a[href*=#]').click(function(){
    return false;
  });


  var toJson = [];
  var choices = [];

  var animationEndEvent = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";

  var App = {
    yesButton: $('.button.yes .trigger'),
    noButton: $('.button.no .trigger'),
    blocked: false,
    like: function(liked){
      var animate = liked ? 'animateYes' : 'animateNo';
      var self = this;

      var choice = [];
      choice['type'] = $('.component').data('type');
      choice['nameid'] = $('.component').data('nameid');
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
        var json = []
        json["choices"] = choices;
        $.post('/find-bartender', json, function(data) {
          setTimeout($('.content-wrap').html(data), 3000);
        });
    }
  }
});
