@extends('homepage')

@section('content')

<div class="panel panel-default bigmap-menu">
    <div class="panel-body filters">

        <div class="form-group">
            <select name="city" class="form-control">
                @foreach($regions as $region)
                <optgroup label="{{ $region['name'] }}">
                    @foreach($region['cities'] as $city)
                    <option value="{{ $city['_id'] }}" data-lat="{{ $city['lat'] }}" data-lng="{{ $city['lng'] }}"> {{ $city['name'] }}
                    @endforeach
                </optgroup>
                @endforeach
            </select>
        </div>

        <div class="panel-group form-group groups" id="accordion" role="tablist" aria-multiselectable="true">
            @foreach($groups as $group)
                <fieldset class="panel panel-default">
                    <div class="panel-heading">
                        <input type="checkbox" class="js-show" checked>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $group['_id'] }}" aria-expanded="true" aria-controls="collapse_{{ $group['_id'] }}">
                            <label for="group_{{ $group['_id'] }}">
                                {{ $group['name'] }}
                            </label>
                        </a>
                    </div>
                    <div id="collapse_{{ $group['_id'] }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_{{ $group['_id'] }}">
                        <div class="panel-body tags">
                            @foreach($group['tags'] as $tag)
                            <label for="tag_{{ $tag['_id'] }}" class="col-md-6">
                                <input type="checkbox" name="{{ $tag['_id'] }}" value="{{ $tag['_id'] }}" checked> {{$tag['name']}}
                            </label>
                            @endforeach
                        </div>
                    </div>
                </fieldset>
            @endforeach
        </div>

    </div>
</div>
</div><!-- can't figure why this <div> is needed, maps doesn't load otherwise -->

<div id="container">
    <div id="map" data-cluster="false"></div>
</div>

<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=places&callback=map.init"></script>
<script src="{{url('js/markerclusterer.js')}}"></script>

@endsection
