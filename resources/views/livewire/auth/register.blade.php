<!-- Signup Modal -->

<div class="flex justify-center py-24 ">
    <div class="w-[30%] p-5 rounded-xl shadow-md">
        <div class="text-center">
            <h4>Create Account</h4>
            <span class="text-gray-500">Join us! Enter your details to create an account.</span>
        </div>

        <form class="space-y-4 mt-8" wire:submit.prevent="register">
            <!-- Email -->
            <div class="relative">
                <input type="name" placeholder="Enter Your Fullname" wire:model="name" id="name"
                    class="w-full p-2 border border-gray-200 dark:border-gray-700 rounde-md pr-10 outline-none" />
                @error('name')
                    <div class="absolute inset-y-0 end-0 flex items-center pointer-event-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="w-5 h-5 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>

                    </div>
                @enderror
                @error('name')
                    <span class="text-red-500" id="email-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative">
                <input type="email" placeholder="Enter Email" wire:model="email" id="email"
                    class="w-full p-2 border border-gray-200 dark:border-gray-700 rounde-md pr-10 outline-none" />
                @error('email')
                    <div class="absolute inset-y-0 end-0 flex items-center pointer-event-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="w-5 h-5 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>

                    </div>
                @enderror
                @error('email')
                    <span class="text-red-500" id="email-error">{{ $message }}</span>
                @enderror
            </div>
            <!-- email end-->
            <!-- Password -->
            <div class="flex w-full  flex-col gap-1 text-on-surface dark:text-on-surface-dark relative">
                <label for="password" class="w-fit pl-0.5 text-sm"></label>
                <div x-data="{ showPassword: false }" class="relative">
                    <input x-bind:type="showPassword ? 'text' : 'password'" id="password" wire:model="password"
                        class="w-full p-2 border border-gray-200 dark:border-gray-700 rounded-md pr-10 outline-none"
                        autocomplete="current-password" placeholder="Enter your password" />
                    <button type="button" x-on:click="showPassword = !showPassword"
                        class="absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface dark:text-on-surface-dark"
                        aria-label="Show password">
                        <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                            class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                    </button>
                </div>
                @error('password')
                    <div class="absolute inset-y-0 end-0 flex items-center pointer-event-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="w-5 h-5 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>

                    </div>
                @enderror
                @error('password')
                    <span class="text-red-500" id="email-error">{{ $message }}</span>
                @enderror
            </div>


            <button type="submit" class="mbtn  w-full mt-4">Signup</button>

            <div class="divider">OR</div>

            <!-- Social Buttons -->
            <div class="grid grid-cols-3 gap-2">
                <div class="border border-gray-200 rounded-md px-3 py-2 flex justify-center items-center gap-2">
                    <span x-hugeicon:google class="w-5 h-5"></span>
                    <span class="text-sm font-semibold">Google</span>
                </div>
                <div class="border border-gray-200 rounded-md px-3 py-2 flex justify-center items-center gap-2">
                    <span x-hugeicon:facebook class="w-5 h-5"></span>
                    <span class="text-sm font-semibold">Facebook</span>
                </div>
                <div class="border border-gray-200 rounded-md px-3 py-2 flex justify-center items-center gap-2">
                    <span x-hugeicon:apple class="w-5 h-5"></span>
                    <span class="text-sm font-semibold">Apple</span>
                </div>
            </div>

            <div class="flex items-center text-center justify-center text-gray-500">
                <span>
                    Already have an account?
                    <a href="{{ route('login') }}" class="link font-semibold">Log in</a>
                </span>
            </div>
        </form>
    </div>
</div>
<!--signup modal end-->
