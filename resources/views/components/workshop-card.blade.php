@props(['workshop'])

<div class="col-md-4 mb-4">
    <div class="card h-100 shadow-sm border-0">
        <div class="card-body d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="badge bg-info text-dark">{{ $workshop['category'] }}</span>
                @if($workshop['seats'] > 0)
                    <span class="badge bg-success">{{ $workshop['seats'] }} Seats Left</span>
                @else
                    <span class="badge bg-danger">Full</span>
                @endif
            </div>
            <h5 class="card-title fw-bold">{{ $workshop['title'] }}</h5>
            <p class="text-muted small mb-2">
                <strong>Trainer:</strong> {{ $workshop['trainer'] }}<br>
                <strong>Date:</strong> {{ $workshop['date'] }}
            </p>
            <p class="card-text text-secondary flex-grow-1">
                {{ Str::limit($workshop['description'], 85) }}
            </p>
            <a href="{{ route('workshops.show', $workshop['id']) }}" class="btn btn-outline-primary mt-3 w-100">
                View Workshop Details
            </a>
        </div>
    </div>
</div>
