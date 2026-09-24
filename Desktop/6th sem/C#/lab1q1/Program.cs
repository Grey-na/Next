using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace lab1q1
{
    class Program
    {
        static void Main(string[] args)
        {
            int n1, n2;
            Console.WriteLine("Enter first number");
            n1 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Enter second number");
            n2 = int.Parse(Console.ReadLine());
            int sum = n1 + n2;
            Console.WriteLine($"The sum of {n1} and {n2} is {sum}");
            Console.ReadKey();
        }
    }
}
