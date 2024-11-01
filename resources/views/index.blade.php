@extends('plantilla')
@section('contenido')
@section('title', 'Inicio')

<div class="container-fluid">
    <div class="row" style="background-color: rgb(71, 80, 205)">

        <div class="col-6 text-center p-5">
            <img src="img/logo10.png" class="img-fluid w-25" alt="">
        </div>

        <div class="col-6 text-center text-white p-5 ">
            <span class="titulo fw-bolder">Marketing y Técnologia</span> <br>
            <small class="fs-5">Tehuacan, Puebla</small>
        </div>

    </div>


    <div class="row banner text-white p-5">


        <div class="col-6 p-5 text-center text-with-border  bolder">
            <span class="fw-bolder">DESARROLLO DE PÁGINAS Y APLICACIONES WEB</span> <br>
        </div>



        <div class="col-6 p-5 bolder">
            <span class="fw-bolder text-with-border">PÁGINAS WEB</span> <br>

            <ul>
                <li>Publicidad</li>
                <li>Invitaciones Web</li>
            </ul>



        </div>

    </div>


</div> 


@endsection