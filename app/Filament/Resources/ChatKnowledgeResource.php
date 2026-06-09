<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChatKnowledgeResource\Pages;
use App\Models\ChatKnowledge;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;

class ChatKnowledgeResource extends Resource
{
    protected static ?string $model = ChatKnowledge::class;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationLabel = 'Knowledge Base';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('type')
                ->options([
                    'faq'        => 'FAQ',
                    'case_study' => 'Case Study',
                    'service'    => 'Service',
                    'pricing'    => 'Pricing',
                ])
                ->required(),

            TextInput::make('title')
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),

            TextInput::make('keywords')
                ->helperText('Comma-separated keywords used for chat matching')
                ->columnSpanFull(),

            TextInput::make('priority')
                ->numeric()
                ->default(0),

            Toggle::make('is_active')
                ->default(true),

            RichEditor::make('content')
                ->required()
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable()->limit(50),
                TextColumn::make('type')->badge()->sortable(),
                TextColumn::make('priority')->sortable(),
                IconColumn::make('is_active')->boolean()->sortable(),
                TextColumn::make('updated_at')->dateTime()->sortable()->toggleable(),
            ])
            ->filters([
                SelectFilter::make('type')->options([
                    'faq'        => 'FAQ',
                    'case_study' => 'Case Study',
                    'service'    => 'Service',
                    'pricing'    => 'Pricing',
                ]),
                TernaryFilter::make('is_active')->label('Active'),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    BulkAction::make('activate')
                        ->label('Activate selected')
                        ->icon('heroicon-o-check-circle')
                        ->action(fn (Collection $records) => $records->each->update(['is_active' => true]))
                        ->deselectRecordsAfterCompletion(),
                    BulkAction::make('deactivate')
                        ->label('Deactivate selected')
                        ->icon('heroicon-o-x-circle')
                        ->color('warning')
                        ->action(fn (Collection $records) => $records->each->update(['is_active' => false]))
                        ->deselectRecordsAfterCompletion(),
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('priority', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListChatKnowledge::route('/'),
            'create' => Pages\CreateChatKnowledge::route('/create'),
            'edit'   => Pages\EditChatKnowledge::route('/{record}/edit'),
        ];
    }
}
