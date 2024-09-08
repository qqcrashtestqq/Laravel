<div>
    <form method="post" action="{{route('users.store')}}">
        @csrf

        <label for=""> first_name </label>
        <input name="first_name">
        @error('first_name')
        <p>{{ $message }}</p>
        @enderror

        <label for="">last_name </label>
        <input name="last_name">
        @error('last_name')
        <p>{{ $message }}</p>
        @enderror

        <label for=""> email </label>
        <input name="email">
        @error('email')
        <p>{{ $message }}</p>
        @enderror

        <label for="">password</label>
        <input name="password">
        @error('password')
        <p>{{ $message }}</p>
        @enderror

        <button type="submit"> REGISTER </button>
    </form>
</div>
