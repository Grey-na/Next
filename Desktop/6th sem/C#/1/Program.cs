using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _1
{
    class Program
    {
        //Reference Parameters
        public static void Display(ref int x, ref int y)
        {
            x = 10;y = 20;
        }
        //out parameters
        public static void Multiply(out int a, out int b, out int c)
        {
            a = 10;b = 20;
            c = a * b;
        }
        static void Main(string[] args)
        {
            int x,y,z;
            Multiply(out x, out y, out z);
            Console.WriteLine($"num1={x},num2={y}, num3={z}");
        }
    }
}
