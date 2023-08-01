@extends('layout.master')

@section('content')
<style>
    .bgg{
        width: 100vw;
    }

    .background-wallpaper{
        z-index: -100;
        width: 100vw;
        position:fixed;
        margin-top: -15rem;
    }

    .image-home{
        width: 36vw;
        padding: 15px;
        border-radius: 30px;
    }
    </style>

    <div class="bgg"><img class="background-wallpaper" src="https://rare-gallery.com/thumbs/5395161-crowd-beach-sunset-sunrise-water-sea-ocean-outdoors-friends-group-horizon-landscape-nature-friendship-friend-flag-holiday-island-person-photographer-free-images.jpg" alt=""></div>
    <div class="m-5 bg-white border border-gray-200 rounded-lg shadow">
        <div class="m-10"><h1 class="text-5xl">Welcome to the ConnectFriend</h1>
            <br>
            <h3 class="text-2xl">the ultimate friend searching website where passions and hobbies unite people in meaningful connections!</h3></div>

        <div class="m-10"><h2 class="text-2xl text-justify">At ConnectFriend, we believe that friendships blossom when like-minded souls come together, bonded by shared interests and exciting hobbies. Whether you're an art aficionado, an adventure seeker, a sports enthusiast, or a music lover, we've designed this platform to help you find friends who share your zest for life.</h2></div>
    </div>

    <div class="flex flex-row m-5 bg-white border border-gray-200 rounded-lg shadow">
        <img class="image-home" src="https://www.friendshipday.org/images/friends-on-a-trip.jpg" alt="">

        <div class="flex flex-col">
            <div class="m-10"><h2 class="text-2xl text-justify">Our platform allows you to express your hobbies and interests freely, creating a virtual gallery of passions that spark conversations and friendships. With a seamless user interface, you can easily navigate through profiles, discovering new friends whose lives intertwine with yours, even across geographical boundaries.</h2><br>

            <h2 class="text-2xl text-justify">Whether you're searching for a coffee buddy to discuss the latest bestsellers or a workout partner to push your limits, ConnectFriend has your back. We promote inclusivity and diversity, welcoming everyone to join this vibrant community, regardless of age, gender, or background.</h2>
            </div>
        </div>

    </div>


@endsection
