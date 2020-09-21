<?php

class Controller {

	protected function view($viewName)
	{
		return new View($viewName);
	}

	protected function model($modelName)
	{
		require_once ROOT . "/application/models/" . $modelName . "_m.php";
		$className = ucfirst($modelName);
		$this->$modelName = new $className();
	}

	protected function template($viewName, $data = [])
	{
		$view = $this->view('template/app');
		$view->bind('viewName', $viewName);
		$view->bind('data', $data);
	}

	public function back()
	{
		echo "<script>history.go(-1)</script>";
	}

	public function redirect($url = "")
	{
		header('location: ' . BASE_PATH.DS.$url);
	}

	protected function validate($data)
	{
		return htmlentities(trim(strip_tags($data)));
	}
}

?>