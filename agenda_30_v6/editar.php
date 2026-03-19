<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title> Agenda de contatos T-30 - EDITAR </title>
        <style>
            body{
                background-color:#070709;
                padding-top:50px;
            }
        </style>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

        <?php

            include('conexao.php');

            $id = $_GET['id'];

            $sql = "SELECT * FROM contatos WHERE id = $id";
            $resultado = mysqli_query($conexao, $sql);
     
            if(mysqli_num_rows($resultado) == 1){
                $contato = mysqli_fetch_assoc($resultado);
            }
            else{
                echo "Contato não encontrado na base.";
                exit;
            }
        ?>

        <div style="text-align: center;">
            <div style="text-align: left; display:inline-block;">
                <h1 style="color:#f8f8ff;"> <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16" style="color:#10B77F;">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                </svg> &nbsp; Agenda - Turma 30</h1>
                <h3 style="color:#818898; text-align:left;"> 2026 </h3> <br>
            </div>
        </div>
        <div class="cafe_pele" style="background-color:#0D0F12; width:450px; margin:0 auto; border-radius:15px; box-shadow: 0 0 0 0.3px #818898; padding:20px;">     
            <h2 style="color:#818898; font-size:20px; text-align:left; margin-top:10px;"> ATUALIZAR CONTATO </h2> <br>
            <form method="post" style="color:#f8f8ff;">
                <p style="color:#818898; font-weight: 600; font-size:18px;"> Nome: </p> <input type="text" name="nome" style="width:100%; box-sizing:border-box; background-color:#2a2a2a; color: #FFFFFF; padding:10px; box-shadow: 0 0 0 0.5px #818898; border: none; border-radius:4px;" value="<?php echo $contato['nome']; ?>"><br><br>
                <p style="color:#818898; font-weight: 600; font-size:18px;"> Endereço: </p> <input type="text" name="endereco" style="width:100%; box-sizing:border-box; background-color:#2a2a2a; color: #FFFFFF; padding:10px; box-shadow: 0 0 0 0.5px #818898; border: none; border-radius:4px;" value="<?php echo $contato['endereco']; ?>"><br><br>
                <p style="color:#818898; font-weight: 600; font-size:18px;"> Telefone: </p> <input type="text" name="fone" style="width:100%; box-sizing:border-box; background-color:#2a2a2a; color: #FFFFFF; padding:10px; box-shadow: 0 0 0 0.5px #818898; border: none; border-radius:4px;" value="<?php echo $contato['telefone']; ?>"><br><br>
                <button type="submit" name="atualizar" style="background-color:#10B77F; color:#000000; border: none; padding:12px; width:100%; border-radius:4px; cursor:pointer;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-down" viewBox="0 0 16 16"> <path d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7m.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.708l-.646.647V10.5a.5.5 0 0 0-1 0v2.793l-.646-.647a.5.5 0 0 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/> <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/> </svg> ATUALIZAR </button>
            </form>
        </div>
        <?php

            if(isset($_POST['atualizar'])){
                $novo_nome = $_POST['nome'];
                $novo_endereco = $_POST['endereco'];
                $novo_fone = $_POST['fone'];

                $sql2 = "UPDATE contatos SET nome = '$novo_nome', endereco = '$novo_endereco', telefone = '$novo_fone' WHERE id = $id";
                if(mysqli_query($conexao, $sql2)){
                    echo "<h2>Contato atualizado com sucesso.</h2>";
                    echo "<a href='index.php'>Voltar</a>";
                    exit;
                }
                else{
                    echo "<h2>Erro ao atualizar." . mysqli_error($conexao);
                    echo "<a href='index.php'>Voltar</a>";
                    exit;
                }
            }

        ?>
    </body>
</html>