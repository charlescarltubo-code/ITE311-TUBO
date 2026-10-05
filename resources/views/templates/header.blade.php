<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/dashboard">ITE311 LMS</a>

        <div class="collapse navbar-collapse show">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>

                @if (Auth::user()->role == 'admin')
                    <li class="nav-item"><a class="nav-link" href="#">Manage Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Reports</a></li>
                @endif

                @if (Auth::user()->role == 'teacher')
                    <li class="nav-item"><a class="nav-link" href="#">Lessons</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Grades</a></li>
                @endif

                @if (Auth::user()->role == 'student')
                    <li class="nav-item"><a class="nav-link" href="#">My Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">My Submissions</a></li>
                @endif
            </ul>

            <form action="/logout" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-light">Logout</button>
            </form>
        </div>
    </div>
</nav>