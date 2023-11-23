<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-junk- Register</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

  <!-- SweetAlert library -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  
  <script>
    // Check for success flash message
    @if(Session::has('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ Session::get('success') }}',
        });
    @endif

    // Check for error flash message
    @if(Session::has('error'))
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ Session::get('error') }}',
        });
    @endif
  </script>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block">
            <img style="width: 500px; height: 550px;" src="https://litbang.kemendagri.go.id/website/wp-content/uploads/2018/04/sampah-600x400.jpg" alt="Description of the image">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form action="{{ route('register.simpan') }}" method="POST" class="user">
                @csrf
                <div class="form-group">
                  <input name="nama" type="text" class="form-control form-control-user @error('nama')is-invalid @enderror" id="exampleInputName" placeholder="Name">
                  @error('nama')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <input name="alamat" type="text" class="form-control form-control-user @error('alamat')is-invalid @enderror" id="exampleInputAlamat" placeholder="Home Address">
                  @error('alamat')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-prepend">
                          <select class="custom-select" name="countryCode" style="border-top-left-radius: 25px; border-bottom-left-radius: 25px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; font-size: 12px; height: 50px;">
                              <!-- Add country codes as needed -->
                              <option value="+1">+1 (US)</option>
                              <option value="+44">+44 (UK)</option>
                              <option value="+62">+62 (Indonesia)</option>
                              <option value="+81">+81 (Japan)</option>
                              <option value="+86">+86 (China)</option>
                              <option value="+91">+91 (India)</option>
                              <option value="+52">+52 (Mexico)</option>
                              <option value="+7">+7 (Russia)</option>
                              <option value="+55">+55 (Brazil)</option>
                              <option value="+49">+49 (Germany)</option>
                              <option value="+33">+33 (France)</option>
                              <option value="+39">+39 (Italy)</option>
                              <option value="+34">+34 (Spain)</option>
                              <option value="+82">+82 (South Korea)</option>
                              <option value="+1">+1 (Canada)</option>
                              <option value="+61">+61 (Australia)</option>
                              <option value="+46">+46 (Sweden)</option>
                              <option value="+31">+31 (Netherlands)</option>
                              <option value="+41">+41 (Switzerland)</option>
                              <option value="+63">+63 (Philippines)</option>
                              <option value="+64">+64 (New Zealand)</option>
                              <option value="+55">+55 (Argentina)</option>
                              <option value="+49">+49 (Austria)</option>
                              <option value="+32">+32 (Belgium)</option>
                              <option value="+45">+45 (Denmark)</option>
                              <option value="+358">+358 (Finland)</option>
                              <option value="+852">+852 (Hong Kong)</option>
                              <option value="+353">+353 (Ireland)</option>
                              <option value="+972">+972 (Israel)</option>
                              <!-- Add more options as needed -->
                          </select>
                      </div>
                      <input name="nomor_telepon" type="tel" class="form-control form-control-user @error('nomor_telepon') is-invalid @enderror" id="exampleInputNomorTelepon" placeholder="Phone Number" pattern="[0-9]+" title="Only numeric characters are allowed" style="height: 50px">
                      @error('nomor_telepon')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                      </div>  
                    </div>
              
                <div class="form-group">
                  <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail" placeholder="Email Address">
                  @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <select name="level" class="form-control form-select-user @error('level')is-invalid @enderror"  style="font-size: 12px;border-radius: 25px; height: 50px;">
                    <option selected>Pilih Level</option>
                    <option value="user">User</option>
                    <option value="staff">Staff</option>
                    <option value="bank">Bank</option>
                  </select>
                  @error('level')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="password" type="password" class="form-control form-control-user @error('password')is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                    @error('password')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <input name="password_confirmation" type="password" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Repeat Password">
                    @error('password_confirmation')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
  <script>
    // Check for success flash message
    @if(Session::has('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ Session::get('success') }}',
        }).then(function(result) {
            if (result.isConfirmed || result.isDismissed) {
                window.location.href = '{{ route('login') }}';
            }
        });
    @endif

    // Check for error flash message
    @if(Session::has('error'))
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ Session::get('error') }}',
        });
    @endif
</script>


</body>

</html>