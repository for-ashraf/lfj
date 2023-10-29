@extends('../layout/landing_master')

@section('content')


<h2>JavaScript Alert</h2>

<button onclick="myFunction()">Try it</button>

<script>
$(function(){
    var hasBeenTrigged = false;
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 100 && !hasBeenTrigged) { // if scroll is greater/equal then 100 and hasBeenTrigged is set to false.
            alert("You've scrolled 100 pixels.");
            hasBeenTrigged = true;
        }
    });
});
</script>
@endsection
