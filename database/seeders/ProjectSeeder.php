<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Todo App',
            'slug' => 'todo-app',
            'description' => 'A simple todo application built with Laravel.',
            'image_path' => 'images/projects/todo.png',
            'project_url' => 'https://example.com/todo',
            'github_url' => 'https://github.com/example/todo',
            'tech_stack' => ['Laravel', 'MySQL', 'Tailwind'],
            'featured' => true,
            'sort_order' => 1,
        ]);

        Project::create([
            'title' => 'Portfolio Website',
            'slug' => 'portfolio-website',
            'description' => 'Personal portfolio website.',
            'image_path' => 'images/projects/portfolio.png',
            'project_url' => null,
            'github_url' => 'https://github.com/example/portfolio',
            'tech_stack' => ['Laravel', 'Blade', 'CSS'],
            'featured' => true,
            'sort_order' => 2,
        ]);

        Project::create([
            'title' => 'Blog Platform',
            'slug' => 'blog-platform',
            'description' => 'A blog system with posts and comments.',
            'image_path' => null,
            'project_url' => null,
            'github_url' => 'https://github.com/example/blog',
            'tech_stack' => ['Laravel', 'MySQL'],
            'featured' => false,
            'sort_order' => 3,
        ]);
    }
}