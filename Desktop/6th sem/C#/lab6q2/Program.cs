using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace lab6q2 //multicast delegate
{
    public delegate void Calculation(int a, int b);
    public delegate void Calculation2(int x);
    class Program
    {
        public static void Area (int a)
        {
            Console.WriteLine(a * a);
        }
        public static void Add(int a, int b)
        {
            Console.WriteLine(a + a);
        }
        public static void Sub(int a, int b)
        {
            Console.WriteLine(a - a);
        }

        static void Main(string[] args)
        {
            Calculation2 c2 = new Calculation2(Area);
            c2(3);
            Calculation del = new Calculation(Add);
            del += Sub;
            del.Invoke(20, 10);
        }
    }
}
