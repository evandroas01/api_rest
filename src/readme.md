
Criei esta REST API para cadastro de pessoas no banco de dados.

Utilizei os 4 metodos solicitados, GET, POST, PUT, DELETE.

No metodo GET basta apenas acessar a URL iplocal/api/registers que ira mostrar todo os cadastros.

No metodo post tambem utilizando a URL iplocal/api/registers, e passando o 'name' -> nome do usuario, 'age'->idade da pessoa cadastrada 'email'->email da pessoa cadastrada, pode ser null.

No metodo PUT utilizando a URL iplocal/api/registers/1  e passando o 'name', 'age' ou o 'email' irá realizar alteração no cadastro do usuario.

O metodo DELETE, é utilizado com a URL iplocal/api/registers/5 ira excluir o cadastro com o Id 5.