<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="/">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            
                <div class="sb-sidenav-menu-heading"> Admin</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseData" aria-expanded="false" aria-controls="collapseData">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                    Student
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseData" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/students">Student List</a>
                        <a class="nav-link" href="/students/add">Add Student</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTeacher" aria-expanded="false" aria-controls="collapseTeacher">
                    <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    Teacher
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTeacher" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/teachers">Teacher Data</a>
                        <a class="nav-link" href="/teachers/add">Add Teacher</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Setting</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                    <div class="sb-nav-link-icon"><i class="fas fa-users-cog"></i></div>
                    Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseUsers" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/admins">Manage Admin</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/users">Manage User</a>
                    </nav>
                </div>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        <div class="row mt-2">
            <div class="col-auto">
                <img src="{{ asset('img/avatar.png') }}" alt="Admin" class="rounded-circle ml-1 mt-1" height="40">

            </div>
            <div class="col-ml-auto">
                Admin <br>

                
                    <i class="fas fa-user-lock"></i>
            


            </div>

        </div>


    </div>
</nav>