@props(['list', 'id', 'disabled' => false])
<select multiple id="{{ $id }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => '']) !!}>
    @foreach ($list as $item) 
       <option value='{{$item->value}}'>{{$item->name}}</option>
    @endforeach
</select>

<script>
    $(document).ready(function() {
        $('#{{ $id }}').multiselect({
                    nonSelectedText:"Select authors",
                });
    });
</script>