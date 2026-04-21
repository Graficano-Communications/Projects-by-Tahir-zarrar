<section>
    <header>
        <h2 class="text-lg font-medium text-black-900 dark:text-black-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-black-600 dark:text-black-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required placeholder="Enter  name"
                value="{{$user->name}}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="text" class="form-control" id="email" name="email" required placeholder="Enter email"
                value="{{$user->email}}" required>
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
        </div>


        <div>
          
            <div>
                <p class="text-sm mt-2 text-black-800 dark:text-black-200">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification"
                        class="underline text-sm text-black-600 dark:text-black-400 hover:text-black-900 dark:hover:text-black-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-black-800">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
        <button type="submit" class="btn btn-success bg-success">Save</button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-white-600 dark:text-white-400  bg-success text-white">{{ __('Profile Update Successfully.') }}</p>
            @endif
        </div>
    </form>
</section>