<?php

namespace App\Traits;


trait Trans
{
    /////////////////////////////////////////////name/////////////////////////////////////////////
    public function getTransNameAttribute()
    {
        $name = json_decode($this->name, true);
        if (is_array($name) && array_key_exists(app()->currentLocale(), $name)) {
            return $name[app()->currentLocale()];
        }
        return $this->name;
    }

    public function getNameEnAttribute()
    {
        if ($this->name && isset(json_decode($this->name, true)['en'])) {
            return json_decode($this->name, true)['en'];
        }

        return '';
    }

    public function getNameArAttribute()
    {
        if ($this->name && isset(json_decode($this->name, true)['ar'])) {
            return json_decode($this->name, true)['ar'];
        }

        return '';
    }
    /////////////////////////////////////////////name/////////////////////////////////////////////

    /////////////////////////////// description ///////////////////////////////////////////////
    public function getTransDescriptionAttribute()
    {
        $description = json_decode($this->description, true);
        if (is_array($description) && array_key_exists(app()->currentLocale(), $description)) {
            return $description[app()->currentLocale()];
        }
        return $this->description;
    }

    public function getDescriptionEnAttribute()
    {
        if ($this->description && isset(json_decode($this->description, true)['en'])) {
            return json_decode($this->description, true)['en'];
        }

        return '';
    }

    public function getDescriptionArAttribute()
    {
        if ($this->description && isset(json_decode($this->description, true)['ar'])) {
            return json_decode($this->description, true)['ar'];
        }

        return '';
    }
    /////////////////////////////// description ///////////////////////////////////////////////
    /////////////////////////////// client ///////////////////////////////////////////////
    public function getTransClientAttribute()
    {
        $client = json_decode($this->client, true);
        if (is_array($client) && array_key_exists(app()->currentLocale(), $client)) {
            return $client[app()->currentLocale()];
        }
        return $this->client;
    }

    public function getClientEnAttribute()
    {
        if ($this->client && isset(json_decode($this->client, true)['en'])) {
            return json_decode($this->client, true)['en'];
        }

        return '';
    }

    public function getClientArAttribute()
    {
        if ($this->client && isset(json_decode($this->client, true)['ar'])) {
            return json_decode($this->client, true)['ar'];
        }

        return '';
    }
    /////////////////////////////// client ///////////////////////////////////////////////
    /////////////////////////////// Tittle ///////////////////////////////////////////////
    public function getTransTittleAttribute()
    {
        $tittle = json_decode($this->tittle, true);
        if (is_array($tittle) && array_key_exists(app()->currentLocale(), $tittle)) {
            return $tittle[app()->currentLocale()];
        }
        return $this->tittle;
    }

    public function getTittleEnAttribute()
    {
        if ($this->tittle && isset(json_decode($this->tittle, true)['en'])) {
            return json_decode($this->tittle, true)['en'];
        }

        return '';
    }

    public function getTittleArAttribute()
    {
        if ($this->tittle && isset(json_decode($this->tittle, true)['ar'])) {
            return json_decode($this->tittle, true)['ar'];
        }

        return '';
    }
    /////////////////////////////// Tittle ///////////////////////////////////////////////



}
