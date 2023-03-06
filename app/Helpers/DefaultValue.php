<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class DefaultValue {

    public static function getJenisKelamin() {
        return [
            ['value' => '1', 'label' => 'Laki - laki'],
            ['value' => '0', 'label' => 'Perempuan']
        ];
    }

    public static function getAgama(){
        return [
            ['label' => 'Pilih agama...', 'value' => '0', 'disabled' => true, 'selected' => true],
            ['label' => 'Kristen', 'value' => 'Kristen', 'disabled' => false, 'selected' => false],
            ['label' => 'Islam', 'value' => 'Islam', 'disabled' => false, 'selected' => false],
            ['label' => 'Hindu', 'value' => 'Hindu', 'disabled' => false, 'selected' => false],
            ['label' => 'Buddha', 'value' => 'Buddha', 'disabled' => false, 'selected' => false,]
        ];
    }
}
