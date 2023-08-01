@extends('buyer.master')
@section('content')
    <div class="container mx-auto mt-10">
        <div class="row mt-10">

              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                      </svg>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Recommended</a></li>
                  <li><a class="dropdown-item" href="#">Based on your Hobbies</a></li>
                  <li><a class="dropdown-item" href="#">Gender based</a></li>
                </ul>
              </div>

            <h1 class="text-2xl text-center">
                Recommended
            </h1>
            @if (Session()->has("error"))
            <h1 class="text-center text-xl text-red-700">
                {{Session()->get("error")}}
            </h1>

            @endif
            <div class="grid grid-cols-3">
                @foreach ($games as $game)
                    <form action="/buyer/buy-game" method="post" onsubmit="return validateWallet({{$game->price}}, {{auth()->user()->wallet}})">
                        @csrf
                        <input type="hidden" value="{{ $game->id }}" name="game_id">
                        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                        <input type="hidden" value="{{ $game->price }}" name="price">
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow my-5">
                            <img class="rounded-t-lg" src="{{ asset('storage/' . $game->image) }}" alt="" />
                            <div class="p-5">
                                <h1 class="text-2xl">
                                    {{ $game->name }}
                                </h1>
                                <h2 class="text-md font-bold">
                                    Post by : {{$game->User->name}}
                                </h2>
                                <div class="flex justify-between">
                                    <p class="mb-3 font-normal">
                                        {{ $game->description }}
                                    </p>
                                </div>

                                <div class="flex justify-around">
                                    <h2></h2>
                                    <h2></h2>
                                    <button type="submit"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg">
                                        Thumbs up
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                                          </svg>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        function validateWallet(price, wallet){
            if(wallet < price){
                alert("Your wallet gak cukup!");
                return false;
            }
            return true;
        }
    </script>
@endsection
