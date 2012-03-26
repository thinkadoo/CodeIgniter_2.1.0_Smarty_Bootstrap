<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Javascript extends CI_Controller {

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
        $this->parser->parse("bootstrap/javascript/index.tpl", $data);
    }

    public function alljavascript()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/javascript/javascript.tpl", $data);

    }

    public function alerts()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/javascript/alerts.tpl", $data);

    }

    public function buttons()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/javascript/buttons.tpl", $data);

    }

    public function carousel()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/javascript/carousel.tpl", $data);

    }

    public function collapse()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/javascript/collapse.tpl", $data);

    }

    public function dropdowns()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/javascript/dropdowns.tpl", $data);

    }

    public function modals()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/javascript/modals.tpl", $data);

    }

    public function scrollspy()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/javascript/scrollspy.tpl", $data);

    }

    public function tabs()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/javascript/tabs.tpl", $data);

    }

    public function tooltips()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/javascript/tooltips.tpl", $data);

    }

    public function popovers()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/javascript/popovers.tpl", $data);

    }

    public function typeahead()
    {
        $data['site_url'] = $this->url;

        // Load the template from the views directory
        $this->parser->parse("bootstrap/javascript/typeahead.tpl", $data);

    }


}