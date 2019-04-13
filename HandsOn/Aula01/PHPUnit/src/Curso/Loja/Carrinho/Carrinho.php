<?php

namespace Curso\Loja\Carrinho;

use Curso\Loja\Produto\Produto;
use Curso\Loja\Frete\Frete;
use ArrayObject;

class Carrinho
{
    private $total = 0.0;
    private $itens;
    private $frete;

    public function __construct()
    {
        $this->itens = new ArrayObject;
    }

    public function addItem(Produto $produto, int $quantidade)
    {
        $item = new CarrinhoItem;
        $item->setProduto($produto, $quantidade);

        $this->itens->append($item);
        $this->setTotal();
    }

    private function setTotal()
    {
        foreach ($this as $item) {
            $this->total += $item->getTotal();
        }
    }

    public function getItens() : ArrayObject
    {
        return $this->itens;
    }

    // public function setFrete(Freate $frete)
    // {
    //     $this->frete = $frete;
    // }

    // public function getFrete()
    // {
    //     return $this->frete;
    // }

}
