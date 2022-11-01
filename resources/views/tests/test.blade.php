{{-- 複数形 as 単数系と書くと分かりやすい --}}
@foreach($values as $value)
  {{ $value->id }} <br>
  {{ $value->text }} <br>
@endforeach