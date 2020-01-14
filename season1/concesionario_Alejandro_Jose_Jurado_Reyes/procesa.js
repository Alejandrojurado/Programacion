
	//Alejandro José Jurado Reyes
	//array bidimensional
	var marca_modelo = [];


	//Mustra las listas en la caja de marca
	document.getElementById("actualizar").addEventListener("click",actualizar,false);
	function actualizar() {
		document.getElementById("imp_marca").innerHTML = "";
		document.getElementById("imp_modelo").innerHTML = "";
		
		for (var i = 0; i < marca_modelo.length; i++) {
			document.getElementById("imp_marca").innerHTML += ("<option>" + marca_modelo[i][0] + "</option>");
		 } 	
		
		// logger
		document.getElementById("logger").innerHTML = "var marca_modelo =" + marca_modelo;
		
		estado();
	}
		
	
	//Actualiza la marca y el modelo en la funcion
	document.getElementById("marca").addEventListener("click",estado3,false);
	document.getElementById("modelo").addEventListener("click",estado3,false);
	function estado3() {
	document.getElementById("estado3").innerHTML = " <strong>Para añadir un modelo primero tienes que escribir la marca arriba y luego escribir el modelo y darle a añadir</strong>" ;
	}

	//imprime el la marca y el modelo seleccionado
	document.getElementById("imp_marca").addEventListener("click",estado,false);
	document.getElementById("imp_modelo").addEventListener("click",estado2,false);
	
	function estado2() {
		var e = document.getElementById("imp_modelo");		
		var text = e.options[e.selectedIndex].text;
		document.getElementById("estado2").innerHTML = "<br> Has selecionado Modelo: " + text;

		document.getElementById("logger").innerHTML = "var marca_modelo =" + marca_modelo;
	}

	//Imprime en el logger las marcas y los modelos guardados en el array
	function estado() {
		document.getElementById("imp_modelo").innerHTML = "";
		var a = document.getElementById("imp_marca");

		var tex1 = a.options[a.selectedIndex].text;
		document.getElementById("estado").innerHTML = "Has selecionado Marca: " + tex1 ;	
		for (var i = 0; i < marca_modelo.length; i++) {
			comprobar = marca_modelo[i][0];
			if (tex1 == comprobar){
				
				for (var j = 1; j < marca_modelo[i].length; j++) {
					document.getElementById("imp_modelo").innerHTML += ( "<option>" + marca_modelo[i][j] + "</option>");
				} 		

			}					
		} 

		document.getElementById("logger").innerHTML = "var marca_modelo: " + marca_modelo;	
	}

	//listener para agregar marca , modelo y puedes añadir marca y modelo
	document.getElementById("anadir_modelo").addEventListener("click",anadir_modelo,false);
	document.getElementById("anadir_marca").addEventListener("click",anadir_marca,false);
	document.getElementById("enviar").addEventListener("click",anadir,false);


	// funcion Para anadir en el array la marca
	function anadir_marca() {
		var marca = document.getElementById("marca").value;
		marca_modelo.push([marca]);
		actualizar();
	}

	// Funcion que agraga el modelo buscando la marca primero para poner el modelo en la marca y se escribe en el array
	function anadir_modelo() {
		var marca = document.getElementById("marca").value;
		var modelo =  document.getElementById("modelo").value;	
		for (var i = 0; i < marca_modelo.length; i++) {

			comprobar = marca_modelo[i][0];			
			if (marca == comprobar){

				marca_modelo[i].push([modelo]);

			}					
		 } 		 
		estado();
	}

	// funcion que si le das parametro marca y modelo mete ambas
	function anadir() {
		var valor1 = document.getElementById("marca").value;
		var valor2 =  document.getElementById("modelo").value;
		marca_modelo.push([valor1,valor2]);

		actualizar();
	}


	//listener para eliminar marca , modelo y puedes añadir marca y modelo

	document.getElementById("eliminar_marca").addEventListener("click",eliminar_marca,false);
	document.getElementById("eliminar_modelo").addEventListener("click",eliminar_modelo,false);
	document.getElementById("eliminar_todo").addEventListener("click",eliminar,false);

	// borra la marca que se meta en el input	
	function eliminar_marca() {
		var valor1 = document.getElementById("marca").value;
		
		for (var i = 0; i < marca_modelo.length; i++) {
				comprobar = marca_modelo[i][0];
			if (valor1 == comprobar){
				marca_modelo.splice(i, 1);
			}
					
		 } 		 
		actualizar();		
	}

	// borra el modelo que se meta en el input solo si le dices de que marca
	function eliminar_modelo() {
		var valor2 = document.getElementById("modelo").value;
		for (var i = 0; i < marca_modelo.length; i++) {
			for (var j = 1; j < marca_modelo[i].length; j++) {
			comprobar2 = marca_modelo[i][j];
				if (valor2 == comprobar2){
					marca_modelo[i].splice(j, 1);
				}
			}	 

		} 

		estado();
	}

	// borra todo
	function eliminar() {
		var valor1 = document.getElementById("marca").value;
		for (var i = 0; i < marca_modelo.length; i++) {
			comprobar = marca_modelo[i][0];
			if (valor1 == comprobar){
				marca_modelo.splice(i, 1);
			}

		}
		var valor2 = document.getElementById("modelo").value;
		for (var i = 0; i < marca_modelo.length; i++) {

			for (var j = 1; j < marca_modelo[i].length; j++) {
				comprobar2 = marca_modelo[i][j];
				if (valor2 == comprobar2){
					marca_modelo[i].splice(j, 1);
				}
			} 

		} 
		actualizar();
	}