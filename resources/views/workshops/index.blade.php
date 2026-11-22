{{-- Workshops index page: lists all workshops using the workshop-card component --}}

@extends('layouts.app')

@section('title', 'All Workshops - SkillHub Portal')

@section('content')
    {{-- Page header --}}
    <div class="text-center mb-4">
        <h1 class="fw-bold">All Workshops</h1>
        <p class="text-muted">
            Browse our upcoming training workshops and pick the one that fits your goals.
        </p>
    </div>

    {{-- Stats bar: numbers calculated in WorkshopController@index --}}
    <div class="row text-center mb-4 g-3">
        <div class="col-6 col-md-3">
            <div class="bg-white rounded shadow-sm p-3">
                <div class="fs-3 fw-bold text-primary">{{ $stats['total'] }}</div>
                <div class="small text-muted">Workshops</div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="bg-white rounded shadow-sm p-3">
                <div class="fs-3 fw-bold text-success">{{ $stats['seats'] }}</div>
                <div class="small text-muted">Seats Available</div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="bg-white rounded shadow-sm p-3">
                <div class="fs-3 fw-bold text-danger">{{ $stats['full'] }}</div>
                <div class="small text-muted">Fully Booked</div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="bg-white rounded shadow-sm p-3">
                <div class="fs-3 fw-bold text-info">{{ $stats['categories'] }}</div>
                <div class="small text-muted">Categories</div>
            </div>
        </div>
    </div>

    {{-- Category filter: each button links to the same named route with a ?category= value --}}
    <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
        <a href="{{ route('workshops.index') }}"
           class="btn btn-sm {{ $selectedCategory ? 'btn-outline-primary' : 'btn-primary' }}">
            All
        </a>
        @foreach ($categories as $category)
            <a href="{{ route('workshops.index', ['category' => $category]) }}"
               class="btn btn-sm {{ $selectedCategory === $category ? 'btn-primary' : 'btn-outline-primary' }}">
                {{ $category }}
            </a>
        @endforeach
    </div>

    {{-- Workshop list --}}
    <div class="row">
        @forelse ($workshops as $workshop)
            @if ($loop->first)
                <div class="col-12 mb-3 text-muted small">
                    Showing {{ $loop->count }} of {{ $stats['total'] }} workshops
                    @if ($selectedCategory)
                        in <strong>{{ $selectedCategory }}</strong>
                    @endif
                </div>
            @endif

            <x-workshop-card :workshop="$workshop" />
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    No workshops found in this category.
                    <a href="{{ route('workshops.index') }}" class="alert-link">Show all workshops</a>
                </div>
            </div>
        @endforelse
    </div>
@endsection
