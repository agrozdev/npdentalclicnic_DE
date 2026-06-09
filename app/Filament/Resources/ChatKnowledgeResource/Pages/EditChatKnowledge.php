<?php

namespace App\Filament\Resources\ChatKnowledgeResource\Pages;

use App\Filament\Resources\ChatKnowledgeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditChatKnowledge extends EditRecord
{
    protected static string $resource = ChatKnowledgeResource::class;

    protected function getHeaderActions(): array
    {
        return [DeleteAction::make()];
    }
}
