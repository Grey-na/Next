using System;
using System.Collections.Generic;
using System.Data.SqlTypes;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace lab6q1multicastdelegate
{
    public delegate void Calculation(int a, int b); //declaring a delegate
    class Program
    {
        public static void Addition(int num1, int num2)
        {
            Console.WriteLine("Addition:{0}", num1 + num2);
        }
        public static void Subtraction(int num1, int num2)
        {
            Console.WriteLine("Subtraction:{0}", num1 - num2);
        }

        static void Main(string[] args)
        {
            Calculation del = new Calculation(Addition);
            del += Subtraction;
            del(150, 100);
            Console.ReadKey();
        }
    }
}
