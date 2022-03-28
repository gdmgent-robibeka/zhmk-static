new Glider(document.querySelector('.glider'), {
  slidesToShow: 1,
  draggable: true,
  dots: '#dots',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5
      }
    }
  ]
});