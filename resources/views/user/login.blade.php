<x-layoutGuest>

    <div class='login'>
        @if(isset($message))
        <span>{{ $message }}</span>
        @endif
    <form method='POST' action="">
        @csrf
        <span>login:</span>
        <input name='name'><br>
        <span>password:</span>
        <input name='password' type='password'><br>
        <input class='button' type='submit'>
    </form>
    </div>

</x-layoutGuest>

