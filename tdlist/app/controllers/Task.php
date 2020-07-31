<?php
	
	class Task extends Controller{

		public function index()
		{
			$data['title'] = 'QiList - My Tasks';
			$data['task'] = $this->model('Data')->getTask();

			$this->view('templates/header', $data);
			$this->view('task/index', $data);
			$this->view('templates/footer');
		}

		public function newtask()
		{

		}

		public function addNew()
		{

		}

		public function getEdit()
		{

		}

		public function edit()
		{

		}

		public function delete()
		{

		}

	}