<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Components extends CI_Controller {

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
        $this->parser->parse("bootstrap/components/index.tpl", $data);
    }

    public function alerts()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/components/alerts.tpl", $data);

    }

    public function buttons()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/components/buttons.tpl", $data);

    }

    public function labels()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/components/labels.tpl", $data);

    }

    public function misc()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/components/misc.tpl", $data);

    }

    public function navigation()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/components/navigation.tpl", $data);

    }

    public function progress()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/components/progress.tpl", $data);

    }

    public function thumbnails()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/components/thumbnails.tpl", $data);

    }

}