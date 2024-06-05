@extends('layouts.app')

@section('content')
<div class="container" style="font-family: 'Helvetica Neue', sans-serif; color: #333;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5" style="box-shadow: 0 10px 20px rgba(0,0,0,0.15); border-radius: 15px; overflow: hidden;">
                <div class="card-header" style="background: linear-gradient(90deg, #ff7e5f, #feb47b); color: white; text-align: center; font-size: 1.8em; padding: 1rem;">
                    {{ __('PNC FOOD PARK MANAGEMENT SYSTEM') }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert" style="font-size: 1.2em;">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center mb-4" style="font-size: 1.2em; color: #555; line-height: 1.5;">
                        <p>Welcome to the PNC Food Park Management System. Elevate your restaurant operations with our state-of-the-art management tools. Streamline workflows, enhance customer experiences, and gain actionable insights.</p>
                    </div>

                    <div class="row text-center" style="margin-top: 2rem;">

                        <div class="col-sm-4" style="margin-bottom: 1.5rem;">
                            <a href="/management" style="text-decoration: none; color: #343a40;">
                                <h4 style="font-size: 1.3em; margin-bottom: 0.7rem;">Management</h4>
                                <img width="60px" src="{{ asset('images/management.svg') }}" style="margin-bottom: 0.7rem;" alt="Management"/>
                                <p style="font-size: 0.9em; color: #777;">Efficient staff and resource management</p>
                            </a>
                        </div>

                        <div class="col-sm-4" style="margin-bottom: 1.5rem;">
                            <a href="/cashier" style="text-decoration: none; color: #343a40;">
                                <h4 style="font-size: 1.3em; margin-bottom: 0.7rem;">Cashier</h4>
                                <img width="60px" src="{{ asset('images/cashier.svg') }}" style="margin-bottom: 0.7rem;" alt="Cashier"/>
                                <p style="font-size: 0.9em; color: #777;">Quick and secure payment processing</p>
                            </a>
                        </div>

                        <div class="col-sm-4" style="margin-bottom: 1.5rem;">
                            <a href="/report" style="text-decoration: none; color: #343a40;">
                                <h4 style="font-size: 1.3em; margin-bottom: 0.7rem;">Report</h4>
                                <img width="60px" src="{{ asset('images/report.svg') }}" style="margin-bottom: 0.7rem;" alt="Report"/>
                                <p style="font-size: 0.9em; color: #777;">Comprehensive performance analytics</p>
                            </a>
                        </div>

                    </div>

                    <div class="text-center mt-5" style="font-size: 1.1em; color: #666;">
                        <h5 style="margin-bottom: 1rem;">Key Features</h5>
                        <ul style="list-style-type: none; padding: 0;">
                            <li style="margin-bottom: 0.5rem;">✔️ Secure Transactions</li>
                            <li style="margin-bottom: 0.5rem;">✔️ Detailed Reporting</li>
                            <li style="margin-bottom: 0.5rem;">✔️ 24/7 Support</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
