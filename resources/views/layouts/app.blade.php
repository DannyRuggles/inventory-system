<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System By Danny Ruggles</title>
    
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a>Inventory System</a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Add navigation links here -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('items.index') }}">Items</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mt-4">
        @yield('content') 
    </div>

    <!-- Footer -->
    <footer class="mt-5 text-center">
        <p>&copy; {{ date('Y') }} Inventory System By Danny Ruggles. All rights reserved.</p>
    </footer>


</body>
</html>
