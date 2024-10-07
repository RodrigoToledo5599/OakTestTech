<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <a class="btn btn-dark" href="/cadastro_produto">
            Cadastrar produto
        </a>
        <br><br>
        
        @if(!isset($produtos[0]))
            <h1>lista vazia</h1>
        @else
        <table class="table table-bordered table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Valor</th>
                <th scope="col">Disponível para venda</th>
              </tr>
            </thead>
            <tbody>
                @foreach($produtos as $prod)
                <tr>
                    <td>
                        {{$prod->nome}}
                    </td>
                    <td style="max-width:30vw; overflow:hidden">
                        {{$prod->descricao}}
                    </td>
                    <td>    
                        R$ {{$prod->valor}}
                    </td>
                    <td>
                        {{$prod->disponivel == "1" ? "Sim" : "Não"}}
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        @endif
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>