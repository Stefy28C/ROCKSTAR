<!DOCTYPE html>
<html lang="esp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css"
        integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Formulario</title>
</head>

<body>
    <center>
        <div class="card text-white bg-danger mb-3" style="max-width: 60rem;">
            <div class="card-header">Metabuscador</div>
            <div class="card-body">
                <form method="POST" action="{{ url('buscar_termino') }}" class="form-horizontal">
                    @csrf
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Realizar busquedas en varios motores</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">1.Ingrese termino de búsqueda</label>
                            <div class="col-md-4">
                                <input id="textinput" name="termino" type="text" placeholder=""
                                    class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Multiple Radios -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="motores">2. Seleccione el motor de búsqueda
                            </label>
                            <div class="col-md-4">
                                <div class="radio">
                                    <label for="motores-0">
                                        <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
                                        Google
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="motores-1">
                                        <input type="radio" name="motores" id="motores-1" value="2">
                                        Bing
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="motores-0">
                                        <input type="radio" name="motores" id="motores-0" value="3" checked="checked">
                                        Baidu
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="motores-0">
                                        <input type="radio" name="motores" id="motores-0" value="4" checked="checked">
                                        Yahoo!
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="motores-0">
                                        <input type="radio" name="motores" id="motores-0" value="5" checked="checked">
                                        Yandex
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="motores-0">
                                        <input type="radio" name="motores" id="motores-0" value="6" checked="checked">
                                        Ask
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="motores-0">
                                        <input type="radio" name="motores" id="motores-0" value="7" checked="checked">
                                        DuckDuckGo
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="motores-0">
                                        <input type="radio" name="motores" id="motores-0" value="8" checked="checked">
                                        Naver
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="motores-0">
                                        <input type="radio" name="motores" id="motores-0" value="9" checked="checked">
                                        Seznam
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="motores-0">
                                        <input type="radio" name="motores" id="motores-0" value="10" checked="checked">
                                        AOL
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for=""></label>
                            <div class="col-md-4">
                                <button id="" name="" class="btn btn-success">Buscar</button>
                            </div>
                        </div>
            </div>
        </div>
        </div>
        </fieldset>
        </form>
    </center>
</body>

</html>
