<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Pengaturan';
    protected static ?string $modelLabel = 'Pengaturan';
    protected static ?int $navigationSort = 99;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Website')
                    ->schema([
                        Forms\Components\TextInput::make('site_name')
                            ->label('Nama Website')
                            ->required()
                            ->maxLength(255)
                            ->default('Nasdem Sidoarjo'),
                        Forms\Components\TextInput::make('site_tagline')
                            ->label('Tagline')
                            ->maxLength(255)
                            ->default('Restorasi Indonesia'),
                    ])->columns(2),
                
                Forms\Components\Section::make('Kontak')
                    ->schema([
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->label('Telepon')
                            ->tel()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('address')
                            ->label('Alamat')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])->columns(2),
                
                Forms\Components\Section::make('Social Media')
                    ->schema([
                        Forms\Components\TextInput::make('facebook')
                            ->label('Facebook URL')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('twitter')
                            ->label('Twitter URL')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('instagram')
                            ->label('Instagram URL')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('youtube')
                            ->label('YouTube URL')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('linkedin')
                            ->label('LinkedIn URL')
                            ->url()
                            ->maxLength(255),
                    ])->columns(2),
                
                Forms\Components\Section::make('SEO')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->rows(3),
                        Forms\Components\Textarea::make('meta_keywords')
                            ->label('Meta Keywords')
                            ->rows(2),
                        Forms\Components\Textarea::make('google_analytics')
                            ->label('Google Analytics Code')
                            ->rows(4),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('site_name')->label('Nama Website')->searchable(),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('phone')->label('Telepon'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSettings::route('/'),
        ];
    }
}