<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function read(){
        $User = M('User');
        //读取数据
        $data = $User->where()->find();
        if($data) {
            $this->assign('data',$data);
        }else{
            $this->error('数据错误');
        }
        $this->display();
    }

    public function insert(){
        $User = D('User');
        if($User->create()) {
            $result = $User->add();
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($User->getError());
        }
    }
}