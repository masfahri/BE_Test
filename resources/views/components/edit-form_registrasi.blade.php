@extends('layout')
@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Forms
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic elements</li>
              </ol>
            </nav>
          </div>
            <div class="row">

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                  <form action="{{ route('form_registrasi.store') }}" method="post">
                    @csrf
                <div class="card-body">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Nama Lengkap</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#"
                                    placeholder="Ahmad Syaifullah" name="name" >
                            </div>
                            <div class="form-group">
                                <label for="#">Jenis Kelamin</label><span class="text-danger">*</span>
                                <div class="custom-control custom-radio">
                                    <input value="L" type="radio" id="laki-laki" name="gender" class="custom-control-input">
                                    <label class="custom-control-label" for="laki-laki">Laki-Laki</label>
                                  </div>
                                  <div class="custom-control custom-radio">
                                    <input value="P" type="radio" id="perempuan" name="gender" class="custom-control-input">
                                    <label class="custom-control-label" for="perempuan">Perempuan</label>
                                  </div>
                            </div>
                            <div class="form-group">
                                <label for="#">Tanggal Lahir</label><span class="text-danger">*</span>
                                <input name="date_of_birth" type="date" class="flatpickr flatpickr-input form-control" id="checkin-date">
                            </div>
                            <div class="form-group">
                                <label for="#">Agama</label><span class="text-danger">*</span>
                                {!! Form::select('religion_id', $religion, '', ['class' => 'form-control', 'style' => 'border: 1px solid #c9c8c8;color: black;']) !!}
                            </div>
                            <div class="form-group">
                                <label for="#">Email</label><span class="text-danger">*</span>
                                <input name="email" type="email" class="form-control" id="#" placeholder=" Email">
                            </div>
                            <div class="form-group">
                                <label for="#">Nomor HP</label><span class="text-danger">*</span>
                                <input type="text" name="phone" class="form-control" id="#" placeholder="Nomor HP ">
                            </div>
                            <div class="form-group">
                                <label for="#">Twitter</label><span class="text-danger"></span>
                                <input name="twitter" type="text" class="form-control" id="#" placeholder="Twitter">
                            </div>
                            <div class="form-group">
                                <label for="#">Facebook</label><span class="text-danger"></span>
                                <input name="facebook" type="text" class="form-control" id="#" placeholder="Facebook ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Nomor KTP </label><span class="text-danger">*</span>
                                <input name="identity_number" type="text" class="form-control" id="#" placeholder="Nomor KTP ">
                            </div>
                            <div class="form-group">
                                <label for="#"> File KTP</label><span class="text-danger">*</span>
                                <input name="identity_file" type="file" class="form-control" id="#" placeholder=" KTP ">

                            </div>
                            <div class="form-group">
                                <label for="#">Nama Bank </label><span class="text-danger">*</span>
                                {!! Form::select('bank_id', $bank, ['' => 'Pilih Bank'], ['class' => 'form-control', 'style' => 'border: 1px solid #c9c8c8;color: black;']) !!}
                            </div>
                            <div class="form-group">
                                <label for="#">Nomor Bank Akun </label><span class="text-danger">*</span>
                                <input name="bank_account" type="text" class="form-control" id="#"
                                    placeholder="Nomor Bank Akun ">
                            </div>
                            <div class="form-group">
                                <label for="#">Alamat Domisili </label><span class="text-danger">*</span>
                                <textarea name="address" class="form-control" id="#" rows="8"
                                    placeholder="Alamat Domisili"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="#">Instagram</label><span class="text-danger"></span>
                                <input name="instagram" type="text" class="form-control" id="#" placeholder="Instagram">
                            </div>
                            <div class="form-group">
                                <label for="#">Linked In</label><span class="text-danger"></span>
                                <input name="linkedin" type="text" class="form-control" id="#" placeholder="Linked In ">
                            </div>
                        </div>
                    </div>
                    <br>
                    <h4 class="card-title"> Data Pendidikan </h4>
                    <div class="row mb-4">
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
                                        <input name="graduation_year" type="text" class="form-control mr-2" id="#"
                                            placeholder="Tahun Lulus">
                                        <div class="custom-control custom-checkbox">
                                            <input name="in_collage" type="checkbox" class="custom-control-input"
                                                id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Masih
                                                Kuliah</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Jurusan </label><span class="text-danger">*</span>
                                <input name="major" type="text" class="form-control" id="#" placeholder="Jurusan">
                            </div>
                            <div class="form-group">
                                <label for="#"> Semester</label><span class="text-danger">*</span>
                                <input  type="text" class="form-control" id="#" placeholder="Semester">
                            </div>
                        </div><br>
                    </div>
                    
                    <div class="controls mt-3"> 
                        <div class="entry ">
                            <h4 class="card-title mt-5"> Pengalaman Organisai </h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="#">Organisasi</label><span class="text-danger">*</span>
                                                <input name="org_name" type="text" class="form-control" id="#" placeholder="organisasi">
                                            </div>
                                            <div class="form-group">
                                                <label for="#">Tahun</label><span class="text-danger">*</span>
                                                <input name="year" type="text" class="form-control" id="#" placeholder="tahun">
                                            </div>
                                            <div class="form-group">
                                                <label for="#">Jabatan</label><span class="text-danger">*</span>
                                                <input name="position" type="text" class="form-control" id="#" placeholder="jabatan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="#">Deskripsi Kegiatan </label><span class="text-danger">*</span>
                                                <textarea name="description" class="form-control" id="exampleTextarea1" rows="6"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="#"> File</label>
                                                <input name="org_file" type="file" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                <span class="input-group-btn float-right">
                                    <button class="btn btn-success btn-sm btn-add" type="button"> Tambah Organisasi
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                        </div>
                    </div><br>
                    <h4 class="card-title"> Keahlian yang Dimiliki </h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="#">Keahlian (Pisahkan dengan koma (,))</label><span class="text-danger">*</span>
                                <textarea name="Skill" class="form-control" id="exampleTextarea1" rows="10"></textarea>
                            </div>
                        </div>
                    </div><br>
                    <h4 class="card-title">Lain - Lain </h4>
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">File CV</label><span class="text-danger">*</span>
                                <input name="file_cv" type="file" class="form-control" id="#" placeholder="File CV.pdf">
                            </div>
                            <div class="form-group">
                                <label for="#">Past Photo</label><span class="text-danger">*</span>
                                <input name="file_photo" type="file" class="form-control" id="#" placeholder="Photo.jpg">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#"> Portofolio</label>
                                <input name="file_portfolio" type="file" class="form-control" id="#" placeholder="Portofolio.pdf">
                            </div>
                        </div>
                    </div><br>
                    <h4 class="card-title">Mengenal Jasamarga dari ? </h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input name="source_information_id" type="radio" id="customRadio1" name="customRadio"
                                            class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="customRadio1">Internet</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input name="source_information_id" type="radio" id="customRadio2" name="customRadio"
                                            class="custom-control-input" value="4">
                                        <label class="custom-control-label"
                                            for="customRadio2">Kampus</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input name="source_information_id" type="radio" id="customRadio3" name="customRadio"
                                            class="custom-control-input" value="2">
                                        <label class="custom-control-label"
                                            for="customRadio3">Instagram</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input name="source_information_id" type="radio" id="customRadio4" name="customRadio"
                                            class="custom-control-input" value="5">
                                        <label class="custom-control-label"
                                            for="customRadio4">facebook</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input name="source_information_id" type="radio" id="customRadio5" name="customRadio"
                                            class="custom-control-input" value="3">
                                        <label class="custom-control-label"
                                            for="customRadio5">Twitter</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input name="source_information_id" type="radio" id="customRadio6" name="customRadio"
                                            class="custom-control-input" value="6">
                                        <label class="custom-control-label"
                                            for="customRadio6">Lain-lain</label>
                                    </div>
                                </div>
                                <input  type="text" class="form-control" id="#" placeholder="">
                            </div>
                        </div>
                    </div><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input  type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">I Accept <a href="" class="text-primary">Terms And Condition</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit">asdasda</button>
                        <a href="{{ url('data_activity') }}" class="btn btn-outline-primary">Kirim Lamaran <i class="mdi mdi-send"></i></a>
                    </div>
                </form>
            <!--end form-->
            </div>
                  
                </div>
              </div>
            </div>
           
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a
                      href="https://www.jasamarga.com/" target="_blank">© PT Jasa Marga (Persero)</a>. All
                  rights
                  reserved.</span>
              <span class="float-none float-sm-right d-block text-muted  text-center">Suported by Information
                  Technology
                  Group </span>
          </div>
      </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
 @endsection
