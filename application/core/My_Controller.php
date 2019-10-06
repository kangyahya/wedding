<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

	public function front($content,$data=NULL)
	{
		$data['navigasi'] = $this->load->view('themes/navigation',$data,TRUE);
		$data['header'] = $this->load->view('themes/header',$data,TRUE);
		$data['footer'] = $this->load->view('themes/footer',$data,TRUE);
		$data['content'] = $this->load->view($content,$data,TRUE);
		$this->load->view('themes/index',$data);
	}
	/*public function web($content,$data=NULL){
		$data['header'] = $this->load->view('web/header',$data,TRUE);
		$data['nav'] = $this->load->view('web/nav',$data,TRUE);
		$data['footer'] = $this->load->view('web/footer',$data,TRUE);
		$data['content'] = $this->load->view($content,$data,TRUE);
		$this->load->view('web/index',$data);
	}*/
}