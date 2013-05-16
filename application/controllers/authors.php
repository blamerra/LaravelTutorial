<?php
class Authors_Controller extends Base_Controller {
	
	public $restful = true;
	public $layout = 'layouts.default';

	public function get_index(){
		$view = View::make('authors.index');
		$view->name = 'Raul';
		$view->age = '35';
		$view->version = 'php';
		
		$this->layout->title = 'Authors and Books';
		$this->layout->content = $view;
		
		return $this->layout;
	}
}
?>