@if(count($types))

@foreach($types as $type)
<li>{{$type}}</li>
@endforeach
@endif

@else 
<?php
echo "No datatypes available"

?>
@endelse