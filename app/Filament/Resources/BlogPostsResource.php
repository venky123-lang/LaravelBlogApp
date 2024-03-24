<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostsResource\Pages;
use App\Filament\Resources\BlogPostsResource\RelationManagers;
use App\Models\BlogPosts;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogPostsResource extends Resource
{
    protected static ?string $model = BlogPosts::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('subtitle')->required(),
                Forms\Components\TextInput::make('longdescription')->required(),
                Forms\Components\FileUpload::make('image')->required(),
                Forms\Components\TextInput::make('updatedby')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('subtitle'),
                Tables\Columns\TextColumn::make('longdescription'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('updatedby'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPosts::route('/create'),
            'edit' => Pages\EditBlogPosts::route('/{record}/edit'),
        ];
    }    
}
