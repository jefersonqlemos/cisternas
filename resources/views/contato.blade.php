<!DOCTYPE html>
<html>

@extends('layouts.app')

@section('content')

<body>

<section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Contato</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="/">Home</a></li>
          <li><span>Contato</span></li>
        </ul>
      </div>
    </section>
    <!-- Contact us Page-->
    <section class="core-projects touch">
      <div class="sectpad touch_bg">
        <div class="container clearfix">
          <h1>Estamos Conectados</h1>
          <p>Você pode conversar conosco a qualquer momento. Por favor, use nosso whatsapp para bate-papo ou<br>
            preencha abaixo e envie uma mensagem ao nosso suporte.</p>
          <h6>Caso enviou uma mensagem, por favor, seja paciente, nós retornaremos para você. Nosso suporte é 24 horas<span> Dúvidas Gerais Telefone: (49) 99161-2223</span></h6>
          <div class="row touch_middle">
            <div class="col-md-4 open_hours">
              <div class="touch_top-con">
                <ul class="nav">
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-map-marker"></i></a></div>
                      <div class="media-body">R. Ema Schimdt, Santa Catarina, Videira</div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-envelope-o"></i></a></div>
                      <div class="media-body"><a href="mailto:ecohouseautomacao@outlook.com">ecohouseautomacao@outlook.com</a></div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-phone"></i></a></div>
                      <div class="media-body">(49) 99161-2223</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8 input_form">
              <form id="contactForm" action="http://galaxyanalytics.net/demos/industrial/contact_process.php" method="post">
                <input id="name" type="text" name="name" placeholder="Nome" class="form-control">
                <input id="email" type="email" name="email" placeholder="Email" class="form-control">
                <input id="subject" type="text" name="subject" placeholder="Assunto" class="form-control">
                <textarea id="message" rows="6" name="message" placeholder="Menssagem" class="form-control"></textarea>
                <div class="row m0">
                  <button type="submit" class="btn btn-default submit">Enviar <i class="fa fa-angle-double-right"></i></button>
                </div>
              </form>
              <div id="success">
                <p>Sua Mensagem Foi Enviada Com Sucesso.</p>
              </div>
              <div id="error">
                <p>Algo deu errado. A mensagem não pode ser enviada!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="map-area">
      <div id="contact-google-map" data-map-lat="-27.008" data-map-lng="-51.1523" data-icon-path="images/map/map-marker.png" data-map-title="Envato HQ" data-map-zoom="13" class="google-map"></div>
    </section>

    </body>

@endsection

</html>