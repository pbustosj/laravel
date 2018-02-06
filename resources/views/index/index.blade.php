<!DOCTYPE html>
<html>
<head>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oxygen|Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta charset="utf-8">
</head>
<body>
  <div class="fixed-action-btn horizontal right" id="subir" style="display: none;">
    <a class="btn-floating btn-large black ancla" href="#inicio">
      <i class="material-icons large">publish</i>
    </a>
  </div>
  <div class="navbar-fixed white" id="inicio" >

    <!--Inicio Menú Web-->
    <nav class="grey lighten-3 hide-on-med-and-down" id="divNav" style="height: 100px;">
      <div class="nav-wrapper" >
        <a class="brand-logo center black-text ancla2" href="#quienesSomos">
          <img id="logoSMGES2" src="{{ URL::asset('/img/logoSMGES.png') }}" class="hide-on-med-and-down" style="width:180px;height:100px;">

        </a>

        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li class="active" id="INI"><a href="#inicio" class="black-text text-darken-2 ancla"><i class="material-icons left">language</i>Inicio</a></li>
          <li class="" id="QUI"><a href="#quienesSomos" class="black-text text-darken-2 ancla"><i class="material-icons left">description</i>¿Quiénes Somos?</a></li>
          <li class="" id="SER"><a href="#servicios" class="black-text text-darken-2 ancla"><i class="material-icons left">local_activity</i>Nuestros Servicios</a></li>          
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li class="" id="CONT"><a href="#contacto" class="black-text text-darken-2 ancla"><i class="material-icons left">chat</i>Contáctenos</a></li>
          <li class="" id="CONS"><a href="#consulta" class="black-text text-darken-2 ancla"><i class="material-icons left">search</i>Consultar Estado</a></li>
          <li class="" id="LOG"><a href="{{ url('login') }}" class="black-text text-darken-2 anclaWeb"><i class="material-icons left">perm_identity</i>Acceso Web</a></li>
        </ul>
      </div>
    </nav>
    <!--Término Menú Web-->


    <!--Inicio Menú Mobile-->
    <nav class="white hide-on-med-and-up" id="divNav2">
      <div class="nav-wrapper" >
       <a class="brand-logo center black-text ancla2" href="#quienesSomos">
        <img id="logoSMGES" src="http://sanmartingestorias.cl/images/logoSMGES.png" class="responsive-img hide-on-med-and-up" style="width: 110px;">
      </a>

      <a href="#" data-activates="mobile-demo" class="button-collapse black-text"><i class="material-icons black-text text-darken-2">menu</i></a>
      
      <ul class="side-nav" id="mobile-demo">
       <li><a href="#inicio" class="black-text text-darken-2 ancla"><i class="material-icons left">language</i>Inicio</a></li>
       <li ><a href="#quienesSomos" class="black-text text-darken-2 ancla"><i class="material-icons left">description</i>¿Quiénes Somos?</a></li>
       <li><a href="#servicios" class="black-text text-darken-2 ancla"><i class="material-icons left">local_activity</i>Nuestros Servicios</a>
       </li>
       <li ><a href="#contacto" class="black-text text-darken-2 ancla"><i class="material-icons left">chat</i>Contáctenos</a></li>
       <li ><a href="#consulta" class="black-text text-darken-2 ancla"><i class="material-icons left">search</i>Consultar Estado</a></li>
       <li><a href="Login.html" class="black-text text-darken-2 anclaWeb"><i class="material-icons left">perm_identity</i>Acceso Web</a></li>   
     </ul>
   </div>
 </nav>
 <!--Término Menú Mobile-->

</div>

