<?php

class AppController extends CI_Controller {
  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->view("templates/header");
    $this->load->view("templates/navbar");
    $this->load->view("app/landing");
    $this->load->view("templates/footer");
  }
}