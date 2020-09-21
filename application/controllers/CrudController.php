<?php

class CrudController extends Controller {

	public function __construct()
	{
		//load model
		$this->model('crud');
	}
	/**
	 * untuk mengambil data di database dan menampilkan nya
	 * @return [type] [description]
	 */
	public function index()
	{
		$data = $this->crud->select()->orderBy('crud_id', 'desc')->get();
		$this->template('crud/index', $data);
	}
	/**
	 * untuk menampilkan halaman tambah data
	 */
	public function add()
	{
		$this->template('crud/add');	
	}
	/**
	 * untuk memproses data masuk ke database
	 */
	public function insert()
	{
		$crud = $this->crud->data([
			'first_name' => $_POST['first_name'],
			'last_name'  => $_POST['last_name'],
		]);
		$crud->insert();
		$this->redirect('crud');
	}
	/**
	 * untuk menampilkan halaman edit data
	 */
	public function edit($id)
	{
		$data = $this->crud->select()->where(['crud_id','=', $id])->get()[0];
		$this->template('crud/edit', $data);
	}
	/**
	 * untuk mengedit data di database
	 * @return [type] [description]
	 */
	public function update()
	{
		$crud = $this->crud->find($_POST['id']);
		$curd->data([
			'first_name' => $_POST['first_name'],
			'last_name'  => $_POST['last_name'],
		]);
		$crud->update();
		$this->redirect('crud');
	}
	/**
	 * untuk menghapus data di database
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id)
	{
		$this->crud->find($id)->delete();
		$this->redirect('crud/index');
	}
}

/* End of file CrudController.php */
/* Location: ./application/controllers/CrudController.php */