<!--Inicio Sliders-->
<div class="slider fullscreen">
  <ul class="slides">
    <li>
      <img src="{{ URL::asset('/img/1b2.png') }}"> <!-- random image -->
      <div class="caption hide-on-med-and-down divSlide">
        <h2 class="green-text text-darken-4" style="font-weight: bold;"><strong>Acesorías Legales</strong></h2>
        <h5 class="white-text text-darken-2 strike"><strong><br>Te asesoramos y orientamos en cualquier proceso legal que tengas que realizar.</strong></h5>
      </div>
      <div class="caption center-align hide-on-med-and-up">
        <h2 class="white-text text-lighten-4"><strong>Acesorías Legales</strong></h2>
        <h5 class="white-text text-lighten-4"><strong>Relacionado con acesorías legales.</strong></h5>
      </div>
    </li>
    <li>
      <img src="{{ URL::asset('/img/2b2.png') }}"> <!-- random image -->
      <div class="caption left-align hide-on-med-and-down divSlide">
        <h2 class="green-text text-darken-4"><strong>Gestión Documental</strong></h2>
        <h5 class="white-text text-lighten-4"><strong>Realizamos todo tipo de gestión documental relacionada el ámbito legal, orientada principalmente en el mercado inmobiliario y telecomunicaciones.</strong></h5>
      </div>
      <div class="caption left-align hide-on-med-and-up">
        <h2 class="white-text text-lighten-4"><strong>Gestión de Documentos</strong></h2>
        <h5 class="white-text text-lighten-4"><strong>Relacionado con gestión documental.</strong></h5>
      </div>
    </li>
    <li>
      <img src="{{ URL::asset('/img/3b2.png') }}"> <!-- random image -->
      <div class="caption right-align hide-on-med-and-down divSlide">
       <h2 class="green-text text-darken-4"><strong>Agilización de Trámites</strong></h2>
       <h5 class="white-text text-lighten-4"><strong>No sigas perdiendo tu tiempo con trámites y gestiones que podemos hacer por ti.</strong></h5>
     </div>
     <div class="caption right-align hide-on-med-and-up">
       <h2 class="white-text text-lighten-4"><strong>Agilización de Trámites</strong></h2>
       <h5 class="white-text text-lighten-4"><strong>Relacionado con agilización de trámites.</strong></h5>
     </div>
   </li>
   <li>
    <img src="{{ URL::asset('/img/5b2.png') }}"> <!-- random image -->
    <div class="caption right-align hide-on-med-and-down divSlide">
      <h2 class="green-text text-darken-4"><strong>Calidad de Servicio</strong></h2>
      <h5 class="white-text text-lighten-4"><strong>Integridad, seguidad y confidencialidad en cada uno de nuestros servicios.</strong></h5>
    </div>
    <div class="caption right-align hide-on-med-and-up">
      <h2 class="green-text text-darken-4"><strong>Calidad de Servicio</strong></h2>
      <h5 class="white-text text-lighten-4"><strong>Integridad, seguidad y confidencialidad en cada uno de nuestros servicios.</strong></h5>
    </div>
  </li>
  <li>
    <img src="{{ URL::asset('/img/smg.png') }}"> <!-- random image -->
    <div class="caption center-align ">
     <div class="hide-on-med-and-down" id="wena"> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
     <div class="hide-on-med-and-up"><br><br><br><br><br><br><br><br><br><br><br><br></div>
     <h3 class="green-text text-darken-4"><strong>Un servicio óptimo, confiable y seguro.</strong></h3>
   </div>
 </li>   
</ul>
</div>
<!--Término Sliders-->

<div>
 <br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br>
</div>

<div class="pbj">
  <div class="section white ">
    <div class="hide-on-med-and-up"><br><br><br></div>
    <div class="hide-on-med-and-down"><br><br></div>
    <ul class="ped">
      <div class="row container" id="quienesSomos">
        <li class="green-text" style="opacity: 0">
          <div class="col l12">
            <h3 class="green-text text-darken-2 header center">¿Quiénes Somos?</h3>
          </div>
        </li>
      </div>
      <div class="row container" id="quienesSomosCuerpo">
       <li class="green-text" style="opacity: 0">
        <div class="grey-text text-darken-3 lighten-3 col l6">
          <div class="row">
            <div class="col l12">
              <h6 class="blue-text text-darken-2">¿Por qué nos destacamos?</h6>
              Somos una empresa familiar, un cálido grupo humano de profesionales con vasta experiencia en gestión y tramitación de documentos legales enfocados principalmente en el sector empresarial.

              Contamos con mas de 15 años en el mercado inmobiliario y 10 años de experiencia en el rubro de las telecomunicaciones, lo que nos permite entregar los mejores resultados en gestión de documentación y otros servicios solicitados por nuestros clientes y nos transforma en conocedores de los procesos existentes, problemática y obstáculos internos de cada uno de ellos.

              Nuestros colaboradores son especialistas en el área y están dispuestos a resolver todos sus problemas, siendo nuestro principal objetivo la rapidez en cada gestión.
            </div>
          </div>
        </div>
        <div class="grey-text text-darken-3 lighten-3 col l6">
         <div class="row">
           <div class="col l12">
             <h6 class="blue-text text-darken-2">Misión</h6>
             Solucionar y gestionar la tramitación de documentos de nuestros clientes. Nuestros compromiso es entregar un servicio y soluciones de calidad en un tiempo justo, ya que entendemos y conocemos las necesidades del cliente y respondemos de acuerdo a éstas.
           </div>
         </div>
         <div class="row">
           <div class="col l12">
             <h6 class="blue-text text-darken-2">Visión</h6>
             Ser los mejores proveedores de soluciones en gestión documental y tramitación legal del mercado, destacando por nuestra agilidad y tiempo de respuesta.
             Contamos además, con un servicio on-line donde Ud. podrá consultar el estado del(los) documento(s) solicitado(s) en tiempo real, lo que permitirá agilizar aún más el proceso.
             Si tienes alguna duda, no olvides escribírnos. 
             ¡Estámos aquí para ayudarte!.
           </div>
         </div>
       </div>
     </li>
   </div>
   <div class="row container" id="quienesSomosFooter">
    <li class="green-text" style="opacity: 0">
     <div class="col l3 s6"><img src="{{ URL::asset('/img/file.png') }}" alt="" class="qS  tooltipped" data-position="top" data-delay="50" data-tooltip="Vasta experiencia en gestión y tramitación de documentos legales."></div>
     <div class="col l3 s6 "><img src="{{ URL::asset('/img/watch.png') }}" alt="" class="qS  tooltipped" data-position="top" data-delay="50" data-tooltip="Optimización de tiempo de respuesta en resolución de cada caso."></div>
     <div class="col l3 s6"><img src="{{ URL::asset('/img/hold.png') }}" alt="" class="qS  tooltipped" data-position="top" data-delay="50" data-tooltip="Integridad, seguridad y confidencialidad con la información de cada cliente."></div>
     <div class="col l3 s6"><img src="{{ URL::asset('/img/cloud.png') }}" alt="" class="qS  tooltipped" data-position="top" data-delay="50" data-tooltip="Sistema web donde podrá consultar el estado real de tu solicitud."></div>
   </li>
 </div>
