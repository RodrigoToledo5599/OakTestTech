<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Produto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Cadastro de produto</h1><br>
                <form action="/cadastrar_e_voltar_para_listagem" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nome" class="form-label">Nome do Produto</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-4">
                        <label for="descricao" class="form-label">Descrição do Produto</label>
                        <textarea class="form-control" id="descricao" rows="3" name="descricao"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="valor" class="form-label">Valor do Produto</label>
                        <input type="number" class="form-control" id="valor" step="0.01" pattern="\$[0-9]+\.[0-9]{2}" name="valor" required>
                        <p style="color:red">{{$message}}</p>
                    </div>
                    <div class="mb-4">
                        <label for="disponivel" class="form-label">Disponível para Venda</label>
                        <select class="form-select" id="disponivel" name="disponivel">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                    <a class="btn btn-dark" href="/">
                        Voltar para a listagem
                    </a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>