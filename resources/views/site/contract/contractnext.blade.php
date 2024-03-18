<!-- commit by jhonkings -->
@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/lab-reservation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightpick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightpick_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contract.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="bg-image d-flex justify-content-center align-items-center">
            <img src="https://lh3.googleusercontent.com/UVuj6-8yG1CVJlRLNFLkXZDSkUX4oJr_XnueT-DQgFrkTyGbvIgl3gNA3WD4qWQcGy_cd0Dfrj07ig_ZnbED5UH5vk0rtkPRoM6eChvl5L6RYv5TEZZ3Z7vT3QWF57ABzQ=w302" style="width: 57.5%;" alt="">
        </div>
        <div class="row d-flex justify-content-center visible">
            <div class="main-container">
                <!-- <div> -->
                    <div class="line-top mt-4"></div>
                    <div class="col text-center title bg-white pl-4 pb-2">GENERAL CONTRACT FOR SERVICES</div>
                    <div class="bg-white pl-4 pr-4">
                        This Contract for Services is made effective as of February 4, 2013, by and 
                        between <b>selected lab</b>, and Telcron LLC of P.O. Box 1398,Montclair, New Jersey 
                        07042 (NJ Registration id: 0600386534).
                    </div>
                    <div class="u-line"></div>
                    <div class="bg-white pl-4 pr-4 pt-2 pb-2">
                        <span><b>jhonkings0403@gmail.com</b></span>
                        <a href="https://accounts.google.com/AccountChooser?continue=https://docs.google.com/forms/d/e/1FAIpQLSdeL0mmoyMxb2Q-FAVwqTV44IgzXV8farOIVMSqmaIRiGKKvQ/viewform?vc%3D0%26c%3D0%26w%3D1%26flr%3D0%26pli%3D1&service=wise">Switch account</a>
                        <!-- <img src="https://ssl.gstatic.com/docs/forms/qp_sprite194.svg" alt=""> -->
                        <div class="d-flex">
                            <div class="img" aria-hidden="true">ss</div>
                            <div>Not shared</div>
                        </div>
                    </div>
                    <div class="u-line"></div>
                    <div class="bg-white radius-bottom">
                        <div class="text-danger pt-2 pb-2 pl-4">* Indicates required question</div>
                    </div>
                <!-- </div> -->
                <form class="needs-validation" novalidate>
                    <div class="service mt-4">
                        Service Recipient:
                    </div>
                    <div class="service-revert">
                        <b>selected lab</b>
                    </div>
                    <div class="sign radius-top radius-bottom pt-4 mt-4 d-block">
                        <label for="validationCustom03" class="">Please sign name here.*</label>
                        <input type="text" class=" form-control input-sign" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a sign name.
                        </div>
                    </div>
                    <div class="sign radius-top radius-bottom pt-4 mt-4 d-block">
                        <label for="validationCustom04" class="">Please select date here.*</label>
                        <p class="date">Date</p>
                        <input type="date" class=" form-control input-date w-25" id="validationCustom04" placeholder="mm/dd/yyyy" required>
                        <div class="invalid-feedback">
                            Please provide a valid date.
                        </div>
                    </div>
                    <div class="btn-group mt-2">
                        <div class="group">
                            <div>
                                <a href="{{route('contract')}}">
                                    <button type="button" class="next-btn">Back</button>
                                </a>
                                <button type="submit" class="submit-btn">Submit</button>
                            </div>
                            <button type="button" class="btn-clear">Clear form</button>
                        </div>
                    </div>
                </form>
                    <div class="btn-group">
                        <div class="sub-letter">Never submit passwords through Google Forms.</div>
                        <div class="sub-letter text-center text-center">Never submit passwords through Google Forms.
                            <a href="">Report Abuse</a>-
                            <a href="">Terms of Service</a>-
                            <a href="">Privacy Policy</a>
                        </div>
                        <div class="sub-title">
                            <a href="https://www.google.com/forms/about/?utm_source=product&utm_medium=forms_logo&utm_campaign=forms">
                                <img class="g-img" src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_dark_clr_74x24px.svg" alt="Google" height="24px" width="74px">
                                &nbsp;<span class="form">Forms</span>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
@endsection
@section('js')
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'
    
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')
    
      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
    
            form.classList.add('was-validated')
          }, false)
        })
    })()

</script>
@endsection

