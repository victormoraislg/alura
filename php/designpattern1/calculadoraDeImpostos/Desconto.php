<?php
interface Desconto {
    public function desconta(Orcamento $orcamento);
    public function setProximo(Desconto $desconto);
}