<!-- Main navigation container -->
<nav class="relative flex w-full flex-wrap items-center justify-between bg-[#46249C] py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 lg:py-4"
    data-te-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <div>
            <a class="mx-2 my-1 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
                href="/">
                <img class="mr-2" src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Friends_logo.svg"
                    style="height: 20px" alt="F Logo" />
            </a>
        </div>

        <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
            id="navbarSupportedContent4" data-te-collapse-item>
            <ul class="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 lg:flex-row" data-te-navbar-nav-ref>
                <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                    <a class="text-neutral-500 text-2xl hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                        aria-current="page" href="/" data-te-nav-link-ref>ConnectFriend</a>
                </li>
            </ul>

            <div class="flex items-center">
                    @if(!auth()->check())

                        <a href="/login" type="button" data-te-ripple-init data-te-ripple-color="light"
                            class="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:bg-neutral-100 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 motion-reduce:transition-none">
                            Login
                        </a>
                        <a href="/register" type="button" data-te-ripple-init data-te-ripple-color="light"
                            class="mr-3 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                            Register
                        </a>
                    @else
                        <a href="/logout" type="button" data-te-ripple-init data-te-ripple-color="light"
                            class="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:bg-neutral-100 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 motion-reduce:transition-none">
                            Logout
                        </a>
                    @endif

            </div>
        </div>
    </div>
</nav>
