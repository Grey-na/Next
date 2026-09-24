using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace lab3q1
{
    class Program
    {
        static void Main(string[] args)
        {
            User u1 = new User();//Default Constructor
            User u2 = new User("Ram", 54); //Calling Parameterized Constructor
            Console.WriteLine(u2.name);
            Console.WriteLine(u2.age);
            User u3 = new User(u2);
            Console.WriteLine(u3.name);
            Console.WriteLine(u3.age);


        }
    }
}
