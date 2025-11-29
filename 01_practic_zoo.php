<? php

interface animal {
    public function make_sound (): string;
}

class lion implements animal {
    public function make_sound (): string {
        return 'Рычание';
    }
}

class Monkey implements animal{
    public function make_sound (): string {
        return 'Визг';
    }
}

class Elephant implements animal{
    public function make_sound (): string {
        return 'Трубление';
    }
}

interface animalFactory {
     public function getanimal() : Animal;
}

class LionFactory implements animalFactory {
    public function getanimal() : Animal {
        return new Lion();
    }
}

class MonkeyFactory implements animalFactory {
    public function getanimal() : Animal {
        return new Monkey();
    }
}

class ElephantFactory implements animalFactory {
    public function getanimal() : Animal {
        return new Elephant();
    }
}

function interact_with_animal(animalFactory $factory) {
    $animal = $factory->getanimal();
    echo 'Звук: ' . $animal->make_sound() . '!' . PHP_EOL;
}

$lion_factory = new LionFactory();
$monkey_factory = new MonkeyFactory();
$elephant_factory = new ElephantFactory();

interact_with_animal($lion_factory);     # Вывод: Звук: Рычание!
interact_with_animal($monkey_factory);   # Вывод: Звук: Визг!
interact_with_animal($elephant_factory); # Вывод: Звук: Трубление!

