<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Models\Obituary;

class GenerateSitemap extends Command
{
    protected $signature = 'generate:sitemap';
    protected $description = 'Generate an XML sitemap';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $obituaries = Obituary::all();
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($obituaries as $obituary) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . url('/obituary/' . $obituary->id) . '</loc>';
            $sitemap .= '<lastmod>' . $obituary->updated_at->toIso8601String() . '</lastmod>';
            $sitemap .= '<changefreq>monthly</changefreq>';
            $sitemap .= '<priority>0.8</priority>';
            $sitemap .= '</url>';
        }

        $sitemap .= '</urlset>';
        Storage::disk('public')->put('sitemap.xml', $sitemap);

        $this->info('Sitemap generated successfully.');
    }
}

