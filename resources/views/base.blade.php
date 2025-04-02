<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/css/theme.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('contacts.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts.create') }}">Add Contact</a>
                </li>
            </ul>
            <button class="theme-toggle" id="themeToggle">
                <i class="fas fa-sun"></i>
            </button>
        </div>
    </nav>
    <div class="container">
        @yield('main')
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.getElementById('themeToggle');
            const html = document.documentElement;
            const icon = themeToggle.querySelector('i');

            // Check for saved theme preference or default to 'light'
            const savedTheme = localStorage.getItem('theme') || 'light';
            html.setAttribute('data-theme', savedTheme);
            icon.className = savedTheme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';

            themeToggle.addEventListener('click', () => {
                const currentTheme = html.getAttribute('data-theme');
                const newTheme = currentTheme === 'light' ? 'dark' : 'light';
                
                html.setAttribute('data-theme', newTheme);
                localStorage.setItem('theme', newTheme);
                icon.className = newTheme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';
            });
        });
    </script>
</body>
</html>