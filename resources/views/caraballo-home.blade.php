@extends('layouts.main')

@section('page-title', 'Welcome')

@section('page-fonts')
    {{-- Page Fonts Go Here --}}
@endsection

@section('page-styles')
    <style>
        /* #checkbox:checked + label .switch-ball
                            {
                                background-color: white;
                                transform: translateX(24px);
                                transition: transform 0.3s linear;
                            } */
    </style>
@endsection

@section('header-scripts')
    {{-- Page Header Scripts Go Here --}}
@endsection

@section('content')
    <!-- Content
                        ============================================= -->
    <!-- <div class="flex items-center justify-center mx-auto absolute top-5 right-0 left-1/3">
                        </div>
                        <div class="flex justify-end items-center space-x-2 mx-auto relative">
                          <span class="text-xs font-extralight">Light </span>
                          <div>
                          <input type="checkbox" name="" id="checkbox" class="hidden" />
                          <label for="checkbox" class="cursor-pointer">
                            <div class="w-9 h-5 flex items-center bg-gray-300 rounded-full p2">
                              <div class="w-4 h-4 bg-white rounded-full shadow"></div>
                            </div>
                          </label>
                        </div>
                          <span class="text-xs font-semibold">Dark</span>
                        </div>    -->
    <div class="flex items-center justify-center h-screen bg-white">
        <img src="images/CaraballoLegalLogo.png" width="50%" height="50%" alt="Caraballo Legal"
            title="Caraballo Legal">
    </div>
    <div class="text-center text-5xl cl-text">CARABALLO LEGAL</div>
    <div class="flex items-center justify-center text-center">1825 NW Corporate Blvd<br>Suite 110<br>Boca Raton, FL 33431
    </div><br>
    <div class="flex items-center justify-center">Phone: (561) 834-1784</div>
    <div class="flex items-center justify-center">Fax: (561) 834-1785</div><br>
    <div class="flex items-center justify-center">Email: rafael@caraballolegal.com</div><br><br>

    <!-- #content end -->
@endsection

@push('body-scripts')
    {{-- <script>
      const checkbox = document.querySelector("#checkbox");
      const html = document.querySelector("html");

      const toggleDarkMode = function () {
        checkbox.checked
        ? html.classList.add("dark")
        : html.classList.remove("dark");
      }

    //calling the function directly

      toggleDarkMode();
      checkbox.addEventListener("click",toggleDarkMode);

</script> --}}
@endpush
