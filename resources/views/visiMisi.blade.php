@extends('master')

@section('section')
    <div class="bg-light">
        <!-- Bagian dengan Background Gambar -->
        <div class="py-5 text-center text-black"
            style="
                background-image: url('/asset/img/pemandangan_4.jpg'); 
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                min-height: 300px; 
                display: flex;
                justify-content: center;
                align-items: center;
            ">
            <h1 class="p-5 rounded-5"
                style=" 
               display: inline-block;
               font-size: 3rem;
               font-weight: bold;
               position: absolute;
               bottom: 260px;
               left: 10px;">
                VISI & MISI
            </h1>

        </div>

        <!-- Bagian Konten -->
        <div class="container py-5">
            <!-- VISI -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <fieldset class="border border-primary rounded-3 p-4 bg-white shadow-sm">
                        <legend class="float-none w-100 text-white rounded py-3 px-4"
                            style="background: linear-gradient(90deg, rgba(0, 51, 102, 1) 0%, rgba(0, 153, 255, 1) 100%);">
                            VISI
                        </legend>
                        <p><b>{{ $visi[0]->visi }}</b></p>
                    </fieldset>
                </div>
            </div>

            <!-- MISI -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <fieldset class="border border-primary rounded-3 p-4 bg-white shadow-sm">
                        <legend class="float-none w-100 text-white rounded py-3 px-4"
                            style="background: linear-gradient(90deg, rgba(0, 51, 102, 1) 0%, rgba(0, 153, 255, 1) 100%);">
                            MISI
                        </legend>
                        <ol>
                            @foreach ($misi as $item)
                                <li>
                                    <b>{{ $item->misi }}</b>
                                </li>
                            @endforeach
                        </ol>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
@endsection
