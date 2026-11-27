@extends('layouts.app')

@section('title', $workshop['title'] . ' - SkillHub Portal')

@section('content')
    <div class="mb-4">
        <a href="{{ route('workshops.index') }}" class="btn btn-outline-secondary btn-sm">
            &larr; Back to All Workshops
        </a>
    </div>

    <div class="row g-4">
        {{-- Main Workshop Details --}}
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                        <span class="badge bg-info text-dark fs-6">{{ $workshop['category'] }}</span>
                        @if($workshop['seats'] > 0)
                            <span class="badge bg-success fs-6">{{ $workshop['seats'] }} Seats Available</span>
                        @else
                            <span class="badge bg-danger fs-6">Fully Booked</span>
                        @endif
                    </div>

                    <h1 class="fw-bold mb-3">{{ $workshop['title'] }}</h1>

                    <p class="text-muted mb-4">
                        <strong>Trainer:</strong> {{ $workshop['trainer'] }} &nbsp;|&nbsp;
                        <strong>Date:</strong> {{ $workshop['date'] }}
                    </p>

                    <hr>

                    <h5 class="fw-bold mt-4 mb-3">About This Workshop</h5>
                    <p class="lead fs-6 text-secondary" style="line-height: 1.8;">
                        {{ $workshop['description'] }}
                    </p>

                    <div class="bg-light rounded p-3 mt-4">
                        <h6 class="fw-bold mb-2">What You Will Gain:</h6>
                        <ul class="mb-0 text-secondary small">
                            <li>Hands-on practical training guided by {{ $workshop['trainer'] }}.</li>
                            <li>Real-world examples and interactive Q&amp;A sessions.</li>
                            <li>Certificate of completion from SkillHub Portal.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Registration & Info Sidebar --}}
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3">Workshop Summary</h5>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="text-muted">Category</span>
                            <span class="fw-semibold">{{ $workshop['category'] }}</span>
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="text-muted">Date</span>
                            <span class="fw-semibold">{{ $workshop['date'] }}</span>
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="text-muted">Remaining Seats</span>
                            <span class="fw-semibold">{{ $workshop['seats'] }}</span>
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="text-muted">Location</span>
                            <span class="fw-semibold">{{ $workshop['location'] ?? 'Al al-Bayt University / Lab' }}</span>
                        </li>
                    </ul>

                    @if($workshop['seats'] > 0)
                        <button type="button" class="btn btn-primary w-100 py-2 fw-bold" disabled>
                            Registration Opens in Phase 2
                        </button>
                        <p class="text-muted small text-center mt-2 mb-0">
                            Static preview mode (Phase 1). Interactive booking will be enabled in Phase 2.
                        </p>
                    @else
                        <button type="button" class="btn btn-secondary w-100 py-2 fw-bold" disabled>
                            Workshop Full
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
