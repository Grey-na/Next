using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Animal
{
    class Class1
    {
        public string Name;
        public string Shelter;

        // Parameterized Constructor
        public Class1(string name, string shelter)
        {
            Name = name;
            Shelter = shelter;
        }

        // Copy Constructor
        public Class1(Class1 obj)
        {
            Name = obj.Name;
            Shelter = obj.Shelter;
        }

        // Display Method
        public void Display()
        {
            Console.WriteLine("Animal Name : " + Name);
            Console.WriteLine("Shelter     : " + Shelter);
            Console.WriteLine();
        }
    }
}
