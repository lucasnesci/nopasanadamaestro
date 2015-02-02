var app = angular.module('mockedData', []);

app.factory('MockedData', [function() {
  //var service = {};
  var videos = [
    {
      nid: 1,
      name: 'Artista 1',
      link: 'https://www.youtube.com/watch?v=4gPUtNrFvmo',
      thumbnail: 'assets/img/artistas/artista_1.png',
    },
    {
      nid: 2,
      name: 'Artista 2',
      link: 'https://www.youtube.com/watch?v=R84MLIJt8Qg',
      thumbnail: 'assets/img/artistas/artista_2.png',

    },			
    {
      nid: 3,
      name: 'Artista 3',
      link: 'https://www.youtube.com/watch?v=R84MLIJt8Qg',
      thumbnail: 'assets/img/artistas/artista_3.png',
    },
    {
      nid: 4,
      name: 'Artista 4',
      link: 'https://www.youtube.com/watch?v=R84MLIJt8Qg',
      thumbnail: 'assets/img/artistas/artista_4.png',
    },
        {
      nid: 1,
      name: 'Artista 1',
      link: 'https://www.youtube.com/watch?v=4gPUtNrFvmo',
      thumbnail: 'assets/img/artistas/artista_1.png',
    },
    {
      nid: 2,
      name: 'Artista 2',
      link: 'https://www.youtube.com/watch?v=R84MLIJt8Qg',
      thumbnail: 'assets/img/artistas/artista_2.png',

    },			
    {
      nid: 3,
      name: 'Artista 3',
      link: 'https://www.youtube.com/watch?v=R84MLIJt8Qg',
      thumbnail: 'assets/img/artistas/artista_3.png',
    },
    {
      nid: 4,
      name: 'Artista 4',
      link: 'https://www.youtube.com/watch?v=R84MLIJt8Qg',
      thumbnail: 'assets/img/artistas/artista_4.png',
    },
        {
      nid: 1,
      name: 'Artista 1',
      link: 'https://www.youtube.com/watch?v=4gPUtNrFvmo',
      thumbnail: 'assets/img/artistas/artista_1.png',
    },
    {
      nid: 2,
      name: 'Artista 2',
      link: 'https://www.youtube.com/watch?v=R84MLIJt8Qg',
      thumbnail: 'assets/img/artistas/artista_2.png',

    },			
    {
      nid: 3,
      name: 'Artista 3',
      link: 'https://www.youtube.com/watch?v=R84MLIJt8Qg',
      thumbnail: 'assets/img/artistas/artista_3.png',
    },
    {
      nid: 4,
      name: 'Artista 4',
      link: 'https://www.youtube.com/watch?v=R84MLIJt8Qg',
      thumbnail: 'assets/img/artistas/artista_4.png',
    },
        {
      nid: 1,
      name: 'Artista 1',
      link: 'https://www.youtube.com/watch?v=4gPUtNrFvmo',
      thumbnail: 'assets/img/artistas/artista_1.png',
    },
    {
      nid: 2,
      name: 'Artista 2',
      link: 'https://www.youtube.com/watch?v=R84MLIJt8Qg',
      thumbnail: 'assets/img/artistas/artista_2.png',

    },			
    {
      nid: 3,
      name: 'Artista 3',
      link: 'https://www.youtube.com/watch?v=R84MLIJt8Qg',
      thumbnail: 'assets/img/artistas/artista_3.png',
    },
    {
      nid: 4,
      name: 'Artista 4',
      link: 'https://www.youtube.com/watch?v=R84MLIJt8Qg',
      thumbnail: 'assets/img/artistas/artista_4.png',
    },
  ];

  var getVideos = function() {
    return videos;
  };
  
  return {
    getVideos: getVideos,
  };
  
//  return service;
}]);