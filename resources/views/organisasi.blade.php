@extends('master')

@section('section')
    <h1 class="serv text-center mt-3">
        <b>Struktur Keanggotaan {{ request('tahun', date('Y')) }}/{{ request('tahun', date('Y')) + 1 }}</b>
    </h1>

    <section>

        <!-- Dropdown untuk memilih tahun -->
        <form action="{{ url('/organisasi') }}" method="GET" class="text mb-5">
            <label for="tahun" class="form-label" style="margin-left: 40px"><b>Pilih Tahun</b></label>
            <select name="tahun" id="tahun" class="form-select w-25 d-inline" onchange="this.form.submit()">
                @foreach ($tahunList as $item)
                    <option value="{{ $item }}"
                        {{ $tahun == $item || (!$tahun && $item == '2024') ? 'selected' : '' }}>
                        {{ $item }}/{{ $item + 1 }}
                    </option>
                @endforeach
            </select>
        </form>



        <hr>
        <div class="mt-5 mb-5">
            <h2 class="serv text-body text-center mt-5 mb-5"><b>Pembina</b></h2>
            <div class="serv text-body">
                <ul class="list-unstyled d-flex flex-wrap justify-content-around">
                    @foreach ($organisasi->where('divisi', 'Pembina') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>

        <hr>

        <div class="mt-5 mb-5">
            <h2 class="serv text-body text-center mt-5 mb-5"><b>Majelis Permusyawaratan Himpunan</b></h2>
            <div class="serv text-body">
                <ul>
                    @foreach ($organisasi->where('divisi', 'MPH') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
        </ul>



        <div class="mt-5 mb-5">
            <hr />
            <h2 class="serv text-body text-center"><b>Badan Pengurus Harian</b></h2>
            <div class="serv text-body">
                <ul>
                    @foreach ($organisasi->where('jabatan', 'Ketua')->where('divisi', 'BPH') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($organisasi->where('jabatan', ' Wakil Ketua') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach

                </ul>


                <ul>
                    @foreach ($organisasi->where('divisi', 'BPH')->where('jabatan', 'Sekretaris') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($organisasi->where('divisi', 'BPH')->where('jabatan', 'Wakil Sekretaris') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($organisasi->where('divisi', 'BPH')->where('jabatan', 'Bendahara') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($organisasi->where('divisi', 'BPH')->where('jabatan', 'Wakil Bendahara') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>


        <div class="mt-5 mb-5">
            <hr />
            <h2 class="serv text-body text-center mt-5 mb-5"><b>Divisi Riset dan Teknologi</b></h2>
            <div class="serv text-body">
                <ul>
                    @foreach ($organisasi->where('divisi', 'Ristek')->where('jabatan', 'Kepala Divisi') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($organisasi->where('divisi', 'Ristek')->where('jabatan', 'Wakil Kepala Divisi') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach

                </ul>


                <ul>
                    @foreach ($organisasi->where('divisi', 'Ristek')->where('jabatan', 'Anggota') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-5 mb-5">
            <hr />
            <h2 class="serv text-body text-center mt-5 mb-5"><b>Divisi Pendidikan</b></h2>
            <div class="serv text-body">
                <ul>
                    @foreach ($organisasi->where('divisi', 'Pendidikan')->where('jabatan', 'Kepala Divisi') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($organisasi->where('divisi', 'Pendidikan')->where('jabatan', 'Wakil Kepala Divisi') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach

                </ul>

                <ul>
                    @foreach ($organisasi->where('divisi', 'Pendidikan')->where('jabatan', 'Anggota') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>

        <hr>
        <h2 class="serv text-body text-center mt-5 mb-5"><b>Divisi Komunikasi dan Informasi</b></h2>
        <div class="serv text-body">
            <ul>
                @foreach ($organisasi->where('divisi', 'Kominfo')->where('jabatan', 'Kepala Divisi') as $item)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                            alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                        <div class="card-body">
                            <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                            <p class="text-center card-text">{{ $item->nama }}</p>
                        </div>
                    </div>
                @endforeach
                @foreach ($organisasi->where('divisi', 'Kominfo')->where('jabatan', 'Wakil Kepala Divisi') as $item)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                            alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                        <div class="card-body">
                            <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                            <p class="text-center card-text">{{ $item->nama }}</p>
                        </div>
                    </div>
                @endforeach


            </ul>

            <ul>
                @foreach ($organisasi->where('divisi', 'Kominfo')->where('jabatan', 'Anggota') as $item)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                            alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                        <div class="card-body">
                            <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                            <p class="text-center card-text">{{ $item->nama }}</p>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
        </div>

        <hr>
        <h2 class="serv text-body text-center mt-5 mb-5"><b>Divisi Minat dan Bakat</b></h2>
        <div class="serv text-body">
            <ul>
                @foreach ($organisasi->where('divisi', 'Minat')->where('jabatan', 'Kepala Divisi') as $item)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                            alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                        <div class="card-body">
                            <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                            <p class="text-center card-text">{{ $item->nama }}</p>
                        </div>
                    </div>
                @endforeach

                @foreach ($organisasi->where('divisi', 'Minat')->where('jabatan', 'Wakil Kepala Divisi') as $item)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                            alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                        <div class="card-body">
                            <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                            <p class="text-center card-text">{{ $item->nama }}</p>
                        </div>
                    </div>
                @endforeach

            </ul>

            <ul>
                @foreach ($organisasi->where('divisi', 'Minat')->where('jabatan', 'Anggota') as $item)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                            alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                        <div class="card-body">
                            <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                            <p class="text-center card-text">{{ $item->nama }}</p>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
        </div>

        <div class="mt-5 mb-5">
            <hr />
            <h2 class="serv text-body text-center mt-5 mb-5"><b>Divisi Dana dan Usaha</b></h2>
            <div class="serv text-body">
                <ul class>
                    @foreach ($organisasi->where('divisi', 'Danus')->where('jabatan', 'Kepala Divisi') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($organisasi->where('divisi', 'Danus')->where('jabatan', 'Wakil Kepala Divisi') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach

                </ul>

                <ul>
                    @foreach ($organisasi->where('divisi', 'Danus')->where('jabatan', 'Anggota') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-5 mb-5">
            <hr />
            <h2 class="serv text-body text-center mt-5 mb-5"><b>Divisi Hubungan Masyarakat</b></h2>
            <div class="serv text-body">
                <ul>
                    @foreach ($organisasi->where('divisi', 'Humas')->where('jabatan', 'Kepala Divisi') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($organisasi->where('divisi', 'Humas')->where('jabatan', 'Wakil Kepala Divisi') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach

                </ul>

                <ul>
                    @foreach ($organisasi->where('divisi', 'Humas')->where('jabatan', 'Anggota') as $item)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('asset/img/Organisasi/' . $item->gambar) }}"
                                alt="{{ $item->gambar }}" style="width: 18rem; height: 18rem;">
                            <div class="card-body">
                                <p class="text-center"><strong>{{ $item->jabatan }}</strong></p>
                                <p class="text-center card-text">{{ $item->nama }}</p>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-5 mb-5">
            <hr />
        </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
@endsection
