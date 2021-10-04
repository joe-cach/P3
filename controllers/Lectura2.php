<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lectura2 extends CI_Controller {

	public function index()
	{
		$this->load->model("Academico_model");
		$filas = $this->Academico_model->alumnos();
		$data['nombre']='moises';
		$data['apellido']='silva';
		$data['alumnos']=$filas;
		$this->load->view('myviewLectura', $data);
	}

}
?>