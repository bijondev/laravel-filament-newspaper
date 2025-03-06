<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Header Card for title and slug
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(function ($state, $set) {
                            $slug = Str::slug($state);
                            $set('slug', $slug);
                        })
                        ->maxLength(255),
                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->readOnly()
                        ->maxLength(255)
                        ->unique(Post::class, 'slug', ignoreRecord: true),
                ])
                ->columns(1)  // Make it a 2-column card for header
                ->columnSpan(2),  // Span across 2 columns
            // Others Card for status and categories (Right side)
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Toggle::make('stiky')
                    ->label('Sticky')
                    ->default(false),

                Forms\Components\Toggle::make('top')
                    ->label('Top')
                    ->default(false),

                Forms\Components\Toggle::make('features')
                    ->label('Features')
                    ->default(false),
                    Forms\Components\Select::make('status')
                        ->options([
                            'draft' => 'Draft',
                            'published' => 'Published',
                        ])
                        ->default('draft'),
                    Forms\Components\MultiSelect::make('categories')
                        ->preload()
                        ->required()
                        ->relationship('categories', 'title'),
                ])
                ->columns(1)  // Single column for status & categories
                ->columnSpan(1),  // This card will take only one column
            // Content Card for content and thumbnail
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\MarkdownEditor::make('content')
                        ->required(),
                    Forms\Components\FileUpload::make('thumbnail')
                        ->image()
                        ->nullable(),
                ])
                ->columns(1)  // Single column layout
                ->columnSpan(2),  // Span across 2 columns

            // SEO Card for meta keywords and meta description
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('meta_keywords')
                        ->nullable()
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('meta_description')
                        ->nullable()
                        ->required()
                        ->maxLength(255),
                ])
                ->columns(1)  // Single column layout
                ->columnSpan(2),  // Span across 2 columns


        ])
        ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                    Tables\Columns\BooleanColumn::make('stiky')->label('Sticky'),
                    Tables\Columns\BooleanColumn::make('top')->label('Top'),
                    Tables\Columns\BooleanColumn::make('features')->label('Features'),
                Tables\Columns\TextColumn::make('view')
                ->badge()
                ->colors([
                    'danger' => fn ($state): bool => $state < 10,
                    'warning' => fn ($state): bool => $state >= 10 && $state < 100,
                    'primary' => fn ($state): bool => $state >= 100 && $state < 1000,
                    'success' => fn ($state): bool => $state >= 1000,
                ]),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}