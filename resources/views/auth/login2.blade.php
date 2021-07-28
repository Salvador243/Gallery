<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskky: Login</title>
    <!--CSS-->
    <link rel="stylesheet" href="styles.css">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</head>

<body>



<div class="main-container">
    <header>
        <!--NAVBAR-->
        <nav class="navbar navbar-dark bg-primary">
            <!--BRAND-->
            <a class="navbar-brand" href="index.html">
                <img src="img/icon-white.svg" class="ml-2" id="brand" class="d-inline-block align-top"
                     alt="Tassky brand" loading="lazy">&nbsp;Taskky
            </a>
        </nav>
    </header>

    <section>
        <div class="card tab-card mx-auto my-5" id="card-login">
            <!--TABS-->
            <div class="card-header tab-card-header">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tabLogin" data-toggle="tab" href="#login" role="tab"
                           aria-controls="login" aria-selected="true">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tabRegister" data-toggle="tab" href="#register" role="tab"
                           aria-controls="register" aria-selected="false">Sig in</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <!--TAB CONTENT-->
                <div class="tab-content" id="myTabContent">
                    <!--LOG IN FORM-->
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="tabLogin">
                        <h3 class="card-title text-center">Log in</h3>
                        <form class="pt-4">
                            <div class="form-group">
                                <label for="">User</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <a href="taskky.html" role="button" class="btn btn-primary btn-block btn-lg">Go!</a>
                        </form>
                    </div>
                    <!--SIGN IN FORM-->
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="tabRegister">
                        <h3 class="card-title text-center">Sign in</h3>
                        <form class="pt-5">
                            <div class="row row-cols-2">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">First name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">User</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">E-mail</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <a href="taskky.html" role="button" class="btn btn-primary btn-block btn-lg">Send</a>
                        </form>
                    </div>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a href="{{ url('auth/google') }}">
                        <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>



</body>

</html>