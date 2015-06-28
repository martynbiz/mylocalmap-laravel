@if ($errors->any())
    <div class="alert alert-danger alert-important">
	    
	    <p>Please fix the following errors:</p>
	    
	    <ul>
	        @foreach ($errors->all() as $error)
	            <li>{{ $error }}</lI>
	        @endforeach
	    </ul>
	</div>
@endif