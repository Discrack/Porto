<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $techStack = [
            'Backend' => [
                ['name' => 'Laravel', 'slug' => 'laravel'],
                ['name' => 'CodeIgniter', 'slug' => 'codeigniter'],
                ['name' => 'PHP', 'slug' => 'php'],
                ['name' => 'MySQL', 'slug' => 'mysql'],
            ],
            'Security & Ops' => [
                ['name' => 'Linux', 'slug' => 'linux'],
                ['name' => 'Ubuntu', 'slug' => 'ubuntu'],
                ['name' => 'Elasticsearch', 'slug' => 'elasticsearch'],
                ['name' => 'Kibana', 'slug' => 'kibana'],
                ['name' => 'Grafana', 'slug' => 'grafana'],
                ['name' => 'Splunk', 'slug' => 'splunk'],
                ['name' => 'AWS IAM', 'slug' => 'amazonaws'],
                ['name' => 'Docker', 'slug' => 'docker'],
            ],
            'Frontend' => [
                ['name' => 'Tailwind CSS', 'slug' => 'tailwindcss'],
                ['name' => 'Bootstrap', 'slug' => 'bootstrap'],
            ],
            'Tools & Creative' => [
                ['name' => 'Git', 'slug' => 'git'],
                ['name' => 'GitHub', 'slug' => 'github'],
                ['name' => 'Postman', 'slug' => 'postman'],
                ['name' => 'FL Studio', 'slug' => 'flstudio'],
            ],
        ];

        $projects = [
            [
                'title' => 'Secure HRIS Core',
                'type' => 'code',
                'description' => 'Enterprise-grade HRIS system built with Laravel featuring advanced RBAC, multi-tenant architecture, and comprehensive audit logging.',
                'tech' => ['Laravel', 'MySQL', 'Redis', 'JWT'],
                'highlights' => [
                    'Role-Based Access Control (RBAC)',
                    'Multi-tenant Support',
                    'Audit Trail System',
                    'RESTful API Architecture'
                ],
                'icon' => '🔐'
            ],
            [
                'title' => 'Security Log Sentinel',
                'type' => 'security',
                'description' => 'Real-time security monitoring platform aggregating logs from multiple sources with intelligent threat detection and automated alerting.',
                'tech' => ['ELK Stack', 'Splunk', 'Grafana', 'Python'],
                'highlights' => [
                    'Real-time Log Aggregation',
                    'Threat Pattern Detection',
                    'Custom Dashboards',
                    'Automated Incident Response'
                ],
                'icon' => '🛡️'
            ],
            [
                'title' => 'Midnight Frequency',
                'type' => 'creative',
                'description' => 'Audio production project exploring the intersection of ambient soundscapes and electronic music, crafted entirely in FL Studio.',
                'tech' => ['FL Studio', 'Mixing', 'Mastering', 'Sound Design'],
                'highlights' => [
                    'Original Compositions',
                    'Sound Engineering',
                    'Creative Audio Processing',
                    'Genre-Blending Experimentation'
                ],
                'icon' => '🎵'
            ],
        ];

        $allTechIcons = collect($techStack)->flatten(1)->all();

        return view('welcome', compact('techStack', 'projects', 'allTechIcons'));
    }
}