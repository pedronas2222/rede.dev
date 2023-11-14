<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Cadastro - Mercantil cidade</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
    <form class="row g-3">
      <div class="col-md-6">
        <label for="inputNome" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome completo*</font></font></label>
        <input type="text" class="form-control" id="inputNome">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email*</font></font></label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Senha*</font></font></label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CEP*</font></font></label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Endereço*</font></font></label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Santo Pedro, 2444">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Endereço 2</font></font></label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, estúdio ou andar">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cidade*</font></font></label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estado*</font></font></label>
        <select id="inputState" class="form-select">
          <option selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Escolha...</font></font></option>
          <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">...</font></font></option>
        </select>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            Concordo com as <a href="#!">politicas</a>
          </font></font></label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cadastrar</font></font></button>
      </div>
    </form>
    
    <!-- End Example Code -->
  </body>
</html>