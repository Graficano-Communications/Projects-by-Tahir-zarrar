<section>
    <header>
        <h2 class="text-lg font-medium text-black dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-black dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

       
        <div class="mb-3">
            <label for="current_password" class="form-label">current password</label>
            <input type="text" class="form-control" id="current_password" name="current_password" required 
               >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">new password</label>
            <input type="text" class="form-control" id="password" name="password" required 
               >
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">confirm password</label>
            <input type="text" class="form-control" id="password_confirmation" name="password_confirmation" required 
               >
        </div>
     

        <div class="flex items-center gap-4">
        <button type="submit" class="btn btn-success bg-success">Save</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-black dark:text-black-400 bg-success text-white"
                >{{ __('Password Change Successfully.') }}</p>
            @endif
        </div>
    </form>
</section>
