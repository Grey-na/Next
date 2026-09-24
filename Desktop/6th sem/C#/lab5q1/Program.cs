using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace lab5q1
{
    class Program
    {
        public static void CreateOrCheckFile()
        {
            string file = @"C:\NCC\csharp.txt";

            if (File.Exists(file))
            {
                Console.WriteLine("File already exists.");
            }
            else
            {
                File.Create(file).Close();
                Console.WriteLine("File created.");
            }

            WriteFile(file);
        }

        public static void WriteFile(string filepath)
        {
            File.WriteAllText(filepath, "Hello World");
            Console.WriteLine("Data written successfully.");
        }

        static void Main(string[] args)
        {
            string path = @"C:\NCC";

            DirectoryInfo d = new DirectoryInfo(path);

            if (!d.Exists)
            {
                d.Create();
                Console.WriteLine("Directory created.");
            }
            else
            {
                Console.WriteLine("Directory already exists.");
            }

            CreateOrCheckFile();

            Console.ReadKey();
        }
    }
}