</ul>
</div>
<br>


<div class="parallax-container hide-on-med-and-down">
  <div class="parallax"><img src="{{ URL::asset('/img/F1000069522.png') }}"></div>
</div>


<div class="row container hide-on-med-and-up" id="servicios2" style="opacity: 0;">
  <br>
  <h3 class="green-text text-darken-2 header center">Nuestros Servicios</h3><hr>
  <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Estudio de Título</div>
      <div class="collapsible-body"><span>
        <p>El estudio de títulos es el análisis que efectúa un abogado de los antecedentes legales del inmueble que será objeto de la operación, tendiente a que este último sea vendido a un tercero o bien hipotecado a un banco u otra institución financiera, sólo una vez que los títulos de dominio hayan sido encontrados conforme a derecho.</p>
        <p>

          El comprador que adquirirá la propiedad y el banco en cuyo favor se constituirá la hipoteca deben tener la tranquilidad que el inmueble que se está comprando y en su caso, hipotecando, ha sido legítimamente adquirido por el actual propietario. Además, se debe tener la certeza que todos las anteriores transferencias del inmueble hasta completar un período de 10 años hacía atrás, también fueron bien hechas. 
        </p>
        <p>

          El trabajo que involucra el estudio de títulos, que necesariamente debe ser llevado a cabo por un abogado, es una labor profesional de carácter preparatorio y preventivo. 
        </p>
        <p>
          Es preparatorio ya que se debe efectuar antes de celebración de la escritura de compraventa o hipoteca, en su caso. Normalmente se realiza antes de la compraventa pero con posterioridad a la promesa de compraventa. En este último contrato se establecerá que el negocio queda sujeto a la condición que los títulos del inmueble se encuentren conforme a Derecho a juicio del abogado del comprador o del departamento legal del banco que financie la operación, según se trate de una compraventa al contado o con crédito hipotecario.
        </p>
        <p>
          Es preventivo, ya que se efectúa sin que exista ningún juicio o conflicto en contra del actual propietario o de sus antecesores. Por el contrarío, lo que con el estudio de títulos se pretende es descartar que un tercero pueda disputar fundadamente el derecho de dominio que tiene el actual propietario y que como consecuencia de ello también pueda llegar, en el futuro, a impugnar los derechos del nuevo adquirente.
        </p>
        <p>
          El estudio de títulos comienza con la revisión de la actual situación jurídica del inmueble, es decir se debe analizar si la inscripción de dominio está correcta y se encuentra vigente, si el inmueble está afecto a alguna hipoteca, gravamen, prohibición o embargo. Si existe alguna declaración de utilidad pública o se encuentra afecto a expropiación municipal o del Serviu.

          Posteriormente, el abogado tendrá que analizar cada una de las transferencias efectuadas hacía atrás, estudiando las correspondientes escrituras de compraventa, de adjudicación, de dación en pago, etc. según sea el caso, y sus respectivas inscripciones, de modo tal que se construya íntegramente la cadena posesoria del inmueble desde la actual inscripción hasta 10 años atrás. 
        </p>
        <p>
          En otras palabras, tendrá que revisar y estudiar todas las escrituras e inscripciones que existan en dicho período. Dicha revisión contemplará en cada escritura e inscripción involucrada, la correcta descripción del inmueble y sus deslindes; que el precio de la compraventa se haya pagado en forma íntegra y total; que se hayan otorgado las autorizaciones de rigor; que en caso que hubieren intervenido apoderados estos cuenten con los poderes suficientes para comprar o vender, según el caso; que si se trata de sociedades u otras persona jurídicas, estén bien constituidas y sus representantes cuenten con las facultades necesarias. 
        </p>
        <p>

          En el caso que uno de los propietarios anteriores hubiese fallecido, habrá que estudiar la posesión efectiva de la herencia, revisar la inscripción de la propiedad a nombre de la sucesión, el pago del impuesto de herencia, las autorizaciones judiciales para los herederos menores, etc. 
        </p>
        <p>
          El Estudio termina con el correspondiente informe de títulos conforme a derecho emitido por el abogado, el cual es indispensable para continuar con la correspondiente operación. 

          Por último, es necesario tener presente que la recopilación de los títulos de dominio es una obligación del vendedor, de modo tal que todos los gastos que ello implique serán de cargo de la parte vendedora.
        </p></span></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">place</i>Compra y Venta de Propiedad</div>
        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">whatshot</i>Poseción Efectiva</div>
        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">whatshot</i>Otros</div>
        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
      </li>
    </ul>
  </div>
  <ul class="ped">
    <div class="row container hide-on-med-and-down" id="servicios">
     <li class="green-text" style="opacity: 0">
      <br>
      <h3 class="green-text text-darken-2 header center">Nuestros Servicios</h3><hr>
      <div class="col s12 m3">
        <div class="card-panel hoverable">
          <div class="card-image">
            <center><img src="{{ URL::asset('/img/estudio.png') }}" class="responsive-img cardIma"></center><br>
            <span class="card-title"><strong>Estudio de Título</strong></span>

          </div>
          <div class="card-content">
            <p>El estudio de títulos es el análisis que efectúa un abogado de los antecedentes legales del inmueble que será objeto de la operación, tendiente a que este último sea vendido...</p>
            <a href="#modalET" class="btn-floating waves-effect waves-light green darken-2 modal-trigger"><i class="material-icons">add</i></a> <strong>Leer más.</strong>

          </div>
        </div>
      </div>
      <div class="col s12 m3">
        <div class="card-panel hoverable">
          <div class="card-image">
            <center><img src="{{ URL::asset('/img/casa.png') }}" class="responsive-img cardIma"></center><br>
            <span class="card-title"><strong>Compra y Venta de Propiedad</strong></span>

          </div>
          <div class="card-content">
            <p>
            Para realizar una compra venta de un bien raíz, el propietario debe tener todos los títulos de los últimos 10 años e hipotecas y gravá...</p>
            <a href="#modalCV" class="btn-floating waves-effect waves-light green darken-2 modal-trigger"><i class="material-icons">add</i></a> <strong>Leer más.</strong>
          </div>
        </div>
      </div>

      <div class="col s12 m3">
        <div class="card-panel hoverable">
          <div class="card-image">
            <center><img src="{{ URL::asset('/img/posesion.png') }}" class="responsive-img cardIma"></center><br>
            <span class="card-title">Poseción Efectiva</span>

          </div>
          <div class="card-content">
            <p>La Posesión Efectiva es un trámite que se debe realizar cuando una persona, al morir, ha dejado bienes (casas, vehículos, ahorros, etc.) y sus herederos deben obte...</p>
            <a href="#modalPE" class="btn-floating waves-effect waves-light green darken-2 modal-trigger"><i class="material-icons">add</i></a> <strong>Leer más.</strong
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m3">
        <div class="card-panel hoverable">
          <div class="card-image">
            <center><img src="{{ URL::asset('/img/otros.png') }}" class="responsive-img cardIma"></center><br>
            <span class="card-title">Otros</span>

          </div>
          <div class="card-content">
            <p>Contamos con un equipo de especialistas dispuestos a solucionar tus dudas con respecto a algún trámite y/u orientarte en el proceso de búsqueda de las herramie...</p>
            <a href="#modalOt" class="btn-floating waves-effect waves-light green darken-2"><i class="material-icons">add</i></a> <strong>Leer más.</strong
            </div>
          </div>
        </div>
      </div>
    </li>
  </div>

