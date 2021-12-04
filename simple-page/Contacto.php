<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>NDT DIN, C.A. - Contacto</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/aos.css" />
    </head>
    <body>
        <!-- NavBar -->
        <div id="topbar" class="topbar-colored topbar-fullwidth">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="top-menu ms-auto">
                            <li>
                                <a href="tel:02418256059"
                                    >Telefono: 0241-8256059</a
                                >
                            </li>
                            <li>
                                <a href="mailto:ndtdinca@yahoo.com.ve"
                                    >Correo: ndtdinca@yahoo.com.ve</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav
            id="custom-navbar"
            class="navbar sticky-top navbar-expand-lg navbar-light bg-light"
        >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img
                        src="img/logo/logo-navbar.png"
                        alt="logo"
                        width="200"
                    />
                </a>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdownMenuLink"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Servicios
                            </a>
                            <ul
                                class="dropdown-menu"
                                aria-labelledby="navbarDropdownMenuLink"
                            >
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Radiografía Industrial</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Ultrasonido</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Partículas Magnéticas</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Tintas Penetrantes</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Ensayos de Dureza</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Prueba de Hidrostática</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Prueba de Vacío</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Hollyday</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Detección de Tuberías Enterradas</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Tratamientos Térmicos</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdownMenuLink"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Normas
                            </a>
                            <ul
                                class="dropdown-menu"
                                aria-labelledby="navbarDropdownMenuLink"
                            >
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="https://asnt.org/"
                                        >ASNT</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="https://www.asme.org/"
                                        >ASME</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contáctanos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container contact-container">
            <div class="text-center mt-5">
                <h1>Formulario de Contacto</h1>
            </div>
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <form id="contact-form" role="form" method="post" action="register_contact.php">
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name"
                                                        >Nombre *</label
                                                    >
                                                    <input
                                                        id="form_name"
                                                        type="text"
                                                        name="name"
                                                        class="form-control"
                                                        placeholder="Por favor ingresa tu nombre *"
                                                        required="required"
                                                        data-error="El nombre es requerido"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname"
                                                        >Apellido *</label
                                                    >
                                                    <input
                                                        id="form_lastname"
                                                        type="text"
                                                        name="last_name"
                                                        class="form-control"
                                                        placeholder="Por favor ingresa tu apellido *"
                                                        required="required"
                                                        data-error="El apellido es requerido"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email"
                                                        >Correo *</label
                                                    >
                                                    <input
                                                        id="form_email"
                                                        type="email"
                                                        name="email"
                                                        class="form-control"
                                                        placeholder="Por favor ingresa tu correo *"
                                                        required="required"
                                                        data-error="Ingresa un correo valido."
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_message"
                                                        >Mensaje *</label
                                                    >
                                                    <textarea
                                                        id="form_message"
                                                        name="msg"
                                                        class="form-control"
                                                        placeholder="Escribe tu mensaje aqui!"
                                                        rows="4"
                                                        required="required"
                                                        data-error="Please, leave us a message."
                                                    ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <input
                                                    type="submit"
                                                    class="
                                                        btn btn-success btn-send
                                                        pt-2
                                                        btn-block
                                                    "
                                                    value="Enviar"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.8 -->
                </div>
                <!-- /.row-->
            </div>
        </div>

        <section id="footer">
            <div class="container">
                <div
                    class="
                        row
                        d-flex
                        alig-items-center
                        justify-content-center
                        text-center text-xs-center text-sm-left text-md-left
                    "
                >
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Enlaces rápidos</h5>
                        <ul class="list-unstyled quick-links">
                            <li>
                                <a href="index.html"
                                    ><i class="fa fa-angle-double-right"></i
                                    >Inicio</a
                                >
                            </li>
                            <li>
                                <a href="nosotros.html"
                                    ><i class="fa fa-angle-double-right"></i
                                    >Sobre Nosotros</a
                                >
                            </li>
                            <li>
                                <a href="Contacto.php"
                                    ><i class="fa fa-angle-double-right"></i
                                    >Contáctanos</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul
                            class="list-unstyled list-inline social text-center"
                        >
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"
                                    ><i class="fa fa-google-plus"></i
                                ></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank"
                                    ><i class="fa fa-envelope"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                    <hr />
                </div>
                <div class="row">
                    <div
                        class="
                            col-xs-12 col-sm-12 col-md-12
                            mt-2 mt-sm-2
                            text-center
                        "
                    >
                        <p>
                            <u>
                                <b>R.I.F. J-29696974-4</b>
                            </u>
                        </p>
                        <p class="h6">
                            © Todos los Derechos Reservados.<a
                                class="text-green ml-2"
                                href="#"
                                target="_blank"
                            >
                                NDT DIN, C.A.</a
                            >
                        </p>
                    </div>
                    <hr />
                </div>
            </div>
        </section>

        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/main.js"></script>
        <!-- <script type="text/javascrpit" href="js/app.js"> </script>   -->
    </body>
</html>
