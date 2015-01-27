<div class="content" ng-controller="HomeController">
  <h3 class="text-center">En Twitter:</h3>
  <div class="twitter-feeds text-center">
    <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/hashtag/nopasanadamaestro" data-widget-id="556862951639240704">Tweets sobre #nopasanadamaestro</a>
  </div>

  <h3 class="text-center">En Instagram:</h3>
  <div class="instagram-photos text-center">
    <a ng-repeat="gram in grams.data" href="{{ gram.link }}"><img src="{{ gram.images.thumbnail.url }}"></a>
  </div>
</div>