<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function partial_html()
	{
		$all_notes = $this->Note->get_all_notes();

		$this->load->view('partial_html', array('notes' => $all_notes));
	}
	
	public function create()
	{
		if(trim($this->input->post('title')) != '')
		{
			$this->Note->add_note($this->input->post('title'));
		}
		$this->partial_html();
	}

	public function update()
	{
		$details = array(
			'id' => $this->input->post('id'),
			'description' => $this->input->post('description')
			);

		$this->Note->update_note($details);

		$this->partial_html();
	}

	public function destroy()
	{
		$this->Note->delete_note($this->input->post('id'));

		$this->partial_html();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */