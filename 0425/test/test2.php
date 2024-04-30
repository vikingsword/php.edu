<?php
namespace ns01 {
    const APP = 'A';
    echo \ns02\APP;
}

namespace ns02 {
    const APP = 'B';
    echo \ns01\APP;
}