</ul>
<br>
<div class="row container" id="contacto" style="opacity: 0;">

  <h3 class="green-text text-darken-2 header center">Contáctenos</h3><hr>
  <br>
  <h5 class="center blue-grey-text  text-blue-grey lighten-2"> ¿Necesitas nuestra ayuda?. Escríbenos y te responderemos a la brevedad.<br>Estamos aquí para ayudarte.</h5>
  <br>
  <br>
  <form class="col s12">
    <div class="row">
      <div class="input-field col s12 l6">
        <i class="material-icons prefix">account_circle</i>
        <input id="nomConsulta" type="text" class="validate">
        <label for="nomConsulta">Nombre y Apellidos</label>
      </div>
      <div class="input-field col s12 l6">
        <i class="material-icons prefix">email</i>
        <input id="emaConsulta" type="email" class="validate">
        <label for="emaConsulta" data-error="Debe escribir email válido." data-success="Email Válido.">Dirección de Correo</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 l6">
        <i class="material-icons prefix">subject</i>
        <input id="asuConsulta" type="text" class="validate">
        <label for="asuConsulta">Asunto Mensaje</label>
      </div>
      <div class="input-field col s12 l6" >
        <i class="material-icons prefix">description</i>
        <textarea id="cueMensaje" class="materialize-textarea" style="height: 150px;" data-length="120"></textarea>
        <label for="cueMensaje">Descripción Mensaje</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <a id="btnEnviarConsulta" class="btn green" style="display:block;margin:0 auto;">Consultar</a>
      </div>
    </div>
  </form>

</div>

