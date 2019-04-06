<?php

namespace Curso\Loja\Carrinho;

use Curso\Loja\Carrinho\Carrinho;

class MaiorEMenor
{
    private $menor;
    private $maior;

    public function encontra(Carrinho $carrinho)
    {
        foreach ($carrinho->getItens() as $Item) {
            if (empty($this->menor)
            || $item->getProduto()->getPreco() < $this->menor->getPreco())
            {
                $this->menor = $item->getProduto();
            } else if (empty($this->maior)
            || $item->getProduto()->getPreco() > $this->maior->getPreco())
            {
                $this->maior = $item->getProduto();
            }
        }
    }

    public function getMenor()
    {
        return $this->menor;
    }

    public function getMaior()
    {
        return $this->maior;
    }
}

