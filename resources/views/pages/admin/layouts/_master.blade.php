@include('pages.admin.includes._header')
@include('layouts._upper')
@include('layouts._navbar')
<div class="app">
    <div class="dashboard-container">
        @include('pages.admin.layouts._sidebar')
        <div class="content-area" id="content-area">
            @section('content')

            @show
        </div>
    </div>
</div>
@include('layouts._footer')
@include('pages.admin.includes._footer')
