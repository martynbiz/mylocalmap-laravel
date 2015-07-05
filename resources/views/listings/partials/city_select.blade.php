<select name="city" class="form-control">
	@foreach($regions as $region)
	<optgroup label="{{ $region['name'] }}">
		@foreach($region['cities'] as $city)
		<option value="{{ $city['_id'] }}" data-lat="{{ $city['lat'] }}" data-lng="{{ $city['lng'] }}" @if(isset($listing) and $listing['city'] == $city['_id']) selected @endif> {{ $city['name'] }}
		@endforeach
	</optgroup>
	@endforeach
</select>
