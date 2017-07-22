<?php

class Advertencia {

    private $data = null;
    private $motivo = null;
    private $pontos = null;
    private $responsavel = null;
    private $indeferida = null;

    function __construct($data, $motivo, $pontos, $responsavel, $indeferida){
        $this->data = $data;
        $this->motivo = $motivo;
        $this->pontos = $pontos;
        $this->responsavel = $responsavel;
        $this->indeferida = $indeferida;
    }

    function getData() {
        return $this->$data;
    }

    function setData($data) {
        $this->data = $data;
    }

    function getMotivo() {
        return $this->$motivo;
    }

    function setMotivo($motivo) {
        $this->motivo = $motivo;
    }

    function getPontos() {
        return $this->$pontos;
    }

    function setPontos($pontos) {
        $this->pontos = $pontos;
    }

    function getResponsavel() {
        return $this->$responsavel;
    }

    function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }

    function getIndeferida() {
        return $this->$indeferida;
    }

    function setIndeferida($indeferida) {
        $this->indeferida = $indeferida;
    }

}

?>