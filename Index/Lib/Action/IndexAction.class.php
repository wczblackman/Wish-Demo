<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	/*$wish = M('wish')->select();
    	$this->assign('a', 111);	// 要在body下放一个{$a}，表示这个a的值111，将会在模板页面的{$a}中显示
    	$this->a = 111;
		$this->display();*/
		$this->assign('wish', M('wish')->select())->display();
    }

    public function handle() {
    	/*echo $this->_post('content');
    	echo '<br />';
    	echo I('username', '', 'htmlspecialchars');
    	echo '<br />';
    	p($_POST);
    	p(I('username'));*/

    	if (!IS_POST) {
    		//halt('页面不存在');		// 
    		// debug 开启之下能用
    		_404('页面不存在，wcz', U('index', null, 'html', true, true));
    	}

    	$data = array(
    		'username'	=> I('username', '', 'htmlspecialchars'),
    		'content'	=> I('content', '', 'htmlspecialchars'),
    		'time'		=> time()
    		);
    	$id = M('wish')->data($data)->add();
    	//echo 'id = ' . $id;
    	if($id > 0) {
    		$this->success('发布成功！', 'index');	// 跳转到/Index/index 或者用$this->success('', U('index'));
    	} else {
    		$this->error('发布失败');
    	}
    }
}