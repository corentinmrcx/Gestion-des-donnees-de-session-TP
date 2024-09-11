<?php
declare(strict_types=1);

namespace Html\Form;

class CountrySelect
{
    private string $name;
    private string $firstOption;
    private string $selectedCode;

    public function __construct(string $name, string $firstOption, string $selectedCode){
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

    public function toHtml(): string{
        return (
            <<<HTML
            <select name="CountrySelect" id="CountrySelect">
                <option value=""></option>
            </select>  
HTML);
    }
}