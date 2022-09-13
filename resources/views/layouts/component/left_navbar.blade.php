<aside class="col-12 col-md-2 p-0 flex-shrink-1 bg-white">
  <nav class="navbar navbar-expand flex-md-column flex-row align-items-start py-2">
      <div class="collapse navbar-collapse w-100">
          <ul class="navbar-nav flex-row w-100 flex-md-column justify-content-between">
            <li class="nav-item">
              <a href="{{ route('dashboard') }}" class="nav-link px-4 py-3">Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('student.index') }}" class="nav-link px-4 py-3">Student Management</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('teacher.index') }}" class="nav-link px-4 py-3">Teacher Management</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('course.index') }}" class="nav-link px-4 py-3">Course Management</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('classes.index') }}" class="nav-link px-4 py-3">Class Management</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('attendance.index') }}" class="nav-link px-4 py-3">Attendance Management</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('account.index') }}" class="nav-link px-4 py-3">Account Management</a>
            </li>
          </ul>
      </div>
  </nav>
</aside>