# Examen 1 Evaluación

El proyecto se puede interactuar tanto desde el servidor del centro como desde Xammp
Para ello deberíamos alojar el repositorio en "htdocs" y abir el navegador tal que :

--  localhost/dwes_2021-Valentinpujiulatorres/1eva_respuestas/EJ5/


## Respuesta Ejercicio 4

A) Si , puedo ya que aunque no estén declaradas o sobreescritas , mediante herencia de objetos heredará aquellos métodos, en este caso como sabemos que la clase hijo no ha sobrescrito dichas funciones , sí , accederá a las funciones de la clase padre .
B)El efecto es tal que :

-Elemento protegido : Sí puede verlo ya que es una clase descendiente de ella y por tanto por las reglas de orientación a objetos y herencia sí puede acceder/leer/escribir , eso si , dependerá tambien del código implememntado.

-Elemento Público : Obiamente podrá acceder aun que no fuese descendiente.

-Elemento privado : No podrá acceder de ninguna de las maneras , tan solo la misma clase y realizando la acción dentro de si misma.




///https://www.php.net/manual/en/language.oop5.visibility.php