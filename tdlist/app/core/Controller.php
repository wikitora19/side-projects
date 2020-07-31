<?php 

	class Controller{

		public function view($view, $data=[])
		{
			require_once '../app/views/'.$view.'.php';
		}

		public function model($model)
		{
			require_once '../app/models/'.$model.'.php';
			return new $model;
		}

		public function faker()
		{
			require_once '../app/third-party/vendor/fzaninotto/faker/src/autoload.php';
			return Faker\Factory::create('en_US');
		}

	}