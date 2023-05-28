function seleccionarOpcion() {
	var select1 = document.getElementById("codeEliminar");
	var select2 = document.getElementById("productoEliminar");
  
	var opcionSeleccionada = select1.selectedIndex;
	var opcionSeleccionada2 = select2.selectedIndex;
  
	select2.selectedIndex = opcionSeleccionada;
	
  }

  function seleccionarOpcion2() {
	var select1 = document.getElementById("codeEliminar");
	var select2 = document.getElementById("productoEliminar");
  
	var opcionSeleccionada = select2.selectedIndex;
  
	select1.selectedIndex = opcionSeleccionada;
	
  }