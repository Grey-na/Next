using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace lab1q2
{
    class Program
    {
        static void Main(string[] args)
        {
            int n, m;
            Console.WriteLine("Enter the number");
            n = Convert.ToInt32(Console.ReadLine());
            for(int i=1; i<=10; i++)
            {
                m = n * i;
                Console.WriteLine($"{n} X {i}= {m}");
            }
            Console.ReadKey();
        }
    }
}
