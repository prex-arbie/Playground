<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', true);
	}

	public function index()
	{
		$post = $this->input->post();
		if(!empty($post)) {
			debug($post);
			extract($post);
			if(!empty($select_to) && !empty($go)){
				dd($select_to);
				$this->link_to($select_to);
			}
		}

		$links = array(
			'' => '-',
			'page1' => 'Page 1',
			'page2' => 'Page 2',
			'page3' => 'Page 3',
		);

		$this->blade->render('index', compact('links'));
	}

	private function update()
	{

	}

	private function insert()
	{

	}

	public function page1()
	{
		echo 'page 1';
	}

	public function page2()
	{
		echo 'page 2';
	}

	public function page3()
	{
		echo 'page 3';
	}

	private function link_to($to)
	{
		$url = 'welcome/'.$to;
        header("Location: {$url}");
		exit;
	}

	private function write($contents)
	{
		$time = date('YmdHis');
		$filename = 'miscellaneous';
		$str = gettype($contents) == 'string' ? $contents : json_encode($contents);

		$fp = fopen($_SERVER['DOCUMENT_ROOT'].'/miscellaneous/'.$time.'_'.$filename.'.txt', 'wb');
		fwrite($fp, $str);
		fclose($fp);
	}
}
