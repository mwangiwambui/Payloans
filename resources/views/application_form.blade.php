@extends('layouts.applayout')
@section('content')
    <body class="bg_right">
    <!-- Page Banner -->
    <section class="pagebanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bannerTitle text-left">
                        <h2>Application Form</h2>
                        <p>We are here to help you when you need your<br>financial support, then we are help you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Banner -->

    <!-- Common Section -->
    <section class="commonSection applicationPage">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="formArea appareaBG">
                        <form action="#" method="post" class="form-row needs-validation" novalidate>
                            <div class="form-group col-md-6">
                                <label for="inputState">Title</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Mr</option>
                                    <option>Mrs</option>
                                    <option>Ms</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please choose a title.
                                </div>
                            </div>
                            <div class="form-group col-md-12">

                                <fieldset class="form-group">
                                    <label>Marital Status</label>
                                    <div class="row">

                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    First radio
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Second radio
                                                </label>
                                            </div>
                                            <div class="form-check disabled">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                                <label class="form-check-label" for="gridRadios3">
                                                    Third disabled radio
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Are you self-employed? </label>
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                   No
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </fieldset>

                            </div>


                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="number" step="any" name="amount" placeholder="Loan amount ($)">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="purpose" placeholder="Purpose of loan">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="gender" placeholder="Gender">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="birth" placeholder="Date of birth">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="name" placeholder="Name">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="email" name="email" placeholder="Email">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="status" placeholder="Marital status">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="phone" placeholder="Phone no.">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="dependants" placeholder="Dependants">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="city" placeholder="Town/City">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="street" placeholder="Street">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="house_name" placeholder="House name">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="home_town" placeholder="Home town">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="time_address" placeholder="Time at address">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="time_address" placeholder="Time at address">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="emp_status" placeholder="Employment status">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="emp_name" placeholder="Employer name">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="emp_industrie" placeholder="Employment industry">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="text" name="emp_length" placeholder="Employment length">
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>
                                    <input type="number" step="any" name="income" placeholder="Monthly income">
                                </label>
                            </div>
                            <div class="col-lg-12  col-md-12">
                                <button name="submit" type="submit" id="submit" class="common_btn">Apply Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Common Section -->
    </body>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection
