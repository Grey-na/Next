using lab4q1;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace lab4q1
{
    abstract class Teacher
    {
        public static void Show()
        {
            Console.WriteLine("Show Method");
        }

        public abstract void Display();
    }

    class Test : Teacher
    {
        public override void Display()
        {
            Console.WriteLine("Test Class");
        }
    }
}