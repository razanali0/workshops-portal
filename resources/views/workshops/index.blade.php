@extends('layouts.app')

@section('title', 'All Workshops - SkillHub Portal')

@section('content')
    <div class="text-center mb-5">
        <h1 class="fw-bold">All Workshops</h1>
        <p class="text-muted">
            Browse our upcoming training workshops and pick the one that fits your goals.
        </p>
        <span class="badge bg-primary fs-6">{{ count($workshops) }} Workshops Available</span>
    </div>

    <div class="row">
        @forelse ($workshops as $workshop)
            <x-workshop-card :workshop="$workshop" />
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    No workshops are available at the moment. Please check back later.
                </div>
            </div>
        @endforelse
    </div>
@endsection
