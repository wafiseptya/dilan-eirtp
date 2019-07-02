<?php

class Dashboard extends MY_Frontend {
    public function __construct()
    {
      parent::__construct();
    }

    public function index()
    {
          // load view admin/overview.php
        $data["content"] = 'home';
        $this->admin($data, true);
    }
}
