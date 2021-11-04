<?php

namespace Root;

class Controller
{
    protected function render(array $data = [], string $view = null) {

        # Cria uma várivel a partir dos itens do array
        extract($data);
        require __DIR__.'/../templates/' . $view . '.tpl.php';
    }
}