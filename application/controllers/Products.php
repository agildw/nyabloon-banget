<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Products extends CI_Controller {

	

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product');
	}

	public function index()
	{
		$data['products'] = $this->product->get_products();
		
		$this->load->view('products/products', $data);		
	}

    public function product($id){
        $data['product'] = $this->product->get_product_by_slug($id);
		if(!$data['product']){
			show_404();
		}
	
		$data['related_products'] = $this->product->get_random_products($data['product']['id']);
        $this->load->view('products/product_details', $data);
    }

	public function preview($slug) {
    // Debugging: Use var_dump to inspect the query string parameter 'imageUrl'
    var_dump($this->input->get('imageUrl'));

    // Retrieve product data by slug
    $data['product'] = $this->product->get_product_by_slug($slug);

    // If product not found, show 404 error
    if (!$data['product']) {
        show_404();
        return;
    }

    // Get the imageUrl from the query string
    $data['imageUrl'] = $this->input->get('imageUrl');

    // Debugging: Check the entire data array to ensure 'imageUrl' is passed
    var_dump($data);

    // Load the preview view with the product data
    $this->load->view('products/product_preview', $data);
}

    

}
