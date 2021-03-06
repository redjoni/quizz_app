@extends('layouts.app')
@section('title', 'Draft')

@section('content')
<div class="container" id="home-container">
    <div class="row justify-content-center align-items-center pt-4">
        <div class="col-12 col-md-10 col-lg-10 ">
            <h4 class="form-heading text-center">Click the test you want to review it.</h4>
            <div class="example table-responsive">
                <table class="table">
                    <thead class="thead-success">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Questions Number</th>
                        <th>Public</th>
                        <th>Published</th>
                        <th colspan="2">&nbsp&nbspAction</th>
                    </tr>
                    </thead>
                    @foreach($tests as $test)
                        <tbody>
                        <tr>
                            <td class="alignment">{{ $test->id }}</td>
                            <td class="alignment"><a href="{{ url("/tests/$test->id/questions") }}">{{ $test->name }}</a></td>
                            <td class="alignment">{{ $test->questions_number }}</td>
                            @if($test->public == "no")
                                <td class="alignment"><a href="{{ url("/tests/$test->id/public") }}" class="btn btn-success">Make public</a></td>
                            @else
                                <td class="alignment">{{ $test->public }}</td>
                            @endif

                            @if($test->published == "no")
                                <td class="alignment"><a href="{{ url("/tests/$test->id/published") }}" class="btn btn-success">Publish</a></td>
                            @else
                                <td class="alignment">{{ $test->published }}</td>
                            @endif
                            <td class="alignment"><a href="{{ url("/tests/$test->id/questions/delete") }}" class="btn btn-danger" id="delete-"> Delete </a></td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-12 col-md-10 col-lg-10 text-right">
            <a href="/create-test" class="btn btn-primary" id="add_new"> Add Test </a>
        </div>
    </div>
</div>

@endsection
