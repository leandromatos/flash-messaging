@if(session()->has('flash_message'))
    {{ session('flash_message.type') }}<br>
    <strong>{{ session('flash_message.title') }}</strong><br>
    {{ session('flash_message.message') }}
@endif

@if(session()->has('flash_message_overlay'))
    OVERLAY<br>
    {{ session('flash_message_overlay.type') }}<br>
    <strong>{{ session('flash_message_overlay.title') }}</strong><br>
    {{ session('flash_message_overlay.message') }}
@endif
