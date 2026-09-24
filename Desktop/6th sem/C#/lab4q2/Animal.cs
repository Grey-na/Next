using System;

class Tiger : Animal
{
    public void Sound()
    {
        Console.WriteLine("Tiger sound");
    }

    public void Eat()
    {
        Console.WriteLine("Tiger eating");
    }
}

class Cat : Animal
{
    public void Sound()
    {
        Console.WriteLine("Cat sound");
    }

    public void Eat()
    {
        Console.WriteLine("Cat eating");
    }
}

class Program
{
    static void Main(string[] args)
    {
        Tiger tiger = new Tiger();
        Cat cat = new Cat();
        tiger.Eat();
        tiger.Sound();
        cat.Eat();
        cat.Sound();
    }
}