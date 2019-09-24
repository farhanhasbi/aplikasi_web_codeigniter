<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Kelompok_bahan_makanan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kelompok_bahan_makanan_model');
    } 

    /*
     * Listing of kelompok_bahan_makanan
     */
    function index()
    {
        $data['kelompok_bahan_makanan'] = $this->Kelompok_bahan_makanan_model->get_all_kelompok_bahan_makanan();
        
        $data['_view'] = 'kelompok_bahan_makanan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new kelompok_bahan_makanan
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'Kelompok_bahan' => $this->input->post('Kelompok_bahan'),
            );
            
            $kelompok_bahan_makanan_id = $this->Kelompok_bahan_makanan_model->add_kelompok_bahan_makanan($params);
            redirect('kelompok_bahan_makanan/index');
        }
        else
        {            
            $data['_view'] = 'kelompok_bahan_makanan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a kelompok_bahan_makanan
     */
    function edit($id_kel)
    {   
        // check if the kelompok_bahan_makanan exists before trying to edit it
        $data['kelompok_bahan_makanan'] = $this->Kelompok_bahan_makanan_model->get_kelompok_bahan_makanan($id_kel);
        
        if(isset($data['kelompok_bahan_makanan']['id_kel']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'Kelompok_bahan' => $this->input->post('Kelompok_bahan'),
                );

                $this->Kelompok_bahan_makanan_model->update_kelompok_bahan_makanan($id_kel,$params);            
                redirect('kelompok_bahan_makanan/index');
            }
            else
            {
                $data['_view'] = 'kelompok_bahan_makanan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The kelompok_bahan_makanan you are trying to edit does not exist.');
    } 

    /*
     * Deleting kelompok_bahan_makanan
     */
    function remove($id_kel)
    {
        $kelompok_bahan_makanan = $this->Kelompok_bahan_makanan_model->get_kelompok_bahan_makanan($id_kel);

        // check if the kelompok_bahan_makanan exists before trying to delete it
        if(isset($kelompok_bahan_makanan['id_kel']))
        {
            $this->Kelompok_bahan_makanan_model->delete_kelompok_bahan_makanan($id_kel);
            redirect('kelompok_bahan_makanan/index');
        }
        else
            show_error('The kelompok_bahan_makanan you are trying to delete does not exist.');
    }
    
}
