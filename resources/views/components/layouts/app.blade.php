<!DOCTYPE html>
<html lang="en" data-theme="sunset">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="text-black z-0">
    <div id="preloader" class="fixed inset-0 bg-white z-[9999] flex items-center justify-center">
        <div class="animate-spin h-12 w-12 border-4 border-[var(--color-primary)] border-t-transparent rounded-full">
        </div>
    </div>
    <x-layouts.partials.header />
    {{ $slot }}
    <x-layouts.partials.footer />

    <div class="toast absolute top-40 left-1/2 z-100">
        <div id="cart-toast" class="alert hidden bg-green-500 text-white">
            <span id="cart-toast-message"></span>
        </div>
    </div>
    <div class="toast toast-top toast-center z-[9999] fixed" id="toast-container">
        <div id="cart-toast" class="alert hidden">
            <span id="cart-toast-message"></span>
        </div>
    </div>

    
<script>
    document.addEventListener('keydown', function(e) {
        if (e.key === '/') {
            e.preventDefault();
            const input = document.getElementById('globalSearch');
            if (input) input.focus();
        }
    });
</script>
    <script>
            window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');
        preloader.classList.add('opacity-0');
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 500); // matches transition duration if you add one
    });
    
        Livewire.on('cart-toast', ({
            message,
            type = 'success'
        }) => {
            const toast = document.getElementById('cart-toast');
            const toastMessage = document.getElementById('cart-toast-message');
            const toastContainer = document.getElementById('toast-container');

            toastMessage.textContent = message;

            toast.className = 'alert alert-' + type;
            toastContainer.style.display = 'block';

            setTimeout(() => {
                toastContainer.style.display = 'none';
            }, 2000);
        });
    </script>


</body>

</html>