<div class="row container" id="clientes" style="opacity: 0;">
 <h3 class="green-text text-darken-2 header center">Enlaces Relacionados</h3><hr>
 <div class="carousel  col s12">
  <a class="carousel-item" href="http://www.wom.cl" target="_blank"><img class="imgEnlacesRelacion" src="{{ URL::asset('/img/wom.png') }}"></a>
  <a class="carousel-item" href="http://homer.sii.cl" target="_blank"><img class="imgEnlacesRelacion" src="{{ URL::asset('/img/sii.png') }}"></a>
  <a class="carousel-item" href="http://www.archivonacional.cl/616/w3-channel.html" target="_blank"><img src="{{ URL::asset('/img/logo-arc-nac.png') }}"></a>
  <a class="carousel-item" href="http://www.mtt.gob.cl/" target="_blank"><img class="imgEnlacesRelacion" src="{{ URL::asset('/img/MttChile.png') }}"></a>
  <a class="carousel-item" href="https://www.dgac.gob.cl/" target="_blank"><img class="imgEnlacesRelacion" src="{{ URL::asset('/img/DGAC.png') }}"></a>
</div>

</div>


<div id="modalET" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Estudio de Título:</h4>
    <p>El estudio de títulos es el análisis que efectúa un abogado de los antecedentes legales del inmueble que será objeto de la operación, tendiente a que este último sea vendido a un tercero o bien hipotecado a un banco u otra institución financiera, sólo una vez que los títulos de dominio hayan sido encontrados conforme a derecho.</p>
    <p>

      El comprador que adquirirá la propiedad y el banco en cuyo favor se constituirá la hipoteca deben tener la tranquilidad que el inmueble que se está comprando y en su caso, hipotecando, ha sido legítimamente adquirido por el actual propietario. Además, se debe tener la certeza que todos las anteriores transferencias del inmueble hasta completar un período de 10 años hacía atrás, también fueron bien hechas. 
    </p>
    <p>

      El trabajo que involucra el estudio de títulos, que necesariamente debe ser llevado a cabo por un abogado, es una labor profesional de carácter preparatorio y preventivo. 
    </p>
    <p>
      Es preparatorio ya que se debe efectuar antes de celebración de la escritura de compraventa o hipoteca, en su caso. Normalmente se realiza antes de la compraventa pero con posterioridad a la promesa de compraventa. En este último contrato se establecerá que el negocio queda sujeto a la condición que los títulos del inmueble se encuentren conforme a Derecho a juicio del abogado del comprador o del departamento legal del banco que financie la operación, según se trate de una compraventa al contado o con crédito hipotecario.
    </p>
    <p>
      Es preventivo, ya que se efectúa sin que exista ningún juicio o conflicto en contra del actual propietario o de sus antecesores. Por el contrarío, lo que con el estudio de títulos se pretende es descartar que un tercero pueda disputar fundadamente el derecho de dominio que tiene el actual propietario y que como consecuencia de ello también pueda llegar, en el futuro, a impugnar los derechos del nuevo adquirente.
    </p>
    <p>
      El estudio de títulos comienza con la revisión de la actual situación jurídica del inmueble, es decir se debe analizar si la inscripción de dominio está correcta y se encuentra vigente, si el inmueble está afecto a alguna hipoteca, gravamen, prohibición o embargo. Si existe alguna declaración de utilidad pública o se encuentra afecto a expropiación municipal o del Serviu.

      Posteriormente, el abogado tendrá que analizar cada una de las transferencias efectuadas hacía atrás, estudiando las correspondientes escrituras de compraventa, de adjudicación, de dación en pago, etc. según sea el caso, y sus respectivas inscripciones, de modo tal que se construya íntegramente la cadena posesoria del inmueble desde la actual inscripción hasta 10 años atrás. 
    </p>
    <p>
      En otras palabras, tendrá que revisar y estudiar todas las escrituras e inscripciones que existan en dicho período. Dicha revisión contemplará en cada escritura e inscripción involucrada, la correcta descripción del inmueble y sus deslindes; que el precio de la compraventa se haya pagado en forma íntegra y total; que se hayan otorgado las autorizaciones de rigor; que en caso que hubieren intervenido apoderados estos cuenten con los poderes suficientes para comprar o vender, según el caso; que si se trata de sociedades u otras persona jurídicas, estén bien constituidas y sus representantes cuenten con las facultades necesarias. 
    </p>
    <p>

      En el caso que uno de los propietarios anteriores hubiese fallecido, habrá que estudiar la posesión efectiva de la herencia, revisar la inscripción de la propiedad a nombre de la sucesión, el pago del impuesto de herencia, las autorizaciones judiciales para los herederos menores, etc. 
    </p>
    <p>
      El Estudio termina con el correspondiente informe de títulos conforme a derecho emitido por el abogado, el cual es indispensable para continuar con la correspondiente operación. 

      Por último, es necesario tener presente que la recopilación de los títulos de dominio es una obligación del vendedor, de modo tal que todos los gastos que ello implique serán de cargo de la parte vendedora.
    </p>
    <p>
     <div class="chip">
      <img src="{{ URL::asset('/img/icon-404.png') }}" alt="Ir a Fuente">
      <a href="https://www.portalinmobiliario.com/diario/noticia.asp?NoticiaID=17915">Fuente: Portal Inmobiliario</a>
    </div>

  </p>
