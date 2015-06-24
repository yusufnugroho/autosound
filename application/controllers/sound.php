<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sound extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    } 
	public function index()
	{
               
                $this->load->model("m_sound");
		$data['file'] = $this->m_sound->gettable('soundfile');
		$data['file2'] = $this->m_sound->gettable('soundfile');
                $this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar');
		$this->load->view('sound/indexsound',$data);
		$this->load->view('dashboard/footer');

        }
     
	public function upload()
	{
                $this->load->helper('url');
		$target_Path = NULL;
		if ($_FILES['userFile']['name'] != NULL)
		{
			$target_Path = "File/";
			$temp = basename( $_FILES['userFile']['name'] );
			$temp = str_replace(" ","-", $temp);
			$target_Path = $target_Path.$temp;
		}
		$this->load->model('m_sound');

		$tanggal = date("y-m-d");
               
                //$jamMesin = date("h:i:s");
		$jam = $_POST['time'];
		
                $data = array(
		    'nama_file' => $_POST['judul'],
		    'path' => $target_Path,
                    'tag' => $_POST['tag'],
                    'tanggal' => $_POST['date'],
                    'time' => $jam,
		);
		if($this->m_sound->insertFile($data))
		{
			if ($target_Path != NULL) {
				move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
			}
                        echo '<script language="javascript">';
                        echo 'alert("File berhasil ditambahkan");';
                        echo '</script>';
                        redirect('sound', 'refresh');
                        //$this->index();
		}
		else
		{
                        echo '<script language="javascript">';
                        echo 'alert("Gagal menyimpan file");';
                        echo '</script>';
                        redirect('sound', 'refresh');
                        //$this->index();
		}
                //echo $jam;
                //die();
                

	}
	public function uploadForm()
	{
		$this->load->model('m_sound');
		$data['tag'] = $this->m_sound->getTag('tag_sound');
                $this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar');
		$this->load->view('sound/uploadsound', $data);
		$this->load->view('dashboard/footer');
	}
      
	public function showSound($id)
	{
		$this->load->model("m_sound");
		$where = array('id' => $id);
		$data['file'] = $this->m_sound->select_where('soundfile',$where);
                $this->load->view('dashboard/header');
		$this->load->view('dashboard/navbar');
		$this->load->view('sound/play', $data);
		$this->load->view('dashboard/footer');
	}
        public function recordForm()
	{
		//$this->load->view('dashboard/header');
		//$this->load->view('dashboard/navbar');
		$this->load->view('record/record');
		//$this->load->view('dashboard/footer');
	}
       
	public function delete($id)
	{
		$this->load->model("m_sound");
		$where = array('id' => $id);
		$data['file'] = $this->m_sound->delete('soundfile',$where);
		$this->index();
	}
}
