<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title> Agenda de contatos T-30 - EXCLUIR </title>
        <style>
            body{
                background-color:#070709;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
        </style>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

        <div style="margin-top:20px; margin-bottom:20px; height:2px; background:linear-gradient(to right, transparent, #2fdda3, transparent);"></div>
        <?php

            include('conexao.php');
            $id = $_GET['id'];
            $sql = "DELETE FROM contatos WHERE id = $id";
        
        ?>

            <div style="text-align: center;">
                <div style="text-align: left; display:inline-block;">
                    <span class="denise" style="position:relative; height: 40px; width: 40px; display:inline-block; vertical-align:middle;" onmouseover="document.getElementById('hugo').style.opacity=0; document.getElementById('bu').style.opacity=1;" onmouseout="document.getElementById('hugo').style.opacity=1; document.getElementById('bu').style.opacity=0;">
                        <svg xmlns="http://www.w3.org/2000/svg" id="hugo" width="40" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16" style="position:absolute; color:#2fdda3; top:0; left:0; pointer-events:none; z-index:2;"> <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/> </svg>
                        <img src="bu.png" id="bu" style="position:absolute; height: 40px; width: 40px; opacity: 0; top:0; left:0; z-index:1;">
                    </span>
                    <h1 style="color:#f8f8ff; margin:0; display:inline-block; vertical-align: middle;"> Agenda - Turma 30 </h1>
                    <h3 style="color:#818898; text-align:left;"> 2026 </h3> <br>
                </div>
            </div>


                <?php

                    if(mysqli_query($conexao, $sql)){
                        echo "<div style='background-color:#0D0F12; width:500px; margin:0 auto; border-radius:15px; box-shadow: 0 0 0 0.3px #818898; padding:20px; text-align:center;'>
                                <h2 style='color:#818898; font-size:20px; margin-top:10px;'> CONTATO EXCLUÍDO COM SUCESSO! </h2> <br>";
                        echo "<a href='index.php' style='background-color:#2fdda3; color:#000000; border: none; padding:12px; width:100%; border-radius:4px; cursor:pointer; text-decoration: none;'> VOLTAR <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-return-left' viewBox='0 0 16 16'> <path fill-rule='evenodd' d='M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5'/> </svg> </a> </div>";
                    }
                    else{
                        echo "<div style='background-color:#0D0F12; width:500px; margin:0 auto; border-radius:15px; box-shadow: 0 0 0 0.3px #818898; padding:20px; text-align:center;'>
                                <h2 style='color:#818898; font-size:20px; margin-top:10px;'> ERRO AO EXCLUIR CONTATO" . mysqli_error($conexao);"</h2> <br>";
                        echo "<a href='index.php' style='background-color:#b22222; color:#f8f8ff; border: none; padding:12px; width:100%; border-radius:4px; cursor:pointer; text-decoration: none;'> VOLTAR <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-return-left' viewBox='0 0 16 16'> <path fill-rule='evenodd' d='M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5'/> </svg> </a> </div>";
                    }

                ?>
        <div style="margin-top:auto; margin-bottom:20px; height:2px; background:linear-gradient(to right, transparent, #2fdda3, transparent);"></div>    
    </body>
</html>