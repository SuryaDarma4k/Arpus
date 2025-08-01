<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisitorByBookTypeResource\Pages;
use App\Filament\Resources\VisitorByBookTypeResource\RelationManagers;
use App\Models\VisitorByBookType;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\Summarizers\Sum;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisitorByBookTypeResource extends Resource
{
    protected static ?string $model = VisitorByBookType::class;

    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('bulan')
                    ->label('Bulan')
                    ->options([
                        'Januari' => 'Januari',
                        'Februari' => 'Februari',
                        'Maret' => 'Maret',
                        'April' => 'April',
                        'Mei' => 'Mei',
                        'Juni' => 'Juni',
                        'Juli' => 'Juli',
                        'Agustus' => 'Agustus',
                        'September' => 'September',
                        'Oktober' => 'Oktober',
                        'November' => 'November',
                        'Desember' => 'Desember',
                    ])
                    ->required(),
                TextInput::make('tahun')->numeric()->required(),
                TextInput::make('000')->numeric()->required(),
                TextInput::make('100')->numeric()->required(),
                TextInput::make('200')->numeric()->required(),
                TextInput::make('300')->numeric()->required(),
                TextInput::make('400')->numeric()->required(),
                TextInput::make('500')->numeric()->required(),
                TextInput::make('600')->numeric()->required(),
                TextInput::make('700')->numeric()->required(),
                TextInput::make('800')->numeric()->required(),
                TextInput::make('900')->numeric()->required(),
                TextInput::make('fiksi')->numeric()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('bulan')
                    ->label('Bulan')
                    ->searchable(),
                TextColumn::make('tahun')
                    ->label('Tahun'),
                TextColumn::make('000')
                    ->label('000')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('100')
                    ->label('100')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('200')
                    ->label('200')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('300')
                    ->label('300')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('400')
                    ->label('400')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('500')
                    ->label('500')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('600')
                    ->label('600')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('700')
                    ->label('700')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('800')
                    ->label('800')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('900')
                    ->label('900')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('fiksi')
                    ->label('Fiksi')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('jumlah')
                    ->label('Total')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListVisitorByBookTypes::route('/'),
            'create' => Pages\CreateVisitorByBookType::route('/create'),
            'edit' => Pages\EditVisitorByBookType::route('/{record}/edit'),
        ];
    }
}
