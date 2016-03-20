$('a[href*=#]').click(function(){
  return false;
});


var animationEndEvent = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";

var Person = {
  wrap: $('#people'),
  people: [
    {
      name: 'Linda',
      age: 25,
      img: "http://i.imgur.com/QZuGC10.jpg"
    }
  ],
  add: function(){
    var random =     this.people[Math.floor(Math.random() * this.people.length)];
    this.wrap.append("<div class='person'><img alt='" + random.name + "' src='" + random.img + "' /><span><strong>" + random.name + "</strong>, " + random.age + "</span></div>");
  }
}

var App = {
  yesButton: $('.button.yes .trigger'),
  noButton: $('.button.no .trigger'),
  blocked: false,
  like: function(liked){
    var animate = liked ? 'animateYes' : 'animateNo';
    var self = this;
    if (!this.blocked) {
      this.blocked = true;
      $('.person').eq(0).addClass(animate).one(animationEndEvent, function() {
        $(this).remove();
        Person.add();
        self.blocked = false;
      });
    }
  }
};

App.yesButton.on('mousedown', function() {
  App.like(true);
});

App.noButton.on('mousedown', function() {
  App.like(false);
});

$(document).ready(function() {
  Person.add();
  Person.add();
  Person.add();
  Person.add();
});
