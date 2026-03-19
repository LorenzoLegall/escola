<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title> Agenda de contatos T-30 </title>
        <style>
            body{
                background-color:#070709;
                padding-top:50px;
            }
            h1{
                text-align:center;
            }
            form button:hover{
                background-color:#83D6BB !important;
            }
            .accordion-button::after{
                filter: invert(60%) sepia(80%) saturate(400%) hue-rotate(110deg);
            }
        </style>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        
        <div style="text-align: center;">
            <div style="text-align: left; display:inline-block;">
                <h1 style="color:#f8f8ff;"> <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16" style="color:#10B77F;">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                </svg> &nbsp; Agenda - Turma 30</h1>
                <h3 style="color:#818898; text-align:left;"> 2026 </h3> <br>
            </div>
        </div>

        <div class="doce_de_leite_mumu_o_da_vaquinha" style="background-color:#0D0F12; width:450px; margin:0 auto; border-radius:15px; box-shadow: 0 0 0 0.3px #818898; padding:20px;">
            
            <h2 style="color:#818898; font-size:20px; text-align:left; margin-top:10px;"> CADASTRAR CONTATO </h2> <br>
            <form action="salvar.php" method="post" style="color:#f8f8ff;">
                <p style="color:#818898; font-weight: 600; font-size:18px;"> NOME: </p> <input type="text" name="nome" style="width:100%; box-sizing:border-box; background-color:#2a2a2a; color: #FFFFFF; padding:10px; box-shadow: 0 0 0 0.5px #818898; border: none; border-radius:4px;"> <br><br>
                <p style="color:#818898; font-weight: 600; font-size:18px;"> ENDEREÇO: </p> <input type="text" name="endereco" style="width:100%; box-sizing:border-box; background-color:#2a2a2a; color: #FFFFFF; padding:10px; box-shadow: 0 0 0 0.5px #818898; border: none; border-radius:4px;"> <br><br>
                <p style="color:#818898; font-weight: 600; font-size:18px;"> TELEFONE: </p> <input type="text" name="fone" style="width:100%; box-sizing:border-box; background-color:#2a2a2a; color: #FFFFFF; padding:10px; box-shadow: 0 0 0 0.5px #818898; border: none; border-radius:4px;"> <br><br>
                <button type="submit" style="background-color:#10B77F; color:#000000; border: none; padding:12px; width:100%; border-radius:4px; cursor:pointer;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16"> <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/> <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/> </svg> CADASTRAR </button>
            </form>

        </div>

        <div class="acucar_mascavo" style="width:450px; margin:0 auto; margin-top:20px;">
            <div class="accordion accordion-flush" id="accordionFlushExample" style="background-color:#0D0F12; border-radius:15px;">
                <div class="accordion-item" style="border-radius: 15px; overflow:hidden; box-shadow: 0 0 0 0.2px #818898;">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color:#0D0F12; color:#818898; font-weight: 600; border:none; border-radius: 15px 15px 0 0; background-clip: padding-box;" onfocus="this.style.boxShadow='none'"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16" style="color:#10B77F;"> <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/> </svg> &nbsp; CONTATOS </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="border-radius:0 0 15px 15px;">
                        <div class="accordion-body" style="background-color:#0D0F12; color: #f8f8ff; border-top: 1px solid #24262b;">
                            <?php
                                include ('conexao.php');
                                $sql = "SELECT * FROM contatos";
                                $resultado = mysqli_query($conexao, $sql);

                                if (mysqli_num_rows($resultado) > 0){
                                    echo "<table style='width:100%; border-collapse: collapse; border-bottom: 1px solid #818898;'>";
                                    echo "<tr style='border-bottom: 1px solid #24262b;'>
                                            <th style='padding: 8px; color: #818898; text-align:left;'> NOME </th>
                                            <th style='padding: 8px; color: #818898; text-align:left;'> ENDEREÇO </th>
                                            <th style='padding: 8px; color: #818898; text-align:left;'> TELEFONE </th>
                                            <th style='padding: 8px; color: #818898; text-align:left;'> AÇÕES </th>
                                        </tr>";
                                    while ($linha = mysqli_fetch_assoc($resultado)){
                                        echo " <tr style='border-bottom: 1px solid #24262b;'>
                                            <td style='padding: 8px; color: #f8f8ff;'>" . $linha['nome'] . "</td>
                                            <td style='padding: 8px; color: #f8f8ff;'>" . $linha['endereco'] . "</td>
                                            <td style='padding: 8px; color: #f8f8ff;'>" . $linha['telefone'] . "</td>
                                            <td style='padding: 8px; white-space: nowrap;'>
                                                <a href='editar.php?id=" . $linha['id'] . "' style='color:#24262b; background-color:#00ffcc; padding: 2px 7px; border-radius: 5px; text-decoration: none; font-weight: 600; display:inline-block; margin-right:5px;'> EDITAR </a> 
                                                <a href='excluir.php?id=" . $linha['id'] . "' onclick='return confirm(\"Você quer realmente excluir o contato? \");' style='color:#f8f8ff; background-color: #b22222; padding: 2px 7px; border-radius: 5px; text-decoration: none; font-weight: 600; display:inline-block;'> EXCLUIR </a>
                                            </td>
                                        </tr> ";
                                    }
                                    echo "</table>";
                                }
                                else{
                                    echo "<p style='color:#818898; text-align: center; font-weight: 600; font-size:18px;'> NENHUM CONTATO REGISTRADO </p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>