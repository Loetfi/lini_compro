<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data = array(
            'title'     => 'test',
            'slider'    => $this->Home_model->getMenuDetail(1,'ID',5),
            'tagline'    => $this->Home_model->getMenuDetail(13,'ID',1),
            'news'      => $this->Home_model->getNewsperKat(20, 'ID'),
            'gallery'    => $this->Home_model->getMenuDetail(3,'ID',4),
            'footer'    => $this->Home_model->getMenuDetail(4,'ID',1),
            );
        // $this->load->view('api/front', $data, FALSE); 
        $this->load->view('mockup/buatdepan', $data, FALSE);
    }


    public function content()
    { 
        $data['slider'] = $this->Home_model->getMenuDetail(1,'ID',3);
        $data['tagline'] = $this->Home_model->getMenuDetail(13, 'ID' , 1);
        $data['layanan'] = $this->Home_model->getMenuDetail(14,'ID',8);
        $data['dokumentasi'] = $this->Home_model->getMenuDetail(17,'ID',20);
        $data['mengapa'] = $this->Home_model->getMenuDetail(16,'ID',5);
        //dari tentnang page
        $data['tentang'] = $this->Home_model->getMenuDetail(15,'ID',4);

        // news
        $data['news'] = $this->Home_model->getNewsperKat(20, 'ID' , 4);

        $data['fakta'] = array(); //$this->Home_model->getMenuDetail(18,'ID',5);

        $data['partner'] = $this->Home_model->getMenuDetail(19,'ID',6);

        // testimoni
        $data['testimoni'] = $this->Home_model->getMenuDetail(20,'ID',5);
          
        $data['title'] = 'Beranda'; 
        $data['page'] = 'front/home'; 
        $this->load->view('template/tema', $data, FALSE);
    }

    public function tentang()
    { 
        $data['konten'] = $this->Home_model->getMenuDetail(21,'ID',3);
        $data['tentang_slide'] = $this->Home_model->getMenuDetail(15,'ID',4);
        $data['tagline'] = $this->Home_model->getMenuDetail(27,'ID',1);
        $data['team'] = $this->Home_model->getMenuDetail(26,'ID',10);
        $data['title'] = 'Tentang Kami';
        $data['page'] = 'front/aboutus'; 
        $this->load->view('template/tema', $data, FALSE);
    }

    public function visimisi()
    { 
        $data['content'] = $this->Home_model->getMenuDetail(28,'ID',2);
        // $data['news'] = $this->Home_model->getNewsperKat(20, 'ID' , 3);
        // $data['link'] = $this->Home_model->getMenuDetail(2,'ID',8);
        $data['title'] = 'Visi - Misi';
        $data['page'] = 'front/visimisi'; 
        $this->load->view('template/tema', $data, FALSE);
    }

    public function legalitas()
    { 
        $data['legal'] = $this->Home_model->getMenuDetail(25,'ID',20);
        // $data['news'] = $this->Home_model->getNewsperKat(20, 'ID' , 3);
        // $data['link'] = $this->Home_model->getMenuDetail(2,'ID',8);
        $data['title'] = 'Legalitas';
        $data['page'] = 'front/legalitas'; 
        $this->load->view('template/tema', $data, FALSE);
    } 


    public function layanan()
    { 
        $data['content'] = $this->Home_model->getMenuDetail(14,'ID',9);
        // $data['news'] = $this->Home_model->getNewsperKat(20, 'ID' , 3);
        // $data['link'] = $this->Home_model->getMenuDetail(2,'ID',8);
        $data['title'] = 'Layanan Kami';
        $data['page'] = 'front/layanan'; 
        $this->load->view('template/tema', $data, FALSE);
    }


    public function portofolio()
    { 
        $data['slider'] = $this->Home_model->getMenuDetail(1,'ID',3);
        $data['portofolio'] = $this->Home_model->getMenuDetail(24, 'ID' , 3);
        $data['link'] = $this->Home_model->getMenuDetail(2,'ID',8);
        $data['title'] = 'Portofolio';
        $data['page'] = 'front/portofolio'; 
        $this->load->view('template/tema', $data, FALSE);
    }

     public function contact()
    { 
        $data['slider'] = $this->Home_model->getMenuDetail(1,'ID',3);
        $data['news'] = $this->Home_model->getNewsperKat(20, 'ID' , 3);
        $data['link'] = $this->Home_model->getMenuDetail(2,'ID',8);
        $data['title'] = 'Kontak Kami';
        $data['page'] = 'front/kontak'; 
        $this->load->view('template/tema', $data, FALSE);
    }

    



    // public function page($slugpage)
    // { 
        
    //     if (isset($slugpage)) {
            
    //     $data['content']    = $this->Home_model->gerperpage($slugpage);
    //     $data['title']      = 'List Unit';
    //     $data['page']       = 'front/page'; 
    //     $this->load->view('template/tema', $data);
    //     } else {
    //         redirect('','refresh');
    //     }
    // } 

}



/* End of file Front.php */
/* Location: ./application/controllers/Front.php */
