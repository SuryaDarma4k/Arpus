<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisitorByJobResource\Pages;
use App\Filament\Resources\VisitorByJobResource\RelationManagers;
use App\Models\VisitorByJob;
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

class VisitorByJobResource extends Resource
{
    protected static ?string $model = VisitorByJob::class;
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
                TextInput::make('pelajar')->numeric()->required(),
                TextInput::make('mahasiswa')->numeric()->required(),
                TextInput::make('pns')->numeric()->required(),
                TextInput::make('umum')->numeric()->required(),
                TextInput::make('lainnya')->numeric()->required(),
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
                TextColumn::make('pelajar')
                    ->label('Pelajar')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah') // Ganti label "Sum" menjadi "Jumlah"
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('mahasiswa')
                    ->label('Mahasiswa')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('pns')
                    ->label('PNS')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('umum')
                    ->label('Umum')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('lainnya')
                    ->label('Lainnya')
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
            'index' => Pages\ListVisitorByJobs::route('/'),
            'create' => Pages\CreateVisitorByJob::route('/create'),
            'edit' => Pages\EditVisitorByJob::route('/{record}/edit'),
        ];
    }
}
