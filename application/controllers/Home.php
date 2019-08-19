<?php defined('BASEPATH') OR exit('No Direct script  access alloew');
/**
 * 
 */
class Home extends CI_Controller
{
	
/*	function __construct()
	{
	
	}*/
	public function index()
	{
        $this->load->view('index'); 		
	}

	public function services()
	{
        $this->load->view('services');
	}

	public function blog()
	{
         $this->load->view('blog');
	}

	public function contact()
	{
       $this->load->view('contact');
	}

	public function support()
	{
       $this->load->view('support');
	}
	
   public function technologies()
	{
       $this->load->view('technologies');
	}

   public function blog_page()
	{
       $this->load->view('blog_page');
	}

}