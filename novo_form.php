<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/formulario.css">
    <title>Adicionar Produto</title>
</head>
<body>
    


<div class="container">

    
            <div class="formulario">
            
                <h2>Registo do Produto</h2>
                
                <form action="tratar_prod.php" method="post" enctype="multipart/form-data">
                    <div class="maindiv">

                        <div class="divisoes">

                            <label for="name">Nome do Produto: </label>
                            <input type="text" name="name" id="nome" placeholder="Nome Produto"><br>

                            <label for="tipologia">Tipologia: </label>
                            <select name="Tipologia" id="Tipologia">
                              <option value="none"></option>
                              <option value="Teclados">Teclados</option>
                              <option value="Portatil">Portáteis</option>
                              <option value="Ratos">Ratos</option>
                              <option value="Headsets">Headsets</option>
                              <option value="Fones-wireless">Fones com fio</option>
                              <option value="Fones">Fones sem fio</option>
                              <option value="Microfones">Microfone</option>
                              <option value="Carregadores">Carregadores</option>
                              <option value="Torres">Torres</option>
                              <option value="Monitores">Monitores</option>
                              <option value="TVs">TVs</option>
                              <option value="Telemoveis">Telemóveis</option>
                              <option value="Cameras">Cameras</option>
                              <option value="Colunas">Colunas</option>
                              <option value="Capas">Capas</option>
                              <option value="Impressoras">impressoras</option>
                              <option value="Hubs">Hubs</option>
                              <option value="Tablets">Tablets</option>
                              <option value="Mesas-Digitalizadoras">mesas digitalizadoras</option>
                              <option value="Routers">Routers</option>
                              <option value="Adaptadores">Adaptadores</option>
                              <option value="HDs">HD's</option>
                              <option value="SSDs">SSD's</option>
                              <option value="Leitores">Leitores</option>
                              <option value="Projetores">Projetores</option>
                              <option value="Relogios">relogios</option>
                              <option value="Comandos">Comandos</option>
                              <option value="RAM">RAM</option>
                            </select>

                        </div>
                        
                        <div class="divisoes">
                            <label for="Descricao">Descrição:</label>
                            <textarea  name="Descricao" id="" cols="30" rows="10"></textarea>
                        </div>
                        
                        <div class="divisoes">
                        <label for="Quantidade">Quantidade: </label> 
                        <input type="number" name="Quantidade" id="">
                        <label for="Preco">Preço: </label> 
                        <input type="number" step="any" name="Preco" id="">
                        <label for="imagem">Imagem do Produto:</label>
                        <input type="file" id="imagem" name="arquivo" accept="image/*" required>
                        </div>
                        <div class="divisoes">
                        <button type="submit">Submeter</button>                 
                        <button><a href="lista.php">Voltar</a></button>
                        </div>

                        
                    </div>
                </form>

            </div>




</div>



</body>

</html>