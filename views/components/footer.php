<footer>
    <form id="ajax-newsletter" method="post" action="views/components/newsletter.php">
        <div class="container-fluid newsletter pt-4 pb-4">
            <div class="row  justify-content-center align-items-center">
                <div class="col-12 col-sm-5">
                    <h3>Subscríbete en nuestro <span class="text_color">Newsletter</span></h3>
                    <p>Subscríbete en nuestro newsletter y recibe nuestras noticias y novedades!</p>
                </div>
                <div class="col-12 col-sm-5 form form-newsletter"> 
                    <div class="input__wrap">
                        <input type="email" class="input__web" name="email" placeholder="Ingresa tu e-mail aquí" value="" required="required"> 
                        <button   type="submit">
                            <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        </button >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="alertErrorNewslette" class="alert alert-danger d-none mt-4 text-center" role="alert">
                    Tu mensaje no fue enviado
                    </div>
                    <div id="alertSuccessNewslette" class="alert alert-success d-none mt-4 text-center" role="alert">
                    Tu mensaje fue enviado
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="container-fluid footer__info">
        <div class="row align-items-start">
            <div class="col-sm-3 d-none d-sm-block footer__col-1 align-self-center">
                <div class="logo__footer">
                    <img src="img/Logo_sin_texto.png" alt="">
                </div>
            </div>
            <div class="col-12 col-sm-3 footer__col-2">
                <div class="contat__footer">
                    <div class="contat__footer__header">
                        <h1>NOSOTROS</h1>  
                    </div>
                    <div class="contat__footer__body">
                        <p>
                            ISOWEB S.A.S, ofrecemos innovación con sistemas cien por ciento web para la aplicación de las nuevas tecnologías, comprendiendo las necesidades y generando soluciones integrales hacia nuestros clientes.l
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-3 footer__col-3">
                <div class="contat__footer">
                    <div class="contat__footer__header">
                        <h1>CONTACTOS</h1>  
                    </div>
                    <div class="contat__footer__body">
                        <p>
                        <b>Dpto. Comercial: </b> <br>  comercial@isoweb.com.co <br>
                        <b>Dpto. Soporte: </b> <br> Soporte@isoweb.com.co
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-3 footer__col-4">
                <div class="office__footer">
                    <div class="contat__footer__header">
                        <h1>NUESTRA OFICINA</h1>  
                    </div>
                    <div class="contat__footer__body">
                        <p>
                        Carrera 53 # 104b - 35 oficina 305<br>
                            <b>Teléfono: </b>(057-1) 3470958 <br>
                            <b>Celular: </b>(057-03) 312 586 9841 <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>