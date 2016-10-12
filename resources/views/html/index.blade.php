@extends('layouts.master')

@section('head-css')
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
@show

@section('head-js')
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
@stop

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="navbar-nav">
                <div class="navbar-inner">
                    <div class="container-fluid">
                         <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="#" class="brand">网站名</a>
                        <div class="nav-collapse collapse navbar-responsive-collapse">
                            <ul class="nav">
                                <li class="active">
                                    <a href="#">主页</a>
                                </li>
                                <li>
                                    <a href="#">链接</a>
                                </li>
                                <li>
                                    <a href="#">链接</a>
                                </li>
                                <li class="dropdown">
                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">下拉菜单<strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">下拉导航1</a>
                                        </li>
                                        <li>
                                            <a href="#">下拉导航2</a>
                                        </li>
                                        <li>
                                            <a href="#">其他</a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li class="nav-header">
                                            标签
                                        </li>
                                        <li>
                                            <a href="#">链接1</a>
                                        </li>
                                        <li>
                                            <a href="#">链接2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav pull-right">
                                <li>
                                    <a href="#">右边链接</a>
                                </li>
                                <li class="divider-vertical">
                                </li>
                                <li class="dropdown">
                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">下拉菜单<strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">下拉导航1</a>
                                        </li>
                                        <li>
                                            <a href="#">下拉导航2</a>
                                        </li>
                                        <li>
                                            <a href="#">其他</a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li>
                                            <a href="#">链接3</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-6">
            <ul class="thumbnails">
                <li class="col-md-4">
                    <div class="thumbnail">
                        <img alt="300x200"/>
                        <div class="caption">
                            <h3>
                                冯诺尔曼结构
                            </h3>
                            <p>
                                也称普林斯顿结构，是一种将程序指令存储器和数据存储器合并在一起的存储器结构。程序指令存储地址和数据存储地址指向同一个存储器的不同物理位置。
                            </p>
                            <p>
                                <a class="btn btn-primary" href="#">浏览</a> <a class="btn" href="#">分享</a>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="col-md-4">
                    <div class="thumbnail">
                        <img alt="300x200" />
                        <div class="caption">
                            <h3>
                                哈佛结构
                            </h3>
                            <p>
                                哈佛结构是一种将程序指令存储和数据存储分开的存储器结构，它的主要特点是将程序和数据存储在不同的存储空间中，进行独立编址。
                            </p>
                            <p>
                                <a class="btn btn-primary" href="#">浏览</a> <a class="btn" href="#">分享</a>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="col-md-4">
                    <div class="thumbnail">
                        <img alt="300x200"/>
                        <div class="caption">
                            <h3>
                                改进型哈佛结构
                            </h3>
                            <p>
                                改进型的哈佛结构具有一条独立的地址总线和一条独立的数据总线，两条总线由程序存储器和数据存储器分时复用，使结构更紧凑。
                            </p>
                            <p>
                                <a class="btn btn-primary" href="#">浏览</a> <a class="btn" href="#">分享</a>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="nav nav-list">
                <li class="nav-header">
                    列表标题
                </li>
                <li class="active">
                    <a href="#">首页</a>
                </li>
                <li>
                    <a href="#">库</a>
                </li>
                <li>
                    <a href="#">应用</a>
                </li>
                <li class="nav-header">
                    功能列表
                </li>
                <li>
                    <a href="#">资料</a>
                </li>
                <li>
                    <a href="#">设置</a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="#">帮助</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@stop