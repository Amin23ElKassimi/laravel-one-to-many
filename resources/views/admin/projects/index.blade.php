@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12 p-2 mb-3 text-center">
                <h2>
                    These are all our available projectss, {{ Auth::user()->name }}!
                </h2>
            </div>
            <div class="col-12">
                <table class="table table-striped table-hover table-dark">
                    <thead>
                        <tr>
                            <th scope="col">client_id</th>
                            <th scope="col">name</th>
                            <th scope="col">status</th>
                            <th scope="col">start_date</th>
                            <th scope="col">end_date</th>
                            <th scope="col">budget</th>
                            <th scope="col">priority</th>
                            <th scope="col">description</th>
                            <th scope="col">
                                <a href="{{ route('admin.projects.create',) }}">
                                    <button class="btn btn-secondary btn-lg">
                                        Add New Project
                                    </button>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $projects as $project )
                            <tr>
                                <th scope="row">
                                    {{ $project->client_id }}
                                </th>
                                <td>
                                    <a href="{{ route('admin.projects.show', $project) }}">
                                        {{ $project->name }}
                                    </a>
                                </td>
                                <td>
                                    {{ $project->status }}
                                </td>
                                <td>
                                    {{ $project->start_date }}
                                </td>
                                <td>
                                    {{ $project->end_date }}
                                </td>
                                <td>
                                    {{ $project->budget }}
                                </td>
                                <td>
                                    {{ $project->priority }}
                                </td>
                                <td>
                                    <em>
                                        {{ substr($project->description, 0, 35) }}
                                    </em>
                                </td>
                                {{-- Bottoni: View - Edit - Delete --}}
                                <td>
                                    <a href="{{ route('admin.projects.show', $project) }}">
                                        <button class="btn btn-sm btn-primary">
                                            View
                                        </button>
                                    </a>
                                    <a href="{{ route('admin.projects.edit', $project) }}">
                                        <button class="btn btn-sm btn-success">
                                            Edit
                                        </button>
                                    </a>
                                    {{-- Delete --}}
                                    <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-warning" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            {{-- Se non trovi niente Scrivi --}}
                        @empty
                            <tr>
                                <td colspan="4">
                                    There are no projects available
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection