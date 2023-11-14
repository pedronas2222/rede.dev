<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Cadastro - Mercantil cidade</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Imagens</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Faturamento</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
    <hr />
<!-- edição inicial-->   
    <!-- Example Code -->
    <form class="row g-3" action="processar_cadastro.php" method="post" enctype="multipart/form-data">
<?php 

include"../../conf/dbConect.php";

// Consulta SQL para listar os dados da tabela
$sql = "SELECT * FROM tab_produto WHERE Id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) 
      {
      $p = $row['Promocao']; // pega a promoção
      if ($p = '1') {
        $p = "checked";
      }else{
        echo "";
      }
      ?>
      <div class="col-md-6">
        <label for="inputNome" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descrição do produto*</font></font></label>
        <input type="text"value="<?=$row['DescricaoProduto'];?>" class="form-control" id="inputNome" name="descricao" required>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Preço Custo(R$)*</font></font></label>
        <input type="number" value="<?=$row['ValorCusto'];?>" class="form-control" id="inputZip"  name="valor_custo" required>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Preço Venda(R$)*</font></font></label>
        <input type="number" value="<?=$row['ValorVenda'];?>" class="form-control" id="inputZip" name="valor_venda" required>
      </div>
      <div class="col-md-2">
        <label for="inputPassword4" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Margem Lucro(%)*</font></font></label>
        <input type="number" value="<?=$row['Margem'];?>" class="form-control" name="margem" required>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SKU*</font></font></label>
        <input type="text" value="<?=$row['Sku'];?>" class="form-control" id="inputZip" name="sku" required>
      </div>
      <div class="col-md-6">
        <label for="inputAddress" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informacao*</font></font></label>
        <textarea type="text" class="form-control" id="inputAddress" name="informacao" required><?=$row['Informacao'];?></textarea>
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Promoção</font></font></label>
        <input class="form-check-input" type="checkbox" value="1" name="promocao" <?php echo $p;?>>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Valor Promoção(R$)*</font></font></label>
        <input type="number" value="<?=$row['ValorPromocao'];?>" class="form-control" id="inputZip" name="valor_promocao" required>
      </div>
      
      <div class="col-12">
        <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alterar</font></font></button>
      </div>
    </form>
    
    <!-- End Example Code -->
<!-- fim edição inicial imagem-->   
  </div>



  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
    <hr />
    <div id="message"></div>
<!-- edição inicial--> 
   <form class="row g-3" id="updateForm" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="6">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">01</div>
                            <!-- Product image-->
                            <div id="imagePreview1">
                              <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" />
                            </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent"><br>
                          <div class="input-group mb-3">
                            <input type="file" class="form-control" id="fileInput1" name="imagem1" accept="image/*">
                          </div>
                        </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">02</div>
                            <!-- Product image-->
                            <div id="imagePreview2">
                              <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" />
                            </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent"><br>
                          <div class="input-group mb-3">
                            <input type="file" class="form-control" id="fileInput2" name="imagem2" accept="image/*">
                          </div>
                        </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">03</div>
                            <!-- Product image-->
                            <div id="imagePreview3">
                              <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" />
                            </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent"><br>
                          <div class="input-group mb-3">
                            <input type="file" class="form-control" id="fileInput3" name="imagem3" accept="image/*">
                          </div>
                        </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">04</div>
                            <!-- Product image-->
                            <div id="imagePreview4">
                              <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" />
                            </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent"><br>
                          <div class="input-group mb-3">
                            <input type="file" class="form-control" id="fileInput4" name="imagem4" accept="image/*">
                          </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fim sessão de produtos -->

    <!-- Example Code -->
        <?php
        }
    }
    $conn->close();
    ?>
      <div class="col-12">
        <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gravar alterações</font></font></button>
      </div>
    </form>
     <script>
        function loadAndDisplayImage(fileInput, imagePreview) {
            fileInput.addEventListener('change', function() {
                const file = fileInput.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const image = new Image();
                        image.src = e.target.result;
                        image.className = "form-control";
                        imagePreview.innerHTML = ''; // Limpa a área de visualização

                        // Define a largura e altura desejadas
                        // image.width = 450; // Largura desejada
                        // image.height = 300; // Altura desejada

                        imagePreview.appendChild(image);
                    };

                    reader.readAsDataURL(file);

                } else {
                    imagePreview.innerHTML = 'Nenhuma imagem selecionada';
                }
            });
        }

        loadAndDisplayImage(document.getElementById('fileInput1'), document.getElementById('imagePreview1'));
        loadAndDisplayImage(document.getElementById('fileInput2'), document.getElementById('imagePreview2'));
        loadAndDisplayImage(document.getElementById('fileInput3'), document.getElementById('imagePreview3'));
        loadAndDisplayImage(document.getElementById('fileInput4'), document.getElementById('imagePreview4'));



// salvando os dados via fetch
        const updateForm = document.getElementById('updateForm');
        const messageDiv = document.getElementById('message');

        updateForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Impede o envio padrão do formulário

            const formData = new FormData(updateForm);

            // Faça uma solicitação AJAX para o script PHP que lida com o atualização
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'salvar_imagens.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    messageDiv.textContent = xhr.responseText;
                } else {
                    messageDiv.textContent = 'Erro na solicitação.';
                }
            };
            xhr.send(formData);
        });

// fim salvamento


    </script>


    <!-- End Example Code -->
<!-- fim edição inicial imagem--> 
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
</div>


  </body>
</html>