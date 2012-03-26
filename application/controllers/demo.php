<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Demo extends CI_Controller {

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
        $this->parser->parse("bootstrap/demo/index.tpl", $data);
    }

    public function form()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/demo/form.tpl", $data);

    }

    public function table()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/demo/table.tpl", $data);

    }

    public function lists()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/demo/list.tpl", $data);

    }

    public function detail()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/demo/detail.tpl", $data);

    }

    public function complex()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/demo/complex.tpl", $data);

    }

}