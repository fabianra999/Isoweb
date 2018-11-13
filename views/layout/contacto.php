<section id="contact">
    <form id="ajax-contact"  method="post" action="views/components/contacto.php">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img class="img-fluid rounded" src="img/oficina_reuniones_2.jpg" alt="">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Mantengámonos en contacto</h2>
                    <hr class="my-4">
                    <p class="mb-5">
                        Con esta información podemos ponernos en contacto.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-4 ml-auto text-center mt-2">
                    <div class="wrap__index">
                        <input type="text" name="your-name" value="" size="40" class="" placeholder="Nombre *" required="required">
                    </div>
                </div>
                <div class="col-12 col-sm-4 ml-auto text-center mt-2">
                    <div class="wrap__index">
                        <input type="text" name="your-email" value="" size="40" class="" placeholder="Email *" required="required">
                    </div>
                </div>
                <div class="col-12 col-sm-4 ml-auto text-center mt-2">
                    <div class="wrap__index">    
                        <input type="text" name="your-telefono" value="" size="40" class="" placeholder="Telefono *" required="required">
                    </div>
                </div>
                <div class="col-12 col-sm-4 ml-auto text-center mt-2">
                    <div class="wrap__index">    
                        <input type="text" name="your-empresa" value="" size="40" class="" placeholder="Empresa *" required="required">
                    </div>
                </div>
                <div class="col-12 col-sm-4 ml-auto text-center mt-2">
                    <div class="wrap__index">    
                        <input type="text" name="your-cargo" value="" size="40" class="" placeholder="Cargo">
                    </div>
                </div>
                <div class="col-12 col-sm-4 ml-auto text-center mt-2">
                    <div class="wrap__index">    
                        <input type="text" name="your-empleados" value="" size="40" class="" placeholder="No. Empleados">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-sm-4 text-center">
                    <button class="btn__wix js-scroll-trigger"  type="submit" >
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <span>Comenzar ya!</span>
                    </button>
                </div>
            </div>
            <div class="row">  
                <div class="col-12">  
                    <div id="alertError" class="alert alert-danger d-none mt-4 text-center" role="alert">
                        Tu mensaje no fue enviado
                    </div>
                    <div id="alertSuccess" class="alert alert-success d-none mt-4 text-center" role="alert">
                        Tu mensaje fue enviado
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>