<?php

	class Data{

		private $table = 'mytask';
		private $db;

		public function __construct()
		{
			$this->db = new Database;
		}

		public function getTask()
		{
			$this->db->query("SELECT * FROM {$this->table} GROUP BY start DESC");
			return $this->db->resultSet();
		}	

		public function getTaskById($id)
		{
			$this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
			$this->db->bind('id', $id);
			return $this->db->singleSet();
		}

		public function addNewTask($data)
		{

		}

		public function deleteTask()
		{

		}

		public function editTask($data)
		{

		}

	}