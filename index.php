<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        require 'navbar.php';
        require 'conectaBanco.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 class="text-center">Tarefas</h1>
                <?php
                require 'conectaBanco.php';
                $select = "SELECT * FROM tarefa";
                $resultado = mysqli_query($banco, $select);
                ?>
                <table class="table table-hover">
                    <thead>
                        <th scope="col">Tarefa</th>
                        <th scope="col">Tempo(min)</th>
                        <th scope="col">Descrição</th>
                    </thead>
                    <tbody>
                        <?php
                            if($resultado){
                                while($linha = mysqli_fetch_assoc($resultado)){
                                    $tarefa = $linha['nome'];
                                    $tempo = $linha['duracao'];
                                    $desc = $linha['descricao'];
                                    echo "<tr>
                                    <td> $tarefa </td>
                                    <td> $tempo</td>
                                    <td> $desc </td>
                                    </tr>";                
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>