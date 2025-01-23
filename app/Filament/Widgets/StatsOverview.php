<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // get count of posts
        $posts = Post::count();
        // get count of categories
        $categories = Category::count();
        // get count of users
        $users = User::count();
        return [
            Stat::make('Posts', $posts),
            Stat::make('Categories', $categories),
            Stat::make('Users', $users),
        ];
    }
}
