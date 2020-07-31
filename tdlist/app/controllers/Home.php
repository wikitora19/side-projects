<?php

	class Home extends Controller{

		public function index()
		{
			$data['title'] = 'QiList: Organized your planning';
			$data['fakeName'] = $this->faker()->name;
			$data['fakeCompany'] = $this->faker()->company;
			$data['fakeQuote'] = $this->faker()->text($maxNbChars = 200);
			
			$this->view('templates/header', $data);
			$this->view('home/index', $data);
			$this->view('templates/footer');
		}

	}
