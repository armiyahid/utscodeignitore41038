<?php

namespace App\Controllers;

use App\Config\Portfolio;

/**
 * Controller untuk lima halaman utama portofolio.
 *
 * Semua konten diambil dari App\Config\Portfolio supaya view tetap bersih
 * dan tidak ada data yang duplikat di beberapa file.
 */
class Home extends BaseController
{
    /**
     * Judul tab browser untuk tiap halaman.
     *
     * @var array<string, string>
     */
    private const TITLES = [
        'index'     => 'Beranda',
        'profile'   => 'Profil',
        'portfolio' => 'Portofolio',
        'articles'  => 'Artikel',
        'about'     => 'Tentang Saya',
    ];

    public function index(): string
    {
        $data = $this->page('index', 'home');
        $data['projectItems'] = array_slice($this->configPortfolio()->projects, 0, 3);

        return view('home/index', $data);
    }

    public function profile(): string
    {
        return view('home/profile', $this->page('profile', 'profile'));
    }

    public function portfolio(): string
    {
        $data = $this->page('portfolio', 'portfolio');
        $data['projectItems'] = $this->configPortfolio()->projects;

        return view('home/portfolio', $data);
    }

    public function articles(): string
    {
        return view('home/articles', $this->page('articles', 'articles'));
    }

    public function about(): string
    {
        return view('home/about', $this->page('about', 'about'));
    }

    /**
     * Data yang dipakai bersama seluruh halaman.
     *
     * @return array<string, mixed>
     */
    private function page(string $key, string $active): array
    {
        $portfolio = $this->configPortfolio();

        return [
            'p'      => $portfolio,
            'title'  => self::TITLES[$key] . ' — ' . $portfolio->name,
            'active' => $active,
            'stats'  => $this->stats($portfolio),
        ];
    }

    private function configPortfolio(): Portfolio
    {
        /** @var Portfolio $portfolio */
        $portfolio = config(Portfolio::class);

        return $portfolio;
    }

    /**
     * Angka statistik dihitung dari data yang ada, bukan ditulis manual.
     *
     * @return array<int, array{value: int, label: string}>
     */
    private function stats(Portfolio $portfolio): array
    {
        $technologies = [];

        foreach ($portfolio->projects as $project) {
            foreach ($project['tags'] as $tag) {
                $technologies[mb_strtolower(trim($tag))] = $tag;
            }
        }

        return [
            ['value' => count($portfolio->projects), 'label' => 'Proyek'],
            ['value' => count($technologies), 'label' => 'Teknologi dipelajari'],
            ['value' => count($portfolio->experience), 'label' => 'Jejak belajar'],
            ['value' => count($portfolio->articles), 'label' => 'Artikel'],
        ];
    }
}
