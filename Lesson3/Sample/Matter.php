<?php

namespace Lesson3\Sample;

class Matter
{

    public function saveToTransactionLog()
    {
        echo 'Saved ' . PreferenceAccessor::get('Matter') . ' to Log';
    }

}
