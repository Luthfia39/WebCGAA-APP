<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Simulasi CGAA | Daftar Pengguna</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('style/style.css') }}">
        <link rel="stylesheet" href="{{ asset('style/font.css') }}">
        <link rel="stylesheet" href="{{ asset('style/color.css') }}">
        <link rel="stylesheet" href="{{ asset('style/button.css') }}">
    </head>
    <body>
        <div class="d-flex">
            <!-- Sidebar -->
            <div class="d-flex flex-column bg-yellow-normal1 p-4 vh-100 align-items-center sidebar sticky-top flex-shrink-0 left-sidebar overflow-y-scroll">
                {{-- Logo --}}
                <div class="d-flex justify-content-between justify-content-lg-center align-items-center w-100 mb-5">
                    {{-- Logo --}}
                    <a href="/" class="d-flex align-items-center justify-content-center text-white" style="width: 80%; padding: 5px;">
                        <img src="{{ asset('image/logo-ugm-hitam.svg') }}" style="width: 100%"/>
                    </a>
                    {{-- Close button --}}
                    <button class="btn btn-close d-flex d-block align-self-start d-lg-none"></button>
                </div>
                {{-- Menus --}}
                <div class="nav nav-pills d-flex flex-column w-100">
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none mb-3" href="{{ route('admin.dashboard') }}">
                        <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-house-door text-white"></i>
                        </div>
                        <p class="font-blue-dark3 m-0 par-text">Dashboard</p>
                    </a>
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none mb-3" href="{{ route('admin.user.index', 1) }}">
                        <div class="d-flex  rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-file-earmark-person text-white"></i>
                        </div>
                        <p class="font-blue-dark3 m-0 par-text">Pengguna Situs</p>
                    </a>
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none mb-3" href="{{ route('admin.mp.index.pusat', 1) }}">
                        <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-list-stars text-white"></i>
                        </div>
                        <p class="font-blue-dark3 par-text m-0">Pilihan Ganda Pusat</p>
                    </a>
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none mb-3" href="{{ route('admin.mp.index.daerah', 1) }}">
                        <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-list-task text-white"></i>
                        </div>
                        <p class="font-blue-dark3 par-text m-0">Pilihan Ganda Daerah</p>
                    </a>
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none mb-3" href="{{ route('admin.mp.create') }}">
                        <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-clipboard-plus text-white"></i>
                        </div>
                        <p class="font-blue-dark3 par-text m-0">Tambah Pilihan Ganda</p>
                    </a>
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none mb-3" href="{{ route('admin.ey.index.pusat', 1) }}">
                        <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-file-earmark-richtext text-white"></i>
                        </div>
                        <p class="font-blue-dark3 par-text m-0">Esai Pusat</p>
                    </a>
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none mb-3" href="{{ route('admin.ey.index.daerah', 1) }}">
                        <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-file-earmark-text text-white"></i>
                        </div>
                        <p class="font-blue-dark3 par-text m-0">Esai Daerah</p>
                    </a>
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none mb-3" href="{{ route('admin.ey.create') }}">
                        <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-file-earmark-plus text-white"></i>
                        </div>
                        <p class="font-blue-dark3 par-text m-0">Tambah Esai</p>
                    </a>
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none mb-3" href="{{ route('admin.cs.index.pusat', 1) }}">
                        <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-journal-richtext text-white"></i>
                        </div>
                        <p class="font-blue-dark3 par-text m-0">Studi Kasus Pusat</p>
                    </a>
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none mb-3" href="{{ route('admin.cs.index.daerah', 1) }}">
                        <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-journal-text text-white"></i>
                        </div>
                        <p class="font-blue-dark3 par-text m-0">Studi Kasus Daerah</p>
                    </a>
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none mb-3" href="{{ route('admin.cs.create') }}">
                        <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-journal-plus text-white"></i>
                        </div>
                        <p class="font-blue-dark3 par-text m-0">Tambah Studi Kasus</p>
                    </a>
                </div>
            </div>

            <main  class="d-flex flex-column max-vh-100 ps-5 pe-5 pb-5 pt-3 w-100">
                <!-- Navbar -->
                <nav class="nav navbar bg-white p-0">
                    <div class="container-fluid p-0">
                        <button class="navbar-brand btn btn-open d-lg-none" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </button>
                        <div></div>
                        <div class="navbar-brand me-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-decoration-none d-flex font-yellow-dark4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="me-2 d-none d-lg-block align-self-center font-yellow-dark4" id="username">Admin</span>
                                    <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-yellow-dark4 text-white" style="width: 2.5rem; height: 2.5rem;">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                    <li>
                                        <form action={{ route('logout') }} method="POST">
                                            @csrf
                                            <button class="dropdown-item" type="submit">Keluar</a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </div>
                    </div>
                </nav>

                <div class="container">
                    {{-- Section 1; Title --}}
                    <div class="h3-text font-yellow-dark4 p-semi-bold my-3">Pengguna Terdaftar</div>
                    
                    {{-- Section 2; Tables --}}
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="bg-yellow-normal1">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Pekerjaan</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody class="bg-yellow-light2">
                                @foreach ($content->data as $u)
                                    <tr>
                                        <th scope="row">{{ $u->id }}</th>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ date('d-m-Y', strtotime($u->date_of_birth)) }}</td>
                                        <td>{{ $u->occupation }}</td>
                                        <td>{{ $u->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- Section 3; Pagination --}}
                    <nav aria-label="User page">
                        <ul class="pagination justify-content-center">
                        @if (isset($content->current_page))
                            @php
                                $prev = ($content->current_page)-1;
                                $next = ($content->current_page)+1;
                            @endphp 
                            @if (($content->next_page_url != null) && ($content->prev_page_url == null))
                                <li class="page-item disabled">
                                    <a class="page-link">Previous</a>
                                </li>
                                @for ($i = 1; $i < ($content->last_page)+1; $i++)
                                    <li class="page-item"><a class="page-link" href="{{ route('admin.user.index', $i) }}">{{ $i }}</a></li>
                                @endfor
                                <li class="page-item">
                                    <a class="page-link" href="{{ route('admin.user.index', $next) }}">Next</a>
                                </li>
                            @elseif (($content->next_page_url == null) && ($content->prev_page_url != null))
                                <li class="page-item">
                                    <a class="page-link" href="{{ route('admin.user.index', $prev) }}">Previous</a>
                                </li>
                                @for ($i = 1; $i < ($content->last_page)+1; $i++)
                                    <li class="page-item"><a class="page-link" href="{{ route('admin.user.index', $i) }}">{{ $i }}</a></li>
                                @endfor
                                <li class="page-item disabled">
                                    <a class="page-link">Next</a>
                                </li>
                            @elseif (($content->next_page_url == null) && ($content->prev_page_url == null))
                                <li class="page-item disabled">
                                    <a class="page-link">Previous</a>
                                </li>
                                @for ($i = 1; $i < ($content->last_page)+1; $i++)
                                    <li class="page-item"><a class="page-link" href="{{ route('admin.user.index', $i) }}">{{ $i }}</a></li>
                                @endfor
                                <li class="page-item disabled">
                                    <a class="page-link">Next</a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ route('admin.user.index', $prev) }}">Previous</a>
                                </li>
                                @for ($i = 1; $i < ($content->last_page)+1; $i++)
                                    <li class="page-item"><a class="page-link" href="{{ route('admin.user.index', $i) }}">{{ $i }}</a></li>
                                @endfor
                                <li class="page-item">
                                    <a class="page-link" href="{{ route('admin.user.index', $next) }}">Next</a>
                                </li>
                            @endif
                        @endif
                        </ul>
                    </nav>
                </div>
            </main>
        </div>
        
        <!-- <script type="text/javascript" src="./Assets/custom.js"></script> -->
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            $(".btn-open").on("click", function(){
                $(".left-sidebar").addClass("active");
            });
            $(".btn-close").on("click", function(){
                $(".left-sidebar").removeClass("active");
            });
        </script>
    </body>
</html>