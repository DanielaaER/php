<?php

interface Monster {
    function menace();
}

interface DangerousMonster extends Monster {
    function destroy();
}

interface Lethal {
    function kill();
}

class DragonZilla implements DangerousMonster {
    public function menace() {}
    public function destroy() {}
}

interface Vampire extends DangerousMonster, Lethal {
    function drinkBlood();
}

class VeryBadVampire implements Vampire {
    function menace() {}
    function destroy() {}
    function kill() {}
    function drinkBlood() {}
}

class HorrorShow {
    static function u(Monster $b) {
        $b->menace();
    }
    static function v(DangerousMonster $d) {
        $d->menace();
        $d->destroy();
    }
    static function w(Lethal $l) {
        $l->kill();
    }
    public static function main() {
        $barney = new DragonZilla();
        HorrorShow::u($barney);
        HorrorShow::v($barney);
        $vlad = new VeryBadVampire();
        HorrorShow::u($vlad);
        HorrorShow::v($vlad);
        HorrorShow::w($vlad);
    }
}

HorrorShow::main();