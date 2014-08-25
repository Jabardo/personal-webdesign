(function() {
  var app = angular.module('gemStore', []);

  app.controller('StoreController', function() {
    this.products = gems;
  });

  app.controller("TabController", function() {
    this.tab = 1;

    this.isSet = function(checkTab) {
      return this.tab === checkTab;
    };

    this.setTab = function(setTab) {
      this.tab = setTab;
    };
  });

  app.controller('GalleryController', function(){
    this.current = 0;

    this.setCurrent = function(imageNumber){
      this.current = imageNumber || 0;
    };
  });

  app.controller("ReviewController", function(){

    this.review = {};

    this.addReview = function(product){
      product.reviews.push(this.review);
      this.review = {};
    };
  });

  var gems = [{
      name: 'The Matrix',
      description: "A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.",
      shine: 8.7,
      price: 1999,
      images: [
        "images/matrix.jpg"
      ],
      reviews: [{
        stars: 5,
        body: "The story of a reluctant Christ-like protagonist set against a baroque, MTV backdrop, The Matrix is the definitive hybrid of technical wizardry and contextual excellence that should be the benchmark for all sci-fi films to come.",
        author: "Neo@whatisthematrix.com",
        createdOn: 1397490980837
      }]
    }, {
      name: 'Back to the Future',
      description: "A young man is accidentally sent 30 years into the past in a time-traveling DeLorean invented by his friend, Dr. Emmett Brown, and must make sure his high-school-age parents unite in order to save his own existence.",
      shine: 8.5,
      price: 1985,
      images: [
        "images/backtothefuture.jpg"
      ],
      reviews: [{
        stars: 4,
        body: "Back To The Future is such an inventive and exciting piece of filmmaking that it is impossible to forget about it. The casting of every character involved was absolutely perfect, and the performances were spectacular.",
        author: "EmmettBrown@Delorean.com",
        createdOn: 1397490980837
      }]
    }, {
      name: 'Scarface',
      description: "In 1980 Miami, a determined Cuban immigrant takes over a drug cartel while succumbing to greed.",
      shine: 8.3,
      price: 1983,
      images: [
        "images/scarface.jpg"
      ],
      reviews: [{
        stars: 4,
        body: "Every great gangster movie has under-currents of human drama. Don't expect an emotional story of guilt, retribution and despair from Scarface",
        author: "TonyMontana@sayhellotomylittlefriend.com",
        createdOn: 1397490980837
      }]
    }];
})();
