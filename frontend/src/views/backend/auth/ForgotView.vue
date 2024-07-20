<template>
  <main class="flex h-screen w-full flex-col items-center justify-center px-4">
    <div class="w-full max-w-sm space-y-5 text-gray-600">
      <div class="pb-8 text-center">
        <img src="https://floatui.com/logo.svg" width="150" class="mx-auto" />
        <div class="mt-5">
          <h3 class="text-2xl font-bold text-gray-800 sm:text-3xl">Log in to your account</h3>
        </div>
      </div>
      <form onSubmit="event.preventDefault()" class="space-y-5">
        <div>
          <label class="font-medium"> Email </label>
          <input
            type="email"
            required
            class="mt-2 w-full rounded-lg border bg-transparent px-3 py-2 text-gray-500 shadow-sm outline-none focus:border-indigo-600"
          />
        </div>
        <div>
          <label class="font-medium"> Password </label>
          <input
            type="password"
            required
            class="mt-2 w-full rounded-lg border bg-transparent px-3 py-2 text-gray-500 shadow-sm outline-none focus:border-indigo-600"
          />
        </div>
        <div class="flex items-center justify-between text-sm">
          <div class="flex items-center gap-x-3">
            <input type="checkbox" id="remember-me-checkbox" class="checkbox-item peer hidden" />
            <label
              for="remember-me-checkbox"
              class="relative flex h-5 w-5 cursor-pointer rounded-md border bg-white ring-indigo-600 ring-offset-2 duration-150 after:absolute after:inset-x-0 after:top-[3px] after:m-auto after:h-2.5 after:w-1.5 after:rotate-45 after:border-b-2 after:border-r-2 after:border-white peer-checked:bg-indigo-600 peer-active:ring"
            ></label>
            <span>Remember me</span>
          </div>
          <a href="javascript:void(0)" class="text-center text-indigo-600 hover:text-indigo-500"
            >Forgot password?</a
          >
        </div>
        <button
          class="w-full rounded-lg bg-indigo-600 px-4 py-2 font-medium text-white duration-150 hover:bg-indigo-500 active:bg-indigo-600"
        >
          Sign in
        </button>
      </form>
      <button
        class="flex w-full items-center justify-center gap-x-3 rounded-lg border py-2.5 text-sm font-medium duration-150 hover:bg-gray-50 active:bg-gray-100"
      >
        <!-- SVG for Google Sign In -->
        <img
          src="https://raw.githubusercontent.com/sidiDev/remote-assets/7cd06bf1d8859c578c2efbfda2c68bd6bedc66d8/google-icon.svg"
          alt="Google"
          class="h-5 w-5"
        />
        <!-- Comment: Google Icon SVG here -->
        Continue with Google
      </button>
      <p class="text-center">
        Don't have an account?
        <a href="javascript:void(0)" class="font-medium text-indigo-600 hover:text-indigo-500"
          >Sign up</a
        >
      </p>
    </div>
  </main>
</template>
