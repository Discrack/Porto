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
                ['name' => 'Python', 'slug' => 'python'],
                ['name' => 'Node.js', 'slug' => 'nodedotjs'],
                // ['name' => 'Flutter', 'slug' => 'flutter'],
                // ['name' => 'Dart', 'slug' => 'dart'],
                ['name' => 'MySQL', 'slug' => 'mysql'],
                ['name' => 'postgreSQL', 'slug' => 'postgresql'],

            ],
            'Security & Ops' => [
                ['name' => 'Grafana', 'slug' => 'grafana'],
                ['name' => 'Splunk', 'slug' => 'splunk'],
                ['name' => 'Linux', 'slug' => 'linux'],
                ['name' => 'Ubuntu', 'slug' => 'ubuntu'],
                // ['name' => 'Debian', 'slug' => 'debian'],
                ['name' => 'ElasticSearch', 'slug' => 'elasticsearch'],
                ['name' => 'Kibana', 'slug' => 'kibana'],
                ['name' => 'Docker', 'slug' => 'docker'],
                // ['name' => 'Delinea', 'slug' => 'openmediavault'],
                // ['name' => 'NGINX', 'slug' => 'nginx'],
                // ['name' => 'Kubernetes', 'slug' => 'kubernetes'],
            ],
            'Frontend' => [
                ['name' => 'HTML', 'slug' => 'html5'],
                ['name' => 'CSS', 'slug' => 'css'],
                ['name' => 'Javascript', 'slug' => 'javascript'],
                ['name' => 'Bootstrap', 'slug' => 'bootstrap'],
                ['name' => 'Tailwind', 'slug' => 'tailwindcss'],
                ['name' => 'Figma', 'slug' => 'figma'],
                ['name' => 'UML', 'slug' => 'diagramsdotnet'],
            ],
            'Tools & Creative' => [
                ['name' => 'Visual Studio Code', 'slug' => 'tldraw'],
                // ['name' => 'Android Studio', 'slug' => 'android'],
                ['name' => 'GitHub', 'slug' => 'github'],
                ['name' => 'Git', 'slug' => 'git'],
                ['name' => 'Postman', 'slug' => 'postman'],
                ['name' => 'VMWare', 'slug' => 'vmware'],
                // ['name' => 'Packet Tracer', 'slug' => 'cisco'],
                ['name' => 'FL Studio', 'slug' => 'sketch'],
                ['name' => 'iZotope', 'slug' => 'photon'],
            ],
        ];

        // Data Project
        $projects = [
            [
                'title' => 'DigialZone Marketplace',
                'type' => 'code',
                'description' => 'CapStone Project Enterprise-grade Marketplace system built with Laravel featuring advanced RBAC, multi-tenant architecture, and comprehensive audit logging.',
                'tech' => ['Laravel', 'MySQL', 'Node.js', 'Tailwind'],
                'highlights' => [
                    'Role-Based Access Control (RBAC)',
                    'Multi-tenant Support',
                    'Audit Trail System',
                    'RESTful API Architecture'
                ],
                'icon' => '🛒'
            ],
            [
                'title' => 'T-Sel MO Security L1',
                'type' => 'security',
                'description' => 'Real-time security monitoring platform aggregating logs from multiple sources with intelligent data protection and automated alerting.',
                'tech' => ['Grafana', 'Splunk', 'Delinea', 'Linux', 'Python'],
                'highlights' => [
                    'Real-time Log Aggregation',
                    'Threat Pattern Detection',
                    'Custom Dashboards',
                    'Automated Incident & Alert Response'
                ],
                'icon' => '🛡️'
            ],
            [
                'title' => 'KAGE Music',
                'type' => 'creative',
                'description' => 'Music production project exploring the genre of electronic music, crafted entirely in DAW FL Studio .',
                'tech' => ['FL Studio', 'Mixing', 'Mastering', 'Sound Design', 'Beat Making'],
                'highlights' => [
                    'Original Compositions',
                    'Sound Engineering',
                    'Creative Audio Processing',
                    'Genre-Blending Experimentation'
                ],
                'icon' => '🎵'
            ],
        ];

        // Ratakan array untuk Marquee (animasi jalan)
        $allTechIcons = collect($techStack)->flatten(1)->all();

        return view('welcome', compact('techStack', 'projects', 'allTechIcons'));
    }
}