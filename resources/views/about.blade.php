@extends('layouts.app')

@section('title', 'About Us - SkillHub')

@section('content')

<style>
    .about-hero {
        background: linear-gradient(135deg, #102a56, #1769aa);
        color: white;
        padding: 65px 30px;
        border-radius: 22px;
        text-align: center;
    }

    .about-hero h1 {
        font-size: 45px;
        font-weight: 800;
    }

    .about-hero p {
        color: #dceaff;
        font-size: 18px;
        max-width: 650px;
        margin: 15px auto 0;
    }

    .about-title {
        color: #102a56;
        font-weight: 800;
    }

    .about-card {
        border: none;
        border-radius: 17px;
        padding: 28px;
        height: 100%;
        transition: 0.3s;
    }

    .about-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 12px 25px rgba(0,0,0,0.1);
    }

    .about-icon {
        font-size: 40px;
        margin-bottom: 15px;
    }

    .about-highlight {
        background: #eaf3ff;
        border-radius: 20px;
        padding: 40px;
    }

    @media(max-width: 768px) {
        .about-hero h1 {
            font-size: 34px;
        }
    }
</style>

<!-- About Hero -->
<div class="about-hero mb-5">

    <h1>About SkillHub</h1>

    <p>
        Empowering learners through knowledge,
        creativity, and professional development.
    </p>

</div>

<!-- Who We Are -->
<div class="row align-items-center g-4 mb-5">

    <div class="col-md-6">

        <span class="text-primary fw-bold">
            WHO WE ARE
        </span>

        <h2 class="about-title mt-2">
            Discover a Better Way to Learn
        </h2>

        <p class="text-muted mt-3">
            SkillHub is a workshop and training registration
            platform designed to help users discover
            and participate in educational workshops.
        </p>

        <p class="text-muted">
            Our platform provides an organized way to
            explore workshops, learn about trainers,
            and find suitable learning opportunities.
        </p>

    </div>

    <div class="col-md-6">

        <div class="about-highlight text-center">

            <div style="font-size: 85px;">
                🎓
            </div>

            <h3 class="about-title mt-3">
                Learn Without Limits
            </h3>

            <p class="text-muted mb-0">
                Every workshop is an opportunity
                to discover something new.
            </p>

        </div>

    </div>

</div>

<div class="text-center mb-4">

    <h2 class="about-title">
        Our Mission & Vision
    </h2>

    <p class="text-muted">
        The values that guide SkillHub.
    </p>

</div>

<div class="row g-4 mb-5">

    <div class="col-md-6">

        <div class="card about-card shadow-sm">

            <div class="about-icon">🎯</div>

            <h4 class="about-title">
                Our Mission
            </h4>

            <p class="text-muted">
                To make learning more accessible by
                connecting learners with valuable
                workshops and training opportunities.
            </p>

        </div>

    </div>

    <div class="col-md-6">

        <div class="card about-card shadow-sm">

            <div class="about-icon">🌟</div>

            <h4 class="about-title">
                Our Vision
            </h4>

            <p class="text-muted">
                To create an engaging learning environment
                where individuals can develop their skills
                and achieve their personal goals.
            </p>

        </div>

    </div>

</div>

<div class="text-center mb-4">

    <h2 class="about-title">
        Why SkillHub?
    </h2>

    <p class="text-muted">
        We make discovering workshops simple and convenient.
    </p>

</div>

<div class="row g-4 mb-5">

    <div class="col-md-4">

        <div class="card about-card shadow-sm text-center">

            <div class="about-icon">📚</div>

            <h5 class="fw-bold">Different Workshops</h5>

            <p class="text-muted">
                Explore workshops in different
                educational and professional fields.
            </p>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card about-card shadow-sm text-center">

            <div class="about-icon">👨‍🏫</div>

            <h5 class="fw-bold">Trainer Information</h5>

            <p class="text-muted">
                Discover workshop details and
                learn more about the trainers.
            </p>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card about-card shadow-sm text-center">

            <div class="about-icon">
               <i class="fa-solid fa-sparkles"></i>
            </div>

            <h5 class="fw-bold">Easy Experience</h5>

            <p class="text-muted">
                Browse available workshops
                through a simple and organized platform.
            </p>

        </div>

    </div>

</div>

<div class="about-highlight text-center mb-4">

    <h2 class="about-title">
        Start Your Learning Journey
    </h2>

    <p class="text-muted mt-3">
        Explore our workshops and discover new opportunities.
    </p>

    <a href="{{ route('workshops.index') }}"
       class="btn btn-primary btn-lg mt-2 px-4">
        Explore Workshops →
    </a>

</div>

@endsection