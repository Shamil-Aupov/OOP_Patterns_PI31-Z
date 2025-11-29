<? php

abstract class animal {
    private string $text;

    public function __construct(string $text)
{
    $this->text = $text
}

    public function make_sound (): string {
        return $this->text
    }
}

class lion { 
    public function make_sound(): string {
        return 'Рычание';
    }
}



lion_factory = LionFactory()
monkey_factory = MonkeyFactory()
elephant_factory = ElephantFactory()

interact_with_animal(lion_factory)     # Вывод: Звук: Рычание!
interact_with_animal(monkey_factory)   # Вывод: Звук: Визг!
interact_with_animal(elephant_factory) # Вывод: Звук: Трубление!

