<?php

declare(strict_types=1);

namespace Html\Form;

use Entity\Collection\CountryCollection;

class CountrySelect
{
    private string $name;
    private string $firstOption;
    private string $selectedCode;

    public function __construct(string $name, string $firstOption, string $selectedCode)
    {
        $this->name = $name;
        $this->firstOption = $firstOption;
        $this->selectedCode = $selectedCode;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getFirstOption(): string
    {
        return $this->firstOption;
    }

    public function setFirstOption(string $firstOption): void
    {
        $this->firstOption = $firstOption;
    }

    public function getSelectedCode(): string
    {
        return $this->selectedCode;
    }

    public function setSelectedCode(string $selectedCode): void
    {
        $this->selectedCode = $selectedCode;
    }

    public function toHtml(): string
    {
        $html = <<<HTML
            <select name="{$this->name}">
                <option value="">{$this->firstOption}</option>
        HTML;

        $countryTab = CountryCollection::findAll();
        foreach ($countryTab as $country) {
            $selected = '';
            if ($country->getCode() === $this->getSelectedCode()) {
                $selected = 'selected';
            }
            $html .= <<<HTML
                <option value="{$country->getCode()}" {$selected}>{$country->getName()}</option>
            HTML;
        }

        $html .= <<<HTML
            </select>
        HTML;

        return $html;
    }

    public function setSelectedCodeFromRequest(): void
    {
        if (isset($_REQUEST[$this->name]) && '' !== $_REQUEST[$this->name]) {
            $this->selectedCode = $_REQUEST[$this->name];
        }
    }
}
