<?php
class aboutMod extends commonMod
{
	public function index()
	{
		$fenlei = 1;
		$info = $this->model->table('page')->where('fenlei='.$fenlei)->order('id desc')->find();
		$info['content'] = html_out($info['content']);
		$this->assign('info',$info);
		$this->display();
	}	
	
	public function yeweihui()
	{
		$fenlei = 2;
		$info = $this->model->table('page')->where('fenlei='.$fenlei)->order('id desc')->find();
		$info['content'] = html_out($info['content']);
		$this->assign('info',$info);
		$this->display();
	}
}