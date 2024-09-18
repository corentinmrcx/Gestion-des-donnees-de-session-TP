<?php
declare(strict_types=1);

namespace Html\Form;
use Service\Session;

class SessionManagedCountrySelect extends CountrySelect
{
    public function __construct(string $name, string $firstOption, string $defaultCode){
        parent::__construct($name, $firstOption, $defaultCode);
        Session::start();
        $this->setSelectedCodeFromSession();
        $this->saveSelectedCodeIntoSession();
    }

    public function saveSelectedCodeIntoSession(): void{
        $_SESSION[$this->getName()] = $this->getSelectedCode();
    }

    public function setSelectedCodeFromSession(): void
    {
        if (isset($_SESSION[$this->getName()]) && '' !== $_SESSION[$this->getName()]) {
            $this->setSelectedCode($_SESSION[$this->getName()]);
        }
    }
}