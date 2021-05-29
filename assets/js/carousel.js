$('.productos').slick({
  centerMode: true,
  centerPadding: '60px',
  autoplaySpeed: 1000,
  autoplay: true,
  infinite: true,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

$('.soporte').slick({
  centerMode: true,
  centerPadding: '60px',
  autoplaySpeed: 1000,
  autoplay: true,
  infinite: true,
  slidesToShow: 1,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});



$('.carousel').slick({
    centerMode: true,
    centerPadding: '60px',
    autoplaySpeed: 1000,
    autoplay: true,
    infinite: true,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });


$('.imagenes').slick({
    centerMode: true,
    centerPadding: '60px',
    autoplaySpeed: 1000,
    autoplay: true,
    infinite: true,
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });



  const logo = document.getElementById('logo');

    logo.addEventListener('click', function(){
       let nombre =  prompt('Sheeeee decime tu nombre')
        if(nombre){
          alert(`Clickeaste el logo loco, lo recontra clickeaste ${nombre}`)
        }
        else{
          alert('Locooo tenes que poner tu nombre')
        }
   
      })