</div>
<div class="modal-footer">
  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Entendido</a>
</div>
</div>

<div id="modalPE" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Poseción Efectiva:</h4>
    <p>Al morir una persona dejando bienes (casa, vehículo, ahorros, obras de arte, etc.), sus herederos deben obtener la Posesión Efectiva de la Herencia para poder disponer legalmente de dichos bienes. Es conveniente que este trámite se haga cuanto antes, ya que con el paso del tiempo los bienes pueden extraviarse, perder valor o comenzar a ser usados por quien no corresponde.</p>
    <p>

      El comprador que adquirirá la propiedad y el banco en cuyo favor se constituirá la hipoteca deben tener la tranquilidad que el inmueble que se está comprando y en su caso, hipotecando, ha sido legítimamente adquirido por el actual propietario. Además, se debe tener la certeza que todos las anteriores transferencias del inmueble hasta completar un período de 10 años hacía atrás, también fueron bien hechas. 
    </p>
    <p>
      Si la persona fallecida (causante) dejó un testamento en el que dispone cómo serán repartidos esos bienes, el trámite de Posesión Efectiva de la Herencia se hace ante un Tribunal con la asistencia de un abogado.

    </p>
    <p>

      Si el causante no dejó testamento, su herencia se denomina "Intestada" y la tramitación de la Posesión Efectiva se hace ante el Servicio de Registro Civil e Identificación, y no es necesaria la intervención de un abogado. Lo anterior de acuerdo a la Ley N° 19.903 sobre Procedimiento para Otorgar la Posesión Efectiva de la Herencia, publicada el 10 de octubre de 2003, la que entregó al Servicio de Registro Civil e Identificación la responsabilidad de tramitar las posesiones efectivas de herencias originadas en sucesiones sin testamento abiertas en Chile, quedando las sucesiones con testamento en el ámbito de los Tribunales de Justicia.

    </p>
    <p>
     Por consiguiente, la Posesión Efectiva de la Herencia es una Resolución de los Tribunales de Justicia o del Servicio de Registro Civil e Identificación que declara herederos (de bienes, derechos y obligaciones) a quienes acreditan el vínculo de parentesco o de matrimonio con la persona fallecida.
   </p>

   <p>
     <div class="chip">
       <img src="{{ URL::asset('/img/icon-404.png') }}" alt="Ir a Fuente">
       <a href="https://www.registrocivil.cl/f_posesion.html">Fuente: Registro Civil</a>
     </div>

   </p>
 </div>
 <div class="modal-footer">
  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Entendido</a>
</div>
</div>

<div id="modalCV" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Compra y Venta de Propiedades:</h4>
    Al comprar un bien raíz (casa, departamento, sitio, parcela, fundo, etc.) debes tener presente que el Dominio de la Propiedad no se adquiere de palabra, sino que debe efectuarse una Inscripción del Bien Raíz a tu nombre en el Conservador de Bienes Raíces: sólo en ese momento llegarás a ser dueño. "los contratos de compra-venta no tienen ninguna validez a la hora de acreditar a quién pertenece la propiedad. Si existen bienes inmuebles que van a cambiar de propietario debe quedar constancia en el Conservador "ineludiblemente".

    Documentación requerida

    Para realizar una compra venta de un bien raíz, el propietario debe tener todos los títulos de los últimos 10 años e hipotecas y gravámenes de los últimos 30 años, los documentos necesarios para la venta al día y preparados en una carpeta de antecedentes. Estos documentos son: 

    1) Solicitud de Copia de la Inscripción de Registro de la propiedad, otorgado por el Conservador de Bienes Raíces.

    2) Certificado de gravámenes, y prohibiciones de la propiedad inscrita, otorgado por el Conservador de Bienes Raíces.

    3) Copia de la escritura pública de compraventa o de otro título, como por ejemplo, cesión, adjudicación, posesión efectiva, etc, que acredite la adquisición del inmueble a favor de su actual propietario.

    4) Certificado de no expropiación otorgado por la Municipalidad que corresponda al domicilio del inmueble. También es posible conseguirlo en el Servicio de Vivienda y Urbanismo (SERVIU).

    5) El último pago de Contribuciones de la Tesorería General de la República. Si la propiedad estuviera excenta de pago de contribuciones, entonces debe presentarse el Certificado de Exención que otorga el Servicio de Impuestos Internos (SII). 

    6) Certificado de Deuda por Contribuciones otorgado por Tesorería General de la República.

    7) Plano del inmueble, si lo hubiera.

    Se recomienda realizar un contrato de promesa de compraventa que comprenda deberes y derechos de las partes de tal manera de establecer un real compromiso de que la transacción se realizará. Ver ejemplo: <a href="http://www.udp.cl/derecho/estudiantes/apuntes/promesa.pdf">Pincha Aquí</a>

    <p>
     <div class="chip">
      <img src="{{ URL::asset('/img/icon-404.png') }}" alt="Ir a Fuente">
      <a href="http://www.cristianreyespropiedades.cl/index.php?opc=30">Fuente: Cristian Reyes Propiedades</a>
    </div>

  </p>
