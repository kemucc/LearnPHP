<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/22
 * Time: 16:36
 */

namespace Home\Model;
use Think\Model\ViewModel;

class ArticleViewModel extends ViewModel{
    public $viewFields = array(
        'Article'=>array('article_id','article_title','article_content','cat_id'),
        'Category'=>array('cat_name', '_on'=>'Category.category_id=Article.cat_id')
    );
}