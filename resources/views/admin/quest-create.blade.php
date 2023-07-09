<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin | Tambah Soal</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
        <link rel="stylesheet" href="{{ asset('style/style.css') }}">
        <link rel="stylesheet" href="{{ asset('style/font.css') }}">
        <link rel="stylesheet" href="{{ asset('style/color.css') }}">
        <link rel="stylesheet" href="{{ asset('style/button.css') }}">
    </head>
    <body>
        <div class="d-flex">
            <!-- Sidebar -->
            <div class="d-flex flex-column bg-yellow-normal1 p-4 vh-100 justify-content-between align-items-center sidebar sticky-top flex-shrink-0 left-sidebar">
                <div class="d-flex flex-row justify-content-between justify-content-lg-center align-items-center w-100">
                    {{-- Logo --}}
                    <div class="d-flex align-items-center justify-content-center text-white" style="width: 80%; padding: 5px;">
                        <img src="{{ asset('image/logo-ugm-hitam.svg') }}" style="width: 100%"/>
                    </div>
                    {{-- Close button --}}
                    <button class="btn btn-close d-flex d-block align-self-start d-lg-none"></button>
                </div>
                {{-- Middle --}}
                <div class="nav nav-pills d-flex flex-column w-100">
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none" href="{{ route('admin.dashboard') }}">
                        <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-house-door-fill text-white"></i>
                        </div>
                        <p class="font-blue-dark3 m-0 h4-text">Dashboard</p>
                    </a>
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none my-5" href="{{ route('admin.question.index', 1) }}">
                        <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-file-earmark-text-fill text-white"></i>
                        </div>
                        <p class="font-blue-dark3 h4-text m-0">Soal Simulasi</p>
                    </a>
                    <a class="nav-item d-flex align-items-center w-100 text-decoration-none" href="{{ route('admin.user.index', 1) }}">
                        <div class="d-flex  rounded-circle p-1 align-items-center justify-content-center bg-blue-dark3 me-2" style="width: 2.5rem; height: 2.5rem;">
                            <i class="bi bi-file-earmark-person-fill text-white"></i>
                        </div>
                        <p class="font-blue-dark3 m-0 h4-text">Pengguna Situs</p>
                    </a>
                </div>
                {{-- Bottom --}}
                <div class="d-flex align-items-center w-100 text-decoration-none" href="#">
                    {{-- <div class="d-flex  rounded-circle p-1 align-items-center justify-content-center bg-yellow-light3 me-2 circle-bg">
                        <i class="bi bi-gear-fill text-black"></i>
                    </div>
                    <p class="font-yellow-light3 m-0 h4-text">Pengaturan</p> --}}
                </div>
            </div>

            <main class="d-flex flex-column overflow-auto border-0 max-vh-100 ps-5 pe-5 pb-5 pt-3 w-100">
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
                                    <div class="d-flex rounded-circle p-1 align-items-center justify-content-center bg-yellow-dark4 me-2 text-white" style="width: 2.5rem; height: 2.5rem;">
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

                {{-- Form Wrapper --}}
                <div class="container">

                    {{-- Title --}}
                    <p class="h3-text font-yellow-dark4 p-semi-bold">Tambah Soal Simulasi</p>

                    {{-- Error Handler --}}
                    @if ($errors->any())
                        <div class="fixed-top" aria-live="assertive" aria-atomic="true" data-bs-delay="100">
                            <div class="toast-container top-0 end-0 p-3">
                                @foreach ($errors->all() as $error)
                                <div class="toast text-bg-danger border-0 show" role="alert">
                                    <div class="d-flex">
                                        <div class="toast-body">{{ $error }}</div>
                                        <button type="button" id="btn-close-toast" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <form method="POST" enctype="multipart/form-data" action={{ route('admin.question.store') }}>
                        @csrf
            
                        {{-- Question Input --}}
                        <div class="mb-3">
                            <label for="question" class="form-label fw-semibold">Pertanyaan</label>
                            <textarea name="question" id="question"></textarea>
                        </div>

                        {{-- Question Type Input --}}
                        <div class="mb-3">
                            <label for="question_type" class="form-label fw-semibold">Tingkat Soal</label>
                            <select class="form-select" id="question_type" name="question_type">
                                <option selected>Pilih Tingkat Soal</option>
                                <option value="pusat">Pusat</option>
                                <option value="daerah">Daerah</option>
                            </select>
                        </div> 

                        {{-- Choices Input --}}
                        <div class="mb-3">
                            <label for="pilihan-jawaban" class="form-label fw-semibold">Pilihan Jawaban</label>
                            <div class="mb-3">
                                <label for="answer_a">Pilihan A</label>
                                <textarea name="answer_a" id="answer_a"></textarea>
                                <!-- <input type="text" class="form-control" placeholder="Pilihan A" name="answer_a" required> -->
                            </div>
                            <div class="mb-3">
                                <label for="answer_b">Pilihan B</label>
                                <textarea name="answer_b" id="answer_b"></textarea>
                                <!-- <input type="text" class="form-control" placeholder="Pilihan B" name="answer_b" required> -->
                            </div>
                            <div class="mb-3">
                                <label for="answer_c">Pilihan C</label>
                                <textarea name="answer_c" id="answer_c"></textarea>
                                <!-- <input type="text" class="form-control" placeholder="Pilihan C" name="answer_c" required> -->
                            </div>
                            <div class="mb-3">
                                <label for="answer_d">Pilihan D</label>
                                <textarea name="answer_d" id="answer_d"></textarea>
                                <!-- <input type="text" class="form-control" placeholder="Pilihan D" name="answer_d" required> -->
                            </div>
                        </div>

                        {{-- Correct Answer Input --}}
                        <div class="mb-3">
                            <label for="correct_answer" class="form-label fw-semibold">Kunci Jawaban</label>
                            <select class="form-select" id="correct_answer" name="correct_answer">
                                <option selected>Pilih jawaban yang tepat</option>
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                            </select>
                        </div>  

                        {{-- Question Explanation Input --}}
                        <div class="mb-3">
                            <label for="question_explanation" class="form-label fw-semibold">Penjelasan</label>
                            <textarea id="question_explanation" name="question_explanation"></textarea>
                        </div>

                        {{-- Submit Button --}}
                        <div class="row mt-3">
                            <div class="d-grid">
                                <button class="btn btn-yellow-normal" type="submit" name="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </main>
        </div>

        <!-- <script type="text/javascript" src="./Assets/custom.js"></script> -->
        {{-- <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            $(".btn-open").on("click", function(){
                $(".left-sidebar").addClass("active");
            });
            $(".btn-close").on("click", function(){
                $(".left-sidebar").removeClass("active");
            });
            $("#btn-close-toast").on("click", function(){
                $(".toast").removeClass("show");
            });
        </script>
        <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            CKEDITOR.replace('question',{});
            CKEDITOR.replace('answer_a',{});
            CKEDITOR.replace('answer_b',{});
            CKEDITOR.replace('answer_c',{});
            CKEDITOR.replace('answer_d',{});
            CKEDITOR.replace('question_explanation',{});
        </script>
    </body>
</html>