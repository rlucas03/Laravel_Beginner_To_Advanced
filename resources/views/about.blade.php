@[structure]
{{-- control structures --}}


@[endstucture]
@if (5 > 10)
<p>5 is lower than 10</p>
@elseif(5==10)
<p>5 is lower than 10</p>
@else
    <h2>all conditions are wrong</h2>
@endif

@unless (empty($name))
    <h2>name isn't empty</h2>
    
@endunless

@if (!empty($name))
<h2>name isn't empty</h2>

@endif

@empty($name)
<h2>name is empty</h2>

@endempty
@isset($name)
<h2>name is set</h2>

    
@endisset

