<?php
class changyongMod extends commonMod
{
	private $_fenlei = array(
		1 => 'jianjie',
		2 => 'yeweihui',
	);
	public function jianjie()
	{
		
		$condition=array();
		$fenlei = 1;
		$condition['fenlei'] = $fenlei;		
		$info=$this->model->table('page')->where($condition)->find();	//执行查询
		$this->assign('info',$info);
		$this->assign('fenlei',$fenlei);
		$this->display();
	}
	
	public function yeweihui()
	{
		
		$condition=array();
		$fenlei = 2;
		$condition['fenlei'] = $fenlei;		
		$info=$this->model->table('page')->where($condition)->find();	//执行查询
		$this->assign('info',$info);
		$this->assign('fenlei',$fenlei);
		$this->display('changyong/jianjie');
	}
	
	public function houxuanren()
	{
		$url=__URL__.'/houxuanren-{page}.html';//分页基准网址
		$listRows=10;//每页显示的信息条数
		$page=new Page();		
		$cur_page=$page->getCurPage($url);
		$limit_start=($cur_page-1)*$listRows;
		$limit=$limit_start.','.$listRows;
		
		$condition=array();		
		
		$count=$this->table('houxuanren')->where($condition)->count();	//获取行数
		$list=$this->table('houxuanren')->where($condition)->order('id desc')->limit($limit)->select();

		$this->assign('list',$list);
		$this->assign('page',$page->show($url,$count,$listRows));

		$this->display();
	}
	
	public function edit()
	{
		if(empty($_POST['do']))
		{
			return;
		}
		//获取数据
		$data=array();
		$data['id']=intval($_POST['id']);
		$data['fenlei']=in($_POST['fenlei']);//标题
		$data['content']=html_in($_POST['content']);//内容
		
		
		if(empty($data['content']))
		{
			$this->error('简介不能为空');
		}
		//数据库操作
		if($this->model->table('page')->data($data)->replace())
			$this->success('修改成功', __URL__.'/'.$this->_fenlei[$data['fenlei']]);
		else
			$this->error('修改失败');
	}
}
?>