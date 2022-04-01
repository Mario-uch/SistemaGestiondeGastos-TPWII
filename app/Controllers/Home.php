<?php

namespace App\Controllers;
use App\Models\uRegistro;
use App\Models\uGastos;
class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
     public function registro()
    {
        return view('registro_usuario'); 
    }
     public function insertar() {
        $uRegistro= new uRegistro();
        $usuarioNuevo =[
            "nombre"=>$_POST['nombre'],
            "correo"=>$_POST['correo'],
            "contraseña"=>$_POST['contraseña'],
        ];
        $uRegistro-> insert($usuarioNuevo);
        $datoId['idRegistrado']=$uRegistro->db->insertID();
        return view("login",$datoId);
    }

    public function ingresar(){
    	$uRegistro = new uRegistro();
    	$correo = $_POST['correo'];
    	$contraseña = $_POST['contraseña'];
    	$user=$uRegistro -> where('correo',$correo)-> where('contraseña',$contraseña)-> first();
    	return view("formulario",$user);
    }

     public function insertarGastos() {
        $uGastos= new uGastos();
        $usuarioNuevo =[
            "monto"=>$_POST['monto'],
            "fecha"=>$_POST['fecha'],
            "descripcion"=>$_POST['descripcion'],
            "categoria"=>$_POST['categoria'],
        ];
        $uGastos-> insert($usuarioNuevo);
        $datoId['idRegistrado']=$uGastos->db->insertID();
        return view("tablas",$datoId);
    }

    public function mostrarRegistros(){
    	$uGastos = new uGastos();
    	$todos=$uGastos->findAll();
    	$gastos=array('gastos'=>$todos);

    	return view("formulario",$gastos);
    }

    public function buscar(){
    	$uGastos = new uGastos();
    	$monto = $_POST['monto'];
    	$gastos = $uGastos-> find($monto);

    	return view('form_editar',$gastos);

    }

    public function tabla(){
    	$uGastos = new uGastos();
    	$monto = $_POST['monto'];
    	
    	$nuevo=$uGastos -> where('monto',$monto)->first();
    	return view("tablas",$nuevo);
    }

    public function editar(){
    	$uGastos = new uGastos();
    	$monto = $_POST['monto'];
    	$actualizado = [
    		"monto" => $_POST['monto'],
    		"fecha" => $_POST['fecha'],
    		"descripcion" => $_POST['descripcion'],
    		"categoria" => $_POST['categoria'],
    	];
    	$uGastos-> update($monto, $actualizado);

    	return view("formulario");
    }

    public function eliminar($id){
    	$uGastos = new uGastos();
    	$monto = $id;
    	$uGastos-> delete($monto);
    	return $this;
    }
}
