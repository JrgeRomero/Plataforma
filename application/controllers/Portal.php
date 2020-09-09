<?php
setlocale(LC_ALL,"es_ES");
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Portal extends CI_Controller{

  function __construct()
  {
	  parent::__construct();
	  $this->load->model('Systemsettings_model');
	  $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->helper('security');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
	  if (!$this->tank_auth->is_logged_in()) { redirect('inicio'); }
  }

  function index()
  {
    $data['_view'] = 'portal/index';
    $data['title'] = 'Menú Principal';
    $this->load->view('_template_principal',$data);
  }

  function formatos()
	{
		$this->tank_auth->valida(array(1,2,3,5));
		$data['_view'] = 'portal/formatos';
		$data['title'] = 'Control documental';
    $this->load->view('_template_principal',$data);
	}

	function usuario()
	{  
		$data['_view'] = 'portal/usuario';
		$data['title'] = 'Usuario';
    $this->load->view('_template_principal',$data);
	}

	function pruebas()
  { 
    $this->tank_auth->valida(array(1));
    $data['_view'] = 'portal/pruebas';
    $data['title'] = 'Pruebas';
    $this->load->view('_template_principal',$data);
  }

	/*
   * Listing of systemsettings
   */
  function systemsettings()
  {
    $data['systemsettings'] = $this->Systemsettings_model->get_all_systemsettings();
    //$data['systemsettings'] = $this->systemsettings_model->get_systemsettings(1);
    $data['_view'] = 'portal/systemsettings';
    $this->load->view('_template_principal',$data);
  }

  public function datasystemsettings($id)
  {
      echo json_encode($this->Systemsettings_model->get_systemsettings($id));
  }

  /*
   * Editing a systemsettings
   */
  function editsystemsettings($id)
  {
      // check if the systemsettings exists before trying to edit it
      $data['systemsettings'] = $this->Systemsettings_model->get_systemsettings($id);
      
      if(isset($data['systemsettings']['id']))
      {
        $this->load->library('form_validation');
				$this->form_validation->set_rules('titulo','Titulo','max_length[30]');
				//$this->form_validation->set_rules('color','Color','max_length[50]');
				//$this->form_validation->set_rules('sidebarbackground','Sidebarbackground','max_length[150]');
			
				if($this->form_validation->run())     
		    {   
	        $params = array(
					'titulo' 						=> $this->input->post('titulo'),
					'color' 						=> $this->input->post('color'),
					'sidebarbackground' => $this->input->post('sidebarbackground'),
	        );

          $this->Systemsettings_model->update_systemsettings($id,$params);            
          redirect('config');
		    }
        else
        {
            $data['_view'] = 'portal/systemsettings';
            $this->load->view('_template_principal',$data);
        }
		  }
		  else
		  show_error('The systemsettings you are trying to edit does not exist.');
  }

  //Agregar Sidebar
  function cambiarsidebar($id)
  {
      // check if the ftracker exists before trying to edit it
      $data['systemsettings'] = $this->Systemsettings_model->get_systemsettings($id);
      
      if(isset($data['systemsettings']['id']))
      {
          $rutatemporalarchivo = $_FILES['userfile']['name']; //Obtiene la ruta temporal del archivo. "userfile" es el nombre del input en el form
          $extension = pathinfo($rutatemporalarchivo, PATHINFO_EXTENSION); //Con la ruta temporal obtiene la extensión del archivo

          $config['upload_path'] = './resources/imagenes/'; //La ruta de destino del archivo a procesar
          $config['allowed_types'] = 'gif|jpg|png|jpeg'; //El formato del archivo a subir.
          $config['max_size'] = '71680'; //Tamaño en KB
          $config['max_width']  = '0';
          $config['max_height']  = '0';
          $config['min_width']  = '10';
          $config['min_height']  = '10';
          $config['file_ext_tolower']  = TRUE; //Forza a que la extensión se guarde en minusculas
          $config['remove_spaces'] = TRUE; //Elimina espacios en el nombre
          $config['file_name'] = "sidebar.".png; //Sobreescribe el nombre del archivo con el nombre del código de la Entidad y su extensión
          $config['overwrite'] = TRUE; //Sobreescribe el archivo con el mismo nombre en el SERVIDOR

          $this->load->library('upload', $config); //Sube el archivo con la configuración dada

          if ($this->upload->do_upload())
          {   
              $ruta ='resources/imagenes/';
              $nuevonombre = $ruta."sidebar.".png; //Concatena la ruta y el nombre ($codigo y $extension)

              $params = array(
                  'sidebarbackground' => $nuevonombre, 
              );
                  
              $this->Systemsettings_model->update_systemsettings($id,$params);            
              redirect('config');
          }
          else
          {
            $data['_view'] = 'portal/systemsettings';
            $this->load->view('_template_principal',$data);
          }
      }
      else
          show_error('The systemsettings you are trying to edit does not exist.');
          //redirect('config');
  } 

	function upload()
	{	
		$data['_view'] = 'portal/upload_form';
    $this->load->view('_template_principal',$data);
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{	
			$data = array('error' => $this->upload->display_errors());
			$data['_view'] = 'portal/upload_form';
    	$this->load->view('_template_principal',$data);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$data['_view'] = 'portal/upload_success';
    	$this->load->view('_template_principal',$data);

		}
	}
}