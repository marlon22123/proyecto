<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('dashboard') }}"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Dashboard
                </a>
            </li>

            <li aria-current="page">
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span
                        class="ml-http://sanjose-dark.test/dashboard#1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Dashboard</span>
                </div>
            </li>
        </ol>
    </nav>

    <div class="py-5">
        <div class="mx-auto">
            <div
                class="p-4 border-2 overflow-hidden border-gray-200 border-dashed rounded-lg dark:border-gray-700{{--  mt-14 --}}">
                <div class="grid grid-cols-1 lg:grid-cols-2  gap-6">

                    <div class=" p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class=" text-secondary-700 rounded-b-xl grow dark:text-secondary-400 flex items-center">
                            <div
                                class="shrink-0 inline-flex items-center justify-center overflow-hidden rounded-full border border-gray-200 dark:border-secondary-500">

                                <img class="h-11 w-11 rounded-full object-cover"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />

                            </div>

                            <div class="ml-4">
                                <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Bienvenido
                                    , {{ Auth::user()->name }} </h5>

                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf


                                    <button
                                        class="text-gray-700 dark:text-gray-400 hover:text-blue-500 dark:hover:text-blue-700 "
                                        href="{{ route('logout') }} @click.prevent="$root.submit();">
                                        Cerrar sesión
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>

                    {{-- <div class=" p-6 bg-white border flex  border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                      <div class=" items-center justify-center">
                        <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Bienvenido
                          , {{ Auth::user()->name }} </h5>
                      </div>
                    </div> --}}
                    <div class=" flex items-center justify-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" ">
    
                        <div class="py-5">
                          <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SERV. MEDICOS SAN JOSE SCRL </h5>
                          <h5 class=" text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">20608012177 </h5>
                        </div>

                      </div>
                  
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
