<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Inventory Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inventory.index') }}">Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inventory.create') }}">Add Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('settings') }}">Settings</a>
                </li>
            </ul>
        </div>
    </div>
</nav>