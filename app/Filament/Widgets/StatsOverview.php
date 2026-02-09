<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\News;
use App\Models\Program;
use App\Models\Member;
use App\Models\Contact;
use App\Models\Gallery;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalNews = News::count();
        $publishedNews = News::where('is_published', true)->count();
        
        $totalPrograms = Program::count();
        $activePrograms = Program::where('is_active', true)->count();
        
        $totalMembers = Member::count();
        $activeMembers = Member::where('status', 'active')->count();
        
        $totalMessages = Contact::count();
        $unreadMessages = Contact::where('is_read', false)->count();
        
        $totalGalleries = Gallery::count();
        $featuredGalleries = Gallery::where('is_featured', true)->count();
        
        $totalNewsViews = News::sum('views');

        return [
            Stat::make('Total Berita', $totalNews)
                ->description($publishedNews . ' berita dipublikasikan')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('success')
                ->chart([7, 12, 9, 14, 18, 15, $totalNews]),
            
            Stat::make('Program Aktif', $activePrograms)
                ->description('Dari ' . $totalPrograms . ' total program')
                ->descriptionIcon('heroicon-m-clipboard-document-check')
                ->color('warning')
                ->chart([3, 4, 5, 6, $activePrograms]),
            
            Stat::make('Anggota Aktif', $activeMembers)
                ->description('Dari ' . $totalMembers . ' total anggota')
                ->descriptionIcon('heroicon-m-users')
                ->color('info')
                ->chart([10, 15, 18, 20, $activeMembers]),
            
            Stat::make('Pesan Masuk', $totalMessages)
                ->description($unreadMessages . ' pesan belum dibaca')
                ->descriptionIcon('heroicon-m-envelope')
                ->color($unreadMessages > 0 ? 'danger' : 'success')
                ->chart([2, 5, 3, 7, 4, $totalMessages]),
            
            Stat::make('Total Views Berita', number_format($totalNewsViews))
                ->description('Total kunjungan halaman berita')
                ->descriptionIcon('heroicon-m-eye')
                ->color('primary')
                ->chart([100, 250, 400, 650, 900, $totalNewsViews]),
            
            Stat::make('Galeri', $totalGalleries)
                ->description($featuredGalleries . ' galeri featured')
                ->descriptionIcon('heroicon-m-photo')
                ->color('success')
                ->chart([1, 3, 5, 7, $totalGalleries]),
        ];
    }
}