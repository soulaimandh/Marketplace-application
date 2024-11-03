<a onclick="document.getElementById('id01').style.display='block'"
    class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{ __('admin/globale.delete') }}</a>
<div id="id01" class="modal">
    <form class="modal-content" action="/action_page.php">
        @csrf
        <div class="container">
            <h1>{{ __('admin/globale.delete_title') }}</h1>
            <p>{{ __('admin/globale.are_you_sure_delete') }}</p>

            <div class="clearfix">
                <button type="button" class="cancelbtn"
                    onclick="document.getElementById('id01').style.display='none'">{{ __('admin/globale.cancel') }}</button>
                <button type="button" class="deletebtn"><a href="@yield('next')">{{ __('admin/globale.delete') }}</a></button>
            </div>
        </div>
    </form>
</div>
