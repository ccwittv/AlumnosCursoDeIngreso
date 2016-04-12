var angapp=angular.module("MiApp",[]); //si le pusiera un . en vez de ; puedo referencia atributos
/*angapp.controller('contppt2',function($scope){
					$scope.comenzar = function(){
						//Genero el número RANDOM entre 1 y 3
					 	$scope.numeroSecreto =Math.floor( Math.random()*3)+1;
						//alert(numeroSecreto);
						switch($scope.numeroSecreto)
						{
							case 1:
								$scope.eleccionMaquina="piedra";
								break;
							case 2:
								$scope.eleccionMaquina="papel";
								break;
							case 3:
								$scope.eleccionMaquina="tijera";
								break;

						}
						//alert(eleccionMaquina);
					};
					//$scope.eleccionMaquina = "papel";
					$scope.ganadas = 0;
					$scope.perdidas = 0;
					$scope.empatadas = 0;
					//$scope.papel();
					$scope.papel=function(){
					//	alert("hola");
					    $scope.comenzar();
						alert("la maquina selecciono: "+$scope.eleccionMaquina);
						$scope.eleccionHumano="papel";
						if($scope.eleccionHumano==$scope.eleccionMaquina)
						{
							alert("empate.");
							$scope.empatadas++;		

						}
						else if($scope.eleccionMaquina=="piedra")
						{
							alert("vos ganastes.");
							$scope.ganadas++;
						}
						else
						{
							alert("ganó la Maquina.");
							$scope.perdidas++;
						}
					//mostarResultado();
					};
					/*$scope.comenzar = function(){
						alert("hola");
					};
					//$scope.papel();
					$scope.piedra=function(){
					//	alert("hola");
					    $scope.comenzar();
						alert("la maquina selecciono: "+$scope.eleccionMaquina);						
						$scope.eleccionHumano="piedra";
						if($scope.eleccionHumano==$scope.eleccionMaquina)
						{
							alert("empate.");	
							$scope.empates++;	
						}
						else if($scope.eleccionMaquina=="tijera")
						{
							alert("vos ganastes.");
							$scope.ganadas++;
						}
						else
						{
							alert("ganó la Maquina.");
							$scope.perdidas++;
						}
					//mostarResultado();
					};

					$scope.tijera=function(){
					//	alert("hola");
					    $scope.comenzar();
						alert("la maquina selecciono: "+$scope.eleccionMaquina);
						$scope.eleccionHumano="tijera";
						if($scope.eleccionHumano==$scope.eleccionMaquina)
						{
							alert("empate.");
							$scope.empates++;		
						}
						else if($scope.eleccionMaquina=="papel")
						{
							alert("vos ganastes.");
							$scope.ganadas++;
						}
						else
						{
							alert("ganó la Maquina.");
							$scope.perdidas++;
						}
					};
				 });*/