@extends('layout')
@section('content')
      <!-- partial -->
      <div class="main-panel">  
        <div class="content-wrapper">
          <div class="page-header">
              <p class="mb-1 text-black">Detail Data Kandidat Magang</p>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Daftar kandidat </a></li>
                      <li class="breadcrumb-item active" aria-current="page">Lowongan Magang</li>
                  </ol>
              </nav>
          </div>
      
          <!-- ---------------------------------------------------------------------- -->

          
      
          <div class="row">
              <div class="col-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title"> Data Diri </h4>
                          <form class="form-sample" action="{{ route('form_registrasi.update', $candidate->id) }}" method="POST">
                            @csrf
                            <input name="_method" type="hidden" value="PUT">

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Nama Lengkap</label><span class="text-danger">*</span>
                                          <input name="name" value="{{ $candidate->name }}" type="text" class="form-control" id="#" placeholder="Ahmad Syaifullah"  >
                                      </div>
                                      <div class="form-group">
                                        <label for="#">Jenis Kelamin</label><span class="text-danger">*</span>
                                        <div class="custom-control custom-radio">
                                            <input {{ $candidate->gender == "L" ? 'checked' : '' }} value="L" type="radio" id="laki-laki" name="gender" class="custom-control-input">
                                            <label class="custom-control-label" for="laki-laki">Laki-Laki</label>
                                          </div>
                                          <div class="custom-control custom-radio">
                                            <input {{ $candidate->gender == "P" ? 'checked' : '' }} value="P" type="radio" id="perempuan" name="gender" class="custom-control-input">
                                            <label class="custom-control-label" for="perempuan">Perempuan</label>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tempat Lahir</label><span class="text-danger">*</span>
                                          <input name="city_of_birth" value="{{ $candidate->city_of_birth }}" type="text" class="form-control" id="#" placeholder="Tempat Lahir"  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tanggal Lahir</label><span class="text-danger">*</span>
                                          <input value="{{ $candidate->date_of_birth }}" name="date_of_birth" type="date" class="flatpickr flatpickr-input form-control" id="checkin-date">
                                      </div>
                                      <div class="form-group">
                                        <label for="#">Agama</label><span class="text-danger">*</span>
                                        {!! Form::select('religion_id', $religion, $candidate->religion_id, ['class' => 'form-control', 'style' => 'border: 1px solid #c9c8c8;color: black;']) !!}
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Email</label><span class="text-danger">*</span>
                                          <input name="email" value="{{ $candidate->email }}" type="text" class="form-control" id="#" placeholder=" Email"  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Nomor HP</label><span class="text-danger">*</span>
                                          <input name="phone" value="{{ $candidate->phone }}" type="text" class="form-control" id="#" placeholder="Nomor HP "  >
                                      </div>
      
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Nomor KTP </label><span class="text-danger">*</span>
                                          <input name="identity_number" value="{{ $candidate->identity_number }}" type="text" class="form-control" id="#" placeholder="Nomor KTP "  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> File KTP</label><span class="text-danger">*</span>
                                          <input disabled name="identity_file" value="{{ $candidate->identity_file }}" type="file" class="form-control" id="#" placeholder="File KTP "  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Nama Bank </label><span class="text-danger">*</span>
                                          {!! Form::select('bank_id', $bank, $candidate->bank_id, ['class' => 'form-control', 'style' => 'border: 1px solid #c9c8c8;color: black;']) !!}
                                        </div>
                                      <div class="form-group">
                                          <label for="#">Nomor Bank Akun </label><span class="text-danger">*</span>
                                          <input name="bank_account" value="{{ $candidate->bank_account }}" type="text" class="form-control" id="#" placeholder="Nomor Bank Akun "  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Alamat Domisili </label><span class="text-danger">*</span>
                                          <textarea name="address" class="form-control" id="#" rows="6"
                                              placeholder="Alamat Domisili"  >{{ $candidate->address }}</textarea>
                                      </div>
                                  </div>
                              </div><br>
                              <h4 class="card-title"> Data Pendidikan </h4>
                                  <div class="row ">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Pendidikan</label><span class="text-danger">*</span>
                                        {!! Form::select('education_id', $education, ['' => 'Pilih Pendidikan'], ['class' => 'form-control', 'style' => 'border: 1px solid #c9c8c8;color: black;']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Universitas</label><span class="text-danger">*</span>
                                        {!! Form::select('university', $university, [null => 'Pilih Universitas'], ['class' => 'form-control', 'style' => 'border: 1px solid #c9c8c8;color: black;']) !!}
                                    </div>
                                      <div class="form-group">
                                          <label for="#"> Tahun Lulus</label><span class="text-danger">*</span>
                                          <div class="form-group">
                                              <div class="input-group" name="#">
                                                  <input name="graduation_year" value="{{ $candidate->graduation_year }}" type="text" class="form-control mr-2" id="#" placeholder="Tahun Lulus">
                                                      <div class="form-check ">
                                                          <label class="form-check-label">
                                                            <input name="in_collage" {{ $candidate->in_collage == 1 ? 'checked' : ''  }} type="checkbox" class="form-check-input"> Masih Kuliah
                                                        </label>
                                                      </div>
                                                  
                                              </div>
                                          </div>
      
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Jurusan </label><span class="text-danger">*</span>
                                          <input name="major" value="{{ $candidate->major }}" type="text" class="form-control" id="#" placeholder="Jurusan">
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Semester</label><span class="text-danger">*</span>
                                          <input name="semester" value="{{ $candidate->semester }}" type="text" class="form-control" id="#" placeholder="Semester">
                                      </div>
                                  </div><br>
                                  </div>
                                  <h4 class="card-title"> Pengalaman Organisai </h4>
                                  @foreach ($candidate->organization as $item)
                                      
                                  <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Organisasi</label><span class="text-danger">*</span>
                                          <input name="org_name" value="{{ $candidate->organization->org_name }}" type="text" class="form-control" id="#" placeholder="organisasi">
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tahun</label><span class="text-danger">*</span>
                                          <input name="year" value="{{ $candidate->organization->year }}" type="text" class="form-control" id="#" placeholder="tahun">
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Jabatan</label><span class="text-danger">*</span>
                                          <input name="position" value="{{ $candidate->organization->position }}" type="text" class="form-control" id="#" placeholder="jabatan">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Deskripsi Kegiatan </label><span class="text-danger">*</span>
                                          <textarea name="description" class="form-control" id="exampleTextarea1" rows="6">{{ $candidate->organization->description }}</textarea>
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> File</label>
                                          <input disabled name="file" value="{{ $candidate->organization->file }}" type="file" class="form-control" id="#" placeholder="">
                                      </div>
                                  </div>
                                  </div><hr>
                                  @endforeach
                                  <h4 class="card-title"> Keahlian yang Dimiliki </h4>
                                  <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="#">Keahlian</label><span class="text-danger">*</span>
                                          <textarea name="skill" class="form-control" id="exampleTextarea1" rows="10">{{ $candidate->skill }}</textarea>
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title">Lain - Lain </h4>
                                  <div class="row ">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">File CV</label><span class="text-danger">*</span>
                                          <input disabled name="file_cv" value="{{ $candidate->file_cv }}" type="text" class="form-control" id="#" placeholder="File CV.pdf">
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Past Photo</label><span class="text-danger">*</span>
                                          <input disabled name="file_photo" value="{{ $candidate->file_photo }}" type="text" class="form-control" id="#" placeholder="Photo.jpg">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#"> Portofolio</label>
                                          <input disabled name="file_portfolio" value="{{ $candidate->file_portfolio }}" type="text" class="form-control" id="#" placeholder="Portofolio.pdf">
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title">Mengenal Jasamarga dari ? </h4>
                                  <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input {{ $candidate->source_information_id == 1 ? 'checked' : '' }} type="radio" class="form-check-input" name="source_information_id" id="source_information_id1" 
                                              value="1">
                                              Internet
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input {{ $candidate->source_information_id == 4 ? 'checked' : '' }} type="radio" class="form-check-input" name="source_information_id" id="source_information_id1" 
                                              value="4">
                                              Kampus
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input {{ $candidate->source_information_id == 2 ? 'checked' : '' }} type="radio" class="form-check-input" name="source_information_id" id="source_information_id1" 
                                              value="2">
                                              Instagram
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input {{ $candidate->source_information_id == 5 ? 'checked' : '' }} type="radio" class="form-check-input" name="source_information_id" id="source_information_id1" 
                                              value="5">
                                              Facebook
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input {{ $candidate->source_information_id == 3 ? 'checked' : '' }} type="radio" class="form-check-input" name="source_information_id" id="source_information_id1" 
                                              value="3">
                                              Twitter
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input {{ $candidate->source_information_id == 6 ? 'checked' : '' }} type="radio" class="form-check-input" name="source_information_id" id="source_information_id1" 
                                              value="6">
                                              Lain-lain
                                              <i class="input-helper"></i></label>
                                          </div>
                                      
                                          <input type="text" class="form-control" id="#" placeholder="">
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title">Data Akun Magang </h4>
                                  <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Lowongan</label><span class="text-danger">*</span>
                                          <input value="{{ ($candidate->internship == null ? '' : $candidate->internship->vacancy_internship) }}" name="vacancy_internship" type="text" class="form-control" id="#" placeholder="Lowongan"  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tipe Magang </label><span class="text-danger">*</span>
                                          <input value="{{ ($candidate->internship == null ? '' : $candidate->internship->type_internship) }}" name="type_internship" type="text" class="form-control" id="#" placeholder="Tipe Magang"  >
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#"> Periode Magang</label>
                                          <input value="{{ ($candidate->internship == null ? '' : $candidate->internship->periode_internship) }}" name="periode_internship" type="text" class="form-control" id="#" placeholder="Periode Magang"  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Lokasi Magang</label>
                                          <input value="{{ ($candidate->internship == null ? '' : $candidate->internship->location_internship) }}" name="location_internship" type="text" class="form-control" id="#" placeholder="Lokasi Magang "  >
                                      </div>
                                  </div>
                                  </div><br>
                              <h4 class="card-title">Proses Seleksi </h4>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Unit Kerja</label><span class="text-danger">*</span>
                                          <input value="{{ $candidate->passed == null ? '' : $candidate->passed->unit }}" name="unit" type="text" class="form-control" id="#" placeholder=""  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Hasil Assesmen </label><span class="text-danger">*</span>
                                          <input value="{{ $candidate->passed == null ? '' : $candidate->passed->assesment }}" name="assesment" type="text" class="form-control" id="#" placeholder=""  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Rangkin</label><span class="text-danger">*</span>
                                          <input value="{{ $candidate->passed == null ? '' : $candidate->passed->score }}" name="score" type="text" class="form-control" id="#" placeholder=""  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Hasil</label><span class="text-danger">*</span>
                                          <input value="{{ $candidate->passed == null ? '' : $candidate->passed->result }}" name="result" type="text" class="form-control" id="#" placeholder=""  >
                                      </div>
                                  </div>
                                </div><br>
                                <div class="float-right">
                                    <a href="{{ url('data_activity') }}" type="button" class="btn btn-dark mb-2  mr-2">Kembali</a>
                                    <button type="submit" class="btn btn-primary mb-2 mr-2">Simpan Perubahan</button>
                                    {{-- <a href="{{ url('data_activity') }}" type="button" class="btn btn-primary mb-2 mr-2">Simpan Perubahan</a> --}}
                                </div>
                            </form>
                      </div>
                  </div>
              </div>
          </div>
      
          <!-- ---------------------------------------------------------------------- -->
      
      </div>
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
@endsection