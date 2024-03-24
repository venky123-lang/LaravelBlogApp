<?php

namespace App\Filament\Resources\BlogPostsResource\Pages;

use App\Filament\Resources\BlogPostsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogPosts extends ListRecords
{
    protected static string $resource = BlogPostsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}