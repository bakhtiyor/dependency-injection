<?php

namespace Model;

class User
{
    protected $storage;

    function __construct($storage)
    {
        $this->storage = $storage;
    }

    function setLanguage($language)
    {
        $this->storage->set('language', $language);
    }

    function getLanguage()
    {
        return $this->storage->get('language');
    }
}