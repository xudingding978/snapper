@extends('layouts.master')

@section('css')
<link href="{{ URL::asset('css/user.css') }}" rel="stylesheet">
@endsection

@section('content')
    
    <div class="container main">
		<div class="row row-offcanvas row-offcanvas-right">
			<div class="col-xs-12 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
					<div class="row">
						<div class="col-md-12">
						<div class="row">
							<!--Sidebar content-->
							<div class="sidebar-menu">
								<ul id="userMeun" class="nav nav-list collapse.in menu-second">
									<li><a href="#"><i class="icon-user"></i> 我的账户</a></li>
									<li><a href="#"><i class="icon-edit"></i> 积分管理</a></li>
									<li><a href="#"><i class="icon-trash"></i> 我的收藏</a></li>
									<li><a href="#"><i class="icon-list"></i> 私信</a></li>
									<li><a href="#"><i class="icon-pencil"></i> 留言版</a></li>
									<li><a href="#"><i class="icon-list-alt"></i> 晒单</a></li>
									
								</ul>
							</div>
						</div>
					  </div>
					</div>
			</div>
			<div class="col-xs-12 col-sm-10">
				
			</div>
	
		</div>
	</div>
@endsection