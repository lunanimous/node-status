<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Node Status - Nimiq</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">
    <div class="container mx-auto max-w-2xl p-4 mt-4 sm:mt-12">
        <header class="flex items-center">
            <!-- <svg class="w-16 h-16" viewbox="0 0 82 67" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="43.5" cy="40.5" r="23.5" fill="url(#paint0_radial)"/><path d="M31.5 64.5c21.3456-3.9355 33.1914-19.4548 25-46.5 7.322 6.9254 11.1685 21.8414 7 33.5-6.5101 12.1-22.021 15.7213-32 13z" fill="url(#paint1_linear)" fill-opacity=".18"/><circle cx="35.5" cy="26.5" r="2.5" fill="url(#paint2_radial)"/><circle cx="50.3329" cy="30.3329" r="4.82143" transform="rotate(6.455 50.3329 30.3329)" fill="url(#paint3_radial)"/><circle cx="39.0935" cy="44.0935" r="3.70092" transform="rotate(6.455 39.0935 44.0935)" fill="url(#paint4_radial)"/><circle cx="53.0861" cy="53.0861" r="4.59832" transform="rotate(6.455 53.0861 53.0861)" fill="url(#paint5_radial)"/><circle cx="25.0538" cy="46.0537" r="2.76086" transform="rotate(6.455 25.0538 46.0537)" fill="url(#paint6_radial)"/><path d="M18.5 29c-2 3.5-2.5 6.9464-2.5 11.5C16 54.3071 27.1929 65 41 65s25-11.1929 25-25-11.1929-25-25-25c-6.0521 0-10.5 2-14.5 4.5" stroke="#000" stroke-width="3" stroke-linecap="round"/><circle cx="22" cy="24" r="2" fill="#000"/><path fill-rule="evenodd" clip-rule="evenodd" d="M72.0526.55263C72.0526.24743 71.8052 0 71.5 0c-.3052 0-.5526.24742-.5526.55263v.92106c0 .81389-.6598 1.47369-1.4737 1.47369h-.9211c-.3052 0-.5526.24742-.5526.55263s.2474.55263.5526.55263h.9211c.8139 0 1.4737.65979 1.4737 1.47368v.92105c0 .30521.2474.55263.5526.55263.3052 0 .5526-.24742.5526-.55263v-.92105c0-.81389.6598-1.47368 1.4737-1.47368h.9211c.3052 0 .5526-.24742.5526-.55263s-.2474-.55263-.5526-.55263h-.9211c-.8139 0-1.4737-.65979-1.4737-1.47369V.55263z" fill="#FC8702"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.8948 15.3947c0-.218-.1768-.3947-.3948-.3947-.218 0-.3947.1767-.3947.3947v.6579c0 .5814-.4713 1.0527-1.0527 1.0527h-.6579c-.218 0-.3947.1767-.3947.3947s.1767.3947.3947.3947h.6579c.5814 0 1.0527.4713 1.0527 1.0527v.6579c0 .218.1767.3947.3947.3947s.3948-.1767.3948-.3947v-.6579c0-.5814.4712-1.0527 1.0526-1.0527h.6579c.218 0 .3947-.1767.3947-.3947s-.1767-.3947-.3947-.3947h-.6579c-.5814 0-1.0526-.4713-1.0526-1.0527v-.6579z" fill="#D94432"/><path fill-rule="evenodd" clip-rule="evenodd" d="M73.0526 58.5526c0-.3052-.2474-.5526-.5526-.5526-.3052 0-.5526.2474-.5526.5526v.9211c0 .8139-.6598 1.4737-1.4737 1.4737h-.9211c-.3052 0-.5526.2474-.5526.5526 0 .3052.2474.5526.5526.5526h.9211c.8139 0 1.4737.6598 1.4737 1.4737v.9211c0 .3052.2474.5526.5526.5526.3052 0 .5526-.2474.5526-.5526v-.9211c0-.8139.6598-1.4737 1.4737-1.4737h.9211c.3052 0 .5526-.2474.5526-.5526 0-.3052-.2474-.5526-.5526-.5526h-.9211c-.8139 0-1.4737-.6598-1.4737-1.4737v-.9211z" fill="#5F4B8B"/><circle cx="2" cy="51" r="2" fill="#21BCA5"/><circle cx="33.5" cy="3.5" r="2" stroke="#0582CA"/><circle cx="78.5" cy="37.5" r="3" stroke="#21BCA5"/><circle cx="14" cy="60" r="1" fill="#D94432"/><circle cx="72" cy="24" r="1" fill="#0582CA"/><defs><radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="rotate(34.24 -33.70069 52.14611) scale(45.8222)"><stop stop-color="#E9E013"/><stop offset="1" stop-color="#EC991C"/></radialGradient><radialGradient id="paint2_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="rotate(156.801 16.868 16.40214) scale(6.34648)"><stop offset=".55208" stop-color="#CC9D23" stop-opacity="0"/><stop offset="1" stop-color="#E2AF2A"/></radialGradient><radialGradient id="paint3_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="rotate(156.801 25.59755 19.38477) scale(12.2396)"><stop offset=".55208" stop-color="#E2AF2A" stop-opacity="0"/><stop offset="1" stop-color="#D5A11E"/></radialGradient><radialGradient id="paint4_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="rotate(156.801 17.74191 25.33179) scale(9.39513)"><stop offset=".55208" stop-color="#E2AF2A" stop-opacity="0"/><stop offset="1" stop-color="#D5A11E"/></radialGradient><radialGradient id="paint5_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="rotate(156.801 24.47495 31.0878) scale(11.6732)"><stop offset=".55208" stop-color="#E2AF2A" stop-opacity="0"/><stop offset="1" stop-color="#D5A11E"/></radialGradient><radialGradient id="paint6_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="rotate(156.801 9.82982 25.05568) scale(7.00868)"><stop offset=".55208" stop-color="#E2AF2A" stop-opacity="0"/><stop offset="1" stop-color="#D5A11E"/></radialGradient><linearGradient id="paint1_linear" x1="59" y1="25" x2="46" y2="63.5" gradientUnits="userSpaceOnUse"><stop stop-color="#5B0606" stop-opacity="0"/><stop offset="1" stop-color="#5B0606"/></linearGradient></defs></svg> -->
            <svg class="w-auto h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 24"><defs><radialGradient id="radial-gradient" cx="20.31" cy="23.69" r="27.01" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ec991c"/><stop offset="1" stop-color="#e9b213"/></radialGradient><style>.cls-2{fill:#1f2348}</style></defs><path d="M26.7 10.88l-5.63-9.76A2.25 2.25 0 0019.13 0H7.87a2.25 2.25 0 00-1.94 1.12L.3 10.88a2.24 2.24 0 000 2.24l5.63 9.76A2.25 2.25 0 007.87 24h11.26a2.25 2.25 0 001.94-1.12l5.63-9.76a2.24 2.24 0 000-2.24z" fill="url(#radial-gradient)"/><path class="cls-2" d="M46.39 5h2.41v14H47l-7.61-9.76V19H37V5h1.84l7.55 9.76zM53.58 19V5h2.58v14zM72.55 5h2v14h-2.18v-8.66L68.59 19h-1.65l-3.78-8.66V19H61V5h2l4.79 11zM79.37 19V5H82v14zM99.17 15.83a5.83 5.83 0 01-3 2.8 7.89 7.89 0 001.12 1.52 15.09 15.09 0 001.46 1.37l-1.7 1.38a11.07 11.07 0 01-1.77-1.61 11.54 11.54 0 01-1.5-2.1h-.6a7.24 7.24 0 01-3.64-.87 5.79 5.79 0 01-2.36-2.51 8.75 8.75 0 01-.81-3.81 8.24 8.24 0 01.82-3.81 5.81 5.81 0 012.37-2.51 7.24 7.24 0 013.62-.88 7.33 7.33 0 013.65.88 5.71 5.71 0 012.35 2.52A8.21 8.21 0 01100 12a8.6 8.6 0 01-.83 3.83zm-9.11 0a4.31 4.31 0 006.25 0A5.83 5.83 0 0097.42 12a5.85 5.85 0 00-1.11-3.83 4.35 4.35 0 00-6.25 0A5.84 5.84 0 0089 12a5.83 5.83 0 001.06 3.84z"/></svg>
            <span class="text-xl text-gray-600 ml-6">Node Status</span>
        </header>

        <main class="mt-12">
            @if ($isOnline)
                <div class="bg-white rounded-lg p-4">
                    <div class="flex items-center">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8 text-green-500 mx-2 flex-none"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <div class="ml-4">
                            <h2 class="text-gray-900 text-xl">Node is <span class="text-green-500">online</span></h2>
                            <p class="text-gray-500 text-sm">This Nimiq node is up and running.</p>
                        </div>
                    </div>
                </div>
            @else
                <div class="bg-white rounded-lg p-4">
                    <div class="flex items-center">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8 text-red-500 sm:mx-2 flex-none"><path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd"></path></svg>
                        <div class="ml-4">
                            <h2 class="text-gray-900 text-xl">Node is <span class="text-red-500">offline</span></h2>
                            <p class="text-gray-500 text-sm">This Nimiq node seems to be down or is currently unavailable.</p>
                        </div>
                    </div>
                </div>
            @endif

            <h2 class="mt-8 text-xl text-gray-800">Statistics</h2>
            <div class="mt-4 w-full sm:flex bg-white rounded-md">
                <div class="w-full sm:w-1/3 p-4">
                    <h3 class="text-gray-500 mb-2">Block height</h3>
                    <p class="text-gray-500 text-sm"><span class="text-3xl text-gray-900">{{ $blockNumber }}</span></p>
                </div>
                <div class="w-full sm:w-1/3 p-4 border-l border-r border-gray-100">
                    <h3 class="text-gray-500 mb-2">Connected to</h3>
                    <p class="text-gray-500 text-sm"><span class="text-3xl text-gray-900">{{ $peerCount }}</span> peers</p>
                </div>
                <div class="w-full sm:w-1/3 p-4">
                    <h3 class="text-gray-500 mb-2">Mempool</h3>
                    <p class="text-gray-500 text-sm"><span class="text-3xl text-gray-900">{{ $mempoolTransactions }}</span> transactions</p>
                </div>
            </div>
        </main>

        <footer class="sm:flex justify-between mt-12 text-sm text-gray-500">
            <div>Made by <a class="underline" href="https://lunanimous.com" target="_blank" rel="nofollow">Lunanimous</a> for <a class="underline" href="https://nimiq.com" target="_blank" rel="nofollow">Nimiq</a>.</div>
            <div>Powered by <a class="underline" href="https://lumen.laravel.com/" target="_blank" rel="nofollow">Lumen.</a></div>
        </footer>
    </div>
</body>
</html>
