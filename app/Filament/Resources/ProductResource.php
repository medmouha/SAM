<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nom')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('price')
                    ->label('Prix')
                    ->required()
                    ->numeric()
                    ->prefix('CFA'),
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->required()
                    ->disk('public') // Utilisez le disque public
                    ->directory('images/products') // Spécifiez le répertoire de stockage
                    ->visibility('public') // Assurez-vous que les fichiers sont publics
                    ->imagePreviewHeight('250') // Hauteur de l'aperçu de l'image
                    ->imageCropAspectRatio('1:1') // Option de recadrage
                    ->imageResizeTargetWidth('500') // Redimensionner l'image (facultatif)
                    ->imageResizeTargetHeight('500'), // Redimensionner l'image (facultatif)
                Forms\Components\Select::make('categorie_id')
                    ->label('Categorie')
                    ->required()
                    ->relationship('category', 'name')
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Prix')
                    ->prefix('CFA')
                    ->money()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public') // Ajoutez ceci si vous stockez vos images dans le dossier public
                    ->visibility('public') // Assurez-vous que les fichiers sont publics
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Categorie')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
