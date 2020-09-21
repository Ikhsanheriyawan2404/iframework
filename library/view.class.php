<?php

class View {

	public $viewName = NULL;
	public $isRender = FALSE;
	public $data     = [];

	public function __construct($view)
	{
		$this->viewName = $view;
	}

	public function bind($name, $value = '')
	{
		$this->data[$name] = $value;
	}

	public function render()
	{
		$this->isRender = TRUE;
		extract($this->data);
		$view = ROOT . "/application/views/" . $this->viewName . "_v.php";
		if (file_exists($view)) {
			require_once ($view);
		} else {
			echo 'View tidak ditemukan';
		}
	}

	public function __destruct()
	{
		if (!$this->isRender) $this->render();
	}

}

?>