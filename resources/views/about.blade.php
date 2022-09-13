    <!--
    
    For loop    
    Foreach loop -- iterates over array elements
    For else loop
    Whie loop

-->

@for ($i = 5; $i>=-1; $i--)
    <h2>The number is {{ $i }}</h2>
@endfor

{{-- the entire array we want to loop through. names as specific element --}}
@foreach ($names as $name )
    <h2>the name is {{ $name }}</h2>
@endforeach

@forelse($names as $name)
    <h2>the name is {{ $name }}</h2>
@empty
<h2>there are no names!</h2>


@endforelse