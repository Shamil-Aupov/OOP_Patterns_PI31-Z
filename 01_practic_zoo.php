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

lion_factory = LionFactory();
monkey_factory = MonkeyFactory();
elephant_factory = ElephantFactory();

interact_with_animal(lion_factory);     # Вывод: Звук: Рычание!
interact_with_animal(monkey_factory);   # Вывод: Звук: Визг!
interact_with_animal(elephant_factory); # Вывод: Звук: Трубление!

