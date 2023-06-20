<style>
    nav ul li a{
        width: 100px;
        text-align: center;
        border-left: 1px solid #eee!important;
        border-right: 1px solid #fff!important;
    }
    nav ul li a:hover{
        background-color: grey;
        color:white!important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?=ROOT?>/asserts/images/logo.jpg" alt="" style="width: 70px"
                 class="border border-primary">
            我的学校
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=ROOT?>">主页</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=ROOT?>/school">学校</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=ROOT?>/classe">班级</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=ROOT?>/user">工作人员</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=ROOT?>/student">学生</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=ROOT?>/test">测试</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?=Auth::username() ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarNavDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?=ROOT?>/profile">详细信息</a></li>
                        <li><a class="dropdown-item" href="<?=ROOT?>">表格</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="<?=ROOT?>/logout">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
