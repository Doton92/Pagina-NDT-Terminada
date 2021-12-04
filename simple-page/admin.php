<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Panel de administrador</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-xs-4 col-sm-4 col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div
                        class="
                            d-flex
                            flex-column
                            align-items-center align-items-sm-start
                            px-3
                            pt-2
                            text-white
                            min-vh-100
                        "
                    >
                        <a
                            href="#"
                            class="
                                d-flex
                                align-items-center
                                pb-3
                                mb-md-0
                                me-md-auto
                                text-white text-decoration-none
                            "
                        >
                            <span class="fs-5 d-none d-sm-inline">Menu</span>
                        </a>
                        <ul
                            class="
                                nav nav-pills
                                flex-column
                                mb-sm-auto mb-0
                                align-items-center align-items-sm-start
                            "
                            id="menu"
                        >
                            <li class="nav-item">
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i>
                                    <span class="ms-1 d-none d-sm-inline"
                                        >Personas registradas</span
                                    >
                                </a>
                            </li>
                        </ul>
                        <hr />
                    </div>
                </div>
                <div class="col py-3">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mensaje</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $servername = "localhost:3306";
                            $username = "elber";
                            $password = "elberdev";
                            $dbname = "ndtdin";

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT id, name, last_name, email, msg FROM usuarios";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                                echo "<tr><th>" . $row["id"] . "</th><th>" .$row["name"]
                                ."</th><th>" .$row["last_name"] ."</th><th>" .$row["email"]
                                ."</th><th>" .$row["msg"] ."</tr>";
                            }
                            }
                            $conn->close();
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
