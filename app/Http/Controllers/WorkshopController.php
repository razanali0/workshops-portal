<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    private function getWorkshops()
    {
        return [
            [
                'id' => 1,
                'title' => 'Laravel MVC Web Development Bootcamp',
                'trainer' => 'Dr. Ahmad Al-Khatib',
                'category' => 'Web Development',
                'date' => '2026-12-05',
                'location' => 'IT Faculty - Lab 3',
                'seats' => 12,
                'description' => 'An intensive hands-on workshop covering MVC architecture, routing, Blade templates, and building modern web applications.'
            ],
            [
                'id' => 2,
                'title' => 'UI/UX Design Fundamentals with Figma',
                'trainer' => 'Eng. Sara Mansour',
                'category' => 'UI/UX Design',
                'date' => '2026-12-10',
                'location' => 'Prince Al Hussein IT Auditorium',
                'seats' => 5,
                'description' => 'Learn wireframing, interactive prototyping, user research, and modern design systems for web and mobile apps.'
            ],
            [
                'id' => 3,
                'title' => 'Cybersecurity & Network Defense Basics',
                'trainer' => 'Eng. Tariq Haddad',
                'category' => 'Cybersecurity',
                'date' => '2026-12-15',
                'location' => 'IT Faculty - Lab 1',
                'seats' => 0,
                'description' => 'Understand common web vulnerabilities, penetration testing fundamentals, and securing web applications.'
            ],
            [
                'id' => 4,
                'title' => 'Data Analysis using Python & Pandas',
                'trainer' => 'Dr. Layla Omari',
                'category' => 'Data Science',
                'date' => '2026-12-20',
                'location' => 'IT Faculty - Lab 2',
                'seats' => 18,
                'description' => 'Master data cleaning, exploratory analysis, and visualization techniques using Python libraries on real datasets.'
            ],
        ];
    }

    public function home()
    {
        $featuredWorkshops = array_slice($this->getWorkshops(), 0, 3);
        return view('home', compact('featuredWorkshops'));
    }

    public function index()
    {
        $workshops = $this->getWorkshops();
        return view('workshops.index', compact('workshops'));
    }

    public function show($id)
    {
        $workshops = $this->getWorkshops();
        $workshop = collect($workshops)->firstWhere('id', (int)$id);

        if (!$workshop) {
            abort(404);
        }

        return view('workshops.show', compact('workshop'));
    }

    public function about()
    {
        return view('about');
    }
}
