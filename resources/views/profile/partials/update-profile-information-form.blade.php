<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 mt-3">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')
        
        <div>
            <x-input-label for="profile_picture" :value="__('Profile Picture')" />
            <x-text-input id="profile_picture" name="profile_picture" type="file" class="hidden" accept="image/*" />
            <x-input-error class="mt-2" :messages="$errors->get('profile_picture')" />
            
            @if ($user->profile_picture)
                <div class="relative mt-2 w-20 h-20">
                    <img src="{{ $user->profile_picture }}" alt="Profile Picture" class="h-20 w-20 rounded-full object-cover">
                    <button type="button" class="absolute bottom-0 right-0 bg-gray-800 text-white rounded-full p-2"
                            onclick="document.getElementById('profile_picture').click()">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Upadated Successfully.') }}</p>
            @endif
        </div>
    </form>
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 mt-3">
            {{ __('Create Post') }}
        </h2>
    </header>
        <a href="{{ route('posts.store') }}" class="btn btn-primary">Show All Post</a>

    <form method="post" action="{{ route('posts.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf

        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>

        <div>
            <x-input-label for="body" :value="__('Body')" />
            <textarea id="body" name="body" class="mt-1 block w-full" rows="5" required></textarea>
            <x-input-error class="mt-2" :messages="$errors->get('body')" />
        </div>

        <div>
            <x-input-label for="image" :value="__('Image')" />
            <input id="image" name="image" type="file" class="mt-1 block w-full" accept="image/*" />
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Post') }}</x-primary-button>

        </div>
    </form>
</section>
