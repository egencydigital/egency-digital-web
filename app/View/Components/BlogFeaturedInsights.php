<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogFeaturedInsights extends Component
{
    public $items;

    public function __construct()
    {
        // Static data directly inside the component
        $this->items = [
            'column1' => [
                [
                    'title' => 'Digital Transformation in Retail',
                    'excerpt' => 'How we helped retailers modernize their processes.',
                    'image' => 'https://images.unsplash.com/photo-1556740738-b6a63e27c4df',
                    'link' => '#'
                ],
                [
                    'title' => 'AI-Powered Marketing',
                    'excerpt' => 'Leveraging AI to improve customer engagement.',
                    'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f',
                    'link' => '#'
                ],
                // [
                //     'title' => 'Cloud Migration Success',
                //     'excerpt' => 'Seamless transition to cloud infrastructure.',
                //     'image' => 'https://images.unsplash.com/photo-1492724441997-5dc865305da7',
                //     'link' => '#'
                // ],
            ],
            'column2' => [
                [
                    'title' => 'Healthcare Digitization',
                    'excerpt' => 'Transforming patient care with digital solutions.',
                    'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f',
                    'link' => '#'
                ],
                [
                    'title' => 'Smart Manufacturing',
                    'excerpt' => 'Optimizing production with IoT.',
                    'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f',
                    'link' => '#'
                ],
                [
                    'title' => 'Fintech Innovations',
                    'excerpt' => 'New-age banking solutions for customers.',
                    'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71',
                    'link' => '#'
                ],
            ],
            'column3' => [
                [
                    'title' => 'Sustainable Energy Projects',
                    'excerpt' => 'Driving renewable energy adoption worldwide.',
                    'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f',
                    'link' => '#'
                ],
                [
                    'title' => 'Smart Cities',
                    'excerpt' => 'Creating connected urban environments.',
                    'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f',
                    'link' => '#'
                ],
                [
                    'title' => 'Education Tech',
                    'excerpt' => 'Modernizing classrooms with technology.',
                    'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f',
                    'link' => '#'
                ],
            ],
        ];
    }

    public function render(): View|Closure|string
    {
        return view('components.blog-featured-insights');
    }
}
