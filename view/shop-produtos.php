<?php include_once("header.php"); ?>

<section>

    <div class="container" id="destaque-produtos-container">

        <div id="destaque-produtos">

            <div class="item" ng-repeat="produto in produtos">

                <div class="col-sm-6 col-imagem">
                    <img src="img/produtos/<?=$produtos['foto_principal']?>" alt="<?=$produtos['nome_prod_longo']?>">
                </div>
                <div class="col-sm-6 col-descricao">
                    <h2><?=$produtos['nome_prod_longo']?></h2>
                    <div class="box-valor">
                        <div class="text-noboleto text-arial-cinza">no boleto</div>
                        <div class="text-por text-arial-cinza">por</div>
                        <div class="text-reais text-roxo">R$</div>
                        <div class="text-valor text-roxo"><?=$produtos['preco_promorcional']?></div>
                        <div class="text-parcelas text-arial-cinza">ou em até <?=$produtos['pacelas']?>x de R$ <?= $produtos['preco_pacelas']?></div>
                        <div class="text-total text-arial-cinza">total a prazo R$ <?=$produtos['preco']?></div>
                    </div>
                    <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
                </div>

            </div>

        </div>
    </div>

    
</section>

<?php include_once("footer.php"); ?>