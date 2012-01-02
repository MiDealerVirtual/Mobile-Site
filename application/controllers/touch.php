<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Touch extends CI_Controller
{
	/**
	 * Private data
	 */
	private $view_data = array();
	
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		// Initial app page
		$this->view_data['app_title'] = 'MVC Touch App';
		$this->view_data['load_page'] = 'home';
		
		// Load framework's initial view	
		$this->load->view( 'jqm_frame', $this->view_data );
	}
	
	/**
	 * Inventory
	 */
	public function inventory()
	{
		// Initial app page
		$this->view_data['page_title'] = 'Inventario &mdash; Toyota Arecibo';
		$this->view_data['load_page'] = 'list';
		
		// Load framework's initial view	
		$this->load->view( 'jqm_pages/'.$this->view_data['load_page'], $this->view_data );
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/touch.php */