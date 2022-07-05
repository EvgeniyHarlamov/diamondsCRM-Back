<?php

namespace App\Utils\Match;

trait AppearancesMatch
{
    /**
     * Получить отношение внешности
     */
    private function matchAppearances()
    {
        # Устанавливаем нулевое значение процента
        $percent = 0;

        # Делаем простой матч
        $this->simpleMatch($percent, 'partner_appearance');

        # Добавляем в коллекцию результат
        $this->matchResult = $this->matchResult->put('appearances', $percent);
    }
}
