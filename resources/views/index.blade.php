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



    <div class="row px-4 py-5 justify-content-around  shadow border text-white " id="contacto" style="background-color:rgb(39, 69, 93); ">
        <div class="col-12 text-center mb-5">
            <h2 class="fw-bold">FORMULARIO DE CONTACTO</h2>
        </div>

        <div class="col-12">
            <div class="row justify-content-center">
                
                <div class="col-sm-12 col-md-12 col-lg-3 mt-2">
                    <label for="" class="fw-bold fs-4">Nombre completo:</label>
                    <input type="text" class="form-control form-control-lg w-100 fs-3 fw-bold">
                </div>

                <div class="col-sm-12 col-md-12 col-lg-3 mt-2">
                    <label for="" class="fw-bold fs-4">Correo electronico (opcional):</label>
                    <input type="mail" class="form-control form-control-lg w-100 fs-3 fw-bold">
                </div>

                <div class="col-sm-12 col-md-12 col-lg-3 mt-2">
                    <label for="" class="fw-bold fs-4">Teléfono:</label>
                    <input type="mail" class="form-control form-control-lg w-100 fs-3 fw-bold">
                </div>

                <div class="col-sm-12 col-md-12 col-lg-9 mt-2">
                    <label for="" class="fw-bold fs-4">Mensaje :</label>
                    <textarea name="" class="w-100 h-100 form-control fs-3 fw-bold" ></textarea>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-9 mt-5">
                    <button class="btn btn-primary  w-100 btn-lg fs-3">Enviar</button>
                </div>

            </div>
        </div>

    </div>




    <div class="row banner"  >
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptate assumenda iste! Asperiores aperiam eius obcaecati. Illo dolorum modi suscipit consequatur excepturi magnam ex eos harum, accusantium illum voluptate eligendi!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius illo dolorum ab repellat minima explicabo laboriosam, magnam placeat maiores ipsa eligendi dicta facilis at tempore veniam fugit odit accusantium excepturi.
        Alias iusto itaque, tenetur quod quibusdam inventore cupiditate, voluptate dolorem laborum odio ut dolorum accusantium a repellendus obcaecati? Beatae voluptas modi eaque! Harum quibusdam nostrum nisi. Dolorem nam cumque blanditiis.
        Dicta aut perferendis, earum delectus non tempore ipsam quam vero aliquid sapiente unde obcaecati sequi qui? Deleniti tempore molestiae labore voluptatibus repellat quaerat impedit nemo necessitatibus officia, distinctio vitae architecto.
        Assumenda sit beatae itaque perspiciatis voluptatibus iure architecto harum, quis hic, doloremque libero accusantium exercitationem facere! Sit similique, porro optio eum et nobis quas, soluta, doloribus quis a alias modi?
        Vero assumenda totam aliquam ipsum sint beatae tempore quasi. Dolorum temporibus autem nostrum voluptates dicta doloremque mollitia molestiae sint amet cupiditate aspernatur recusandae neque, nesciunt est explicabo eveniet expedita! Totam.
        Ut rerum commodi aliquid quae minima, inventore modi sint. Tempora delectus natus eaque. Ducimus perspiciatis iure ipsam, eveniet dignissimos, quae obcaecati accusantium praesentium repudiandae nesciunt explicabo libero dolore provident molestias.
        Ipsa porro sunt quidem blanditiis ullam similique, error velit laborum. Eius dignissimos odit libero dolorem illum eligendi facilis dolorum omnis minima laborum quo, ut animi accusantium labore laboriosam temporibus facere!
        Velit, ab maxime eius sapiente impedit incidunt, veniam minima cum consequuntur molestiae accusantium? Ex delectus cum similique placeat reprehenderit aperiam provident? Modi pariatur error, expedita consequuntur omnis laboriosam ipsum magnam.
        Incidunt beatae ex cumque excepturi magnam, accusantium ab, numquam quaerat accusamus corporis esse minus delectus consequuntur cupiditate. Labore iure tenetur at sunt. Velit rerum modi aut fugit error. Enim, cumque!
        Reiciendis temporibus tempore, beatae debitis ratione fugit in dicta, quidem inventore cumque neque a commodi? Nemo aliquid qui quos porro odio temporibus illo iure tempora eligendi repellendus. Animi, laudantium consequuntur.
        Tenetur tempora, necessitatibus voluptates illo numquam porro! Dolorum delectus sequi aliquid voluptas perferendis quam earum exercitationem sit id alias voluptate molestias rerum vel repellendus voluptatibus necessitatibus explicabo voluptatem, quae labore!
        Pariatur, dolor quam. Neque perferendis, nostrum aliquid eaque sint dolore autem illum placeat repudiandae corrupti ipsa ratione adipisci cupiditate aliquam error incidunt corporis ullam quisquam quas, numquam sequi consequatur totam!
        Eius reiciendis facere sed aliquid veritatis officiis dolores culpa deleniti, maiores iure iste molestias doloribus neque dolorem debitis ex fuga impedit pariatur? Minus, vitae fuga amet mollitia id beatae ipsum!
        Sequi explicabo a voluptate non odit in ab eaque quas iste qui, blanditiis omnis minus vel necessitatibus maiores natus expedita exercitationem vero. Sed voluptatum quasi suscipit consequatur. Eveniet, excepturi sint?
        Qui ab adipisci tempora laboriosam voluptates assumenda. Modi commodi suscipit saepe vel quas eum harum voluptatem culpa ullam asperiores, libero expedita ipsum eaque perspiciatis natus fuga praesentium dolores? Vel, incidunt.
        Ipsum, distinctio quae magni suscipit quisquam repellat rerum eius adipisci. Vero culpa incidunt exercitationem architecto quo, blanditiis earum sapiente, aspernatur laudantium unde a repellat quos dignissimos suscipit distinctio neque dicta.
        Maiores totam eaque delectus sint sunt nemo nam, laborum placeat? Quidem id modi reprehenderit numquam ut! Quas, animi et praesentium modi laborum similique provident blanditiis minima, dignissimos cupiditate voluptas nesciunt!
        Ab, minus sunt eveniet eum aliquam rerum laborum illum error itaque pariatur animi beatae ducimus voluptate cum earum voluptas atque ratione ipsa tempore, cumque sed esse tenetur explicabo. Nostrum, magni?
        Harum, omnis? Amet perferendis rerum non obcaecati ratione vitae est dicta nemo sunt cum ipsum at praesentium cumque dignissimos, blanditiis quibusdam soluta dolor sit quae fuga eos, quia corporis dolore!
        Nostrum voluptate tempora aspernatur deserunt, ex facere quod corrupti repudiandae illum excepturi laboriosam recusandae eveniet libero ullam quo esse ipsum nam alias illo. Nihil qui facilis asperiores numquam eius odit?
        Sed eaque fugit ullam, repudiandae dolor consectetur. Deleniti neque minima ipsa iusto itaque veniam, similique ea eius illum molestiae a molestias dolorem autem perspiciatis eveniet quasi. Aspernatur soluta minima iste!
        In, consectetur quae provident aut velit qui eaque corrupti animi vel nostrum blanditiis id earum similique voluptatum debitis? Laboriosam, cupiditate et dolor ipsam ab officiis veniam perspiciatis sunt aspernatur unde!
        Facere alias deserunt animi voluptates! Facilis illo, consequatur, error, reiciendis mollitia sapiente dignissimos autem nisi nemo accusantium illum assumenda ut suscipit pariatur! Eos quae veniam adipisci? Eius in perspiciatis nobis.
        Dicta atque nostrum eaque, odio beatae ipsam rerum dolor architecto consectetur impedit assumenda ad exercitationem quasi eos molestiae voluptatibus magnam blanditiis maiores, iure ipsum? Unde voluptatem atque quod blanditiis voluptatum.
        Ex omnis dolore mollitia laudantium quas, ipsum quaerat sunt libero voluptate doloribus recusandae obcaecati commodi delectus vel accusamus quia, adipisci praesentium nulla maxime est ad. Illo veniam odio laborum quas.
        Ratione, vel totam, enim quae qui minus sequi quam fugiat rerum culpa vitae et impedit, architecto ipsum fuga nemo quod minima placeat reiciendis sunt at modi. Officia tempora veritatis sunt.
        Veniam deserunt, impedit unde voluptatum excepturi consectetur enim voluptate? Voluptatum, enim officiis veniam laboriosam illo magnam ipsa, ullam est tenetur repellendus rem, fuga dignissimos. Molestias sit adipisci consequuntur quo deserunt.
        Repellendus, placeat. Laudantium culpa quis dicta voluptatum corrupti voluptates optio ab repellat ducimus est. Debitis necessitatibus eos iusto asperiores dolore aperiam porro sed dolorem, dolorum unde. Labore tempora perferendis aliquid.
        Sed eos, totam distinctio impedit quia harum molestias tempore quo velit deserunt eveniet ipsam beatae consectetur molestiae amet voluptate, placeat laudantium et officia ipsum qui voluptatibus? Quo similique nobis maxime?
        Assumenda dolorem mollitia reiciendis beatae voluptatem reprehenderit quas suscipit ut consequatur, molestias cupiditate perferendis voluptatibus doloribus autem minima non. Autem perspiciatis consequuntur molestias porro aspernatur dolores quaerat maxime. Eius, optio?
        Nihil, numquam qui quod officiis earum fuga sint voluptates hic molestiae adipisci architecto labore possimus minima odio. Fuga molestias consequuntur alias corporis quam, sapiente error libero, officiis ab veritatis quod?
        Minus ratione doloribus obcaecati nihil veniam pariatur dignissimos facilis commodi, labore et aliquid optio voluptate laudantium fugit voluptates libero. Expedita eum nisi autem laudantium. Obcaecati quas vitae quis at tempore.
        Enim vitae quidem aliquam ipsa esse laborum molestiae velit molestias fugit. Praesentium, nostrum totam delectus blanditiis quibusdam neque nihil quis reprehenderit quisquam. Non adipisci, rem molestiae neque ipsa mollitia aliquid.
        Dicta quod voluptates rem, libero veniam a commodi veritatis eius deserunt at quo atque magni, ratione recusandae aliquam ea deleniti consequatur mollitia accusantium incidunt praesentium omnis! Quasi eos eum explicabo!
        Ipsa eligendi aspernatur esse consectetur ipsam asperiores ad impedit veritatis facilis sunt maiores ducimus enim explicabo ea velit alias ipsum expedita aperiam officia, illo consequuntur natus nam eius! Id, ad.
        Adipisci, autem ab. Quaerat ab saepe repellat minus itaque veritatis cumque rerum dolorum adipisci. Culpa repellendus officiis tenetur, porro incidunt vitae dolores, cum voluptatum delectus vero deserunt quis, quae quos!
        Sunt architecto beatae quia. Animi distinctio quasi cupiditate quae laborum modi odit ut! Ipsum odio, eius debitis voluptatibus ea sunt culpa qui libero nulla aliquid quisquam accusantium eum asperiores consequuntur.
        Sed fugit at debitis voluptates vitae? Dolore animi distinctio labore nobis doloremque. Perspiciatis ratione aliquam dolores, possimus rem unde quae eum sed quo, veritatis atque. Maiores sit culpa perferendis atque.
        Laudantium illo itaque veritatis excepturi, harum sunt ex dolor dolore velit quia at commodi id sequi quam, necessitatibus dolores quidem doloribus hic, eligendi consequatur. Fuga quo quasi ratione perspiciatis vitae!
        Dolore nisi natus voluptatum consequatur suscipit illo minima itaque minus omnis tempore neque ea officiis perferendis facilis iste, vitae mollitia voluptates dolorem, consequuntur exercitationem laudantium. Tempora eos voluptas error assumenda.
        Quisquam mollitia accusantium sint molestiae. Earum nostrum, impedit, accusamus minus saepe explicabo nihil hic distinctio dolore sit nisi, accusantium voluptatum odit perferendis minima. Vero, ducimus culpa voluptates ullam eos incidunt.
        Neque adipisci numquam quisquam odit ducimus libero blanditiis nobis ipsum, excepturi doloribus placeat tempora eveniet dicta praesentium, voluptatibus aut laborum vero sunt quibusdam ipsam quaerat, ea rem aperiam. Sint, dolorum?
        Corporis, beatae at ullam veritatis voluptates dolorum odit harum nemo in architecto eius provident blanditiis, iste, tenetur sapiente modi molestias cum ab consequatur! Dicta esse, recusandae reprehenderit at voluptate cumque.
        Odit quam excepturi mollitia. Officia dolor repellendus, tempora vel laudantium omnis ex quidem totam magnam! Voluptate, nihil aut excepturi, ut inventore ducimus fugiat accusantium neque totam possimus ratione magnam delectus.
        Dolorem quae consequuntur vitae ex aliquam distinctio corrupti dolorum, laborum, officiis quo ipsum ut, nemo asperiores ratione sit dicta tempora commodi maxime est a fuga sequi. Corrupti labore optio harum!
        Ipsa tenetur impedit eveniet possimus nihil doloribus vitae qui, id repudiandae recusandae, fuga, eaque quidem nesciunt molestiae et odit deserunt consectetur. Cum repellendus quam illo provident est reiciendis beatae. Ducimus.
        Officia inventore veritatis consectetur totam corporis dignissimos quo eum, recusandae debitis porro distinctio commodi? Et eaque aliquid error fugiat odit, neque veniam rem, blanditiis laborum vero accusantium id ipsum. Iure?
        Quia, eos voluptate impedit illo ipsa labore molestiae quisquam praesentium est alias doloribus possimus deserunt dolore sint ipsam nihil dolorum nam explicabo, magnam libero neque dolorem saepe architecto debitis. Quam?
        Harum optio earum pariatur facilis, commodi quos blanditiis aperiam porro dolore ad cumque molestias iure repudiandae vel dolorem voluptates velit aut esse adipisci alias? Voluptate praesentium fugit dolorum? Quaerat, facere?
        Nihil, odit labore? Sunt, porro vel dolore repellendus expedita sequi sapiente ratione veritatis magni laudantium minus! Illum quam nihil architecto saepe quaerat quo soluta fugit quis doloremque, facere eos perspiciatis!
    </div>






</div> 


@endsection