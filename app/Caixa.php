<?php 
namespace App;

class Caixa {
    protected $items = [];

    public function __construct($items = []){
        $this->items = $items;
    }

    public function contem($item)
    {
        return in_array($item, $this->items);
    }

    public function pegarUm()
    {
        return array_shift($this->items);
    }

    public function comecaCom($letra)
    {
        return array_filter($this->items, function ($item) use ($letra) {
            return stripos($item, $letra) === 0;
        });
    }

   
}
?>