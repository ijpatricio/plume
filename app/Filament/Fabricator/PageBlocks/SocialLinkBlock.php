<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class SocialLinkBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('social-link')
            ->schema([
                TextInput::make('link')
                    ->required(),
                TextInput::make('handle')
                    ->required(),
                Select::make('social')
                    ->options([
                        'twitter' => 'Twitter',
                        'github' => 'GitHub',
                    ])
                    ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
