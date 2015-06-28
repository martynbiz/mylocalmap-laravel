@extends('homepage')

@section('content')

@include('index.partials.navtabs', ['active' => 'list'])

<div class="container">
	
	<div class="row">
		<div class="col-md-4">
			
			<div class="panel panel-default">
				<div class="panel-heading">
					Categories
				</div>
				<div class="panel-body">
					
					<div class="list-group">
					  <a href="#" class="list-group-item">
					    <span class="badge">2</span>
					    Cras justo odio
					  </a>
					  <a href="#" class="list-group-item">
					  	<span class="badge">14</span>
					    Dapibus ac facilisis in</a>
					  <a href="#" class="list-group-item">
					  	<span class="badge">6</span>
					    Morbi leo risus</a>
					  <a href="#" class="list-group-item">
					  	<span class="badge">5</span>
					    Porta ac consectetur ac</a>
					  <a href="#" class="list-group-item">
					  	<span class="badge">3</span>
					    Vestibulum at eros</a>
					</div>
					
				</div>
			</div>
			...
		</div>
		
		<div class="col-md-4">
			
			<div class="panel panel-default">
				<div class="panel-heading">
					London
				</div>
				<div class="panel-body">
					
					<div class="list-group">
					  <a href="#" class="list-group-item">
					    <span class="badge">2</span>
					    Cras justo odio
					  </a>
					  <a href="#" class="list-group-item">
					  	<span class="badge">14</span>
					    Dapibus ac facilisis in</a>
					  <a href="#" class="list-group-item">
					  	<span class="badge">6</span>
					    Morbi leo risus</a>
					  <a href="#" class="list-group-item">
					  	<span class="badge">5</span>
					    Porta ac consectetur ac</a>
					  <a href="#" class="list-group-item">
					  	<span class="badge">3</span>
					    Vestibulum at eros</a>
					</div>
					
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					Glasgow
				</div>
				<div class="panel-body">
					
					<div class="list-group">
					  <a href="#" class="list-group-item">
					    <span class="badge">2</span>
					    Cras justo odio
					  </a>
					  <a href="#" class="list-group-item">
					  	<span class="badge">14</span>
					    Dapibus ac facilisis in</a>
					  <a href="#" class="list-group-item">
					  	<span class="badge">6</span>
					    Morbi leo risus</a>
					</div>
										
				</div>
			</div>
			
		</div>
		
		<div class="col-md-4">
			
			<div class="panel panel-default">
				<div class="panel-heading">
					Glasgow
				</div>
				<div class="panel-body">
					
					<div class="list-group">
					  <a href="#" class="list-group-item">
					    <span class="badge">2</span>
					    Cras justo odio
					  </a>
					  <a href="#" class="list-group-item">
					  	<span class="badge">14</span>
					    Dapibus ac facilisis in</a>
					  <a href="#" class="list-group-item">
					  	<span class="badge">6</span>
					    Morbi leo risus</a>
					</div>
										
				</div>
			</div>
			
		</div>
	</div>
	
</div>

@endsection
