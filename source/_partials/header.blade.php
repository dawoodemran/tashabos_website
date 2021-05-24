<div class="max-w-full">
        <nav class="lg:h-20 py-3 mx-auto">
                <div class="px-8 flex justify-between items-center h-20">
    
                    <div class="flex justify-between items-center w-full">

                        <div class="md:mr-0 sm:mr-0">
                          <a href="{{ $page->baseUrl }}/">
                            <img class="h-10 w-auto sm:h-12" src="{{$page->baseUrl }}/assets/images/Tashabos-logo.png">
                          </a>
                        </div>

                        <div class="primary_nav flex  md:flex items-center space-x-6">
                              <div class="lg:visible invisible  md:ml-10 md:pr-4 md:space-x-8 uppercase">
                                <a href="{{ $page->baseUrl }}/about" class="font-medium text-gray-500 hover:text-transparent">About</a>
                                <a href="{{ $page->baseUrl }}/login" class="font-medium hover:bg-green-100 bg-white rounded-xl px-7 py-2 text-gray-500 hover:text-transparent">Sign in</a>
                              </div>
                        </div>
                    </div>


                    <div class="lg:hidden flex items-center">
                        <button class="mobile-menu-button border-0 outline-none focus:outline-none focus:border-0">
                            <svg class="w-10 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                    </div>
                </div>
            <!-- mobile menu -->
            <div class="mobile-menu pl-8 lg:hidden flex flex-col space-y-3 py-8 bg-white opacity-40 ">

                <a href="{{ $page->baseUrl }}/about" class="font-medium text-gray-600 hover:text-gray-900">ABOUT</a>

                <a href="{{ $page->baseUrl }}/login" class="font-medium text-gray-600 hover:text-gray-900">SIGN IN</a>
            </div>
        </nav>
    </div>
    
