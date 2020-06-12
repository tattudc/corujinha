<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $this->load->model("courses_model");
        $this->load->model("team_model");
        $courses = $this->courses_model->show_courses();
        $teams = $this->team_model->show_team();
        
		$data = array(
            "scripts" => array(
                "owl.carousel.min.js",
                "theme.scripts.js"
            ),
            "courses" => $courses,
            "teams" => $teams,
        );
    $this->template->show('home.php', $data);
	}
}
