<?php

class Dashboard extends MY_Frontend {
    public function __construct()
    {
      parent::__construct();
      $this->load->library(['ion_auth', 'form_validation']);
      if (!$this->ion_auth->logged_in())
      {
        // redirect them to the login page
        redirect('auth/login', 'refresh');
      }
      else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
      {
        // redirect them to the home page because they must be an administrator to view this
        show_error('You must be an administrator to view this page.');
      }
    }

    public function index()
    {
          // load view admin/overview.php
        $data["content"] = 'home';
        $this->admin($data, true);
    }
}
