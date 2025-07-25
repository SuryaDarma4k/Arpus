<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisitorByGenderResource\Pages;
use App\Filament\Resources\VisitorByGenderResource\RelationManagers;
use App\Models\VisitorByGender;
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


class VisitorByGenderResource extends Resource
{
    protected static ?string $model = VisitorByGender::class;

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
                TextInput::make('laki_laki')->numeric()->required(),
                TextInput::make('perempuan')->numeric()->required(),
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
                TextColumn::make('laki_laki')
                    ->label('Laki-laki')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah') // Ganti label "Sum" menjadi "Jumlah"
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('perempuan')
                    ->label('Perempuan')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),

                TextColumn::make('total')
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
            'index' => Pages\ListVisitorByGenders::route('/'),
            'create' => Pages\CreateVisitorByGender::route('/create'),
            'edit' => Pages\EditVisitorByGender::route('/{record}/edit'),
        ];
    }

    
}
