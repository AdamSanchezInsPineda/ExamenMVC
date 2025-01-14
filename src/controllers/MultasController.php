<?php

class MultasController extends Controller {
    protected $multa;

    public function __construct()
    {
        $this->multa = new Multa();
    }

    function index(){
        $this->checkAdmin();
        $multas = $this->multa->getAllMultas();
        $this->render("Multas/index", ["multas" => $multas]);
    }

    function show(){
        $this->checkSession();
        $multas = $this->multa->getMultas($_SESSION["matricula"]);
        $this->render("Multas/show", ["multas" => $multas]);
    }

    function update($id){
        $this->checkSession();
        $this->multa->pagarMulta($id);
        header("Location: /multas");
    }
}