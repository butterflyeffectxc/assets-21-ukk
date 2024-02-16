@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <div class="card px-3">
            <div class="card-header mb-2">
                <br>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('assets/book.png') }}" alt="" width="200">
                        </div>
                        <div class="col-6 col-md-8">
                            <h4>Title</h4>
                            <div class="table-responsive">
                                <table class="table table-hover p-0 m-0">
                                    <tbody>
                                        <tr>
                                            <th class="pl-0">ISBN</th>
                                            <td>937798298497</td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0">Author</th>
                                            <td>Michael Right</td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0">Publisher</th>
                                            <td>Gramedia</td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0">Published</th>
                                            <td>$15/hr</td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0">Language</th>
                                            <td>Bahasa Indonesia</td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0">Availability</th>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0">Category</th>
                                            <td>Fiction</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless p-0 m-0">
                                    <thead>
                                        <tr>
                                            <th class="pl-0">Sinopsis:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pl-0">
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque eius
                                                    veniam aspernatur assumenda quam itaque accusantium a repellat minima
                                                    hic.</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="/books" class="btn btn-warning back-button"><span>Back</span></a>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        windows.print();
    </script> --}}
@endsection
