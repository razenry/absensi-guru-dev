<section class="min-h-screen flex items-center justify-center bg-zinc-50 dark:bg-zinc-900 px-6 py-12">
    <div class="w-full max-w-md">
        <!-- Logo / Brand -->
        <div class="flex flex-col items-center mb-8">
            <img src="https://fluxui.dev/img/demo/logo.png"
                 class="w-10 h-10 mb-3 dark:hidden" alt="logo">

            <img src="https://fluxui.dev/img/demo/dark-mode-logo.png"
                 class="w-10 h-10 mb-3 hidden dark:block" alt="logo">

            <h2 class="text-2xl font-semibold text-zinc-800 dark:text-zinc-100">
                Welcome back
            </h2>
            <p class="text-zinc-500 dark:text-zinc-400 text-sm">
                Sign in to continue
            </p>
        </div>

        <!-- Card -->
        <div class="bg-white dark:bg-zinc-800 rounded-2xl shadow-lg shadow-zinc-200/50
                    dark:shadow-none border border-zinc-200 dark:border-zinc-700 p-8">

            <form class="space-y-5">
                <!-- Email -->
                <div class="space-y-2">
                    <label for="email" class="text-sm font-medium text-zinc-700 dark:text-zinc-300">
                        Email address
                    </label>
                    <input type="email" id="email" name="email" placeholder="you@example.com"
                        class="w-full px-3 py-2.5 rounded-xl bg-zinc-100 dark:bg-zinc-700
                        border border-zinc-300 dark:border-zinc-600
                        text-zinc-900 dark:text-zinc-100
                        focus:ring-4 focus:ring-zinc-300/50 focus:border-zinc-400
                        dark:focus:ring-zinc-600/40 transition duration-200">
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    <label for="password" class="text-sm font-medium text-zinc-700 dark:text-zinc-300">
                        Password
                    </label>
                    <input type="password" id="password" name="password" placeholder="••••••••"
                        class="w-full px-3 py-2.5 rounded-xl bg-zinc-100 dark:bg-zinc-700
                        border border-zinc-300 dark:border-zinc-600
                        text-zinc-900 dark:text-zinc-100
                        focus:ring-4 focus:ring-zinc-300/50 focus:border-zinc-400
                        dark:focus:ring-zinc-600/40 transition duration-200">
                </div>

                <!-- Remember + Forgot -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="checkbox" class="h-4 w-4 rounded border-zinc-300 text-zinc-700
                               focus:ring-zinc-400 dark:border-zinc-600 dark:bg-zinc-700">
                        <span class="text-sm text-zinc-600 dark:text-zinc-300">Remember me</span>
                    </label>

                    <a href="#" class="text-sm text-zinc-700 hover:text-zinc-900
                                      dark:text-zinc-300 dark:hover:text-zinc-100 font-medium">
                        Forgot password?
                    </a>
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full py-2.5 rounded-xl bg-zinc-900 text-white
                    dark:bg-zinc-700 dark:hover:bg-zinc-600
                    hover:bg-zinc-800 transition duration-200 font-medium">
                    Sign in
                </button>

                <!-- Register -->
                <p class="text-center text-sm text-zinc-500 dark:text-zinc-400">
                    Don’t have an account?
                    <a href="#" class="text-zinc-800 dark:text-zinc-200 font-medium underline">
                        Sign up
                    </a>
                </p>
            </form>

        </div>
    </div>
</section>
