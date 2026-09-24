using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace lab4q1
{
    class Program
    {
        static void Main(string[] args)
        {
            Teacher.Show();

            Test obj = new Test();
            obj.Display();

            Console.ReadKey();
        }
    }
}