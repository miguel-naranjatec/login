<div style="background-color:pink;">
    <form id='login-form' method="POST">
        <input required type='email' name='email' placeholder="{{ __("login::messages.email") }}" />
        <input required type='password' name='password' placeholder="{{ __("login::messages.password") }}" />
        <button type='submit'>{{ __("login::messages.submit") }}</button>
    </form>
</div>