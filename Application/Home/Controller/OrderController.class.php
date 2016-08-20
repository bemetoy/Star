<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
    public function read(){
        $Order = M('Order');
        //读取数据
        $data = $Order->find();
        if($data) {
            $this->assign('data',$data);
        }else{
            $this->error('数据错误');
        }
        $this->display();
    }

    public function insert(){
        $Order = D('Order');
        if($Order->create()) {
            $result = $Order->add();
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($Order->getError());
        }
    }
}