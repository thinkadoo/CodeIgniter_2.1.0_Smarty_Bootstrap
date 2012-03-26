<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Scaffolding extends CI_Controller {

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
        $this->parser->parse("bootstrap/scaffolding/index.tpl", $data);
    }

    public function gridsystem()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/scaffolding/gridsystem.tpl", $data);

    }

    public function layouts()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/scaffolding/layouts.tpl", $data);

    }

    public function responsive()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/scaffolding/responsive.tpl", $data);

    }

}