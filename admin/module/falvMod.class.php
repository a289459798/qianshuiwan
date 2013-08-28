<?php
//新闻管理
class falvMod extends commonMod
{
	private $_fenlei = array(
		1 => 'a)国家对小区管理的法律法规',
		2 => 'b)浅水湾小区议事规则',
		3 => 'c)历次小区表决投票汇总名单',
	);
	//资讯列表页面
	public function index()
	{
		$listRows=20;//每页显示的信息条数
		
		$condition=array();
		$fenlei=intval($_GET[0]);
		$url=__URL__.'/index-page-{page}.html';
		$page=new Page();
		$cur_page=$page->getCurPage($url);
		$limit_start=($cur_page-1)*$listRows;
		$limit = $limit_start.','.$listRows;
		
		//获取行数
		$count = $this->model->table('falv')->where($condition)->count();	
		
		$list=$this->model->table('falv')->where($condition)->select();	//执行查询
		
		$this->assign('list',$list);
		$this->assign('fname',$this->_fenlei);
		$this->assign('fenlei',$fenlei);
		$this->assign('page',$page->show($url,$count,$listRows));
		$this->display();
	}
	
	//搜索
	public function search()
	{
		$keyword=in($_GET['keyword']);
		//如果关键词为空，跳转到资讯列表页面
		if(empty($keyword))
		{
			$this->redirect(__URL__.'/index.html');
		}
		$page=new Page();
		$listRows=20;//每页显示的信息条数
		$cur_page=intval($_GET['page'])?intval($_GET['page']):1;//获取当前分页
		$limit_start=($cur_page-1)*$listRows;
		$limit=$limit_start.','.$listRows;
		$where="";
		$condition=array();

		$url=__URL__.'/search-keyword-'.urlencode($keyword).'.html';//分页基准网址
		
		$where='WHERE A.title like "%'.$keyword.'%"';
		$condition=' title like "%'.$keyword.'%"';
		
		$count=$this->model->table('falv')->where($condition)->count();	
		
		
		$list=$this->model->table('falv')->where($condition)->select();	
		
		$this->assign('keyword',$keyword);
		$this->assign('list',$list);
		$this->assign('fenlei',$fenlei);
		$this->assign('fname',$this->_fenlei);
		$this->assign('page',$page->show($url,$count,$listRows));
		$this->display();
		
	}
	
//发布资讯
	public function add()
	{	
		if(empty($_POST['do']))
		{
			$fenlei = (int)$_GET[0];
			$this->assign('fname',$this->_fenlei);
			$this->display();
			return;
		}
		//获取数据
		$data=array();
		$data['title']=in($_POST['title']);//文章标题
		$data['fenlei']=intval($_POST['fenlei']);//文章分类
		$data['content']=html_in($_POST['content']);//内容
		$data['dateline']=time();
		
		//验证数据
		if(empty($data['title']))
		{
			$this->error('标题不能为空');
		}
		
		if(empty($data['content']))
		{
			$this->error('内容不能为空');
		}
		//数据库操作		
		if($this->model->table('falv')->data($data)->insert()){
			$this->success('发布成功', __URL__.'/index.html');
		}else{
			$this->error('发布失败');
		}
	}
	//编辑资讯
	public function edit()
	{
		//显示资讯编辑页面
		if(empty($_POST['do']))
		{
			$id=intval($_GET[0]);
			if(empty($id))
			{
				$this->error('参数传递错误');
			}
			$condition['id']=$id;
			$info=$this->model->table('falv')->where($condition)->find();//获取当前文章信息
			if(empty($info))
			{
				$this->error('该信息不存在或者已被删除');
			}
			$this->assign('fname',$this->_fenlei);
			$this->assign('info',$info);
			$this->display();
			return;
		}
		//获取数据
		$data=array();
		$condition=array();
		$condition['id']=intval($_POST['id']);
		$data['title']=in($_POST['title']);//标题
		$data['fenlei']=in($_POST['fenlei']);//标题
		$data['content']=html_in($_POST['content']);//内容
		
		//验证数据
		if(empty($data['title']))
		{
			$this->error('标题不能为空');
		}
		
		if(empty($data['content']))
		{
			$this->error('内容不能为空');
		}
		//数据库操作
		if($this->model->table('falv')->data($data)->where($condition)->update())
			$this->success('修改成功', __URL__.'/index.html');
		else
			$this->error('修改失败');
	}
	//删除资讯
	public function del()
	{
		$id=intval($_GET[0]);
		if(empty($id))
		{
			$this->error('参数传递错误');
		}
		$condition['id']=$id;
		if($this->model->table('falv')->where($condition)->delete())
			$this->success('删除成功', __URL__.'/index.html');
		else
			$this->error('删除失败');
	}
	
//修改状态
	public function state()
	{
		if(empty($_GET[0])||empty($_GET[1])||(!isset($_GET[2])))
		{
			$this->error('参数传递错误');
		}
		if(in_array($_GET[0],array('top','recommend'))&&in_array($_GET[2],array(0,1)))
		{
			$field=$_GET[0];	
			$data[$field]=intval($_GET[2]);
			$condition['id']=intval($_GET[1]);
			if($this->model->table('article')->data($data)->where($condition)->update())
			{
				$this->success('修改成功');
			}
			else
			{
				$this->error('修改失败');
			}
		}
		else
		{
			$this->error('非法操作');
		}
	}
}
?>