</div>
<div class="modal-footer">
  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Entendido</a>
</div>
</div>

<div id="modalOt" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Otros servicios de San Martin Gestorías:</h4>
  <p>Contamos con una amplia cartera de servicios para empresas y personas naturales:</p>

    <a href="http://www.udp.cl/derecho/estudiantes/apuntes/promesa.pdf">Pincha Aquí</a>

    <p>
     <div class="chip">
      <img src="{{ URL::asset('/img/icon-404.png') }}" alt="Ir a Fuente">
      <a href="http://www.cristianreyespropiedades.cl/index.php?opc=30">Fuente: Cristian Reyes Propiedades</a>
    </div>

  </p>
</div>
<div class="modal-footer">
  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Entendido</a>
</div>
</div>



<footer class="page-footer green darken-2" id="footer">
  <div class="container">
    <div class="row">
      <div class="col l12 s12">
        <h5 class="white-text">San Martín Gestorías</h5>
        <p class="grey-text text-lighten-4">Somos una empresa familiar, un cálido grupo humano de profesionales con vasta experiencia en gestión y tramitación de documentos legales enfocados principalmente en el sector empresarial. Contamos con mas de 15 años en el mercado inmobiliario y 10 años de experiencia en el rubro de las telecomunicaciones, lo que nos permite entregar los mejores resultados en gestión de documentación y otros servicios solicitados por nuestros clientes y nos transforma en conocedores de los procesos existentes, problemática y obstáculos internos de cada uno de ellos. Nuestros colaboradores son especialistas en el área y están dispuestos a resolver todos sus problemas, siendo nuestro principal objetivo la rapidez en cada gestión.</p><br>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container row">
      <div class="col l6">  
        © 2016 Copyright Powered by SanMartinGestorías.<br>
        Todos los derechos reservados.
      </div>
      <div class="col l6 right-align white-text">  
        <i class="material-icons ">mail</i>:<a class="white-text" style="padding-top: -20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contacto@sanmartingestorias.cl</a><br>
        &nbsp;&nbsp;&nbsp;<i class="material-icons ">mail</i>:<a class="white-text" style="padding-top: -20px;"> &nbsp;&nbsp;&nbsp;&nbsp;vbarahona@sanmartingestorias.cl</a><br>
        <i class="material-icons ">mail</i>:<a class="white-text" style="padding-top: -20px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cconcha@sanmartingestorias.cl</a>

      </div>


    </div>
  </div>
