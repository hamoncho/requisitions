<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="flex justify-between max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Success Notification -->
        @if (session('success'))
            <div id="notification-success" class="fixed inset-0 z-50 flex items-center justify-center p-4">
                <div class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm"></div>
                <div class="relative bg-white rounded-xl shadow-2xl w-full max-w-md mx-auto overflow-hidden">
                    <div class="flex items-start p-6">
                        <div class="flex-shrink-0">
                            <svg class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-4 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">¡Operación exitosa!</h3>
                            <p class="mt-1 text-gray-600">{{ session('success') }}</p>
                        </div>
                        <button onclick="this.closest('div[id^=notification-]').classList.add('hidden')"
                            class="text-gray-400 hover:text-gray-500">
                            <svg class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="bg-green-500 h-2 w-full">
                        <div class="bg-green-400 h-full w-full animate-progress"></div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Error Notification -->
        @if (session('error'))
            <div id="notification-error" class="fixed inset-0 z-50 flex items-center justify-center p-4">
                <div class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm"></div>
                <div class="relative bg-white rounded-xl shadow-2xl w-full max-w-md mx-auto overflow-hidden">
                    <div class="flex items-start p-6">
                        <div class="flex-shrink-0">
                            <svg class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-4 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">¡Error!</h3>
                            <p class="mt-1 text-gray-600">{{ session('error') }}</p>
                        </div>
                        <button onclick="this.closest('div[id^=notification-]').classList.add('hidden')"
                            class="text-gray-400 hover:text-gray-500">
                            <svg class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="bg-red-500 h-2 w-full">
                        <div class="bg-red-400 h-full w-full animate-progress"></div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Warning Notification -->
        @if (session('warning'))
            <div id="notification-warning" class="fixed inset-0 z-50 flex items-center justify-center p-4">
                <div class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm"></div>
                <div class="relative bg-white rounded-xl shadow-2xl w-full max-w-md mx-auto overflow-hidden">
                    <div class="flex items-start p-6">
                        <div class="flex-shrink-0">
                            <svg class="h-8 w-8 text-yellow-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div class="ml-4 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">¡Advertencia!</h3>
                            <p class="mt-1 text-gray-600">{{ session('warning') }}</p>
                        </div>
                        <button onclick="this.closest('div[id^=notification-]').classList.add('hidden')"
                            class="text-gray-400 hover:text-gray-500">
                            <svg class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="bg-yellow-500 h-2 w-full">
                        <div class="bg-yellow-400 h-full w-full animate-progress"></div>
                    </div>
                </div>
            </div>
        @endif

        <style>
            @keyframes progress {
                from {
                    width: 100%;
                }

                to {
                    width: 0%;
                }
            }

            .animate-progress {
                animation: progress 5s linear forwards;
            }
        </style>

        <script>
            // Cierre automático para todas las notificaciones
            document.querySelectorAll('div[id^="notification-"]').forEach(notification => {
                setTimeout(() => {
                    notification.classList.add('hidden');
                }, 5000);
            });
        </script>
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <footer class="bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center">
                        <img src="{{ asset('/storage/img/logo.svg') }}" class="h-8 me-3" alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">ITSU</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">{{ __('app.footer_resources') }}
                        </h2>
                        <ul class="text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline ">{{ __('app.footer_docs') }}</a>
                            </li>

                            <li>
                                <a href="#" class="hover:underline">{{ __('app.footer_tutorials') }}</a>
                            </li>

                        </ul>
                    </div>

                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">{{ __('app.footer_faq') }}</h2>
                        <ul class="text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="mailto:admin@uruapan.tecnm.mx"
                                    class="hover:underline">admin@uruapan.tecnm.mx</a>
                            </li>
                            <li>
                                <a href="https://tecuruapan.edu.mx/quienes-somos/"
                                    class="hover:underline">{{ __('app.about_us') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 sm:mx-auto border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm sm:text-center text-gray-400">
                    © 2025
                    <a href="https://tecuruapan.edu.mx/" class="hover:underline">
                        ITSU
                    </a>.
                    {{ __('app.copyright') }}.
                </span>

                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="https://www.facebook.com/tecnmcampusuruapan" class="text-gray-500 hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>

                    <!-- TikTok (Logo actual) -->
                    <a href="https://www.tiktok.com/@tecnmcampusuruapan1" class="text-gray-500 hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                        </svg>
                        <span class="sr-only">TikTok account</span>
                    </a>

                    <!-- YouTube (Logo actual) -->
                    <a href="https://www.youtube.com/@tecnmcampusuruapan3060"
                        class="text-gray-500 hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                        <span class="sr-only">YouTube account</span>
                    </a>

                    <!-- X/Twitter (Logo actual) -->
                    <a href="https://x.com/tec_uruapan" class="text-gray-500 hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M13.795 10.533 20.68 2h-3.073l-5.255 6.213L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-6.732L15.31 22H22L13.795 10.533Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                        </svg>
                        <span class="sr-only">X account</span>
                    </a>

                    <!-- Instagram (Logo actual) -->
                    <a href="https://www.instagram.com/tecnmcampusuruapan"
                        class="text-gray-500 hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 0 1 1.772 1.153 4.902 4.902 0 0 1 1.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 0 1-1.153 1.772 4.902 4.902 0 0 1-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 0 1-1.772-1.153 4.902 4.902 0 0 1-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 0 1 1.153-1.772A4.902 4.902 0 0 1 5.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63Zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 0 0-.748-1.15 3.098 3.098 0 0 0-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058ZM12 6.865a5.135 5.135 0 1 1 0 10.27 5.135 5.135 0 0 1 0-10.27Zm0 1.802a3.333 3.333 0 1 0 0 6.666 3.333 3.333 0 0 0 0-6.666Zm5.338-3.205a1.2 1.2 0 1 1-2.4 0 1.2 1.2 0 0 1 2.4 0Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Instagram account</span>
                    </a>

                    <a href="https://github.com/hamoncho/requisitions" class="text-gray-500 hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>

                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    @stack('scripts')
</body>

</html>
