<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChatLeadResource\Pages;
use App\Models\ChatLead;
use Filament\Actions\Action;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Select;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ChatLeadResource extends Resource
{
    protected static ?string $model = ChatLead::class;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Chat Leads';

    protected static ?int $navigationSort = 2;

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Contact Details')->schema([
                TextEntry::make('name')->default('—'),
                TextEntry::make('phone')->default('—'),
                TextEntry::make('email')->default('—'),
                TextEntry::make('source')->badge(),
                TextEntry::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'new'       => 'warning',
                        'contacted' => 'info',
                        'booked'    => 'success',
                    }),
                TextEntry::make('created_at')->label('Started at')->dateTime(),
            ])->columns(3),

            Section::make('Conversation')->schema([
                RepeatableEntry::make('messages')
                    ->label('')
                    ->schema([
                        TextEntry::make('role')
                            ->label('')
                            ->badge()
                            ->color(fn (string $state): string => $state === 'user' ? 'warning' : 'success')
                            ->formatStateUsing(fn (string $state): string => $state === 'user' ? 'Patient' : 'Assistant'),
                        TextEntry::make('content')
                            ->label('')
                            ->columnSpan(3),
                        TextEntry::make('created_at')
                            ->label('')
                            ->dateTime('d M H:i')
                            ->color('gray'),
                    ])
                    ->columns(5)
                    ->columnSpanFull(),
            ]),
        ]);
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('status')
                ->options([
                    'new'       => 'New',
                    'contacted' => 'Contacted',
                    'booked'    => 'Booked',
                ])
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('source')->badge()->sortable(),
                TextColumn::make('name')->default('—')->searchable(),
                TextColumn::make('phone')->default('—')->searchable(),
                TextColumn::make('email')->default('—')->searchable()->toggleable(),
                TextColumn::make('first_message')->limit(55)->wrap(),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'new'       => 'warning',
                        'contacted' => 'info',
                        'booked'    => 'success',
                    })
                    ->sortable(),
                TextColumn::make('messages_count')
                    ->label('Messages')
                    ->counts('messages')
                    ->sortable(),
                TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')->options([
                    'new'       => 'New',
                    'contacted' => 'Contacted',
                    'booked'    => 'Booked',
                ]),
                SelectFilter::make('source')->options([
                    'chat'     => 'Chat',
                    'phone'    => 'Phone',
                    'whatsapp' => 'WhatsApp',
                ]),
            ])
            ->actions([
                ViewAction::make()->label('View Chat'),
                Action::make('updateStatus')
                    ->label('Status')
                    ->icon('heroicon-o-arrow-path')
                    ->form([
                        Select::make('status')
                            ->options([
                                'new'       => 'New',
                                'contacted' => 'Contacted',
                                'booked'    => 'Booked',
                            ])
                            ->required(),
                    ])
                    ->action(fn (ChatLead $record, array $data) => $record->update(['status' => $data['status']])),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListChatLeads::route('/'),
            'view'  => Pages\ViewChatLead::route('/{record}'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete(\Illuminate\Database\Eloquent\Model $record): bool
    {
        return false;
    }
}
