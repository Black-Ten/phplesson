<?php $this->view('includes/nav'); ?>
<?php $this->view('includes/header'); ?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php $this->view('includes/crumbs'); ?>
    <h4>详细信息</h4>
    <div class="row">
        <div class="col-12 col-sm-4 px-5">
            <img src="<?=ROOT?>/asserts/images/default_head_icon.jpg" alt="" class="border border-primary d-block mx-auto rounded-circle w-100">
            <h3 class="text-center text-muted py-1">张三</h3>
        </div>
    <div class="col-12 col-sm-8 bg-light p-2">
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>姓</th><td>张</td>
            </tr>
            <tr>
                <th>名</th><td>三</td>
            </tr>
            <tr>
                <th>性别</th><td>男</td>
            </tr>
            <tr>
                <th>入校日期</th><td>2020-09-01</td>
            </tr>
        </table>
    </div>
    </div>
    <div class="container-fluid py-2">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">基本信息</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">班级</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">测试</a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link disabled">Disabled</a>-->
<!--            </li>-->
        </ul>
        <nav class="navbar bg-body-tertiary">
            <form class="container-fluid">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="搜索" >
                </div>
            </form>
        </nav>
    </div>
</div>
<?php $this->view('includes/footer'); ?>
