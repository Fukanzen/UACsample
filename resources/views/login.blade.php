@extends('layout.master')
@section('content')
<style>
    .background-wallpaper{
        z-index: -100;
        width: 100vw;
        position: absolute;
    }</style>

    <img src="https://wallpaperaccess.com/full/782200.jpg" class="background-wallpaper"  alt="heheheha" style="z-index: -10000" >
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Sign In</h1>

                @if(Session()->has('loginError'))
                    <h2 class="text-red-500 text-xl">
                        {{ Session()->get('loginError') }}
                    </h2>
                @endif

                <form action="/login" method="POST">
                    @csrf
                    <input type="name" tabindex="-1" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
                        placeholder="Instagram Username"/>

                    <input type="password" tabindex="-1" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                        placeholder="Password"/>

                    <button type="submit"
                        class="w-full text-center bg-green-400 py-3 rounded-md text-white hover:bg-blue-400">Login</button>
                </form>
                <div class="text-grey-dark mt-6">
                    Dont have account?
                    <a class="no-underline border-b border-blue text-blue" href="/register">
                        Register
                    </a>.
                </div>
            </div>
        </div>
    @endsection
