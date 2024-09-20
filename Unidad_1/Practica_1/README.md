# Práctica 1.1 - Git. Trabajando con ramas y uniones

## Entrega

1. Crea una rama que se llame primera en tu local, y ejecuta la instrucción necesaria para comprobar que se ha creado.
   *Creacion de la rama:*
   ` $ git checkout -b [nombre de la rama]`
   *Comprobacion de la rama:*
   ` $ git branch`
2. Crea un nuevo fichero en esta rama y fusiónalo con la principal. ¿Se ha producido conflicto? Razona la respuesta
   *Cambiar de rama:*
   ` $ git checkout primera `
   *Creacion del fichero:*
   ` $ nano fichero `
    No se ha producido ningun conflicto. Ja que el fichero que estamos añadiendo a la rama **main** no estaba creado.
3. Borra la rama primera.
   *Borrar rama primera:*
    ` $ git branch -d primera `
4. Crea una rama que se llame segunda, y modifica un fichero en ella para producir un conflicto al unirlo a la rama principal. Entrega el contenido del fichero donde se ha producido el conflicto.
   *Creacion de la rama:*
   ` $ git checkout -b segunda`
   *Cambiar de rama:*
   ` $ git checkout segunda `
   *Modificar fichero:*
   ` $ nano fichero `
   *Fusionar ramas:*
   ` $ git merge segunda `
   *Comprovar el conficto:*
   ` $ git diff `
6. Soluciona el conflicto que has creado en el punto anterior y sincroniza la rama segunda en el remoto.
   *Solucionar el conflicto:*
   Para solucionar el conflicto hacemos un ` $ git diff ` y saldra donde esta dando el error veremos que el error esta en el fichero que modificamos anteriormente solo tenemos que volver a editar-lo i tendremos solucionado el fallo.