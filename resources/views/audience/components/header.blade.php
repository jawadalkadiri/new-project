<header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('audience.home') }}"><button type="button" class="btn btn-primary">Home</button></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('audience.post.index') }}"><button type="button" class="btn btn-primary">Posts</button></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('audience.task.index') }}"><button type="button" class="btn btn-primary">Tasks</button></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}"><button type="button" class="btn btn-primary">Admin</button></a>
                            </li>

                        </ul>
                        </div>
                    </div>
            </nav>
    </header>
