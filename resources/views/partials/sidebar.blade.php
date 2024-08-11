


<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
        <a href="{{ route('home') }}" class="b-brand text-primary mt-5">
            <img src="{{ asset('assets/images/image001.png') }}" alt="logo image" width="200" height="100" />
        </a>
        </div>
        <div class="navbar-content mt-4">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('home') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-gauge"></i>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('view-users') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-user-circle"></i>
                        </span>
                        <span class="pc-mtext">Users</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-globe"></i>
                        </span>
                        <span class="pc-mtext">Site Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="card pc-user-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="user-image"
                            class="user-avtar wid-45 rounded-circle" />
                    </div>
                    <div class="flex-grow-1 ms-3 me-2">
                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                        <small>Administrator</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>




<!-- Toast container -->
<div aria-live="polite" aria-atomic="true" class="position-relative">
    <!-- Position it -->
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">

        <!-- Success Toast -->
        @if (session('success'))
            <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        @endif

        <!-- Error Toast -->
        @if (session('error'))
            <div class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('error') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        @endif

        <!-- Validation Errors Toast -->
        @if ($errors->any())
            <div class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        @endif

    </div>
</div>

<!-- Bootstrap Toast JS -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'));
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl);
        });
        toastList.forEach(toast => toast.show());
    });
</script>

