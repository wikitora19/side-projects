<?php

	class Support extends Controller{

		public function index()
		{
			$data['title'] = 'QiList - Support Us';

			$this->view('templates/header', $data);
			$this->view('support/index');
			$this->view('templates/footer');
		}

	}