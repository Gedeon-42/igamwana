@if(session()->has('message'))
<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show" class="flash-message-container">
<div class="notification-p">
    <p>{{session('message')}}</p>
</div>
</div>

@endif