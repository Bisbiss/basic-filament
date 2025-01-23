<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class StatsOverview extends BaseWidget
{
    use InteractsWithPageFilters;

    protected function getStats(): array
    {
        $startDate = ! is_null($this->filters['startDate'] ?? null) ?
            Carbon::parse($this->filters['startDate']) :
            null;

        $endDate = ! is_null($this->filters['endDate'] ?? null) ?
            Carbon::parse($this->filters['endDate']) :
            now();

        // get count of posts
        $posts = Post::get()->whereBetween('created_at', [$startDate, $endDate]);
        // get count of categories
        $categories = Category::get()->whereBetween('created_at', [$startDate, $endDate]);
        // get count of users
        $users = User::get()->whereBetween('created_at', [$startDate, $endDate]);
        return [
            Stat::make('Posts', number_format(count($posts))),
            Stat::make('Categories', count($categories)),
            Stat::make('Users', count($users)),
        ];
    }
}
