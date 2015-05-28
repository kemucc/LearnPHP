<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        // 传递参数
        $catId  =  $_GET['catId'];
        // 实例化Model对象
        $Model = D("ArticleView");
        // 查找status值为1name值为think的用户数据
        if($catId==null){
            $nickname = $Model->order('article_id desc')->limit(10)->select();
        }else{
            $nickname = $Model->where('cat_id=%d',array($catId))->order('article_id desc')->limit(10)->select();
        }
        $this ->assign('list',$nickname);
        //拼文章区
        $this->display();
    }

    public function postAjax(){
        // 传递参数
        $title  =  $_POST['title'];
        $content  =  $_POST['content'];
        $categorySection = $_POST['category'];
        // 实例化Article对象
        $Article = M("Article");
        // 插入数据
        $data['article_title'] = $title;
        $data['article_content'] = $content;
        $data['cat_id'] = $categorySection;
        $Article->add($data);
        $data = 'ok';
        $this->ajaxReturn($data);
    }

    public function deleteAjax(){
        // 传递参数
        $artId  =  $_POST['art_id'];
        // 实例化Article对象
        $Article = M("Article");
        // 删除文章
        $data = $Article->where('article_id='.$artId)->delete();
        $this->ajaxReturn($data);
    }
}