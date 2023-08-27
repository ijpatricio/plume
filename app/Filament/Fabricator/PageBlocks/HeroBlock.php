<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HeroBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero')
            ->schema([
                TextInput::make('name')
                    ->label(__('Qual é o seu nome?')),
                Textarea::make('introduction')
                    ->rows('7')
                    ->label(__('Sua apresentação (breve).')),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
