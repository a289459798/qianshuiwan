<?php
class commonMod{
	protected $model = NULL; //数据库模型
	protected $layout = NULL; //布局视图
	protected $config = array();
	private $_data = array(
		'__PUBLIC__' => __PUBLIC__,
		'__APP__' => __APP__,
		'__URL__' => __URL__,
	);
	
	protected function init(){}
	
	public function __construct(){
		global $config;
		$this->config = $config;
		$this->model = self::initModel( $this->config );
		$this->init();
	}
	
	//初始化模型
	static public function initModel($config){
		static $model = NULL;
		if( empty($model) ){
			$model = new cpModel($config);
		}
		return $model;
	}
	
	public function __get($name){
		return isset( $this->_data[$name] ) ? $this->_data[$name] : NULL;
	}

	public function __set($name, $value){
		$this->_data[$name] = $value;
	}

	//获取模板对象
	public function view(){
		static $view = NULL;
		
		if( empty($view) ){
			$loader = new Twig_Loader_Filesystem($this->config['TPL_TEMPLATE_PATH']); 
			$c = array();
			if($this->config['type']){
				$c['cache'] = $this->config['TPL_TEMPLATEC_PATH'];
			}
			$view = new Twig_Environment($loader, $c);
		}
		
		return $view;
	}
	
	//模板赋值
	protected function assign($name, $value){
		$this->_data[$name] = $value;
		//return $this->view()->assign($name, $value);
	}
	
	//模板显示
	/*protected function display($tpl = '', $return = false, $is_tpl = true ){
		if( $is_tpl ){
			$tpl = empty($tpl) ? $_GET['_module'] . '_'. $_GET['_action'] : $tpl;
			if( $is_tpl && $this->layout ){
				$this->__template_file = $tpl;
				$tpl = $this->layout;
			}
		}
		$this->view()->assign( $this->_data );
		return $this->view()->display($tpl, $return, $is_tpl);
	}*/
	
	protected function display($tpl = '' ){
		//温馨提示
		$wenxin = $this->model->field('id, title, dateline')->table('news')->where('fenlei=2')->order('id desc')->limit(5)->select();
		$this->assign('wenxin', $wenxin);
		$tpl = empty($tpl) ? $_GET['_module'] . '/'. $_GET['_action'] : $tpl;
		echo $this->view()->display($tpl.$this->config['TPL_TEMPLATE_SUFFIX'], $this->_data);
	}
	
	//判断是否是数据提交	
	protected function isPost(){
		return $_SERVER['REQUEST_METHOD'] == 'POST';
	}
	
	//直接跳转
	protected function redirect( $url, $code=302) {
		header('location:' . $url, true, $code);
		exit;
	}
	
	//弹出信息
	protected function alert($msg, $url = NULL){
		header("Content-type: text/html; charset=utf-8"); 
		$alert_msg="alert('$msg');";
		if( empty($url) ) {
			$gourl = 'history.go(-1);';
		}else{
			$gourl = "window.location.href = '{$url}'";
		}
		echo "<script>$alert_msg $gourl</script>";
		exit;
	}
}