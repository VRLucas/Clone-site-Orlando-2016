<?php include_once("header.php"); ?>

<section>

	<div class="container" id="destaque-produtos-container" ng-controller="destaque-controller">

		<div id="destaque-produtos">

			<div class="item" ng-repeat="produto in produtos">

				<div class="col-sm-6 col-imagem">
					<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_pro_longo}}">
				</div>
				<div class="col-sm-6 col-descricao">
					<h2>{{produto.nome_pro_longo}}</h2>
					<div class="box-valor">
						<div class="text-noboleto text-arial-cinza">no boleto</div>
						<div class="text-por text-arial-cinza">por</div>
						<div class="text-reais text-roxo">R$</div>
						<div class="text-valor text-roxo">{{produto.preco}}</div>
						<div class="text-valor-centavos text-roxo">,{{produto.centavos}}</div>
						<div class="text-parcelas text-arial-cinza">ou em até {{produto.pacelas}}x de R$ {{produto.pacela}}</div>
						<div class="text-total text-arial-cinza">total a prazo R$ {{produto.total_pago}}</div>
					</div>
					<a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
				</div>

			</div>

		</div>

	</div>

	<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
	<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>

	</div>

	<div id="promocoes" class="container">

		<div class="row">
			<div class="col-md-2">

				<div class="box-promocao box-1">
					<p>escolha por desconto</p>
				</div>

			</div>
			<div class="col-md-10">

				<div class="row-fluid">
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">40</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">60</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">80</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">85</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

	<div id="mais-buscados" class="container">

		<div class="row text-center">
			<h2 class="title-default-roxo">Os mais Buscados</h2>
			<hr class="hr-text-default">
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img class="produto-img" src="./img/produtos/CafeteiraDolceGusto.jpg" alt="Cafeteira">
						<h3>Cafeteira Dolce Gusto</h3>
						<div class="estrelas" data-score="5"></div>
						<div class="text-qtd-reviews">(250)</div>
						<div class="text-valor text-roxo text-arial-cinza">R$ 350,90</div>
						<div class="text-parcelas text-arial-cinza">ou em até 6x de R$ 58,48 sem juros</div>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img class="produto-img" src="./img/produtos/CafeteiraDolceGusto.jpg" alt="Cafeteira">
						<h3>Cafeteira Dolce Gusto</h3>
						<div class="estrelas" data-score="3.5"></div>
						<div class="text-qtd-reviews">(250)</div>
						<div class="text-valor text-roxo text-arial-cinza">R$ 350,90</div>
						<div class="text-parcelas text-arial-cinza">ou em até 6x de R$ 58,48 sem juros</div>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img class="produto-img" src="./img/produtos/CafeteiraDolceGusto.jpg" alt="Cafeteira">
						<h3>Cafeteira Dolce Gusto</h3>
						<div class="estrelas" data-score="2"></div>
						<div class="text-qtd-reviews">(250)</div>
						<div class="text-valor text-roxo text-arial-cinza">R$ 350,90</div>
						<div class="text-parcelas text-arial-cinza">ou em até 6x de R$ 58,48 sem juros</div>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img class="produto-img" src="./img/produtos/CafeteiraDolceGusto.jpg" alt="Cafeteira">
						<h3>Cafeteira Dolce Gusto</h3>
						<div class="estrelas" data-score="5"></div>
						<div class="text-qtd-reviews">(250)</div>
						<div class="text-valor text-roxo text-arial-cinza">R$ 350,90</div>
						<div class="text-parcelas text-arial-cinza">ou em até 6x de R$ 58,48 sem juros</div>
					</a>
				</div>
			</div>
		</div>

	</div>

</section>

<?php include_once("footer.php"); ?>

<script>
	angular.module("shop", []).controller("destaque-controller", function($scope) {
		$scope.produtos = [];

		$scope.produtos.push({
			nome_pro_longo: "Smartphone Motorola Moto X Play Dual Chip Desbloqueado Andoid 5.1",
			foto_principal: "moto-x.png",
			preco: "1.259",
			centavos: "10",
			pacelas: 8,
			pacela: "174,88",
			total_pago: "1.399,00"
		});
		$scope.produtos.push({
			nome_pro_longo: "iPhone 6s 16GB Prata Desbloqueado iOS 9 4G 12MP - Apple",
			foto_principal: "iphone.jpg",
			preco: "1499",
			centavos:"00",
			pacelas: 8,
			pacela: "250",
			total_pago: "2000.00"
		});

	});
</script>