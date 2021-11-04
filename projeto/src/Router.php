<?php

namespace Root;

# Informando que essa classe pode ser utilizada como objeto 

Class Router implements \ArrayAccess {
    
    private $routes = [];

    public function __construct(array $routes = [])
    {
        $this->routes = $routes;
    }

    public function offsetExists($offset)
    {
        # Executado quando verificamos se um item do nosso array existe
        return isset($this->routes[$offset]);
    }

    public function offsetGet($offset)
    {
        # Qual será a lógica utilizada dentro do array, para que seja lido o dado dentro da classe Router
        return $this->routes[$offset];
    }

    public function offsetSet($offset, $value)
    {
       # Para adicionar valores
        $this->routes[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        # Para remover um item
        unset($this->routes[$offset]);
    }

    public function handler() {
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        # Retorna o tamanho de uma string
        if (strlen($path) > 1) {
            $path = rtrim($path, '/');
        }

        if($this->offsetExists($path)) {
            return $this->offsetGet($path);
        }

        http_response_code(404);
        echo 'Página inexistente';
        exit;
    }
}