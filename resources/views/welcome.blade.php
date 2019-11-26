@foreach( \App\Person::all() as $person)
{{$person->name}}
<img src="{{Voyager::image($person->image)}}" />
@endforeach
