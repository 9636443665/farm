<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="farm.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>VsnV FarM</title>
  <script src="farm.js"></script>


</head>

<body>
  <header class="container-fluid">
    <div class="head container-fluid fixed-top " id="nav">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">VsnV<span class="nav-item" style="color:#fa9f1e ;">farm</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="link.php">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <div class="search">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target=".singup">Sing
                UP</button>
              <button type="button" class="btn btn-success" name="login" data-toggle="modal" data-target=".login">Log
                in</button>
            </div>
          </form>
        </div>
      </nav>

    </div>

  </header>

  <!-- sing up strat -->

  <div class="modal fade bd-example-modal-lg singup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <section>
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-8 col-xl-10 p-5">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                    <form action="action.php" method="post">

                      <div class="form-outline mb-4">

                        <input type="text" name="name" required  placeholder="Your Name" class="form-control form-control-lg" />
                      </div>

                      <div class="form-outline mb-4">
                        <input type="email" required name="email" placeholder="Your_@mail"
                          class="form-control form-control-lg" />
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" pattern="[0-9]{10}" name="phone" required  placeholder="phone_number"
                          class="form-control form-control-lg" />
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" id="password" onchange="valid()" required  name="password" placeholder="password"
                          class="form-control form-control-lg" />
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" id="confrim_pass" required  onkeyup="valid()" name="con_password"
                          placeholder="repeat password" class="form-control form-control-lg" />
                      </div>



                      <div class="form-check d-block justify-content-center mb-5">
                        <input class="form-check-input me-2" type="checkbox" value="" />
                        <label class="form-check-label" for="form2Example3g">
                          I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                        </label>
                      </div>

                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"
                          onclick="valid()" id="register" name="register">Register</button>
                      </div>

                      <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                          class="fw-bold text-body"><u>Login here</u></a></p>

                    </form>

                    <script>
                      var password = document.getElementById("password")
                      var confrim_pass = document.getElementById("confrim_pass")

                      function valid() {
                        if (password.value !== confrim_pass.value) {
                          confrim_pass.setCustomValidity(" password not match")

                        }
                        else {
                          confrim_pass.setCustomValidity("")

                        }
                      }
                    </script>

                  </div>
                </div>
              </div>
            </div>
            
          </div>
      </div>
      </section>
    </div>
  </div>

  <!-- sing up end -->

  <!-- login -->
  <div class="modal fade bd-example-modal-lg login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-8 col-xl-10 p-5">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                  <form action="action.php">
                    <div class="form-outline mb-4">
                      <input type="email" required name="email" placeholder="Your_@mail"
                        class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" id="password" required name="password" placeholder="password"
                        class="form-control form-control-lg" />
                    </div>
                    <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"
                        id="login">Log in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>