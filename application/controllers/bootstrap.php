<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Bootstrap extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('parser');
        $this->load->helper('url');
        $this->url = base_url();
    }

    public function index()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/site/index.tpl", $data);
    }

}