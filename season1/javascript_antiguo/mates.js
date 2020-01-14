var i,j=0;
	for (i=0;i<5;i++){
		alert ("variable i: " +i);
		for (j=0; j<5; j++){
			if(i%2==0){
				document.write(i + "-" + j + "<br>");
		}
	}
}
