<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DirectVisitorResource\Pages;
use App\Filament\Resources\DirectVisitorResource\RelationManagers;
use App\Models\DirectVisitor;
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

class DirectVisitorResource extends Resource
{
    protected static ?string $model = DirectVisitor::class;

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
                TextInput::make('titik_layanan')->numeric()->required(),
                TextInput::make('anggota_baru')->numeric()->required(),
                TextInput::make('pengunjung')->numeric()->required(),
                TextInput::make('buku_yang_dibaca')->numeric()->required(),
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
                TextColumn::make('titik_layanan')
                    ->label('Titik Layanan')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah') // Ganti label "Sum" menjadi "Jumlah"
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('anggota_baru')
                    ->label('Anggota Baru')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('pengunjung')
                    ->label('Pengunjung')
                    ->summarize(
                        Sum::make()
                            ->label('Jumlah')
                            ->formatStateUsing(fn($state) => number_format($state))
                    ),
                TextColumn::make('buku_yang_dibaca')
                    ->label('Buku yang Dibaca')
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
            'index' => Pages\ListDirectVisitors::route('/'),
            'create' => Pages\CreateDirectVisitor::route('/create'),
            'edit' => Pages\EditDirectVisitor::route('/{record}/edit'),
        ];
    }
}
