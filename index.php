<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet"/>
    <title>Pagina incial do site</title>
</head>
<body>
    <h1> Pagina incial do site </h1>

<div class="container">
    <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
    <div class="alert alert-success" role="alert">
  A simple success alert—check it out!
</div>

</div>
<div class="col-4"></div>
</div>

<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>

<a href="www.google.com.br" class="btn btn-primary"> Clique aqui para acessar o google </a>

<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


<form>
  <div class="mb-3">
    <label>Email address</label>
    <input type="email" class="form-control">
    <div id="emailHelp" class="form-text"> Digite um email para acessar o sistema </div>
  </div>
  <div class="mb-3">
    <label> Senha </label>
    <input type="password" class="form-control">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input">
    <label class="form-check-label"> Deseja receber promocoes </label>
  </div>
  <button type="submit" class="btn btn-primary"> Enviar o cadastro </button>
</form>

</div>
<script src= "bootstrap.bundle.min.js"></script>
</body>
</html>