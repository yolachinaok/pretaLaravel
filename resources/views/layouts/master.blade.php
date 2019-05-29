<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="/css/glider.min.css" />

    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/css/home.css" />
    <link rel="stylesheet" href="/css/menu.css" />
    <link rel="stylesheet" href="/css/footer.css" />
  </head>

  <body>
  @include("partials/header")

<!--------------------------------------------MAIN -->

@yield('content')





<!--------------------------------------------END MAIN -->

  @include("partials/footer")


<!--------------------------------------------LIBRARY PARA RESPONSIVE VIDEO -->

<script src="/js/resizeIframe.js"></script>

<!--------------------------------------------LIBRARY GLIDER.JS SLIDE -->
<script src="/js/glider.min.js"></script>
<script>
  /* SLIDE HERO */

  new Glider(document.querySelector(".glider"), {
    slidesToShow: 1,
    dots: ".dots",
    draggable: true,
    rewind: true,
    arrows: {
      prev: ".glider-prev",
      next: ".glider-next"
    }
  });

  /*    SLIDE NEW IN */

  new Glider(document.querySelector(".glider2"), {
    // Mobile-first defaults
    slidesToShow: 1,
    slidesToScroll: 1,
    scrollLock: true,
    dots: "#resp-dots",
    arrows: {
      prev: ".glider-prev2",
      next: ".glider-next2"
    },
    responsive: [
      {
        // screens greater than >= 575px
        breakpoint: 575,
        settings: {
          // Set to `auto` and provide item width to adjust to viewport
          slidesToShow: 3,
          slidesToScroll: 1,
          itemWidth: 150,
          duration: 0.25
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          itemWidth: 150,
          duration: 0.25
        }
      }
    ]
  });
</script>
<!--END LIBRARY GLIDER.JS SLIDE -->
</body>
</html>
