<?php
//header() : Para avisar para o navegador que estamos dando um retorno do tipo Json

header('Content-Type: application/json; charset=utf-8');

require_once 'classes/Estoque.php';
class Rest
{
	public static function open($requisicao)
	{
		// explode separa os registros que estão separados por / que vem do array $REQUEST
		$url = explode('/', $requisicao['url']);
		//array_shift= apaga o registro da $url na posição 0 e o intem seguir toma a posiçõa o
        //ucfirst() coloca a primeira letra em maiuscula 
		
		$classe = ucfirst($url[0]);
		array_shift($url);

		$metodo = $url[0];
		array_shift($url);

		//as outras informação serão passadas para variavel paramatro caso se não tiver o 
//parametro sera por padrão um array
		$parametros = array();
		$parametros = $url;

		try {
			if (class_exists($classe)) {
				if (method_exists($classe, $metodo)) {
					 //Chama uma dada função de usuário com um array de parâmetros
                    //recebem o nome de uma função como uma string e quantos parâmetros forem necessários, 
//em seguida executam a função.Recebe o primeiro parâmetro como uma string e o restante 
//como um array
					$retorno = call_user_func_array(array(new $classe, $metodo), $parametros);

					return json_encode(array('status' => 'sucesso', 'dados' => $retorno));
				} else {
					return json_encode(array('status' => 'erro', 'dados' => 'Método inexistente!'));
				}
			} else {
				return json_encode(array('status' => 'erro', 'dados' => 'Classe inexistente!'));
			}	
		} catch (Exception $e) {
			return json_encode(array('status' => 'erro', 'dados' => $e->getMessage()));
		}
		
	}
}

if (isset($_REQUEST)) {
	echo Rest::open($_REQUEST);
}