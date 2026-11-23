@extends('layouts.app')

@section('title', 'SkillHub | Home')

@section('content')

<style>
    .skill-home {
        padding:0;
        margin:0;
        width:100%;

    }


    .skill-hero {
        position:relative;
        width:100vw;
        min-heigth:650px;
        margin-left:calc(50% - 50vw);
        border-radius: 0;
        overflow:hidden;
       background:
    linear-gradient(
        90deg,
        rgba(4, 24, 49, .80),
        rgba(5, 32, 62, .45),
        rgba(5, 32, 62, .10)
    ),
    url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=2000&q=90');


        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        padding: 65px 6%;
    }

    .hero-content {
        max-width: 800px;
        color: white;
    }

    .hero-welcome {
        display: inline-block;
        background: rgba(255,255,255,.17);
        border: 1px solid rgba(255,255,255,.35);
        border-radius: 30px;
        padding: 10px 18px;
        font-weight: 700;
        margin-bottom: 22px;
    }

    .hero-content h1 {
        font-size: clamp(38px, 5vw, 65px);
        font-weight: 850;
        line-height: 1.15;
        margin-bottom: 20px;
    }

    .hero-content h1 span {
        color: #43b5ff;
    }

    .hero-content p {
        font-size: 19px;
        line-height: 1.7;
        color: #f0f5fc;
        max-width: 650px;
    }

    .hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 30px;
    }

    .hero-btn-primary {
        background: #0868d5;
        color: white;
        text-decoration: none;
        padding: 15px 27px;
        border-radius: 30px;
        font-weight: 750;
        transition: .3s;
    }

    .hero-btn-primary:hover {
        background: #004caa;
        color: white;
        transform: translateY(-3px);
    }

    .hero-btn-outline {
        border: 2px solid white;
        color: white;
        text-decoration: none;
        padding: 13px 25px;
        border-radius: 30px;
        font-weight: 750;
        transition: .3s;
    }

    .hero-btn-outline:hover {
        background: white;
        color: #12345a;
    }


    .workshop-search {
        position: relative;
        z-index: 5;
        max-width: 880px;
        margin: -48px auto 0;
        background: white;
        padding: 12px 13px 12px 25px;
        border-radius: 50px;
        display: flex;
        align-items: center;
        gap: 14px;
        box-shadow: 0 10px 35px rgba(0,0,0,.16);
    }

    .workshop-search .search-icon {
        font-size: 27px;
        color: #0758b0;
    }

    .workshop-search input {
        flex: 1;
        min-width: 0;
        border: none;
        outline: none;
        font-size: 16px;
        padding: 12px 5px;
    }

    .workshop-search a {
        background: #0866ce;
        color: white;
        text-decoration: none;
        border-radius: 30px;
        padding: 13px 23px;
        font-weight: 750;
        white-space: nowrap;
    }


    .category-section {
        padding: 58px 30px 35px;
    }

    .category-card {
        display: flex;
        align-items: center;
        gap: 17px;
        background: white;
        padding: 25px 20px;
        border-radius: 22px;
        min-height: 135px;
        height: 100%;
        border: 1px solid #e8edf5;
        box-shadow: 0 8px 25px rgba(20,50,90,.08);
        transition: .3s;
    }

    .category-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 15px 30px rgba(20,50,90,.14);
    }

    .category-icon {
        width: 76px;
        height: 76px;
        min-width: 76px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 34px;
    }

    .category-info {
        flex: 1;
    }

    .category-info h5 {
        font-size: 19px;
        font-weight: 850;
        color: #102b50;
        margin-bottom: 8px;
    }

    .category-info p {
        font-size: 14px;
        color: #6b7b90;
        margin: 0;
        line-height: 1.5;
    }

    .category-arrow {
        width: 38px;
        height: 38px;
        min-width: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #edf4ff;
        color: #0757b5;
        font-size: 22px;
    }

    @media(max-width: 768px) {
        .skill-hero {
            min-height: 510px;
            padding: 40px 25px 85px;
            border-radius: 0 0 25px 25px;
            background-position: center;
        }

        .hero-content h1 {
            font-size: 39px;
        }

        .hero-content p {
            font-size: 16px;
        }

        .workshop-search {
            margin: 20px 10px 0;
            border-radius: 18px;
            flex-wrap: wrap;
            padding: 15px;
        }

        .workshop-search a {
            width: 100%;
            text-align: center;
        }

        .category-section {
            padding: 35px 5px;
        }
    }
</style>


<div class="skill-home">

    <section class="skill-hero">

        <div class="hero-content">

            <div class="hero-welcome">
                🎓 Welcome to SkillHub
            </div>

            <h1>
                Discover Workshops &<br>
                Build <span>Your Future</span>
            </h1>

            <p>
                Explore exciting workshops, learn from expert trainers,
                and develop the skills you need to succeed.
            </p>

            <div class="hero-actions">

                <a href="{{ route('workshops.index') }}"
                   class="hero-btn-primary">
                    🔍 View Workshops →
                </a>

                <a href="{{ route('about') }}"
                   class="hero-btn-outline">
                    ⓘ Learn About Us
                </a>

            </div>

        </div>

    </section>


    <div class="workshop-search">

        <span class="search-icon">⌕</span>

        <input type="text"
               placeholder="Search for workshops...">

        <a href="{{ route('workshops.index') }}">
            Find Workshops →
        </a>

    </div>


    <section class="category-section">

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">

                <div class="category-card">

                    <div class="category-icon"
                         style="background:#e0efff; color:#0878df">
                        💻
                    </div>

                    <div class="category-info">
                        <h5>Technology</h5>
                        <p>
                            Explore tech and programming workshops.
                        </p>
                    </div>

                    <div class="category-arrow">➜</div>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="category-card">

                    <div class="category-icon"
                         style="background:#f1e4ff; color:#9142dc">
                        🎨
                    </div>

                    <div class="category-info">
                        <h5>Creativity</h5>
                        <p>
                            Discover creative skills and ideas.
                        </p>
                    </div>

                    <div class="category-arrow">➜</div>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="category-card">

                    <div class="category-icon"
                         style="background:#ddf7ed; color:#12a878">
                        📈
                    </div>

                    <div class="category-info">
                        <h5>Business</h5>
                        <p>
                            Build professional skills.
                        </p>
                    </div>

                    <div class="category-arrow">➜</div>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection