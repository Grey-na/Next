using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Animal
{
    class Program
    {
        static void Main(string[] args)
        {
            Class1 animal = new Class1("Animal", "ABC Animal Shelter");

            Class1 dog = new Class1(animal);
            dog.Name = "Dog";

            Class1 tiger = new Class1(animal);
            tiger.Name = "Tiger";

            animal.Display();
            dog.Display();
            tiger.Display();

            Console.ReadKey();
        }
    }
}