</footer>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>
<script>
  $(document).ready(function(){


    $('.pbj').click(function(){
      $("#inicio").css("opacity", "0");
    });

    var lastScrollTop = 0;
    $(window).scroll(function(event){
      var st = $(this).scrollTop();

      lastScrollTop = st;
      if(jQuery(this).scrollTop() > 100) {
       $('#subir').show('slow');
       jQuery('#logoSMGES2')
       .css({'width':'150px','height':'60px',
        '-webkit-transition':'all 0.5s ease',
        '-moz-transition':'all 0.5s ease',
        '-ms-transition':'all 0.5s ease',
        '-o-transition':'all 0.5s ease',
        'transition':'all 0.5s ease'
      })

       .attr('src','/img/logoSMGES.png'); 

       jQuery('#divNav')
       .css({
        'height':'60px',
        '-webkit-transition':'all 0.5s ease',
        '-moz-transition':'all 0.5s ease',
        '-ms-transition':'all 0.5s ease',
        '-o-transition':'all 0.5s ease',
        'transition':'all 0.5s ease'
      }) ;


       jQuery('.ancla')
       .css({
        'padding-top': '0px',
        'height':'60px',
        '-webkit-transition':'all 0.5s ease',
        '-moz-transition':'all 0.5s ease',
        '-ms-transition':'all 0.5s ease',
        '-o-transition':'all 0.5s ease',
        'transition':'all 0.5s ease',
        'font-size':'15px'
      }) ;

       jQuery('.anclaWeb')
       .css({
        'padding-top': '0px',
        'height':'60px',
        '-webkit-transition':'all 0.5s ease',
        '-moz-transition':'all 0.5s ease',
        '-ms-transition':'all 0.5s ease',
        '-o-transition':'all 0.5s ease',
        'transition':'all 0.5s ease',
        'font-size':'15px'
      }) ;
     }


     if(jQuery(this).scrollTop() < 100) {
      $('#subir').hide('slow');
      jQuery('#divNav')
      .css({
        'height':'100px',
        '-webkit-transition':'all 0.5s ease',
        '-moz-transition':'all 0.5s ease',
        '-ms-transition':'all 0.5s ease',
        '-o-transition':'all 0.5s ease',
        'transition':'all 0.5s ease'
      }) ;
      jQuery('#logoSMGES2')
      .css({'width':'180px',
        'height':'100px',
        '-webkit-transition':'all 0.5s ease',
        '-moz-transition':'all 0.5s ease',
        '-ms-transition':'all 0.5s ease',
        '-o-transition':'all 0.5s ease',
        'transition':'all 0.5s ease'
      })   
    //.removeClass('z-depth-5')
    .attr('src','/img/logoSMGES.png')
    ; 
    jQuery('.ancla')
    .css({
      'padding-top': '20px',
      'height':'100px',
      '-webkit-transition':'all 0.5s ease',
      '-moz-transition':'all 0.5s ease',
      '-ms-transition':'all 0.5s ease',
      '-o-transition':'all 0.5s ease',
      'transition':'all 0.5s ease',
      'font-size':'20px'
    }) ;
    jQuery('.anclaWeb')
    .css({
      'padding-top': '20px',
      'height':'100px',
      '-webkit-transition':'all 0.5s ease',
      '-moz-transition':'all 0.5s ease',
      '-ms-transition':'all 0.5s ease',
      '-o-transition':'all 0.5s ease',
      'transition':'all 0.5s ease',
      'font-size':'20px'
    }) ;
  }
});

    $('#btnEnviarConsulta').click(function(){

      if($('#nomConsulta').val().trim()==''){

        Materialize.toast("Nombre y Apellidos son obligatorios.",5000,"rounded red");
        $('#nomConsulta').focus();
        return false;

      }

      if($('#emaConsulta').val().trim()==''){

        Materialize.toast("Email es obligatorio.",5000,"rounded red");
        $('#emaConsulta').focus();
        return false;

      }else{
        emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

        if (!emailRegex.test( $('#emaConsulta').val().trim())) {
         Materialize.toast("Ingrese email válido.",5000,"rounded red");
         $('#emaConsulta').focus();
         return false;
       } 


     }
     if($('#asuConsulta').val().trim()==''){

      Materialize.toast("Asunto de Mensaje es obligatorio.",5000,"rounded red");
      $('#asuConsulta').focus();
      return false;
    }


    if($('#cueMensaje').val().trim()==''){

      Materialize.toast("Cuerpo de Mensaje es obligatorio.",5000,"rounded red");
      $('#cueMensaje').focus();
      return false;

    }
  });

    $('.chips').material_chip();
    $('.modal').modal();
    $('.parallax').parallax();
    $('.slider').slider();
    $('.scrollspy').scrollSpy();
    $(".button-collapse").sideNav();
    $('.carousel').carousel();
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    $('.tooltipped').tooltip({delay: 50});
    $('#inicio').mouseover(function(){
     $("#inicio").css("opacity", "1");
   });
    $("#inicio").mouseout(function(){
     //$("#inicio").css("opacity", "0");
   });

    $('li').bind("click", function () {
      var id = $(this).attr("id");
      $('li').removeClass("active");
      $('#' + id).addClass("active");

    });

    $('a.ancla').click(function (e) {
      e.preventDefault();
      var enlace = $(this).attr('href');
      $('html, body').animate({
        scrollTop: $(enlace).offset().top
      }, 1500);
    });

    $('a.ancla2').click(function (e) {
      e.preventDefault();
      var enlace = $(this).attr('href');
      $('html, body').animate({
        scrollTop: $(enlace).offset().top
      }, 2500);
    });

    var options = [
    {
     selector: '#quienesSomos', offset: 400, callback: function(el){ 
       Materialize.showStaggeredList($(el)); 
     } }, 
     {
      selector: '#quienesSomosCuerpo', offset: 450, callback: function(el) { 
       Materialize.showStaggeredList($(el)); 
     } },
     {
      selector: '#quienesSomosFooter', offset: 140, callback: function(el) { 
       Materialize.showStaggeredList($(el)); 
     } },
     {
      selector: '#servicios', offset: 450, callback: function(el) { 
       Materialize.showStaggeredList($(el)); 
     } },
     {
      selector: '#servicios2', offset: 0, callback: function(el) { 
       Materialize.fadeInImage($(el)); 
     } },  
     
     {
      selector: '#clientes', offset: 0, callback: function(el) { 
       Materialize.fadeInImage($(el)); 
     } },
     {
      selector: '#contacto', offset: 0, callback: function(el) { 
       Materialize.fadeInImage($(el)); 
     } },

     ];

     Materialize.scrollFire(options);
   });

 </script>    
 <style>
 .parallax-container{
  height: 750px;
}
.ancla{
  height: 100px;
  padding-top:20px;
  font-size: 18px;

}
.anclaWeb{
  height: 100px;
  padding-top:20px;
  font-size: 18px;

}
#quienesSomos{
  /*height: 650px;*/
}
body{
  text-align: justify;
  text-justify: inter-word;
  font-family: 'Oxygen', sans-serif;
}
.qS{
  max-height: 100px;
  display: block;
  margin: 0 auto;
  -moz-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
.qS:hover{
  -moz-transform: scale(2);
  -webkit-transform: scale(2);
  transform: scale(2);
}
}
.cardIma{
  max-height: 150px;

}
.divSlide{
  max-width: 300px;
  height: 800px;
  font-weight: bold;
  background-color: rgba(189, 189, 189, 0.1)
  

}
.indicators {
  display: none;
}
.imgEnlacesRelacion{
  height: 200px;
  width: 200px;
}


</style>  