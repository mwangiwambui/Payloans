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
            <div class="col-lg-12 text-center">
                <div class="formArea appareaBG">
                    <form action="#" method="post" class="applicationForm row">
                        <div class="col-lg-3 col-md-4">
                            <input type="number" step="any" name="amount" placeholder="Loan amount ($)">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="purpose" placeholder="Purpose of loan">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="gender" placeholder="Gender">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="birth" placeholder="Date of birth">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="name" placeholder="Name">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="status" placeholder="Marital status">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="phone" placeholder="Phone no.">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="dependants" placeholder="Dependants">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="city" placeholder="Town/City">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="street" placeholder="Street">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="house_name" placeholder="House name">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="home_town" placeholder="Home town">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="time_address" placeholder="Time at address">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="time_address" placeholder="Time at address">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="emp_status" placeholder="Employment status">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="emp_name" placeholder="Employer name">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="emp_industrie" placeholder="Employment industry">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" name="emp_length" placeholder="Employment length">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="number" step="any" name="income" placeholder="Monthly income">
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
@endsection
