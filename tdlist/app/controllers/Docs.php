<?php

	class Docs extends Controller{

		public function index()
		{
			$data['title'] = 'QiList - Documentation';

			$this->view('templates/header', $data);
			$this->view('docs/index');
			$this->view('templates/footer');
		}

	}