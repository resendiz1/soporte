<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="{{asset('https://cdn-icons-png.freepik.com/512/8463/8463581.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>@yield('title')</title>
</head>
<body>

    @yield('contenido')



    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>

        window.addEventListener('scroll', function() {
            const elemento = document.getElementById('animacion1');
            const posicion = elemento.getBoundingClientRect().top;
            const alturaPantalla = window.innerHeight;

            if(posicion < alturaPantalla) {
                elemento.classList.remove('hidden');
            }
        });


    // Configuración del observador de intersección
    document.addEventListener('DOMContentLoaded', function() {
        let observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // Si el elemento es visible en la pantalla
                if (entry.isIntersecting) {
                    // Agrega la clase que activa la animación y remueve 'hidden'
                    entry.target.classList.add('animate__backInRight');
                    entry.target.classList.remove('hidden');
                }
            });
        }, { threshold: 0.5 }); // El 50% del elemento debe estar visible

        // Selecciona el elemento que deseas animar
        const animacionElement = document.querySelector('.animacion2 .box');
        if (animacionElement) {
            observer.observe(animacionElement);
        }
    });
</script>

</body>
</html>