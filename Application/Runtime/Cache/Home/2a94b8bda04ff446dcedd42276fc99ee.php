<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Off Canvas Template for Bootstrap</title>
    <!-- Custom styles for this template -->
    <link href="/LearnPHP/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/LearnPHP/Public/bootstrap/css/offcanvas.css" rel="stylesheet">

    <script type="text/javascript" charset="utf-8" src="/LearnPHP/Public/js/jquery.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/LearnPHP/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/LearnPHP/Public/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/LearnPHP/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="/LearnPHP/Public/wysiwyg/bootstrap-wysiwyg.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<style>
    .navbar{
        z-index:450;
    }

    .modal{
        z-index:600;
    }

    .modal-backdrop{
        z-index:500;
    }
</style>
<script>
    $(function(){
        $("#post_btn").click(function(){
            $("#post_box").slideDown(50);
        })
    })
</script>
<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">搞维基</a>
        </div>
        <div style="height: 1px;" aria-expanded="false" id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#contact" data-toggle="modal" data-target="#login_modal">登录</a></li>
                <li><a href="#contact" id="post_btn" data-toggle="modal" data-target=".bs-example-modal-lg">发表</a></li>
                <li><a href="#about" data-toggle="modal" data-target="#about_modal">关于我们</a></li>
                <li><a href="#contact" data-toggle="modal" data-target="#contact_modal">联系我们</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->

<!--Post Modal -->
<div class="modal fade bs-example-modal-lg" tabindex="2" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">发表主题</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入主题">
                    </div>
                    <div class="form-group">
                        <script id="editor" type="text/plain" style="width:100%;height:320px"></script>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">提交</button>
            </div>
        </div>
    </div>
</div>

<!--Login Modal -->
<div class="modal fade login_modal" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="loginModelTitile">登录</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="login_account" placeholder="请输入账户">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="login_password" placeholder="请输入密码">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">提交</button>
            </div>
        </div>
    </div>
</div>

<!--AboutUs Modal -->
<div class="modal fade about_modal" id="about_modal" tabindex="-1" role="dialog" aria-labelledby="about_modal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <p>没啥内容</p>
            </div>
        </div>
    </div>
</div>

<!--AboutUs Modal -->
<div class="modal fade contact_modal" id="contact_modal" tabindex="-1" role="dialog" aria-labelledby="contact_modal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <p><a href="mailto:kemucc@gmail.com">kemucc@gmail.com</a></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-sm-9">
            <div class="row">
                    <div  class="col-xs-12">
                        <h2>标题</h2>
                        <p>正文</p>
                        <button class="btn btn-default" >编辑</button>
                        <button class="btn btn-default" >删除</button>
                    </div>
                <!--/.col-xs-6.col-lg-4-->
            </div>
            <!--/row-->
        </div>
        <!--/.col-xs-12.col-sm-9-->
        <div  class="col-sm-3 hidden-xs">

        </div>
        <!--col-sm-3-->
    </div>
    <!--/row-->


    <footer>
        <hr>
        <p>© Ake 2015</p>
    </footer>

</div>
<!--/.container-->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<script src="offcanvas.js"></script>


</body>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
</script>
</html>