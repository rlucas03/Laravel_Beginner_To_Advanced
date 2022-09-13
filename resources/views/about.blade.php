{{-- 
    Comparing multiple possible conditions
    Multiple values thast may require the same code
    
    
    
    
    
    --}}

    @switch($name)
        @case('dar')
            <h2>Name is equal to Ryan</h2>
            @break
        @case('Name is John')
            <h2>Hello John</h2>
            @break    
        @case('Michael')
             <h2>Hello Michael</h2>
                
            @break
        @default
        <h2>no match found<h2>
            
    @endswitch

    <!--
    
    test

-->
