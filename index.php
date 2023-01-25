<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
    <div class="container">
        <body>
            <div class="posicionarCabecalho">
                <h1>Agenda Pessoal</h1>
            </div>
            <form>
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" placeholder="Informe seu nome">
                </div>
                <div class="form-group">
                    <label for="birth">Data de Nascimento</label>
                    <input type="date" class="form-control" id="birth">
                </div>
                <div class="form-group">
                    <label for="address">Endereço</label>
                    <input type="text" class="form-control" id="address" placeholder="Informe seu endereço">
                </div>
                <div class="form-group">
                    <label for="phone">Telefone</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Informe seu número de telefone">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

        </body>
    </div>
</html>