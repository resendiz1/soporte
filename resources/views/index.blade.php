@extends('plantilla')
@section('contenido')
@section('title', 'Inicio')

<div class="container-fluid">
    <div class="row bg-primary" id="animacion1">

        <div class="col-sm-12 col-md-6 col-lg-5 text-center p-5">
            <img src="img/logo10.png" class="img-fluid w-sm-100 w-25" alt="">
        </div>

        <div class="col-sm-12 col-md-6 col-lg-7 text-center text-white p-5 ">
            <span class="titulo fw-bolder">Marketing y Técnologia</span> <br>
            <span class="fs-3">Tehuacan, Puebla
                <a class="text-white direccion" href="https://maps.app.goo.gl/ZbcZq7pZrr25fq4W8" target="_blank">Fraccionamiento: Vista Natura, Número 5121.</a>     
            </span> <br>
            <span class="fs-5 fw-bold"> 
                <a class="text-white direccion" href="tel:+522211959921">Télefono:  221 195 99 21</a> 
            </span>
        </div>

    </div>

@include('nav')

</div>



<div class="container-fluid ">

    <div class="row banner justify-content-around text-white py-5 my-1" id="aplicaciones">

        <div class="col-sm-12 col-md-12 col-lg-7 p-5 bolder text-sm-center text-lg-start text-md-start bg-dark box hidden animate__animated animate__backInDown " style="--bs-bg-opacity: .8;">
            <span class="fw-bolder text-with-border">PÁGINAS WEB Y APLICACIONES WEB</span> <br>
            {{-- <ul>
                <li class="text-with-border-media">Página web para tu negocio, ofrece tus productos y servicios por internet</li>
                <li class="text-with-border-media">Invitaciones web para todos tus eventos (Bodas, Bautizos, XV Años).</li>
                <li class="text-with-border-media">Un sitio web para tu Escuela.</li>
            </ul> --}}
        </div>

        <div class="col-sm-12 col-md-12 col-lg-1  bolder text-sm-center text-lg-start text-md-start mt-5 p-5">
            <button class="btn btn-info btn-lg p-5 d-flex fw-bold animate__animated fs-2 animate__rubberBand mt-3">
                <i class="fa fa-money"></i>
                Cotizar
            </button>
        </div>

    </div>





    <div class="row p-4 py-5 justify-content-center banner1">

        <div class="col-sm-12 col-md-12 col-lg-3 border py-5 px-4 mx-3 my-5 bg-white shadow shadows-sm rounded " style="--bs-bg-opacity: .90;">
            <h3 class="text-center fw-bold">Invitaciones WEB</h3>
            <hr>
            <span class="fs-5 text-justify">Las invitaciones a tus eventos en una página web.</span>
            <ul class="mt-5 great-vibes-regular fs-2">
                <li> Boda </li>
                <li> Cumpleaños </li>
                <li> Bautizos </li>
                <li> Eventos Sociales </li>
            </ul>
        </div>


        <div class="col-sm-12 col-md-12  col-lg-3 border py-5 px-4 mx-3 my-5 bg-white shadow shadows-sm rounded" style="--bs-bg-opacity: .90;">
            <h3 class="text-center fw-bold">Páginas WEB</h3>
            <hr>
            <span class="fs-5 text-justify">Obten una pagina web personalizada para tener presencia en internet.</span>
            <ul class="mt-5 comics_sans">
                <li class=" fs-4"> Blogs. </li>
                <li class=" fs-4"> Información de tu negocio.</li>
                <li class=" fs-4"> Información acerca de ti.</li>
                <li class=" fs-4"> Proyectos escolares.</li>
                <li class=" fs-4"> Etc.</li>
            </ul>
        </div>



        <div class="col-sm-12 col-md-12  col-lg-3 border py-5  px-4 mx-3 my-5 bg-white shadow shadows-sm rounded" style="--bs-bg-opacity: .90;">
            <h3 class="text-center fw-bold">Aplicaciones WEB</h3>
            <hr>
            <span class="fs-5 text-justify">Automatiza los procesos de tu negocio.</span>
            <ul class="mt-3 arvo-regular">
                <li class=" fs-3">Gestiona a tus clientes y proveedores.</li>
                <li class=" fs-3">Gestiona tus ventas.</li>
                <li class=" fs-3">Automatiza la gestion de tu información.</li>
            </ul>
        </div>



    </div>






    <div class="row banner2 justify-content-around text-white py-5 my-1 animacion1" id="soporte">

        <div class="col-sm-12 col-md-12 col-lg-7 p-5 bolder text-sm-center text-lg-start text-md-start bg-dark box hidden animate__animated animate__backInRight" style="--bs-bg-opacity: .7;">
            <span class="fw-bolder text-with-border">MANTENIMIENTO Y REPARACIÓN DE EQUIPOS DE CÓMPUTO.</span><br>
        </div>
    
        <div class="col-sm-12 col-md-12 col-lg-1 bolder text-sm-center text-lg-start text-md-start mt-5 p-5">
            <button class="btn btn-info btn-lg p-5 d-flex fw-bold animate__animated fs-2 animate__rubberBand mt-3">
                <i class="fa fa-money"></i>
                Cotizar
            </button>
        </div>
    
    </div>
    




    <div class="row p-4 py-5 justify-content-around banner1">

        <div class="col-sm-8 col-md-6 col-lg-3  bg-white text-center p-4 soporte1 d-flex align-items-center border border-5 border-white m-1">
            <h4 class="m-3 bg-dark p-4 animate__animated animate__fadeInDown fw-bold" style="--bs-bg-opacity: .8;">MANTENIMIENTO PREVENTIVO. CORRECTIVO Y PREDICTIVO.</h4>
            {{-- <img src="/img/soporte1.jpg" class="img-fluid"  alt=""> --}}
        </div>

        <div class="col-sm-8 col-md-6 col-lg-3  bg-white text-center p-4 soporte2 d-flex align-items-center border border-5 border-white m-1">
            <h4 class="m-3 bg-dark p-4 animate__animated animate__fadeInDown fw-bold" style="--bs-bg-opacity: .8;">REPARACIÓN.</h4>
            {{-- contenido que aparece con el evento hover --}}
            <div class="overlay">
                <div class="row text-dark">
                    <div class="col-12">
                        <h1>REPARACIÓN</h1>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-sm-8 col-md-6 col-lg-3  bg-white text-center p-4 soporte3 d-flex align-items-center border border-5 border-white m-1">
            <h4 class="m-3 bg-dark p-4 animate__animated animate__fadeInDown fw-bold" style="--bs-bg-opacity: .8;">DIAGNOSTICO Y PRESUPUESTO DE REPARACIÓN.</h4>
            {{-- <img src="/img/soporte1.jpg" class="img-fluid"  alt=""> --}}
        </div>

    </div>


</div> 


@endsection