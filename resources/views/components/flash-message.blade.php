@if(session()->has('message'))
<div class="flash-message-container">
<div class="notification-p">
    <p>{{session('message')}}</p>
</div>
</div>

@endif