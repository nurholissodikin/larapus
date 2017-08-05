@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<ul class="breadcrumb">
					<li><a href="{{url('/home')}}">Dashboard</a></li>
					<li class="{{url('/admin/books')}}">BUKU</li>
					<li class="active">Tambah BUKU</li>
				</ul>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Tambah Buku</h2>
					</div>

					<div class="panel-body">
					{!! Form::open(['url' => route('books.store'),
					'method' => 'post', 'class'=>'form-horizontal']) !!}
					@include('books._form')
					{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

