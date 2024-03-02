@extends('layouts.app')
@section('css')
<style>
  /*  .hero {
        background: no-repeat url('images/hero-min.jpg') fixed;
        color: #fff;
        padding: 4rem 3rem;
        position: relative;
        text-align: center;
    }

    #search-index .search-hero-content .search-form img {
        filter: invert(48%) sepia(1%) saturate(0) hue-rotate(25deg) brightness(97%) contrast(89%);
        margin-right: 0.75rem;
        text-align: center;
        width: 1.4rem;
    }

    #search-index .search-hero-content .search-form input:not([type=reset]) {
        border: 0;
        box-shadow: none;
        color: #555;
        flex-grow: 1;
        font-size: 1.5rem;
        height: 50px;
    }

    #search-index .search-hero-content .search-form input:not([type=reset])[data-clear]:hover {
        color: #333;
    }

    #search-index .search-hero-content .search-form input:not([type=reset]).button {
        align-items: center;
        align-self: stretch;
        border-radius: 0 0.25rem 0.25rem 0;
        display: flex;
        height: 105%;
        line-height: 18px;
        margin: 0 -1px -1px auto;
        max-width: 12rem;
        transform: scaleY(1.05);
    } */
    table td, table th {
        padding: 0.8rem;
    }
    .container{
        font-family:"Segoe UI","Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    }
</style>
@endsection
@section('content')
<div>
    <div class="second_menu">
        <ul class="pageLocation"></ul>
        @include('partials.sign_in_log_out')
    </div>
    <div class="row">
        <div class="container">
            <h5>{{$searchCount}} Results :: Keyword: "{{$search}}"</h5>
            <table style="width: 100%;">
                <tr>
                    <th>No.</th>
                    <th>Company Name</th>
                    <th>Title</th>
                    <th>Standard</th>
                </tr>
                @php
                    $number =1;
                @endphp
                @if(isset($executeQuery))
                    @if(count($executeQuery) > 0)
                        @foreach($executeQuery as $data)
                        <tr style="font-size: 15px;">
                            <td>{{$number++}}</td>
                            <td>{{$data->company_name}}</td>
                            <td>{{$data->title}}</td>
                            <td>{{$data->standard}}</td>
                        </tr>
                        @endforeach
                        <hr>
                    @endif
                @else
                <tr>
					<hr>
                    <td style="text-align: center;" colspan="4">No Results found.</td>
                </tr>
                @endif
            </table>
        </div>
    </div>
</div>
@endsection