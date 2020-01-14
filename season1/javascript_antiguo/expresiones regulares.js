//Necesitamos buscar cadenas de texto que 
//1ºPuedan tener 1 o mas "a"
//2ºPuedan tener una "e" o no tenerla
//3ºPueda haber una unica "i"

/a+ e? i./

//Palabra de tres letras que empiecen y acaben por la letra "o"

/^o.o$/

//Palabra de tres letras que empiecen y acaben por la letra "o" y que en medio sea una letra

/^o\D{1}o$/

//una frase se encuentra la palabra web
[web]


//palabras que estan mal escritas 
\w*.m(?=v)|n(?=b)

^([012][1-9]|3[01])(\/)(0[1-9]|1[012])\2(\d{4})$


