<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		//load libary pagination
		$this->load->library('pagination');
		
		$this->load->model('Dataset');
	}
	
	
	public function index(){
        
        if(empty($this->session->userdata('asid_user_id'))){

            redirect('login');

        }else{

            $data = [ 
				'title' => 'ASID',
				'description' => 'Aplikasi analisa sentimen terbaik di Indonesia',
            	'keywords' => 'Analisa sentimen Sentiment Analysis',
				'content' => 'dashboard',
				'menu' => '',
				'users' => $this->Auth->getUser($this->session->userdata('asid_user_id'))
            ];
						
			$this->load->view('index', $data);			        
                
		}		
		
	}


	function auth(){
			
		$get = $this->input->get();

		$row = $this->Auth->login($get['email_no_hp'], $get['password']);
		// var_dump($row['user_id']);
		if($row){					
			$this->input->set_cookie('asid_user_id', base64_encode($row['user_id']), 3600*24*7);	
			$this->input->set_cookie('asid_role', base64_encode($get['role_id']), 3600*24*7);

			$array = [
					'asid_user_id' => $row['user_id'],
					'asid_role' => $get['role_id']
			];
			
			$this->session->set_userdata($array);

			$result['msg'] = "success";

			echo json_encode($result);

		}else{				
			
			$result['msg'] = "Data pengguna tidak ditemukan";

			echo json_encode($result);
			
		}
		
	}


	function login(){

		if(empty($this->session->userdata('asid_user_id'))){
			
			$data = [
                'title' => 'ASID - Login',
                'description' => 'Aplikasi analisa sentimen terbaik di Indonesia',
            	'keywords' => 'Analisa sentimen Sentiment Analysis',
            ];

            $this->load->view('login', $data);

        }else{

			redirect('dashboard');
			
		}
		
	}


	function logout(){

		$id = $this->session->userdata('asid_user_id');

		// $this->Auth->logout($id);
		delete_cookie('asid_user_id');
		delete_cookie('asid_role');

		$this->session->sess_destroy();

		redirect('','refresh');

	}
	

	public function reset_password(){
		$data = [ 
            'title' => 'APPSO v.2 - Reset Password'
		];
		$this->load->view('reset-password', $data);
	}


	public function dataset(){

        $data = [ 
			'title' => 'Dataset',
			'description' => 'Aplikasi analisa sentimen terbaik di Indonesia',
			'keywords' => 'Analisa sentimen Sentiment Analysis',
			'content' => 'app/dataset/main',
			'menu' => '',
			'users' => $this->Auth->getUser($this->session->userdata('asid_user_id')),
			'data' => $this->Dataset->readRawData()
		];
		
		//konfigurasi pagination
		// $config['base_url'] = site_url('dataset');
		$data['start'] = 1;
        $config['total_rows'] = $this->Dataset->countRows();
        $config['per_page'] = 10;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$config['use_page_numbers'] = TRUE;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 3;
 
        // Membuat Style pagination
		
		$config['first_link']       = '<a class="page-link"
											href="#"
											aria-label="First">
											<span aria-hidden="true"
													class="material-icons">first_page</span>
											<span>First</span>
										</a>';
        $config['last_link']        = '<a class="page-link"
											href="#"
											aria-label="Last">
											<span>Last</span>
											<span aria-hidden="true"
													class="material-icons">last_page</span>
										</a>';
        $config['next_link']        = '<a class="page-link"
											href="#"
											aria-label="Next">
											<span>Next</span>
											<span aria-hidden="true"
													class="material-icons">chevron_right</span>
										</a>';
        $config['prev_link']        = '<a class="page-link"
											href="#"
											aria-label="Previous">
											<span aria-hidden="true"
													class="material-icons">chevron_left</span>
											<span>Prev</span>
										</a>';
        $config['full_tag_open']    = '<ul class="pagination justify-content-start pagination-xsm m-0" id="pag-addMore">';
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        // $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();
		
		$this->load->view('index', $data);

	}


	function get_more_dataset($page = 1){		
		$start = (($page <= 0 ? 1 : $page) - 1) * 10;
		$data['start'] = $start+1;
		$data['data'] = $this->Dataset->readRawData($start);
		//konfigurasi pagination
        // $config['base_url'] = site_url('dataset');
        $config['total_rows'] = $this->Dataset->countRows();
        $config['per_page'] = 10;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$config['use_page_numbers'] = TRUE;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 3;
 
        // Membuat Style pagination
		
		$config['first_link']       = '<a class="page-link"
											href="#"
											aria-label="First">
											<span aria-hidden="true"
													class="material-icons">first_page</span>
											<span>First</span>
										</a>';
        $config['last_link']        = '<a class="page-link"
											href="#"
											aria-label="Last">
											<span>Last</span>
											<span aria-hidden="true"
													class="material-icons">last_page</span>
										</a>';
        $config['next_link']        = '<a class="page-link"
											href="#"
											aria-label="Next">
											<span>Next</span>
											<span aria-hidden="true"
													class="material-icons">chevron_right</span>
										</a>';
        $config['prev_link']        = '<a class="page-link"
											href="#"
											aria-label="Previous">
											<span aria-hidden="true"
													class="material-icons">chevron_left</span>
											<span>Prev</span>
										</a>';
        $config['full_tag_open']    = '<ul class="pagination justify-content-start pagination-xsm m-0" id="pag-addMore">';
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        // $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();
		$this->load->view('app/dataset/data', $data);
	}
	

	public function text_preprocessing(){

        $data = [ 
			'title' => 'Text Preprocessing',
			'description' => 'Aplikasi analisa sentimen terbaik di Indonesia',
			'keywords' => 'Analisa sentimen Sentiment Analysis',
			'content' => 'app/text-preprocessing/main',
			'menu' => '',
			'users' => $this->Auth->getUser($this->session->userdata('asid_user_id')),
			'data' => $this->Dataset->readPreprocessing()
		];
		
		//konfigurasi pagination
		// $config['base_url'] = site_url('dataset');
		$data['start'] = 1;
        $config['total_rows'] = $this->Dataset->countRows();
        $config['per_page'] = 10;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$config['use_page_numbers'] = TRUE;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 3;
 
        // Membuat Style pagination
		
		$config['first_link']       = '<a class="page-link"
											href="#"
											aria-label="First">
											<span aria-hidden="true"
													class="material-icons">first_page</span>
											<span>First</span>
										</a>';
        $config['last_link']        = '<a class="page-link"
											href="#"
											aria-label="Last">
											<span>Last</span>
											<span aria-hidden="true"
													class="material-icons">last_page</span>
										</a>';
        $config['next_link']        = '<a class="page-link"
											href="#"
											aria-label="Next">
											<span>Next</span>
											<span aria-hidden="true"
													class="material-icons">chevron_right</span>
										</a>';
        $config['prev_link']        = '<a class="page-link"
											href="#"
											aria-label="Previous">
											<span aria-hidden="true"
													class="material-icons">chevron_left</span>
											<span>Prev</span>
										</a>';
        $config['full_tag_open']    = '<ul class="pagination justify-content-start pagination-xsm m-0" id="pag-addMore">';
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        // $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();
		
		$this->load->view('index', $data);

	}


	function get_more_preprocessing($page = 1){		
		$start = (($page <= 0 ? 1 : $page) - 1) * 10;
		$data['start'] = $start+1;
		$data['data'] = $this->Dataset->readPreprocessing($start);
		//konfigurasi pagination
        // $config['base_url'] = site_url('dataset');
        $config['total_rows'] = $this->Dataset->countRows();
        $config['per_page'] = 10;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$config['use_page_numbers'] = TRUE;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 3;
 
        // Membuat Style pagination
		
		$config['first_link']       = '<a class="page-link"
											href="#"
											aria-label="First">
											<span aria-hidden="true"
													class="material-icons">first_page</span>
											<span>First</span>
										</a>';
        $config['last_link']        = '<a class="page-link"
											href="#"
											aria-label="Last">
											<span>Last</span>
											<span aria-hidden="true"
													class="material-icons">last_page</span>
										</a>';
        $config['next_link']        = '<a class="page-link"
											href="#"
											aria-label="Next">
											<span>Next</span>
											<span aria-hidden="true"
													class="material-icons">chevron_right</span>
										</a>';
        $config['prev_link']        = '<a class="page-link"
											href="#"
											aria-label="Previous">
											<span aria-hidden="true"
													class="material-icons">chevron_left</span>
											<span>Prev</span>
										</a>';
        $config['full_tag_open']    = '<ul class="pagination justify-content-start pagination-xsm m-0" id="pag-addMore">';
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        // $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();
		$this->load->view('app/text-preprocessing/data', $data);
	}


	public function tf_idf(){

		$data = [ 
			'title' => 'TF-IDF',
			'description' => 'Aplikasi analisa sentimen terbaik di Indonesia',
			'keywords' => 'Analisa sentimen Sentiment Analysis',
			'content' => 'app/analyze/tf-idf/main',
			'menu' => '',
			'users' => $this->Auth->getUser($this->session->userdata('asid_user_id')),
			'data' => $this->Dataset->readTFIDF()
		];
		
		//konfigurasi pagination
		// $config['base_url'] = site_url('dataset');
		$data['start'] = 1;
        $config['total_rows'] = $this->Dataset->countRowsTFIDF();
        $config['per_page'] = 10;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$config['use_page_numbers'] = TRUE;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 3;
 
        // Membuat Style pagination
		
		$config['first_link']       = '<a class="page-link"
											href="#"
											aria-label="First">
											<span aria-hidden="true"
													class="material-icons">first_page</span>
											<span>First</span>
										</a>';
        $config['last_link']        = '<a class="page-link"
											href="#"
											aria-label="Last">
											<span>Last</span>
											<span aria-hidden="true"
													class="material-icons">last_page</span>
										</a>';
        $config['next_link']        = '<a class="page-link"
											href="#"
											aria-label="Next">
											<span>Next</span>
											<span aria-hidden="true"
													class="material-icons">chevron_right</span>
										</a>';
        $config['prev_link']        = '<a class="page-link"
											href="#"
											aria-label="Previous">
											<span aria-hidden="true"
													class="material-icons">chevron_left</span>
											<span>Prev</span>
										</a>';
        $config['full_tag_open']    = '<ul class="pagination justify-content-start pagination-xsm m-0" id="pag-addMore">';
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        // $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();
		
		$this->load->view('index', $data);

	}


	function get_more_tfidf($page = 1){		
		$start = (($page <= 0 ? 1 : $page) - 1) * 10;
		$data['start'] = $start+1;
		$data['data'] = $this->Dataset->readTFIDF($start);
		//konfigurasi pagination
        // $config['base_url'] = site_url('dataset');
        $config['total_rows'] = $this->Dataset->countRowsTFIDF();
        $config['per_page'] = 10;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$config['use_page_numbers'] = TRUE;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 3;
 
        // Membuat Style pagination
		
		$config['first_link']       = '<a class="page-link"
											href="#"
											aria-label="First">
											<span aria-hidden="true"
													class="material-icons">first_page</span>
											<span>First</span>
										</a>';
        $config['last_link']        = '<a class="page-link"
											href="#"
											aria-label="Last">
											<span>Last</span>
											<span aria-hidden="true"
													class="material-icons">last_page</span>
										</a>';
        $config['next_link']        = '<a class="page-link"
											href="#"
											aria-label="Next">
											<span>Next</span>
											<span aria-hidden="true"
													class="material-icons">chevron_right</span>
										</a>';
        $config['prev_link']        = '<a class="page-link"
											href="#"
											aria-label="Previous">
											<span aria-hidden="true"
													class="material-icons">chevron_left</span>
											<span>Prev</span>
										</a>';
        $config['full_tag_open']    = '<ul class="pagination justify-content-start pagination-xsm m-0" id="pag-addMore">';
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        // $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();
		$this->load->view('app/analyze/tf-idf/result', $data);
	}


	public function naive_bayes(){

		$data = [ 
			'title' => 'Naive Bayes',
			'description' => 'Aplikasi analisa sentimen terbaik di Indonesia',
			'keywords' => 'Analisa sentimen Sentiment Analysis',
			'content' => 'app/analyze/naive-bayes/main',
			'menu' => '',
			'users' => $this->Auth->getUser($this->session->userdata('asid_user_id')),
			'data' => $this->Dataset->readNaiveBayes()
		];
		
		//konfigurasi pagination
		// $config['base_url'] = site_url('dataset');
		$data['start'] = 1;
        $config['total_rows'] = $this->Dataset->countRowsLabelled();
        $config['per_page'] = 10;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$config['use_page_numbers'] = TRUE;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 3;
 
        // Membuat Style pagination
		
		$config['first_link']       = '<a class="page-link"
											href="#"
											aria-label="First">
											<span aria-hidden="true"
													class="material-icons">first_page</span>
											<span>First</span>
										</a>';
        $config['last_link']        = '<a class="page-link"
											href="#"
											aria-label="Last">
											<span>Last</span>
											<span aria-hidden="true"
													class="material-icons">last_page</span>
										</a>';
        $config['next_link']        = '<a class="page-link"
											href="#"
											aria-label="Next">
											<span>Next</span>
											<span aria-hidden="true"
													class="material-icons">chevron_right</span>
										</a>';
        $config['prev_link']        = '<a class="page-link"
											href="#"
											aria-label="Previous">
											<span aria-hidden="true"
													class="material-icons">chevron_left</span>
											<span>Prev</span>
										</a>';
        $config['full_tag_open']    = '<ul class="pagination justify-content-start pagination-xsm m-0" id="pag-addMore">';
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        // $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();
		
		$this->load->view('index', $data);

	}


	function get_more_naivebayes($page = 1){		
		$start = (($page <= 0 ? 1 : $page) - 1) * 10;
		$data['start'] = $start+1;
		$data['data'] = $this->Dataset->readNaiveBayes($start);
		//konfigurasi pagination
        // $config['base_url'] = site_url('dataset');
        $config['total_rows'] = $this->Dataset->countRowsLabelled();
        $config['per_page'] = 10;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$config['use_page_numbers'] = TRUE;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 3;
 
        // Membuat Style pagination
		
		$config['first_link']       = '<a class="page-link"
											href="#"
											aria-label="First">
											<span aria-hidden="true"
													class="material-icons">first_page</span>
											<span>First</span>
										</a>';
        $config['last_link']        = '<a class="page-link"
											href="#"
											aria-label="Last">
											<span>Last</span>
											<span aria-hidden="true"
													class="material-icons">last_page</span>
										</a>';
        $config['next_link']        = '<a class="page-link"
											href="#"
											aria-label="Next">
											<span>Next</span>
											<span aria-hidden="true"
													class="material-icons">chevron_right</span>
										</a>';
        $config['prev_link']        = '<a class="page-link"
											href="#"
											aria-label="Previous">
											<span aria-hidden="true"
													class="material-icons">chevron_left</span>
											<span>Prev</span>
										</a>';
        $config['full_tag_open']    = '<ul class="pagination justify-content-start pagination-xsm m-0" id="pag-addMore">';
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        // $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();
		$this->load->view('app/analyze/naive-bayes/data', $data);
	}
	

}

?>