<?php

namespace App\Http\Controllers;

use Galtsevt\LaravelSeo\App\Services\Sitemap;
use Modules\Pages\App\Models\Page;
use Modules\Services\App\Models\Service;

class SitemapController extends Controller
{
    private const DATE_FORMAT = 'Y-m-d\TH:i:sP';

    public function index()
    {
        $sitemap = new Sitemap();

        $services = Service::query()->where('is_active', 1)->with('ancestors')->get();
        $pages = Page::query()->active()->get();

        $servicesDate = $services->max('updated_at');
        $latest = collect([$servicesDate, $pages->max('updated_at')])->filter()->max();

        $sitemap->add($this->absolute('/') . '/', $latest?->format(self::DATE_FORMAT) ?? now()->format(self::DATE_FORMAT), '1.0');
        $sitemap->add($this->absolute('/services'), $servicesDate?->format(self::DATE_FORMAT) ?? now()->format(self::DATE_FORMAT), '0.9');

        foreach ($services as $service) {
            $path = $service->ancestors->pluck('alias')->push($service->alias)->implode('/');
            $sitemap->add($this->absolute('/services/' . $path), $service->updated_at->format(self::DATE_FORMAT), '0.8');
        }

        foreach ($pages as $page) {
            $sitemap->add($this->absolute('/page/' . $page->alias), $page->updated_at->format(self::DATE_FORMAT), '0.3');
        }

        return response($sitemap->toString(), 200)->header('Content-Type', 'text/xml; charset=UTF-8');
    }

    /** Same host normalization as the canonical tag: no www. */
    private function absolute(string $path): string
    {
        return preg_replace('#^(https?://)www\.#i', '$1', url($path));
    }
}
