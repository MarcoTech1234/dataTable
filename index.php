<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>
    <body>
        <h1>Listar Produtos</h1>
        <table id="listar-usuario" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>SALARIO</th>
                    <th>IDADE</th>
                </tr>
            </thead>
        </table>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#listar-usuario').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "listar_usuarios.php",
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json"
                    }
                });
            });
        </script>
    </body>
</html>