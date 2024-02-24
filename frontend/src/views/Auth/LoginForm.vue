<template>
    <section class="md:mx-auto mx-2 pt-20 flex justify-center items-center">
        <div class="bg-gray-700/60 p-8 rounded-lg shadow w-full max-w-lg h-1/2">
            <h1 class="text-3xl text-white mb-2 text-center pb-3 font-semibold">
                Login
            </h1>
            <form action="" class="flex-col flex gap-2 dark:text-white">
                <div>
                    <input type="text" class="rounded-md w-full max-w-lg outline-none p-2 bg-transparent border border-gray-700" placeholder="User Name">
                </div>
                <div>
                    <input type="password" class="rounded-md w-full max-w-lg outline-none p-2 bg-transparent border border-gray-700" placeholder="Password">
                </div>
                <div class="flex justify-center flex-col items-center mx-2 gap-2 mt-2">
                    <input type="submit" class="px-6 py-2 text-base font-semibold text-white rounded-lg bg-blue-600 hover:bg-blue-700 duration-150">
                    <p class="dark:text-white text-xs">Don't have an account? | <router-link to="/register" class="text-blue-500 underline cursor-pointer">register</router-link></p>
                </div> 
            </form>
        </div>
    </section>
</template>