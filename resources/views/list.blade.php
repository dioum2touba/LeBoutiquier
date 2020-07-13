@extends('layouts.index1')

@section('content')
<div class="container">
    <section id="dashboard-analytics">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (Session::get('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <table class="table table-hover table-responsive">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Street</th>
                                <th scope="col">Town</th>
                                <th scope="col">Téléphone</th>
                                <th scope="col">Website</th>
                                <th scope="col">Web directory</th>
                                <th scope="col">O-Email</th>
                                <th>Opération</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td scope="row"> {{ $item['rid'] }} </td>
                                        <td scope="row"> {{ $item['r_name'] }} </td>
                                        <td scope="row"> {{ $item['r_street'] }} </td>
                                        <td scope="row"> {{ $item['r_town'] }} </td>
                                        <td scope="row"> {{ $item['r_phone'] }} </td>
                                        <td scope="row"> {{ $item['r_website'] }} </td>
                                        <td scope="row"> {{ $item['r_webdirectory'] }} </td>
                                        <td scope="row"> {{ $item['r_o_email'] }} </td>
                                        <td><a href="/delete/{{$item['rid']}}"><i class="fa fa-trash"></i></a>
                                        <a href="/edit/{{$item['rid']}}"><i class="fa fa-edit"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            {{--  <x-alert type="error" :message="$message">
                    <div class="alert alert-{{ $type }}">
                        {{ $message }}
                    </div>
                </x-alert> --}}
            </div>
        </div>
    </section>
</div>
@endsection
