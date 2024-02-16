@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <div class="card">
            <div class="card-header mb-2">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">
                        Borrowing
                    </h5>
                    <div class="ml-auto">
                        <a href="/borrowings/create" class="btn btn-primary add-button"><span>Add Data</span></a>
                        <a href="/reports/generate" class="btn btn-warning back-button"><span>Import Data</span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Borrower</th>
                                <th>Book</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($borrowings as $book)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('assets/book.png') }}" alt="" width="50">
                                    </td>
                                    <td>{{ $book->title }}</td>
                                    <td>
                                        @foreach ($book->borrowings as $category)
                                            {{ $category->category->name }},
                                        @endforeach
                                    </td>
                                    <td>{{ $book->author }}</td> --}}
                            <td>1</td>
                            <td>Borrower</td>
                            <td>Book</td>
                            <td>Start Date</td>
                            <td>End Date</td>
                            <td>
                                <div class="btn-group mr-2" role="group" aria-label="Action Button">
                                    <a href="/borrowings/detail" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                    <a href="/report/all" class="btn btn-success"><i class="bi bi-cloud-download"></i></a>
                                    <a href="/borrowings/edit" class="btn btn-warning"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                                </div>
                            </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
