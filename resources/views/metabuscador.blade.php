<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Buscador</title>
</head>
<body background="mar.jpg">
    <form class="form-horizontal" method="POST" action="{{ url('buscar_termino')}}">
        @csrf
        <fieldset>

        <legend>Metabuscador</legend>

        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">1. Ingrese el termino de busqueda</label>
          <div class="col-md-5">
          <input id="textinput" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="motores">2. Seleccione el motor de busqueda</label>
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
            <div class="radio">
                <label for="motores-0">
                  <input type="radio" name="motores" id="motores-2" value="3" checked="checked">
                  DuckduckGo
                </label>
                </div>
                <div class="radio">
                    <label for="motores-0">
                      <input type="radio" name="motores" id="motores-3" value="4" checked="checked">
                      Ask
                    </label>
                    </div>
                    <div class="radio">
                        <label for="motores-0">
                          <input type="radio" name="motores" id="motores-4" value="5" checked="checked">
                          Ecosia
                        </label>
                        </div>
                        <div class="radio">
                            <label for="motores-0">
                              <input type="radio" name="motores" id="motores-5" value="6" checked="checked">
                              Gigablast
                            </label>
                            </div>
                            <div class="radio">
                                <label for="motores-0">
                                  <input type="radio" name="motores" id="motores-6" value="7" checked="checked">
                                  Yandex
                                </label>
                                </div>
                                <div class="radio">
                                    <label for="motores-0">
                                      <input type="radio" name="motores" id="motores-7" value="8" checked="checked">
                                      AOL
                                    </label>
                                    </div>
                                    <div class="radio">
                                        <label for="motores-0">
                                          <input type="radio" name="motores" id="motores-8" value="9" checked="checked">
                                          Qwant
                                        </label>
                                        </div>
                                        <div class="radio">
                                            <label for="motores-0">
                                              <input type="radio" name="motores" id="motores-9" value="10" checked="checked">
                                              Dogpile
                                            </label>
                                            </div>
            </div>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label" for=""></label>
          <div class="col-md-4">
            <button id="" name="" class="btn btn-warning">Buscar</button>
          </div>
        </div>

        </fieldset>
        </form>


</body>
</html>
