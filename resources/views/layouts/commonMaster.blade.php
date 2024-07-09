<!DOCTYPE html>
<html lang="{{ session()->get('locale') ?? app()->getLocale() }}" class="{{ $configData['style'] }}-style {{ $navbarFixed ?? '' }} {{ $menuFixed ?? '' }} {{ $menuCollapsed ?? '' }} {{ $footerFixed ?? '' }} {{ $customizerHidden ?? '' }}" dir="{{ $configData['textDirection'] }}" data-theme="{{ $configData['theme'] }}" data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{url('/')}}" data-framework="laravel" data-template="{{ $configData['layout'] . '-menu-' . $configData['theme'] . '-' . $configData['style'] }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>@yield('title') |
    {{ config('variables.templateName') ? config('variables.templateName') : 'TemplateName' }} -
    {{ config('variables.templateSuffix') ? config('variables.templateSuffix') : 'TemplateSuffix' }}</title>
  <meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
  <meta name="keywords" content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Canonical SEO -->
  <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <!-- Include Styles -->
  @include('layouts/sections/styles')

  <!-- Include Scripts for customizer, helper, analytics, config -->
  @include('layouts/sections/scriptsIncludes')
</head>

<body>

  <!-- Layout Content -->
  @yield('layoutContent')
  <!--/ Layout Content -->

  <!-- Include Scripts -->
  @include('layouts/sections/scripts')

  <!-- jQuery and Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script>
    @if(session('success'))
      toastr.success('{{ session('success') }}');
    @endif
    @if(session('error'))
      toastr.error('{{ session('error') }}');
    @endif

    // Inactivity Timer Script
    let inactivityTime = function () {
      let time;
      let maxInactivity = 10 * 60 * 1000; // 10 minute for testing

      window.onload = resetTimer;
      document.onmousemove = resetTimer;
      document.onkeypress = resetTimer;

      function showLogoutModal() {
        console.log("Inactivity detected. Showing modal.");
        // Display the modal
        $('#inactivityModal').modal('show');
      }

      function resetTimer() {
        console.log("Activity detected. Resetting timer.");
        clearTimeout(time);
        time = setTimeout(showLogoutModal, maxInactivity);
      }
    };

    window.onload = function () {
      inactivityTime();
    };

    function stayLoggedIn() {
      console.log("Stay logged in clicked.");
      $('#inactivityModal').modal('hide');
      inactivityTime();
    }

    function submitLogoutForm() {
      console.log("Logout clicked.");
      document.getElementById('logout-form').submit();
    }
  </script>

  <!-- Inactivity Modal -->
  <div class="modal fade" id="inactivityModal" tabindex="-1" role="dialog" aria-labelledby="inactivityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="inactivityModalLabel">Your Session is Expired</h5>
        </div>
        <div class="modal-body text-center">
          <p>Do you need more time?</p>
          <p>You will be logged out soon due to inactivity.</p>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-primary" onclick="stayLoggedIn()">Stay Online</button>
          <button type="button" class="btn btn-secondary" onclick="submitLogoutForm()">Logout</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Logout Form -->
  <form method="POST" id="logout-form" action="{{ route('admin.logout') }}" style="display: none;">
    @csrf
  </form>

</body>
</html>
