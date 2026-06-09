<?php

namespace App\Filament\Resources\ChatLeadResource\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MessagesRelationManager extends RelationManager
{
    protected static string $relationship = 'messages';

    protected static ?string $title = 'Conversation';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Time')
                    ->dateTime('d M Y H:i:s')
                    ->width('160px'),
                TextColumn::make('role')
                    ->badge()
                    ->color(fn (string $state) => $state === 'user' ? 'warning' : 'success')
                    ->width('90px'),
                TextColumn::make('content')
                    ->label('Message')
                    ->wrap(),
            ])
            ->defaultSort('created_at', 'asc')
            ->paginated(false);
    }

    public function form(Schema $schema): Schema
    {
        return $schema->components([]);
    }
}
