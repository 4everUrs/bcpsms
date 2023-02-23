<!DOCTYPE html>
<html lang="en">

    @include('layouts.head')
    
<body>

    @livewire('header')
   
    @if (Auth::user()->user_level == 0)
        @include('layouts.admin-sidebar')
    @elseif (Auth::user()->user_level == 1)
        @include('layouts.hr1-sidebar')
    @elseif (Auth::user()->user_level == 2)
        @include('layouts.hr2-sidebar')
    @elseif (Auth::user()->user_level == 3)
        @include('layouts.employee-sidebar')
    @endif
    

    @include('layouts.content')

    @include('layouts.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layouts.scripts')
</body>

</html>