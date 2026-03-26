<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title> Agenda de contatos T-30 OLD </title>
        <!-- PÁGINA TORTA/QUEBRADA PROPOSITALMENTE!!! -->
        <style>
            body{
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                font-family: Tahoma, sans-serif;
                letter-spacing: 1px;
                text-shadow: 1px 0 #575757, -1px 0 #575757;
            }
            @keyframes breathe {
                0% { transform: scale(1); }
                50% { transform: scale(1.02); }
                100% { transform: scale(1); }
            }
            @keyframes glitch {
                0% { transform: translate(0); }
                20% { transform: translate(-2px, 1px); }
                40% { transform: translate(2px, -1px); }
                60% { transform: translate(-1px, 2px); }
                80% { transform: translate(1px, -2px); }
                100% { transform: translate(0); }
            }
            .div_da_gurizada{
                background-image: url('background1.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                image-rendering: pixelated;
                position: fixed;
                width: 100%;
                height: 100%;
                animation: breathe 10s infinite;
            }
            h1{
                text-align:center;
            }
            form button:hover{
                filter: brightness(0.90) !important;
            }
            .da_pa_dale:hover{
                filter: brightness(0.90);
            }
            .bah_guri:hover{
                filter: brightness(0.90);
            }
        </style>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        
        <div class="div_da_gurizada" style="z-index: -1;"></div>
        <div style="text-align: center; margin-top: 40px;">
            <div style="text-align: left; display:inline-block;">
                <span class="denise" style="position:relative; height: 40px; width: 40px; display:inline-block; vertical-align:middle;" onmouseover="document.getElementById('heleno').style.opacity=0; document.getElementById('bu').style.opacity=1;" onmouseout="document.getElementById('heleno').style.opacity=1; document.getElementById('bu').style.opacity=0;">
                    <img src="livro_old.png" id="heleno" style="position:absolute; width: 40px; height: 40px; color:#2fdda3; top:0; left:0; pointer-events:none; z-index:2;">   
                    <img src="bu.png" id="bu" style="position:absolute; height: 40px; width: 40px; opacity: 0; top:0; left:0; z-index:1; cursor:pointer;" onclick="window.location.href='index.php';">
                </span>
                <h1 style="color:#1a1a1a; margin:0; display:inline-block; vertical-align: middle;" onmouseover="this.style.animation='glitch 0.1s';" onmouseout="this.style.animation='none';"> Agenda Turma 30 </h1>
                <h3 style="color:#1a1a1a; text-align:left;" onmouseover="this.style.animation='glitch 0.1s';" onmouseout="this.style.animation='none';"> 2026 </h3> <br>
            </div>
        </div>

        <div class="doce_de_leite_mumu_o_da_vaquinha" style="background-color: #9b9b9b; width:450px; margin:0 auto; border: 6px solid; border-color: #ffffff #5c5c5c #5c5c5c #ffffff;">
            <div style="background:#000080; color:#fff; padding:3px 6px; font-weight:bold; font-size:12px;"> Cadastro de Contato </div>
            <h2 style="color:#1a1a1a; font-size:20px; text-align:center; margin-top:10px;" onmouseover="this.style.animation='glitch 0.1s';" onmouseout="this.style.animation='none';"> CADASTRAR CONTATO </h2> <br>
            <form action="salvar_old.php" method="post" style="color:#f8f8ff;">
                <p style="color:#1a1a1a; font-weight: 600; font-size:18px; padding-left:10px;" onmouseover="this.style.animation='glitch 0.1s';" onmouseout="this.style.animation='none';"> Nome: </p> <input type="text" onmouseover="this.style.animation='glitch 0.1s';" onmouseout="this.style.animation='none';" name="nome" style="width:90%; margin-left:15px; margin-right:15px; box-sizing:border-box; background-color:#C0C0C0; color: #000000; padding:10px; border: 3px solid; border-color: #ffffff #5c5c5c #5c5c5c #ffffff;"> <br><br>
                <p style="color:#1a1a1a; font-weight: 600; font-size:18px; padding-left:10px;" onmouseover="this.style.animation='glitch 0.1s';" onmouseout="this.style.animation='none';"> Endereço: </p> <input type="text" onmouseover="this.style.animation='glitch 0.1s';" onmouseout="this.style.animation='none';" name="endereco" style="width:90%; margin-left:15px; margin-right:15px; box-sizing:border-box; background-color:#C0C0C0; color: #000000; padding:10px; border: 3px solid; border-color: #ffffff #5c5c5c #5c5c5c #ffffff;"> <br><br>
                <p style="color:#1a1a1a; font-weight: 600; font-size:18px; padding-left:10px;" onmouseover="this.style.animation='glitch 0.1s';" onmouseout="this.style.animation='none';"> Telefone: </p> <input type="text" onmouseover="this.style.animation='glitch 0.1s';" onmouseout="this.style.animation='none';" name="fone" style="width:90%; margin-left:15px; margin-right:15px; box-sizing:border-box; background-color:#C0C0C0; color: #000000; padding:10px; border: 3px solid; border-color: #ffffff #5c5c5c #5c5c5c #ffffff;"> <br><br>
                <button type="submit" onmouseover="this.style.animation='glitch 0.1s';" onmouseout="this.style.animation='none';" style="margin-left:40px; background-color: #d3d3d3; color:#000000; border: 3px solid; border-color: #ffffff #5c5c5c #5c5c5c #ffffff; padding:12px; width:75%; cursor:pointer;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16"> <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 1₀s-3.5₁₆.68-4.₁₆₈₁.332c-.678.678-.83 ₁.4₁₈-.83₂₁.664z"/> <path fill-rule="evenodd" d="M₁₃.₅₅a.5.5 ₀ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵗ ᵜ"> </svg> CADASTRAR </button>
            </form> 
        </div>

        <div class="acucar_mascavo" onmouseover="this.style.animation='glitch 0.1s';" onmouseout="this.style.animation='none';" style="width:450px; margin:0 auto; margin-top:20px; margin-bottom:20px;">
            <div class="accordion accordion-flush" id="accordionFlushExample" style="background-color:#9b9b9b; border: 6px solid; border-color: #ffffff #5c5c5c #5c5c5c #ffffff;">
                <div class="accordion-item" style="overflow:hidden; border: 0 0 6px 6px solid; border-color: #ffffff #5c5c5c #5c5c5c #ffffff;">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color:#9b9b9b; color:#1a1a1a; font-weight: 600; border: 0 0 6px 6px solid; border-color: #ffffff #5c5c5c #5c5c5c #ffffff; background-clip: padding-box;" onfocus="this.style.boxShadow='none'"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16" style="color:#000000;"> <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/> </svg> &nbsp; CONTATOS </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
                        <div class="accordion-body" style="background-color:#9b9b9b; color: #f8f8ff; border-top: 1px solid #24262b;">
                            <?php
                                include ('conexao.php');
                                $sql = "SELECT * FROM contatos";
                                $resultado = mysqli_query($conexao, $sql);

                                if (mysqli_num_rows($resultado) > 0){
                                    echo "<table style='width:100%; table-layout: fixed; border-collapse: collapse; border-bottom: 1px solid #818898;'>";
                                    echo "<tr style='border-bottom: 1px solid #24262b;'>
                                            <th style='padding: 8px; color: #1a1a1a; text-align:left;'> Nome </th>
                                            <th style='padding: 8px; color: #1a1a1a; text-align:left;'> Endereço </th>
                                            <th style='padding: 8px; color: #1a1a1a; text-align:left;'> Telefone </th>
                                            <th style='padding: 8px; color: #1a1a1a; text-align:left;'> Ações </th>
                                        </tr>";
                                    while ($linha = mysqli_fetch_assoc($resultado)){
                                        echo " <tr style='border-bottom: 1px solid #24262b;'>
                                            <td style='padding: 8px; color: #f8f8ff; word-wrap: break-word;'>" . $linha['nome'] . "</td>
                                            <td style='padding: 8px; color: #f8f8ff; word-wrap: break-word;'>" . $linha['endereco'] . "</td>
                                            <td style='padding: 8px; color: #f8f8ff; word-wrap: break-word;'>" . $linha['telefone'] . "</td>
                                            <td style='padding: 8px; white-space: normal;'>
                                                <a class='da_pa_dale' href='editar.php?id=" . $linha['id'] . "' style='background-color: #d3d3d3; color:#000000; border: 3px solid; border-color: #ffffff #5c5c5c #5c5c5c #ffffff; padding: 2px 7px; text-decoration: none; font-weight: 200; display:inline-block; margin-right:5px; width: 100%; text-align: center;'> Editar </a> 
                                                <a class='bah_guri' href='excluir.php?id=" . $linha['id'] . "' onclick='return confirm(\"Você quer realmente excluir o contato? \");' style='background-color: #d3d3d3; color:#000000; border: 3px solid; border-color: #ffffff #5c5c5c #5c5c5c #ffffff; padding: 2px 7px; margin-top:5px; text-decoration: none; font-weight: 200; display:inline-block; width: 100%; text-align: center;'> Excluir </a>
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