@foreach($groups as $group)
	<fieldset>
		@foreach($group['tags'] as $tag)
		<label class="col-md-{{$colWidth or 6}} col-xs-12">
			{!! Form::checkbox('tags[]', $tag['_id'], (isset($listing) and in_array($tag['_id'], $listing['tags'])) ) !!}
			{{ $tag['name'] }}
		</label>
		@endforeach
	</fieldset>
@endforeach
