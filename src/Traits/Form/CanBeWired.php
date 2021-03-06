<?php

namespace Simtabi\Gesanda\Traits\Form;

use Simtabi\Gesanda\Support\FormBinder;

trait CanBeWired
{

    public function componentIsWired(): bool
    {
        return $this->hasFormLivewireBinding()
            || $this->hasComponentNativeLivewireModelBinding()
            || $this->hasComponentPackageLivewireBinding();
    }

    protected function hasFormLivewireBinding(): bool
    {
        return null !== app(FormBinder::class)->getBoundLivewareModifier();
    }

    public function hasComponentNativeLivewireModelBinding(): bool
    {
        return (bool) $this->attributes->whereStartsWith('wire:model')->first();
    }

    protected function hasComponentPackageLivewireBinding(): bool
    {
        return $this->attributes->has('wire');
    }

    public function getComponentLivewireModifier(): string
    {
        $hasComponentLivewireModelModifier       = $this->attributes->has('wire');
        $componentLivewireModelModifierAttribute = $this->attributes->get('wire') === true ? ''                                              : $this->attributes->get('wire');
        $componentLivewireModelModifier          = $componentLivewireModelModifierAttribute     ? '.' . $componentLivewireModelModifierAttribute  : '';

        return $hasComponentLivewireModelModifier ? $componentLivewireModelModifier : $this->getFormLivewireModifier();
    }

    protected function getFormLivewireModifier(): string
    {
        $formLivewireModifier = app(FormBinder::class)->getBoundLivewareModifier();

        return $formLivewireModifier ? '.' . $formLivewireModifier : '';
    }

    public function getNestedWireKey(): ?string
    {
        return $this->nestedWireKey;
    }
}
